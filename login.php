<?php
require __DIR__ . '/partials/header.php';
?>
    <div id="login">
        <h1>Connexion</h1>
        <form action="/?p=/forms/login-form" method="post">
            <div>
                <label for="id-username">Nom d'utilisateur</label>
                <input type="text" name="username" id="id-username">
            </div>
            <div>
                <label for="id-password">Mot de passe</label>
                <input type="password" name="password" id="id-password">
            </div>
            <div>
                <input type="submit" value="envoyer" name="submit" class="submit">
            </div>
        </form>
    </div>
    <div id="register">
        <h1>Inscription</h1>
        <form action="/?p=/forms/register-form" method="post">
            <div>
                <label for="id-username">Nom d'utilisateur</label>
                <input type="text" name="username" id="id-username">
            </div>
            <div>
                <label for="id-age">Age</label>
                <input type="number" name="age" id="id-age">
            </div>
            <div>
                <label for="id-password">Mot de passe</label>
                <input type="password" name="password" id="id-password">
            </div>
            <div>
                <label for="id-password-repeat">Repetez le mot de passe</label>
                <input type="password" name="password-repeat" id="id-password-repeat">
            </div>
            <div>
                <input type="submit" value="envoyer" name="submit" class="submit">
            </div>
        </form>
</div>

<div id="toRegisterDiv">
    Pas de compte? <span id="toRegister">Créez en un gratuitement</span>
</div>
<?php
require __DIR__ . '/partials/footer.php';
?>
