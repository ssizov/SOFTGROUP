<html>
<h1>Soft Group</h1>
<h2>Тестове завдання 1</h2>
<p>У форму вводиться число N. Знайти всі досконалі числа до N.
Досконале число - це таке число, що дорівнює сумі всіх своїх дільників,
крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе
самого ділиться на числа 1, 2 і 3, які в сумі дають 6.</p>
<hr>
<form id="task-form" method="POST" action="">
	<input type="hidden" name="task" value="1" type="text">
	<label for="name">Введіть число: </label><input id="number" name="number" value="" type="text">
	<input type="button" value="Підрахувати" onclick="AjaxFormRequest('results', 'task-form', 'ajax.php')" />
</form>
<hr>
<div id="results"></div>
</html>