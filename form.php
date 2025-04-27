<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="./includes/formhandler.php" method="POST">
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname"><br><br>

        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname"><br><br>

        <label for="pet">Favorite Pet:</label><br>
        <select id="pet" name="pet">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="rabbit">Rabbit</option>
            <option value="parrot">Parrot</option>
            <option value="hamster">Hamster</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>