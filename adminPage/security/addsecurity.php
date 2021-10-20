<article class="selection-user-article">
    <div class="selection-user-bg">
        <div class="user-bg">
            <div class="form-div">
            <form class="form" action="./includes/security.inc.php" method="post">
                <input class="gate-input" type="text" name="name" placeholder="İsim">
                <input class="gate-input" type="text" name="surname" placeholder="Soyisim">
                <input class="gate-input" type="text" name="email" placeholder="Email">
                <input class="gate-input" type="password" name="hashed_password" placeholder="Parola">
                <input type="hidden" name="gate_id" value="<?php echo $_GET['id'] ?>">

                <button class="gate-button" type="submit" name="submit">Güvenliği Ata</button>
            </form>
            </div>
        </div>
    </div>
</article>