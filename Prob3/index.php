<!-- Create a formula for each volume of shapes (Cube, Right Rectangular Prism, Prism or Cylinder, Pyramid or Cone and Sphere) then display the result. Please see the sample below: -->

<html>
	<head>
	</head>
	<body>
		<?php

			function cube($side) {
				return $side ^ 3;
			}

			function right_rect_prism($width, $height, $length) {
				return $width * $height * $length;
			}

			function prism($base, $height) {
				return $base * $height;
			}

			function cylinder($radius, $height) {
				return pi() * ($radius^2) * $height
			}

			function pyramid($length, $width, $height) {
				return ($length * $width * $height)) / 3;

			}


			function cone($radius, $height) {
				return pi() * ($radius^2) * ($height / 3);

			}

			function sphere($radius) {
				return (4 / 3) * (pi() * $radius^3);

			}
		?>
	</body>
</html>