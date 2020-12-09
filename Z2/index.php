<html>
	<head>
		<title>Калькулятор</title>
	</head>
	<body>
		<form action="/index.php">
			<input type="text" name="X" value="<?= $_GET["X"]?>">
			<select name="operation">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<input type="text" name="Y" value="<?= $_GET["Y"]?>">
			<input type="submit" value="Посчитать">
		</form>
	</body>
</html>

<?php
	if($_GET["operation"] == '+'){
		if($_GET["X"] == ''){
			echo "вы не ввели первое число";
		}else{
			if($_GET["Y"] == ''){
				echo "вы не ввели второе число";
			}else{
				echo $_GET["X"] . $_GET["operation"] . $_GET["Y"] . "=";
				echo $_GET["X"] + $_GET["Y"];
			};
		};
	}elseif($_GET["operation"] == '-'){
		if($_GET["X"] == ''){
			echo "вы не ввели первое число";
		}else{
			if($_GET["Y"] == ''){
				echo "вы не ввели второе число";
			}else{
				echo $_GET["X"] . $_GET["operation"] . $_GET["Y"] . "=";
				echo $_GET["X"] - $_GET["Y"];
			};
		};
	}elseif($_GET["operation"] == '*'){
		if($_GET["X"] == ''){
			echo "вы не ввели первое число";
		}else{
			if($_GET["Y"] == ''){
				echo "вы не ввели второе число";
			}else{
				echo $_GET["X"] . $_GET["operation"] . $_GET["Y"] . "=";
				echo $_GET["X"] * $_GET["Y"];
			};
		};
	}elseif($_GET["operation"] == '/'){
		if($_GET["X"] == ''){
			echo "вы не ввели первое число";
		}else{
			if($_GET["X"] == '0'){
				echo "нельзя разделить то, чего нет!";
			}else{
				if($_GET["Y"] == ''){
					echo "вы не ввели второе число";
				}else{
					if($_GET["Y"] == '0'){
						echo "Делить на то чего нет, нельзя!";
					}else{
						echo $_GET["X"] . $_GET["operation"] . $_GET["Y"] . "=";
						echo $_GET["X"] / $_GET["Y"];
					};
				};
			};
		};
	};
?>