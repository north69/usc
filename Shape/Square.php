<?php
namespace USC\Shape;

class Square implements Shape {

	private $width;

	private $border_size;
	private $color;

	public function __construct(float $width) {
		$this->width = $width;
	}

	public function setBorderSize(float $border_size): Shape {
		$this->border_size = $border_size;
		return $this;
	}

	public function setColor(string $color): Shape {
		$this->color = $color;
		return $this;
	}

	public function printArrayOfPoints() {
		print("Printing an array of points of square with width = {$this->width}, color = {$this->color} and border size = {$this->border_size}.\n");
	}

	public function createImage() {
		print("Creating an image of square with width = {$this->width}, color = {$this->color} and border size = {$this->border_size}.\n");
	}
}