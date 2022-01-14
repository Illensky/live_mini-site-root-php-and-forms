<?php
$title = 'Contact';
require __DIR__ . '/partials/header.php';
?>
<div>
    <h1>Formulaire de contact</h1>
    <form action="/?p=/forms/contact-form" method="post">
        <div>
            <label for="id-username">Nom d'utilisateur</label>
            <input type="text" name="username" id="id-username">
        </div>
        <div>
            <label for="id-message">Message</label>
            <textarea name="message" id="id-message"></textarea>
        </div>
        <div>
            <input type="submit" value="envoyer" name="submit">
        </div>
    </form>
</div>
<?php
require __DIR__ . '/partials/footer.php';
?>
