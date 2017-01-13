<html>
<h1>Soft Group</h1>
<h2>Тестове завдання 2</h2>
<p>У форму вводиться текст, слова в якому розділені пробілами і
розділовими знаками. Вилучити з цього тексту всі слова найбільшої
довжини. (Слів найбільшої довжини може бути декілька).</p>
<hr>
<form id="task-form" method="POST" action="">
	Введіть текст:</br>
	<input type="hidden" id="task" name="task" value="2" type="text">
	<textarea name="words" cols="80" rows="10"></textarea></br></br>
	<input type="button" value="Підрахувати" onclick="AjaxFormRequest('results', 'task-form', 'ajax.php')" />
</form>
<hr>
<div id="results">вывод</div>
</html>