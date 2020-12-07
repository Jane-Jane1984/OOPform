<?php

require_once "input.php";

require_once 'Text.php';
require_once 'Radio.php';
require_once 'Checkbox.php';
require_once 'Select.php';
require_once 'Submit.php';

echo 'Заполните форму для авторизации: ' . '<br>' . '<br>';
echo '<form>';
$login = new Text('text', 'login', '', 'Логин', 150, 30);
$password = new Text('password', 'pass', '', 'Пароль', 100, 30);
$radioM = new Radio('radio', 'sex', 'male');
$radioF = new Radio('radio', 'sex', 'female');
$checkbox = new Checkbox('checkbox', 'type1', 'low18');
$checkbox1 = new Checkbox('checkbox', 'type2', '18-45');
$checkbox2 = new Checkbox('checkbox', 'type3', 'up45');
$select = new Select('select', ['Образование 1', 'Образование 2', 'Образование 3', 'Образование 4']);
$submit = new Submit('submit', 'send', 'Отправить', true);
echo $login->convertToHtml();
echo '<br>' . '<br>';
echo $password->convertToHtml();
echo '<br>' . '<br>';
echo 'Ваш пол: ';
echo '<br>' . '<br>';
echo 'Мужчина ' . $radioM->convertToHtml();
echo 'Женщина ' . $radioF->convertToHtml();
echo '<br>' . '<br>';
echo 'Ваш примерный возраст: ';
echo '<br>' . '<br>';
echo $checkbox->convertToHtml() . 'Мне меньше 18 лет' . '<br>';
echo $checkbox1->convertToHtml() . 'Мне от 18 до 45 лет' . '<br>';
echo $checkbox2->convertToHtml() . 'Мне больше 45 лет' . '<br>';
echo '<br>' . '<br>';
echo 'Ваше образование: ';
echo '<br>' . '<br>';
echo $select->convertToHtml();
echo '<br>' . '<br>';
echo $submit->convertToHtml();
echo '</form>';
//<form>
//			Введите логин: <input type = "text"  name = "login" value =  "Введите логин"> <br> <br>
//			Введите пароль: <input type = "password" name = "password" value =  "Введите пароль"> <br> <br>
//          Ваш пол: <br/>
//			Мужчина <input  type = "radio" name = "sex" value =  "male" checked>
//			Женщина <input type = "radio" name = "sex" value =  "female"> <br> <br>
//			Ваш возраст: <br>
//			<input type = "checkbox" name = "type1" value = "low">Меньше 18<br>
//			<input type = "checkbox" name = "type2" value = "2old">От 18 до 45<br>
//			<input type = "checkbox" name = "type3" value = "high">Больше 45<br>
//			<select></select>
//			<br>
//			<input type = "submit" name = "submit" value = "Отправить">
//		</form>