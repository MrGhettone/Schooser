<?php $include_path = '../../' ?>
<?php include_once($include_path.'header.php') ?>
<div id="login">
    <div class="form-group">
        <input type="text" name="username" required>
        <div class="errore" style="display: none;"></div>
    </div>
    <div class="form-group">
        <input type="password" name="password" required>
        <div class="errore" style="display: none;"></div>
    </div>
    <div class="form-group">
        <button class="btn btn-success" id="btn_login">Conferma</button>
    </div>
</div>
<script src="<?php echo $include_path ?>Asset/Js/View/login.js" type="text/javascript"></script>
<?php include_once($include_path.'footer.php') ?>