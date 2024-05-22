<?php

include_once("Raubkatze.php");

class Loewe extends Raubkatze
{

    public function pet()
    {
        return "Der Löwe schnurrt leise.";
    }

    public function roar()
    {
        return "ROAAAAAAAR";
    }
}
