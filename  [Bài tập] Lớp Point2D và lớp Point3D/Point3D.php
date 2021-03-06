<?php


class Point3D
{
    protected $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct();
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x,$y,$z)
    {
        $this->setXY($x,$y);
    }

    public function getXYZ()
    {
        return [$this->x,$this->y,$this->z];
    }

    public function __toString()
    {
        return "($this->x,$this->y,$this->z)";
    }
}