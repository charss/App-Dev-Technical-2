<html>
	<head>
		<title></title>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<?php
			$months_thirty_one = array(
				'January',
				'March',
				'May',
				'July',
				'August',
				'October',
				'December'
			);

			$curr_month = 'January';

			$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September','October', 'November', 'December');
			if(isset($_GET['month'])) {
				$curr_month = $_GET['month'];
			}
		?>

		<div class='main'>
			<table>
				<tr>
					<div class="month">
						<div class='dropdown'>
							<button class="dropdown_button"><?php echo strtoupper($curr_month) ?><img id='down_arrow' src='down.png'></button>
					
							<div class="dropdown_cont">
								<?php
									foreach ($months as $month) {
										if ($month != $curr_month) {
											echo "<a href='http://localhost/S2-Technical-AppDev/Prob1/index.php?month=$month'>".strtoupper($month)."</a>";
										} else {
											echo "<a href='http://localhost/S2-Technical-AppDev/Prob1/index.php?month=$month' class='current'>".strtoupper($month)."</a>";
										}
										
									}
								?>
								
							
							</div>
						</div>
					</div>

				</tr>
				<tr>
					<th>MONDAY</th>
					<th>TUESDAY</th>
					<th>WEDNESDAY</th>
					<th>THURSDAY</th>
					<th>FRIDAY</th>
					<th>SATURDAY</th>
					<th>SUNDAY</th>
				</tr>
				<?php
					$count = 1;
					if (in_array($curr_month, $months_thirty_one)) {
						$days = 31;
					} elseif ($curr_month == 'February') {
						$days = 28;
					} else {
						$days = 30;
					}

					for ($i = 1; $i <= $days; $i++) {
						if ($count == 1) {
							echo "<tr>";
						} elseif ($count == 7) {
							echo "<td>$i</td>";
							echo "</tr>";
							$count = 1;
							continue;
						}

						if ($curr_month == 'December' && $i == 16) {
							echo "<td class='birthday'>$i</td>";
						} else {
							echo "<td>$i</td>";
						}
						
						$count++;
					}
				?>
			</table>
		</div>
	</body>
</html>