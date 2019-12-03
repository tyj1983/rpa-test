<?php


namespace MyGreeter;



use Library\Factory\SpeakerFactory;

class Client
{
    public function getGreeting() : string
    {
        $speaker = SpeakerFactory::getSpeaker();
        return $speaker->getMessage();
    }
}