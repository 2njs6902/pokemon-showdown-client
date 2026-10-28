export interface BattleMusicTrack {
	id: string;
	name: string;
	url: string;
	loopStart: number;
	/** Use 0 to loop the entire audio file. */
	loopEnd: number;
}

export const DefaultBattleMusicTracks: BattleMusicTrack[] = [
	{ id: 'dpp-trainer', name: 'DPP Trainer', url: 'audio/dpp-trainer.mp3', loopStart: 13440, loopEnd: 96959 },
	{ id: 'dpp-rival', name: 'DPP Rival', url: 'audio/dpp-rival.mp3', loopStart: 13888, loopEnd: 66352 },
	{
		id: 'hgss-johto-trainer', name: 'HGSS Johto Trainer',
		url: 'audio/hgss-johto-trainer.mp3', loopStart: 23731, loopEnd: 125086,
	},
	{
		id: 'hgss-kanto-trainer', name: 'HGSS Kanto Trainer',
		url: 'audio/hgss-kanto-trainer.mp3', loopStart: 13003, loopEnd: 94656,
	},
	{ id: 'bw-trainer', name: 'BW Trainer', url: 'audio/bw-trainer.mp3', loopStart: 14629, loopEnd: 110109 },
	{ id: 'bw-rival', name: 'BW Rival', url: 'audio/bw-rival.mp3', loopStart: 19180, loopEnd: 57373 },
	{
		id: 'bw-subway-trainer', name: 'BW Subway Trainer',
		url: 'audio/bw-subway-trainer.mp3', loopStart: 15503, loopEnd: 110984,
	},
	{
		id: 'bw2-kanto-gym-leader', name: 'BW2 Kanto Gym Leader',
		url: 'audio/bw2-kanto-gym-leader.mp3', loopStart: 14626, loopEnd: 58986,
	},
	{ id: 'bw2-rival', name: 'BW2 Rival', url: 'audio/bw2-rival.mp3', loopStart: 7152, loopEnd: 68708 },
	{ id: 'xy-trainer', name: 'XY Trainer', url: 'audio/xy-trainer.mp3', loopStart: 7802, loopEnd: 82469 },
	{ id: 'xy-rival', name: 'XY Rival', url: 'audio/xy-rival.mp3', loopStart: 7802, loopEnd: 58634 },
	{ id: 'oras-trainer', name: 'ORAS Trainer', url: 'audio/oras-trainer.mp3', loopStart: 13579, loopEnd: 91548 },
	{ id: 'oras-rival', name: 'ORAS Rival', url: 'audio/oras-rival.mp3', loopStart: 14303, loopEnd: 69149 },
	{ id: 'sm-trainer', name: 'SM Trainer', url: 'audio/sm-trainer.mp3', loopStart: 8323, loopEnd: 89230 },
	{ id: 'sm-rival', name: 'SM Rival', url: 'audio/sm-rival.mp3', loopStart: 11389, loopEnd: 62158 },
];

/**
 * Add custom hosted tracks here. Put their files in
 * play.pokemonshowdown.com/audio/rejuvenation/ and use loopEnd: 0 to loop
 * the entire file.
 *
 * Example:
 * { id: 'gym-battle', name: 'Gym Battle', url: 'audio/rejuvenation/gym-battle.mp3', loopStart: 0, loopEnd: 0 },
 */
export const CustomBattleMusicTracks: BattleMusicTrack[] = [
	{
		id: 'gc-sv-legendary-quartet',
		name: 'GlitchxCity - SV Legendary Quartet Battle Theme (Remix)',
		url: 'audio/other/GlitchxCity - SV Legendary Quartet Battle Theme (Remix).mp3',
		loopStart: 0,
		loopEnd: 0,
	},
];

export const BattleMusicTracks = [...DefaultBattleMusicTracks, ...CustomBattleMusicTracks];
