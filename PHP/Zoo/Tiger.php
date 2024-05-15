<?php

include_once("Raubkatze.php");

class Tiger extends Raubkatze
{

    public function pet()
    {
        return "Der Tiger schnurrt zufrieden.";
    }

    public function roar()
    {
        return "GRRRRRRRRR";
    }
}
