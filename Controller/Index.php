<?php
namespace USC\Controller;

use USC\Visitor\ArrayOfPoints;
use USC\Visitor\Image;
use USC\Shape\Circle;
use USC\Shape\Square;

class Index {

	public function testAction()
    {
		$circle = new Circle(10);
		$circle
			->setColor('#fff')
			->setBorderSize(2);
		$array_of_points_visitor = new ArrayOfPoints();
		$image_visitor = new Image();

		$circle->accept($array_of_points_visitor);

		print('\n\n');
		$circle->accept($image_visitor);
		print('\n\n');

		$square = new Square(14.5);
		$square
			->setBorderSize(0)
			->setColor('#000');
		$square->accept($array_of_points_visitor);
		print('\n\n');

		$square->accept($image_visitor);
	}
}