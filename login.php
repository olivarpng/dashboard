<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="dash.css">
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <h2>Login</h2>
            <form action="valida_login.php" method="POST">
                <div class="form-group">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                <button type="submit" class="btn-login">Acessar Painel</button>
            </form>
        </div>
    </div>
</body>

</html>