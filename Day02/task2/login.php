
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

<!-- login.css -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #dfe6e9;
    }
    .login-container {
        text-align:center;
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        display: flex;
        justify-content : center ;
        align-items : center ;
    }
    input{
        margin-top:20px
    }
    .btn-login {
        width: 80%;
        background-color:rgb(28, 37, 151);
        color: white;
        margin-top: 20px
    }</style>
    </head>
<body>
    <div class="login-container">
        <form method="POST" action="server.php">
            <h2>Login</h2>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="action" class="btn btn-login" value = "login">Login</button>
        </form>
    </div>
</body>
</html>