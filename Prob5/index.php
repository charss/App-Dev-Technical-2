<html>
	<head>
	</head>
	<style>
		table, th, td {
			border: 1px solid black;
		}

		table {
			border-collapse: collapse;
		}

		td {
			padding-right: 20px;
			height: 20px;
		}
	</style>
	<body>
		<?php
			$string = ' an online guide to html form <input> tag ';
			
			function empty_row() {
				echo "<tr>";
				echo "<td colspan=3></td>";
				echo "<tr>";
			}

			function capAWord($string, $to_cap) {
				$to_cap = htmlspecialchars("$to_cap");
				$arr = explode( $to_cap, htmlspecialchars($string));
				echo $arr[0].strtoupper($to_cap).$arr[1];
			}
		?>	
		<table>
			<tr>
				<th>No.</th>
				<th>Descriptions</th>
				<th>Output</th>
			</tr>
			<tr>
				<td>1.</td>
				<td>Original value of $string</td>
				<td>*<?php echo htmlspecialchars($string) ?>*</td>
			</tr>
			<tr>
				<td>2.</td>
				<td>Number of characters</td>
				<td>*<?php echo strlen($string) ?>*</td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Number of words</td>
				<td>*<?php echo str_word_count($string) ?>*</td>
			</tr>
			<?php empty_row() ?>
			<tr>
				<td>4.</td>
				<td>First character to uppercase</td>
				<td>*<?php echo ucfirst(htmlspecialchars($string)) ?>*</td>
			</tr>
			<tr>
				<td>5.</td>
				<td>First character of each word to uppercase</td>
				<td>*<?php echo ucwords(htmlspecialchars($string)) ?>*</td>
			</tr>
			<tr>
				<td>6.</td>
				<td>To lowercase</td>
				<td>*<?php echo strtolower(htmlspecialchars($string)) ?>*</td>
			</tr>
			<tr>
				<td>7.</td>
				<td>To uppercase</td>
				<td>*<?php echo strtoupper(htmlspecialchars($string)) ?>*</td>
			</tr>
			<?php empty_row() ?>
			<tr>
				<td>8.</td>
				<td>Without leading spaces</td>
				<td>*<?php echo ltrim(htmlspecialchars($string)) ?>*</td>
			</tr>
			<tr>
				<td>9.</td>
				<td>Without trailing spaces</td>
				<td>*<?php echo rtrim(htmlspecialchars($string)) ?>*</td>
			</tr>
			<tr>
				<td>10.</td>
				<td>Without leading and trailing spaces</td>
				<td>*<?php echo trim(htmlspecialchars($string)) ?>*</td>
			</tr>
			<?php empty_row() ?>
			<tr>
				<td>11.</td>
				<td>MD5 value of $string</td>
				<td>*<?php echo md5($string); ?>*</td>
			</tr>
			<tr>
				<td>12.</td>
				<td>Base64 value of $string</td>
				<td>*<?php echo base64_encode($string); ?>*</td>
			</tr>
			<?php empty_row() ?>
			<tr>
				<td>13.</td>
				<td>First 16 characters</td>
				<td>*<?php echo substr($string, 0, 16); ?>*</td>
			</tr>
			<tr>
				<td>14.</td>
				<td>Last 4 characters</td>
				<td>*<?php echo substr($string, -4); ?>*</td>
			</tr>
			<tr>
				<td>15.</td>
				<td>4 characters starting from the 20<sup>th</sup> position</td>
				<td>*<?php echo substr($string, 20, 4); ?>*</td>
			</tr>
			<?php empty_row() ?>
			<tr>
				<td>16.</td>
				<td>Position of the word "guide"</td>
				<td><?php echo var_dump(strpos($string, 'guide')) ?></td>
			</tr>
			<tr>
				<td>17.</td>
				<td>Position of the word "UE"</td>
				<td><?php echo var_dump(strpos($string, 'UE')); ?></td>
			</tr>
			<?php empty_row() ?>
			<tr>
				<td>18.</td>
				<td>"HTML" word in uppercase</td>
				<td>*<?php capAWord($string, 'html'); ?>*	
				</td>
			</tr>
			<tr>
				<td>19.</td>
				<td>"&ltINPUT&gt" word in uppercase</td>
				<td>*<?php capAWord($string, '<input>'); ?>*	
				</td>
			</tr>
			<?php empty_row() ?>
			<tr>
				<td>20.</td>
				<td>Strings converted to array</td>
				<td>
					<?php 
						$string = explode(' ', htmlspecialchars($string)); 
						foreach ($string as $word) {
							if ($word != '') {
								echo "*$word*<br>";
							}
							
						}
					?>
				</td>
			</tr>
		</table>

	</body>
</html>