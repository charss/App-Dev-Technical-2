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

			// names, images, description, facts
			$fruits = array(
				array('name'   => 'Grapefruit', 
					  'img_id' => 'images/grapefruit.jpg', 
					  'desc'   => "<p>Color<br>Yellow (outside)<br>Red (inside)</p>", 
					  'fact'    => "<p>One of the healthiest citrus fruits.</p> <p>Besides being a good source of vitamins and minearls, it is known for its ability to aid weight loss and reduce insulin resistance.</p>"),
				array('name'   => 'Pineapple', 
					  'img_id' => 'images/pineapple.jpg', 
					  'desc'   => "<p>Color<br>Yellow</p>", 
					  'fact'    => "<p>Among the tropical fruits, pineapple is a nutritious superstar.</p> <p>Pineapple is rich in vitamic C and manganeses. Its bromelain content may fight inflammation and reduce the risk of cancer.</p>"),
				array('name'   => 'Avocado', 
					  'img_id' => 'images/avocado.jpg', 
					  'desc'   => "<p>Color<br>Deep Purple</p>", 
					  'fact'    => "<p>Most fruits are high in carbs, while avocado is low in carbs and comprised mainly of healthy fats.</p> <p>Avocados are rich in healthy fats and potassium, both of which are well known for their role in promoting heart health.</p>"),
				array('name'   => 'Blueberries', 
					  'img_id' => 'images/blueberries.jpg', 
					  'desc'   => "<p>Color</p>Deep Purple</p>", 
					  'fact'    => "<p>The antioxidants in blueberries may reduce the risk of chronic conditions, such as heart disease, diabetes and Alzheimer’s.</p> <p>Blueberries are rich in a few important nutrients. They have a high antioxidant capacity and immune-enhancing properties, which may protect the body from illness.</p>"),
				array('name'   => 'Apples', 
					  'img_id' => 'images/apples.jpg', 
					  'desc'   => "<p>Color<br>Red</p>", 
					  'fact'    => "<p>Apples are among the most popular fruits, and also happen to be incredibly nutritious.</p> <p>Apples are very nutritious. Their nutrients, antioxidants and fiber may reduce the risk of disease and improve digestion.</p>"),
				array('name'   => 'Pomegranate', 
					  'img_id' => 'images/pomegranate.jpg', 
					  'desc'   => "<p>Color<br>Red</p>", 
					  'fact'    => "<p>Pomegranates are among the healthiest fruits you can eat.</p> <p>Pomegranates have wide-ranging health benefits. They are incredibly high in antioxidants and other plant compounds that can help reduce inflammation and prevent disease.</p>"),
				array('name'   => 'Mango', 
					  'img_id' => 'images/mango.jpg', 
					  'desc'   => "<p>Color<br>Yellow</p>", 
					  'fact'    => "<p>Mangoes are an excellent source of vitamin C.</p> <p>Mangoes contain vitamin C and soluble fiber. They also contain plant compounds with antioxidant and anti-inflammatory effects.</p>"),
				array('name'   => 'Strawberries', 
					  'img_id' => 'images/strawberries.jpg', 
					  'desc'   => "<p>Color<br>Red</p>", 
					  'fact'    => "<p>Strawberries are highly nutritious.</p> <p>Strawberries are rich in several nutrients and antioxidants. Eating them may help control your blood sugar levels and reduce your risk of some diseases.</p>"),
				array('name'   => 'Cranberries', 
					  'img_id' => 'images/cranberries.jpg', 
					  'desc'   => "<p>Color<br>Red</p>", 
					  'fact'    => "<p>Cranberries have impressive health benefits.</p> <p>Cranberries are rich in several nutrients and antioxidants. They also contain beneficial plant compounds that help prevent urinary tract infections.</p>"),
				array('name'   => 'Lemons', 
					  'img_id' => 'images/lemons.jpg', 
					  'desc'   => "<p>Color<br>Yellow</p>", 
					  'fact'    => "<p>Lemons are a very healthy citrus fruit known for their high vitamin C content.</p> <p>Lemons are rich in vitamin C and other plant compounds that may promote heart health, boost weight loss and help prevent kidney stones.</p>"),
			);

			usort($fruits, 'sortByDescName');
		?>
	
		<h1>My Favorite Fruits</h1>
		<table class='middle'>
			<tr>
				<th></th>
				<th></th>
				<th>Name</th>

				<th>Description</th>
				<th>Facts</th>
			</tr>
			<tr>
				<?php
					for ($x = 0; $x < count($fruits); $x++) {
						$src = $fruits[$x]['img_id'];
						echo "<tr>";
						echo "<td id='count_column'>".($x + 1)."</td>";
						echo "<td id='img_column'><img id='picture' src='$src'></td>";
						echo "<td id='name_column'>".$fruits[$x]['name'];
						echo "<td id='desc_column'>".$fruits[$x]['desc']."</td>";
						echo "<td id='fact_column'>".$fruits[$x]['fact']."</td>";
						echo "</tr>";
					};
				?>
			</tr>
		</table>
	</body>
</html>	
