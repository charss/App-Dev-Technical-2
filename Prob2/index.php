<!-- Using ARRAYS, create a fruit directory that will show the image, name, description and facts about the fruit (create at least 10 fruits sort in alphabetical order). Implement a HTML and CSS code for the structure and design of the webpage. Please see the sample output below.

https://www.healthline.com/nutrition/20-healthiest-fruits#TOC_TITLE_HDR_2 -->

<html>
	<head>
		<title></title>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<?php
			function sortByDescName($a, $b) {
			    return $a['name'] <=> $b['name'];
			}

			function sortByAscName($a, $b) {
			    return $b['name'] <=> $a['name'];
			}

			function sortByYoung($a, $b) {
			    return $a['age'] <=> $b['age'];
			}

			function sortByOld($a, $b) {
			    return $b['age'] <=> $a['age'];
			}


			// names, images, age, birthday, and contact number
			$contacts = array(
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/', 
					  'desc'   => "<p></p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known ofr its ability to aid weight loss and reduce insulin resistance</p>"),


			);
			if(isset($_GET['dir'])) {
				if ($_GET['row'] == 'name' && $_GET['dir'] == 'desc') {
					usort($contacts, 'sortByDescName');	
				} elseif ($_GET['row'] == 'name' && $_GET['dir'] == 'asc') {
					usort($contacts, 'sortByAscName');
				} elseif ($_GET['row'] == 'age' && $_GET['dir'] == 'young') {
					usort($contacts, 'sortByYoung');
				} elseif ($_GET['row'] == 'age' && $_GET['dir'] == 'old') {
					usort($contacts, 'sortByOld');
				}
			}

		?>

		<table>
			<tr>
				<th></th>
				<th></th>
				<th>
					<div class="dropdown">
					<button class="dropdown_button">Name<img id='down_arrow' src='images/down.png'></button>
					
						<div class="dropdown_cont">
							<a href="http://localhost/contact_database/index.php?row=name&dir=desc">A-Z</a>
							<a href="http://localhost/contact_database/index.php?row=name&dir=asc">Z-A</a>
						</div>
					</div>
				</th>

				<th>
					<div class="dropdown">
					<button class="dropdown_button">Age<img id='down_arrow' src='images/down.png'></button>
						<div class="dropdown_cont">
							<a href="http://localhost/contact_database/index.php?row=age&dir=young">Young to Old</a>
							<a href="http://localhost/contact_database/index.php?row=age&dir=old">Old to Young</a>
						</div>
					</div>
				</th>
				<th>Birthday</th>
				<th>Contact Number</th>
			</tr>
			<tr>
				<?php
					for ($x = 0; $x < count($contacts); $x++) {
						$src = $contacts[$x]['img_id'];
						echo "<tr>";
						echo "<td id='count_column'>".($x + 1)."</td>";
						echo "<td id='img_column'><img id='picture' src='$src'></td>";
						echo "<td id='name_column'>".$contacts[$x]['name'];
						echo "<td id='age_column'>".$contacts[$x]['age']."</td>";
						echo "<td>".$contacts[$x]['bday']."</td>";
						echo "<td>".$contacts[$x]['num']."</td>";
						echo "</tr>";
					};
				?>
			</tr>
		</table>
	</body>
</html>	
