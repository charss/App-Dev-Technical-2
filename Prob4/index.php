<!-- 4.	Convert your Student Resume into a web based form, used include() and require() functions to connect all pages 
Include and create the following pages:
•	Career Objective page
•	Personal information page
•	Educational Attainment page
•	Skills page
•	Affiliation page
•	Work Experience Page -->




<html>
	<head>
	</head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div class="parent">
			<div class="div1 page"> Image </div>
			<div class="div2 page"> Personal Information </div>
			<div class="div3 page"> Career Objective</div>
			<div class="div4 page"> Educational Attainmant Page </div>
			<div class="div5 page"> Skills Page</div>
			<div class="div6 page"><?php include("affiliation.html") ?></div>
			<div class="div7 page"><?php include("work.html") ?></div>
		</div>
		<?php

		?>
	</body>
</html>