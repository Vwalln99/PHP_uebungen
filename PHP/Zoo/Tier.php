<?php

abstract class Tier
{
    public string $name;
    public float $weight;
    public float $minweight;
    public float $maxweight;

    public bool $isFemale;
    public float $foodportion;

    public function __construct(string $name, float $weight, float $minweight, float $maxweight, bool $isFemale, float $foodportion)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->minweight = $minweight;
        $this->maxweight = $maxweight;
        $this->isFemale = $isFemale;
        $this->foodportion = $foodportion;
    }

    public function feed()
    {
        while ($this->weight < $this->minweight) {
            $this->weight += $this->foodportion;
        }
    }
    abstract public function pet();
}
