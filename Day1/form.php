<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
  <style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f4f4f4;
}

form {
    background: white;
    padding: 20px;
    max-width: 400px;
    margin: auto;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
}

input, select, textarea {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    height: 60px;
}

button {
    padding: 10px;
    border: none;
    background: #007bff;
    color: white;
    cursor: pointer;
    margin-right: 5px;
    border-radius: 4px;
}

button[type="reset"] {
    background: #dc3545;
}

button:hover {
    opacity: 0.8;
}

  </style>

</head>
<body>

    <form action="server.php" method="post">

        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name"><br><br>

        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name"><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea><br><br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option>Egypt</option>
            <option>KSA</option>
            <option>UAE</option>
            <option>Algeria</option>
            <option>Qatar</option>
            <option>Sudan</option>
            <option>Tunisia</option>
        </select><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>

        <label>Skills:</label>
        <input type="checkbox" id="php" name="skills" value="php">
        <label for="php">PHP</label>
        <input type="checkbox" id="mysql" name="skills" value="mysql" checked>
        <label for="mysql">MySQL</label>
        <input type="checkbox" id="j2se" name="skills" value="j2se" checked>
        <label for="j2se">J2SE</label>
        <input type="checkbox" id="postgresql" name="skills" value="postgresql">
        <label for="postgresql">PostgreSQL</label><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="OpenSource" ><br><br>

        <label for="captcha">Please Insert the code below:</label>
        <input type="text" id="captcha" name="captcha"><br><br>

        <p><strong>Sh68Go</strong></p>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

</body>
</html>
