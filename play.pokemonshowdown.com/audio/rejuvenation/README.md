# Custom battle music

Place custom `.mp3` or `.ogg` battle tracks in this folder, then add each
track to `src/battle-music.ts` in `CustomBattleMusicTracks`.

Use `loopStart: 0, loopEnd: 0` to loop the entire file. Loop points are in
milliseconds when you want a custom intro followed by a repeating section.
