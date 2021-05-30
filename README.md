# Simple graphic editor

The service is able to draw geometric shapes (circle and square).

## Code example
```php
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

```

## Will result
```
Printing an array of points of circle with radius = 10, color = #fff and border_size = 2.

Creating an image of circle with radius = 10, color = #fff and border_size = 2.

Printing an array of points of square with width = 14.5, color = #000 and border size = 0.

Creating an image of square with width = 14.5, color = #000 and border size = 0.
```