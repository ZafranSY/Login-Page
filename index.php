
    <?php
    include("connection.php");
     include("Login.php")
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
<link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="form">
            <h1>Login Form</h1>
            <form action="Login.php" onsubmit="return isvalid()" name="form" method="POST">
                <label for="user">Username :</label>
                <input type="text" id="user" name="user">
                <br>
                <br>
                <label for="pass">Password :</label>
                <input type="password" id="pass" name="pass">

                <br>
                <br>
                <input type="submit" id="btn" value="login" class="btn btn-primary p-2 text-center" name="submit"/>
                <h1>dasdfas</h1>z
            </form>
        </div>
        <script>
            function isvalid()
            
               { var user = document.form.user,value;
                var pass = document.form.user,value;

                if(user.length =="" && pass.length=="")
                {
                    alert("Username and password fil are empty")
                    return false;
                }else if((user.length ==""))
                {
                    alert("username is empty")
                    return false;
                }else if((pass.length ==""))
                {
                    alert("password is empty")
                    return false;
                }
                
            }
        </script>
    </body>
    </html>