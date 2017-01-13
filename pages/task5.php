<html>
<h1>Soft Group</h1>
<h2>Тестове завдання 5</h2>
<p>Задано текст. Словом вважається послідовність непробільних символів,
які йдуть підряд. Слова розділені одним або більшим числом пробілів або
символами кінця рядка.</p>
<p>Для кожного слова з цього тексту підрахуйте, скільки разів воно
зустрічалося в цьому тексті раніше. Використайте словники.</p>
<h4>Приклад:</h4>
<table>
	<tr>
		<td>Ввід</td>
		<td>Вивід</td>
	</tr>
	<tr>
		<td>one two one two three</td>
		<td>0 0 1 1 0</td>
	</tr>
	<tr>
		<td>She sells sea shells on the sea shore;</br>
			The shells that she sells are sea shells I'm sure.</br>
			So if she sells sea shells on the sea shore,</br>
			I'm sure that the</td>
		<td>0 0 0 0 0 0 1 0 0 1 0 0 1 0 2 2 0 0 0 0 1 2 3 3 1 1 4 0 1 0 1 2 4 1 5 0 0</td>
	</tr>
</table>
<hr>
<form id="task-form" method="POST" action="">
	Введіть текст:</br>
	<input type="hidden" id="task" name="task" value="5" type="text">
	<textarea name="words" cols="80" rows="10"></textarea></br></br>
	<input type="button" value="Підрахувати" onclick="AjaxFormRequest('results', 'task-form', 'ajax.php')" />
</form>
<hr>
<div id="results"></div>
</html>