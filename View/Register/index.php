<?php
$_ENV['dir'] = '../../';
include_once $_ENV['dir'].'header.php';
?>
<div id="register" class="form-container">
    <div class="form-group">
        <div class="form-element">
            <span class="errore" style="display: none;"></span>
            <input type="text" name="username" placeholder="User Name" required>
        </div>
        <div class="form-element">
            <span class="errore" style="display: none;"></span>
            <input type="e-mail" name="e_mail" placeholder="E-mail" required>
        </div>
    </div>
    <div class="form-group">
        <div class="form-element">
            <span class="errore" style="display: none;"></span>
            <input type="text" name="password" placeholder="Password" required>
        </div>
        <div class="form-element">
            <span class="errore" style="display: none;"></span>
            <input type="text" name="password_confirm" placeholder="Confirm Password" required>
        </div>
    </div>
    <div class="form-input">
        <button class="btn" id="btn_register">Registrati</button>
    </div>
</div>
<script src="<?php echo $_ENV['dir'] ?>Asset/Js/View/register.js" type="text/javascript"></script>
<?php include_once $_ENV['basePath'].'footer.php' ?>