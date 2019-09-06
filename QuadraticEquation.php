<?php


class QuadraticEquation
{
    public  $a;
    public  $b;
    public  $c;
    public function __construct($_a,$_b,$_c)
    {
        $this->a = $_a;
        $this->b = $_b;
        $this->c = $_c;

    }

    /**
     * @return number
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return number
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return number
     */
    public function getC()
    {
        return $this->c;
    }
    /**
     *
     * @return number
     */
    public function getDiscriminant()
    {
        return pow($this->getB(),2) - 4*$this->getC()*$this->getC();
    }

    public function getRoot1()
    {
        return (- $this->getB() + pow(pow($this->getB(),2) - 4*$this->getC()*$this->getC(),0.5)) / 2* $this->getA();
    }
    public function getRoot2()
    {
        return (- $this->getB() - pow(pow($this->getB(),2) - 4*$this->getC()*$this->getC(),0.5)) / 2* $this->getA();
    }
}