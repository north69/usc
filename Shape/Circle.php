<?php
namespace USC\Shape;

class Circle implements Shape {

	/** @var float */
	private $radius;

	/** @var string */
	private $color;
	/** @var int */
	private $border_size;

	public function __construct(float $radius) {
		$this->radius = $radius;
	}

	public function setColor(string $color): Shape {
		$this->color = $color;
		return $this;
	}

	public function setBorderSize(float $border_size): Shape {
		$this->border_size = $border_size;
		return $this;
	}

	public function printArrayOfPoints() {
		print("Printing an array of points of circle with radius = {$this->radius}, color = {$this->color} and border_size = {$this->border_size}.\n");
	}

	public function createImage() {
		print("Creating an image of circle with radius = {$this->radius}, color = {$this->color} and border_size = {$this->border_size}.\n");
	}
}