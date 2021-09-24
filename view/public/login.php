<?php
?>
<header>
    <h1>Login</h1>
</header>
<main>
    <form name="login" method="post" action="" class="login">
        <div class="login_centering">
            <div class="admin_pseudo">
                <label for="admin_pseudo">Pseudo</label><input type="text" name="admin_pseudo" id="admin_pseudo" required />
            </div>
            <div class="admin_mdp">
                <label for="admin_mdp">Password</label><input type="password" name="admin_mdp" id="admin_mdp" required />
            </div>
            <div class="input_login">
                <input type="submit" value="login" />
            </div>
        </div>
    </form>
</main>