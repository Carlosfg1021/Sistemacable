<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style type="text/css">
    body {
    margin: 0;
    padding: 0;
    width: 350px;
    height: 405px;
    display: block;
    background-image: url(Loginee.jpg);
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: sans-serif;
}

.loginBox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
    box-sizing: border-box;
    background: transparent;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .5);
    border-radius: 5px;
    transition: .5s;
}

.loginBox:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, .5);
    background: rgba(255, 255, 255, 1);
}

.glass {
    width: 100%;
    height: 100%;
    padding: 40px;
    box-sizing: border-box;
    background: rgba(10, 10, 10, 0.1);
    border-radius: 5px;
    transition: .5s;
}

.glass:hover {
    transform: translate(20px, 20px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .5);
}

.Mia {
    margin: 0 auto;
    display: block;
    margin-bottom: 20px;
}

h3 {
    margin: 0;
    padding: 0 0 20px;
    color: #050505;
    text-align: center;
}

.loginBox input {
    width: 100%;
    margin-bottom: 20px;
}

.loginBox input[type="text"],
.loginBox input[type="password"] {
    border: none;
    border-bottom: 2px solid #050505;
    outline: none;
    height: 40px;
    color: #050505;
    background: transparent;
    font-size: 16px;
    padding-left: 20px;
    box-sizing: border-box;
}

::placeholder {
    color: rgba(0, 0, 0, .5);
}

.inputBox {
    position: relative;
}

.inputBox span {
    position: absolute;
    top: 10px;
    color: #050505;
}

.loginBox input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    font-size: 16px;
    background: #ed292a;
    color: #fff;
    border-radius: 20px;
    cursor: pointer;
}
    </style>
</head>

<body>
    <div class="loginBox">
        <div class="glass">
            <img src="Mia.png" class="Mia" width="95" height="95">
            <h3>Cablevision Robles 2.1</h3>
            <form>
                <div class="inputBox">
                    <input type="text" name="" placeholder="&#128102;  Usuario" required autofocus>
                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <div class="inputBox">
                    <input type="password" name="" placeholder="&#128272;  Contraseña" required autofocus>
                    <span><i class="fa fa-password" aria-hidden="true"></i></span>
                </div>
                <input type="submit" name="" value="Entrar">
            </form>
        </div>
    </div>

</body>

</html>