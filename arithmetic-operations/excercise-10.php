<?php
/*Design a Geometry class with the following methods:

A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
Area = π * r * 2
Use Math.PI for π and r for the radius of the circle
A static method that accepts the length and width of a rectangle and returns the area of the rectangle. Use the following formula:
Area = Length x Width
A static method that accepts the length of a triangle’s base and the triangle’s height. The method should return the area of the triangle. Use the following formula:
Area = Base x Height x 0.5
The methods should display an error message if negative values are used for the circle’s radius, the rectangle’s length or width, or the triangle’s base or height.

Next write a program to test the class, which displays the following menu and responds to the user’s selection:*/
echo "Geometry calculator: \n\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n\n";


$userChoice=(int) readline("Enter your choice (1-4) : ");
if($userChoice<=0 || $userChoice>4){
    echo 'Error: Select valid choice'.PHP_EOL;
    exit;
}

$circleRadius= (int) readline('Enter circle radius: ');
$circleArea= pi()*$circleRadius *2;
if($circleRadius<=0){
    echo 'Error: Circle radius cannot be less than or equal to zero.'.PHP_EOL;
    exit;
}else {
    echo $circleArea.PHP_EOL;
}

$rectangleLength= (int) readline('Enter rectangle length: '.PHP_EOL);
$rectangleWidth= (int) readline('Enter rectangle width: '.PHP_EOL);

$rectangleArea= $rectangleLength * $rectangleWidth;

if($rectangleWidth<=0 || $rectangleLength <=0){
    echo 'Error: rectangle width or length cannot be less than or equal to zero.'.PHP_EOL;
    exit;
}else{
    echo $rectangleArea.PHP_EOL;
}

$triangleBase = (int) readline('Enter triangle base: ');
$triangleHeight = (int) readline('Enter triangle height: ');

if($triangleBase<=0 || $triangleHeight <=0){
    echo 'Error: triangle height or width cannot be less than or equal to zero.'.PHP_EOL;
    exit;
}else {
   echo $triangleArea = $triangleBase * $triangleHeight * 0.5.PHP_EOL;
}






