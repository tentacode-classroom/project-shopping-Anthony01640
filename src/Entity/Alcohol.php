<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antho
 * Date: 27/09/2018
 * Time: 14:13
 */

namespace App\Entity;


class Alcool
{
    private $id;
    private $name;
    private $type;
    private $percentage;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPercentage(float $percentage)
    {
        $this->percentage = $percentage;
    }

    public function getPercentage()
    {
        return $this->percentage;
    }
}