<form action="handler.php" method="GET">
    <label for="name">Name:</label>
    <input name="name" id="name" type="text" required> <br><br>

    <label for="age">Age:</label>
    <input name="age" id="age" type="number" required> <br><br>

    <label for="gender">Gender:</label><br>
    <input name="gender" value="male" type="radio" required/>Male 
    <input name="gender" value="female"type="radio"  required/>Female</p>

    <label for="email">Email:</label>
    <input name="email" id="email" type="email" required>

    <br><br>
    <label for="bio">BIO:</label>
    <textarea name="bio" id="bio" required></textarea><br><br>

    <button type="submit">Submit</button>
</form>

<br><br><br><br><br><br>

<form action="handler.php" method="POST">

    <label for="first">Choise 2:</label><br>
    <input name="first" value="1" type="radio"  required/>1 
    <input name="first" value="2" type="radio"  required/>2
    <input name="first" value="3" type="radio"  required/>3</p>

    <label for="second">Choise 1:</label><br>
    <input name="second" value="1" type="radio"  required/>1 
    <input name="second" value="2" type="radio"  required/>2
    <input name="second" value="3" type="radio"  required/>3</p>

    <label for="third">Choise 1:</label><br>
    <input name="third" value="1" type="radio"  required/>1 
    <input name="third" value="2" type="radio"  required/>2
    <input name="third" value="3" type="radio"  required/>3</p>

    <label for="fourth">Choise 3:</label><br>
    <input name="fourth" value="1" type="radio"  required/>1 
    <input name="fourth" value="2" type="radio"  required/>2
    <input name="fourth" value="3" type="radio"  required/>3</p>

    <label for="fifth">Choise 3:</label><br>
    <input name="fifth" value="1" type="radio"  required/>1 
    <input name="fifth" value="2" type="radio"  required/>2
    <input name="fifth" value="3" type="radio"  required/>3</p>


    <button type="submit">Submit</button>
</form>