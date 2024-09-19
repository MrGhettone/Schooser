<?php
$_ENV['dir'] = '';
include_once $_ENV['dir'].'header.php';
?>
<div id="app">
    <h1>Schooser</h1>
    <div id="form-ins-scielta" class="form-container">
        <div id="form-ins-scielta" class="form-group">
            <div id="form-ins-scielta" class="form-element">
                <div>
                    <div id="left_side" class="cf"></div>
                    <input type="text" name="descr_scielta" id="descr_scielta" required>
                    <button id="ins_scielta" class="btn"><i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="errore" style="display: none;"></div>
            </div>
        </div>
    </div>
    <div id="vis_scielte"></div>
    <div id="vis_scielta_random"></div>
</div>
<script src="<?php echo $_ENV['dir'] ?>Asset/Js/index.js" type="text/javascript"></script>
<?php include_once $_ENV['basePath'].'footer.php' ?>