<html>
<h1>Soft Group</h1>
<h2>Тестове завдання 3</h2>
<p>Вводяться N натуральних чисел більше 2. Підрахувати, скільки серед
них простих чисел.</p>
<hr>
<form id="task-form" method="POST" action="">
	<input type="hidden" id="task" name="task" value="3" type="text">
	Введіть числа: <input name="numbers" type="text" size="40">
	<input type="button" value="Підрахувати" onclick="AjaxFormRequest('results', 'task-form', 'ajax.php')" />
</form>
<hr>
<div id="results"></div>
</html>