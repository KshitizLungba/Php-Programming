<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<fieldset>
	<legend>Calculator</legend>
	<form method="POST" action="calculator1.php">
		<label>First Number:</label><input type="number" name="fnum"><br><br>
		<label>Second Number:</label><input type="number" name="snum"><br><br>
		<select name="operation">
			<option value="add">Add</option>
			<option value="sub">Sub</option>
			<option value="mul">Mul</option>
			<option value="div">Div</option>
		</select>
		<br><br>
		<input type="submit" value="calculate" name="submit">
	</form>
</fieldset>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$num1 = $_POST['fnum'];
	$num2 = $_POST['snum'];
	$operator = $_POST['operation'];

	switch ($operator) {
		case 'add':
			$add = $num1 + $num2;
			echo "The added value is: ".$add."<br>";
			break;
		case 'sub':
			$sub = $num1 - $num2;
			echo "The substracted value is: ".$sub."<br>";
			break;
		case 'mul':
			$mul = $num1 * $num2;
			echo "The product is: ".$mul."<br>";
			break;
		case 'div':
			$div = $num1/$num2;
			echo "The divided value is: ".$div."<br>";
			break;
		default:
			echo "Invalid Request!";
			break;
	}
}