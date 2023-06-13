<form action="sections\tasks\handler.php" method="GET">
    <label for="name">Ім'я:</label>
    <input name="name" id="name" type="text" required> <br><br>

    <label for="age">Вік:</label>
    <input name="age" id="age" type="number" required> <br><br>

    <label for="gender">Стать:</label><br>
    <input name="gender" value="чоловік" type="radio" required/>Чоловік 
    <input name="gender" value="жінка" type="radio" required/>Жінка</p>

    <label for="email">Електронна пошта:</label>
    <input name="email" id="email" type="email" required>

    <br><br>
    <label for="bio">Біографія:</label>
    <textarea name="bio" id="bio" required></textarea><br><br>

    <button type="submit">Надіслати</button>
</form>







