<?php

// NOTE: this is Old Replays. Mostly unused except for `/manage`

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?0.3162423862718471" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.69388976438" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5416434314080686" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?0.9914597006785935" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/replay.css?0.8064622548647382" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?0.11693181763102167" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.748126914779549" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/">Replay</a></li>
				<li><a class="button purplebutton" href="//smogon.com/dex/" target="_blank">Strategy</a></li>
				<li><a class="button nav-last purplebutton" href="//smogon.com/forums/" target="_blank">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//play.pokemonshowdown.com/js/lib/jquery-1.11.0.min.js?0.9526149414973818"></script>
	<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?0.6213860303554227"></script>
	<script src="//play.pokemonshowdown.com/js/lib/backbone.js?0.32645562261878935"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4482860259068313"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js?0.23758293572322164"></script>
	<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?0.03820029266304059"></script>
	<script src="//play.pokemonshowdown.com/js/battle-sound.js?0.9236856519199929"></script>
	<script src="//play.pokemonshowdown.com/config/config.js?42d8b4e7"></script>
	<script src="//play.pokemonshowdown.com/js/battledata.js?0.350994982053521"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?0.4246587533233641"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini-bw.js?0.947219941331654"></script>
	<script src="//play.pokemonshowdown.com/data/graphics.js?0.43742119576555594"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?0.29890654283139695"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?0.7211983929729715"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?0.21047422372168367"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?0.4441375718223517"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?0.05833164357623022"></script>
	<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?0.5552632741049104"></script>
	<script src="//play.pokemonshowdown.com/js/battle.js?0.4066901099140443"></script>
	<script src="/js/replay.js?0.3544139547807411"></script>

</body></html>
<?php
}
