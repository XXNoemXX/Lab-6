<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <?php
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 4;
        $height = 2;

        $area = calculateArea($width, $height);

        echo "<strong>The area of a rectangle with a width of $width and height of $height is $area.</strong>";
    ?>
</body>
</html>