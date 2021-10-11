<?php
?>
<header>
    <h1>Edit messages</h1>
</header>
<main>
    <table class="admin">
        <!-- Title : first row table -->
        <tr class="adminMain">
            <th>Id</th>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date-Time</th>
            <th>
                <!-- Delete with a button that will send a request like DELETE FROM `messages` WHERE id = X
                    x will be the message we want to erase-->
            </th>
        </tr>
        <?php
        if ($nbMessages) {
            foreach ($messages as $value) {
        ?>
                <tr>
                    <th><?= $value["id"] ?></th>
                    <th><?= $value["pseudo"] ?></th>
                    <th><?= $value["email"] ?></th>
                    <th><?= $value["msg"] ?></th>
                    <th><?= $value["date_msg"] ?></th>
                    <th>
                        <form method="post" class="delete_id"><input type="hidden" value="<?= $value["id"] ?>" name="delete_id" /><button type="submit">Delete</button></form>
                    </th>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</main>