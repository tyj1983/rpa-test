<?php


namespace Speaker;


class EveningSpeaker implements SpeakerInterface
{

    public function getMessage() : string
    {
        return 'Good evening';
    }
}