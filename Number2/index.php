<?php

// Function to calculate the volume of a Cube
function volumeOfCube($side) {
    return pow($side, 3);
}

// Function to calculate the volume of a Right Rectangular Prism
function volumeOfRectangularPrism($length, $width, $height) {
    return $length * $width * $height;
}

// Function to calculate the volume of a Cylinder
function volumeOfCylinder($radius, $height) {
    return pi() * pow($radius, 2) * $height;
}

// Function to calculate the volume of a Cone
function volumeOfCone($radius, $height) {
    return (pi() * pow($radius, 2) * $height) / 3;
}

// Function to calculate the volume of a Sphere
function volumeOfSphere($radius) {
    return (4 / 3) * pi() * pow($radius, 3);
}

// Sample values for each shape
$side = 5;
$length = 6;
$width = 4;
$height = 10;
$radius = 3;

// Calculate volumes
$cubeVolume = volumeOfCube($side);
$rectangularPrismVolume = volumeOfRectangularPrism($length, $width, $height);
$cylinderVolume = volumeOfCylinder($radius, $height);
$coneVolume = volumeOfCone($radius, $height);
$sphereVolume = volumeOfSphere($radius);

// Display results
echo "<table border='1'>
        <tr>
            <th>Shape</th>
            <th>Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>
        <tr>
            <td>Cube</td>
            <td>s = $side</td>
            <td>V = s<sup>3</sup></td>
            <td>$cubeVolume</td>
        </tr>
        <tr>
            <td>Right Rectangular Prism</td>
            <td>l = $length, w = $width, h = $height</td>
            <td>V = lwh</td>
            <td>$rectangularPrismVolume</td>
        </tr>
        <tr>
            <td>Cylinder</td>
            <td>r = $radius, h = $height</td>
            <td>V = πr<sup>2</sup>h</td>
            <td>$cylinderVolume</td>
        </tr>
        <tr>
            <td>Cone</td>
            <td>r = $radius, h = $height</td>
            <td>V = (1/3)πr<sup>2</sup>h</td>
            <td>$coneVolume</td>
        </tr>
        <tr>
            <td>Sphere</td>
            <td>r = $radius</td>
            <td>V = (4/3)πr<sup>3</sup></td>
            <td>$sphereVolume</td>
        </tr>
      </table>";
?>
