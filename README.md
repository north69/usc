# Simple graphic editor

The service is able to draw geometric shapes (circle and square).

## Code example
```php
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

```

## Will result
```
Printing an array of points of circle with radius = 10, color = #fff and border_size = 2.

Creating an image of circle with radius = 10, color = #fff and border_size = 2.

Printing an array of points of square with width = 14.5, color = #000 and border size = 0.

Creating an image of square with width = 14.5, color = #000 and border size = 0.
```