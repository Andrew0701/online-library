<?php
	header('Content-Type: text/html; charset=utf-8');
?>
<table>
	<form action="login.php" method="POST">
		<tr>
			<td>Имя</td>
			<td><input type="text" name="login"></td>
		</tr>
		<tr>
			<td>Пароль</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td> <input type="submit" value="OK" name="submit"></td>
			<td><a href='./reg.php'>Зарегистрироваться</a></td>
		</tr>
	</form>
</table> 