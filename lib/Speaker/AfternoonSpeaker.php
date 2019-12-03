<?php


namespace Library\Speaker;


class AfternoonSpeaker implements SpeakerInterface
{

    public function getMessage() : string
    {
        return 'Good afternoon';
    }
}