<!-- Create a formula for each volume of shapes (Cube, Right Rectangular Prism, Prism or Cylinder, Pyramid or Cone and Sphere) then display the result. Please see the sample below: -->

<html>
	<head>
	</head>
	<link rel='stylesheet' href='style.css'>
	<body>
		<form action="" method="get">
			<div class='main'>
				<div class="container center">
					<div class="div1 grid"> 
						<input type='submit' name='cube' value='Cube'>
					</div>
					<div class="div2 grid">
						<input type='submit' name='RRP' value='Right Rectangular Prism'>
					</div>
					<div class="div3 grid">
						<input type='submit' name='prism' value='Prism'>
					</div>
					<div class="div4 grid">
						<input type='submit' name='cylinder' value='Cylinder'>
					</div>
					<div class="div5 grid">
						<input type='submit' name='pyramid' value='Pyramid'>
					</div>
					<div class="div6 grid">
						<input type='submit' name='cone' value='Cone'>
					</div>
					<div class="div7 grid">
						<input type='submit' name='sphere' value='Sphere'>
					</div>
				</div>
			</div>	
		</form>
		
		<form action='' method='post'>
			<div class='sub'>

				<?php
					function cube($side) {
						echo gettype(intval($side));
						return pow(intval($side), 3);
						
					}

					function right_rect_prism($widht, $height, $length) {
						
						return $width * $height * $length;
					}

					function prism() {
						
						// return $base * $height;
					}

					function cylinder() {
						
						// return pi() * ($radius^2) * $height;
					}

					function pyramid() {
						
						
						// return ($length * $width * $height) / 3;
					}


					function cone() {
						
						
						// return pi() * ($radius^2) * ($height / 3);
					}

					function sphere() {
						
						
						// return (4 / 3) * (pi() * $radius^3);
					}
				?>

				<div class='input_boxes'>
					<?php
						$shape_params = array();
						if (isset($_GET['cube'])) {
							echo "<p><img src='https://latex.codecogs.com/gif.latex?V&space;=&space;s^3' title='V = s^3'/></p>";
							echo "<input type='text' name='shape_params' placeholder='Sides'><br>";
							$shape = "Cube";
							
						} elseif (isset($_GET['RRP'])) {
							echo "<p><img src='https://latex.codecogs.com/gif.latex?V&space;=&space;whl' title='V = whl' /></p>";
							echo "<input type='text' name='shape_params[width]' placeholder='Width'><br>";
							echo "<input type='text' name='shape_params[height]' placeholder='Height'><br>";
							echo "<input type='text' name='shape_params[length]' placeholder='Length'><br>";	
							// right_rect_prism();
							$shape = "Right Prism";
						} elseif (isset($_GET['prism'])) {
							echo "<p><img src='https://latex.codecogs.com/gif.latex?V&space;=&space;Bh' title='V = Bh' /></p>";
							echo "<input type='text' name='shape_params[base]' placeholder='Base'><br>";
							echo "<input type='text' name='shape_params[height]' placeholder='Height'><br>";
							
							$shape = 'Prism';
						} elseif (isset($_GET['cylinder'])) {
							echo "<p><img src='https://latex.codecogs.com/gif.latex?V&space;=&space;\pi&space;r^2h' title='V = \pi r^2h' /></p>";
							echo "<input type='text' name='shape_params[radius]' placeholder='Radius'><br>";
							echo "<input type='text' name='shape_params[height]' placeholder='Height'><br>";
							$shape = 'Cylinder';
						} elseif (isset($_GET['pyramid'])) {
							echo "<p><img src='https://latex.codecogs.com/gif.latex?V&space;=&space;\dfrac{lwh}{3}' title='V = \dfrac{lwh}{3}' /></p>";
							echo "<input type='text' name='shape_params[length]' placeholder='Length'><br>";
							echo "<input type='text' name='shape_params[width]' placeholder='Width'><br>";
							echo "<input type='text' name='shape_params[height]' placeholder='Height'><br>";
							$shape = 'Pyramid';
						} elseif (isset($_GET['cone'])) {
							echo "<p><img src='https://latex.codecogs.com/gif.latex?V&space;=&space;\pi&space;r^2&space;\dfrac{h}{3}' title='V = \pi r^2 \dfrac{h}{3}' /></p>";
							echo "<input type='text' name='shape_params[radius]' placeholder='Radius'><br>";
							echo "<input type='text' name='shape_params[height]' placeholder='Height'><br>";
							$shape = 'Cone';

						} elseif (isset($_GET['sphere'])) {
							echo "<p><img src='https://latex.codecogs.com/gif.latex?V&space;=&space;\dfrac{4}{3}&space;\pi&space;r^3' title='V = \dfrac{4}{3} \pi r^3' /></p>";
							echo "<input type='text' name='shape_params' placeholder='Radius'><br>";
							$shape = 'Sphere';
						}
					?>

					<input type='submit' name='submit' value='Calculate' />
				</div>
			</div>
		</form>


		<div class='answers center'>
			<?php
				if (isset($_POST['submit'])) {
					
					$shape_params = $_POST['shape_params'];
					// print_r($shape_params);
					if ($shape == 'Cube') {
						echo gettype($shape_params);
						$volume = cube($shape_params);
						echo "<p>$volume</p>";
					}
					// foreach ($$right_prism as $key => $value) {
					//     $fieldNames[] = "`{$key}`";    //field names for our insert statement - `fieldOne`, `fieldTwo`, etc...
					//     $values[":{$key}"] = strip_tags($value); 
					// }
				}
			?>
		</div>


			
		
		

	</body>
</html>