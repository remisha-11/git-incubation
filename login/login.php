<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <form action="loginHandler.php" method="POST">
        <table class="login_table">
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required="required"/></td>
                
            </tr>
            <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required="required"/></td>
            </tr>
                


        </table>
        <input type="submit" name='submit' value="Log in"/>
    </form>
</body>
</html>