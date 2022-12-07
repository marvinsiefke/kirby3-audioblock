# kirby3-audioblock
This is a very first (but usable and lightweight) version of kirby3-audioblock, a Kirby3 plugin which provides an audio block. It uses the <audio> element of HTML5 in the frontend.

## Configuration
There are not many options yet. After installation you can add the "audio" called block to your fieldsets (read more in Kirby’s documentation: https://getkirby.com/docs/reference/panel/fields/blocks). You can define a more precise file blueprint than mine which is also named "audio". The default blueprint allows files with the extensions .mp3, .ogg, .flac, .opus and .wav right now.

## Some thoughts
 - Accessibility features are missing right now (e.g. transcripts)
 - Very useful would be a support for different audio files for one audio block to support different audio sources (for reasons of a better browser support).

It is possible that I need this features in future and extend this plugin.
