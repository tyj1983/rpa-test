<?php


namespace Library\Factory;

use Library\Speaker\{EveningSpeaker, MorningSpeaker, SpeakerInterface};

class SpeakerFactory
{
    public static function getSpeaker(): SpeakerInterface {
        $time = date('H');

        if ($time >= 0 && $time < 12) {
            return new MorningSpeaker();
        }

        if ($time >= 12 && $time < 18) {
            /**
             * The AfternoonSpeaker
             * Anonymous Class in php 7, it's cool. Just like Java :)
             */
            return new class implements SpeakerInterface{
                public function getMessage() : string
                {
                    return 'Good afternoon';
                }
            };
        }

        return new EveningSpeaker();
    }
}