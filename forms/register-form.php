<?php

require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../helpers/forms-utils.php';

if (isset($_POST['submit'])) {
    // Getting form data.
    $username = getSecuredStringData('username');
    $age = getSecuredIntData('age');
    $password = getSecuredStringData('password');
    $passwordRepeat = getSecuredStringData('password-repeat');
?>
    <table>
        <tr>
            <td>Username</td>
            <td>Age</td>
            <td>Password</td>
            <td>Password repeat</td>
        </tr>
        <tr>
            <td><?= $username ?></td>
            <td><?= $age ?></td>
            <td><?= $password ?></td>
            <td><?= $passwordRepeat ?></td>
        </tr>
    </table>
    <div>
        <a href="/login.php" class="a-button">
            Vers le formulaire d'inscription
        </a>
    </div>

    <?php
}
else {
    header('location: /contact.php');
}