<?php


namespace MyGreeter;



use Library\Factory\SpeakerFactory;

class Client
{
    /**
     * "Typed properties in classes", a new feature of PHP 7.4 :)
     */
    private static self $singleton;

    public static function getSingleton() : self{
        if (!self::$singleton)
            self::$singleton = new self();

        return self::$singleton;
    }

    private function __construct()
    {
    }


    public function getGreeting() : string
    {
        $speaker = SpeakerFactory::getSpeaker();
        return $speaker->getMessage();
    }
}