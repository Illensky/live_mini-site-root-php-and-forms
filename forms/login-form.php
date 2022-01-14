<?php

require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../helpers/forms-utils.php';

if (isset($_POST['submit'])) {
    // Getting form data.
    $username = getSecuredStringData('username');
    $password = getSecuredStringData('password');
    ?>
    <table>
        <tr>
            <td>Username</td>
            <td>Password</td>
        </tr>
        <tr>
            <td><?= $username ?></td>
            <td><?= $password ?></td>
        </tr>
    </table>
    <div>
        <a href="/?p=login" class="a-button">
            Vers la page de connexion
        </a>
    </div>

    <?php
}
else {
    header('location: /contact.php');
}