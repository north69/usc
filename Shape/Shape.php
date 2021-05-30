<?php
namespace USC\Shape;

use USC\Visitor\Visitor;

abstract class Shape
{
    /** @var string */
    private $color;
    /** @var int */
    private $border_size;

    abstract public function accept(Visitor $visitor);

    public function setBorderSize(float $border_size): Shape
    {
        $this->border_size = $border_size;
        return $this;
    }

    public function setColor(string $color): Shape
    {
        $this->color = $color;
        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getBorderSize(): int
    {
        return $this->border_size;
    }
}