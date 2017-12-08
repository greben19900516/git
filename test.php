
<form action="test.php" method="post" name="form">

    Ваше Фамилия Имя Отчество: <input name="fio" type="text" value=""><br><br>

    Ваш пол:
    М<input name="sex" type="radio" value="Мужской">
    Ж<input name="sex" type="radio" value="Женский"><br><br>

    Из какой Вы страны

    <select name="city">
        <option value="Россия"> Россия
        <option value="Другая страна"> Другая страна
    </select><br><br>

    Любимый(ые) цвет(а): <br><br>

    Черный: <input type="checkbox" name="color_1" value="Черный">
    Красный: <input type="checkbox" name="color_2" value="Красный">
    Белый: <input type="checkbox" name="color_3" value="Белый">
    Другой: <input type="checkbox" name="color_4" value="Другой"><br><br>

    О себе:<br><br>
    <textarea cols="40" rows="10" name="about"></textarea><br><br>

    <input type="submit" name="submit">


    <?php
    if(isset($_POST['submit'])) {
        echo "ФИО: ".$_POST['fio']."<br>";
        echo "Пол: ".$_POST['sex']."<br>";
        echo "Страна проживания: ".$_POST['city']."<br>";

        echo "Любимый(ые) цвет(а): <br>";
        echo $_POST['color_1']."<br>";
        echo $_POST['color_2']."<br>";
        echo $_POST['color_3']."<br>";
        echo $_POST['color_4']."<br>";
        echo "О себе: ".$_POST['about']."<br><br><br>";
    }
    ?>


</form>

