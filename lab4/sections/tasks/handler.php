<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
        $age = isset($_GET['email']) ? filter_var($_GET['age'], FILTER_VALIDATE_INT) : '';
        $gender = htmlentities($_GET["gender"]);
        $email = isset($_GET['email']) ? filter_var($_GET['email'], FILTER_SANITIZE_EMAIL) : '';
        $message = isset($_GET['bio']) ? htmlspecialchars($_GET['bio']) : '';

        echo "<p>Ім'я: {$name}</p>";
        echo "<p>Вік: {$age}</p>";
        echo "<p>Стать: {$gender}</p>";
        echo "<p>Email: {$email}</p>";
        echo "<p>Повідомлення: {$message}</p>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $bal = 0;
        $first = htmlentities($_POST["first"]);
        $second = htmlentities($_POST["second"]);
        $third = htmlentities($_POST["third"]);
        $fourth = htmlentities($_POST["fourth"]);
        $fifth = htmlentities($_POST["fifth"]);

        if($first == 2)
            $bal = $bal + 1;
        if($second == 1)
            $bal = $bal + 1;
        if($third == 1)
            $bal = $bal + 1;
        if($fourth == 3)
            $bal = $bal + 1;
        if($fifth == 3)
            $bal = $bal + 1;
        echo "<p>Ваш бал: {$bal}</p>";

        echo '<p>Правильні відповіді:</p>
        <label for="first">Вибір 2:</label><br>
        <input name="first" value="1" type="radio"  />1 
        <input name="first" value="2" type="radio"  checked/>2
        <input name="first" value="3" type="radio"  />3</p>
        
        <label for="second">Вибір 1:</label><br>
        <input name="second" value="1" type="radio"  checked/>1 
        <input name="second" value="2" type="radio"  />2
        <input name="second" value="3" type="radio"  />3</p>
        
        <label for="third">Вибір 1:</label><br>
        <input name="third" value="1" type="radio"  checked/>1 
        <input name="third" value="2" type="radio"  />2
        <input name="third" value="3" type="radio"  required/>3</p>

        <label for="fourth">Вибір 3:</label><br>
        <input name="fourth" value="1" type="radio"  />1 
        <input name="fourth" value="2" type="radio"  />2
        <input name="fourth" value="3" type="radio"  checked/>3</p>

        <label for="fifth">Вибір 3:</label><br>
        <input name="fifth" value="1" type="radio"  />1 
        <input name="fifth" value="2" type="radio"  />2
        <input name="fifth" value="3" type="radio"  checked/>3</p>
        ';

    } else {
        echo 'Помилка у даних!';
    }
?>