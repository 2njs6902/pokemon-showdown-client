const LOGIN_PATH = '/~~pcrshowdown/action.php';
const LOGIN_SERVER = 'https://play.pokemonshowdown.com/~~pcrshowdown/action.php';

export default {
	async fetch(request, env) {
		const requestURL = new URL(request.url);
		if (requestURL.pathname !== LOGIN_PATH) return env.ASSETS.fetch(request);
		if (request.method !== 'POST') {
			return new Response('Method Not Allowed', {
				status: 405,
				headers: { Allow: 'POST' },
			});
		}

		const upstreamURL = new URL(LOGIN_SERVER);
		upstreamURL.search = requestURL.search;
		const requestHeaders = new Headers(request.headers);
		requestHeaders.delete('host');
		requestHeaders.delete('origin');
		requestHeaders.delete('referer');

		const upstreamResponse = await fetch(upstreamURL, {
			method: 'POST',
			headers: requestHeaders,
			body: request.body,
			redirect: 'manual',
		});
		const responseHeaders = new Headers(upstreamResponse.headers);
		responseHeaders.set('Cache-Control', 'no-store');

		const getSetCookie = upstreamResponse.headers.getSetCookie;
		if (getSetCookie) {
			const cookies = getSetCookie.call(upstreamResponse.headers);
			responseHeaders.delete('Set-Cookie');
			for (const cookie of cookies) {
				responseHeaders.append('Set-Cookie', cookie.replace(/;\s*Domain=[^;]+/i, ''));
			}
		}

		return new Response(upstreamResponse.body, {
			status: upstreamResponse.status,
			statusText: upstreamResponse.statusText,
			headers: responseHeaders,
		});
	},
};
