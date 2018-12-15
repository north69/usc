<?php
namespace USC\Painter;

use USC\Shape\Circle;
use USC\Shape\Shape;

class CirclePainter extends Painter {

	private $radius = 0;

	public function __construct(float $radius) {
		$this->radius = $radius;
	}

	protected function createShape(): Shape {
		return new Circle($this->radius);
	}
}