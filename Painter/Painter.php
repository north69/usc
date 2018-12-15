<?php
namespace USC\Painter;

use USC\Shape\Shape;

abstract class Painter {

	/** @var string */
	protected $color = '#000';
	/** @var float */
	protected $border_size = 0;

	/**
	 * @param string $color
	 * @return $this
	 */
	public function setColor(string $color): Painter {
		$this->color = $color;
		return $this;
	}

	/**
	 * @param float $border_size
	 * @return $this
	 */
	public function setBorderSize(float $border_size): Painter {
		$this->border_size = $border_size;
		return $this;
	}

	abstract protected function createShape(): Shape;

	private function getShape(): Shape {
		$shape = $this->createShape();
		$shape
			->setColor($this->color)
			->setBorderSize($this->border_size);
		return $shape;
	}

	public function printArrayOfPoints() {
		$shape = $this->getShape();
		$shape->printArrayOfPoints();
	}

	public function createImage() {
		$shape = $this->getShape();
		$shape->createImage();
	}
}