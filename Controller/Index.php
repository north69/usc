<?php
namespace USC\Controller;

use USC\Painter\CirclePainter;
use USC\Painter\SquarePainter;

class Index {

	public function testAction() {
		$circle_painter = new CirclePainter(10);
		$circle_painter
			->setColor('#fff')
			->setBorderSize(2);
		$circle_painter->printArrayOfPoints();
		print('\n\n');

		$circle_painter->createImage();
		print('\n\n');

		$square_painter = new SquarePainter(14.5);
		$square_painter
			->setBorderSize(0)
			->setColor('#000');
		$square_painter->printArrayOfPoints();
		print('\n\n');

		$square_painter->createImage();
	}
}