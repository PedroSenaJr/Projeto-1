<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../CSSS/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon_ccbs.ico">
</head>
    <body>
        <form class="form" action="../php/login/logar.php" method="post">
            <div class="card">
                <div class="card-top">
                    <img class="imglogin" src="../IMG/CCBS-removebg-preview-atual.png" alt="">
                    <h2 class="title">LOGIN SYSTEM</h2>
                </div>
                
                <div class="card-group">
                    <label>ID</label>
                    <input type="int" name="matricula" placeholder="Enter your ID" required maxlength="4">
                </div>
                </br>   
                <div class="card-group">
                    <label>Password</label>
                    <input type="password" name="senha" placeholder="Enter your Password" required maxlength="6">
                </div>
                </br>
                <div class="card-group btn">
                    <button type="submit">Access</button>
                </div>
            </div>
        </form>    
    </body>
    </html>