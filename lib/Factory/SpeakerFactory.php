<?php


namespace Library\Factory;

use Library\Speaker\{AfternoonSpeaker, EveningSpeaker, MorningSpeaker, SpeakerInterface};

class SpeakerFactory
{
    public static function getSpeaker(): SpeakerInterface {
        $time = date('H');

        if ($time >= 0 && $time < 12)
            return new MorningSpeaker();

        if ($time >= 12 && $time < 18)
            return new AfternoonSpeaker();

        return new EveningSpeaker();
    }
}