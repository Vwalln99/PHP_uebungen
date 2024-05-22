<?php

include_once("Tier.php");

abstract class Raubkatze extends Tier
{
    public int $danger;
    public function __construct($name, $weight, $maxweight, $minweight, $isFemale, $foodportion, $danger)
    {
        parent::__construct($name, $weight, $maxweight, $minweight, $isFemale, $foodportion);
        $this->danger = $danger;
    }


    public function getDanger()
    {
        return $this->danger;
    }
    abstract public function roar();
}
