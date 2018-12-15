<?php
namespace USC\Shape;

interface Shape {

	public function setColor(string $color): Shape;

	public function setBorderSize(float $border_size): Shape;

	public function printArrayOfPoints();

	public function createImage();
}