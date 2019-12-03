<?php


namespace Library\Speaker;


class MorningSpeaker implements SpeakerInterface
{

    public function getMessage() : string
    {
        return 'Good morning';
    }
}