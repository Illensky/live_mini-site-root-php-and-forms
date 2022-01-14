<?php

require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../helpers/forms-utils.php';
if (isset($_POST['submit'])) {
    // Getting secured form data
    $username = getSecuredStringData("username");
    $message = getSecuredStringData("message");
    ?>
<table>
    <tr>
        <td>Username</td>
        <td>Message</td>
    </tr>
    <tr>
        <td><?= $username ?></td>
        <td><?= $message ?></td>
    </tr>
</table>
    <div>
        <a href="/?p=contact" class="a-button">
            Vers le formulaire de contact
        </a>
    </div>

    <?php
}
else {
    header('location: /contact.php');
}