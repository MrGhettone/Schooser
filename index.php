<?php $include_path = '' ?>
<?php include_once('header.php') ?>
<div id="app">
    <h1>Ciuser</h1>
    <div>
        <div id="form-ins-scielta">
            <input type="text" name="descr_scielta" required><button id="ins_scielta" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
            <div class="errore" style="display: none;"></div>
        </div>
        <div id="vis_scielte"></div>
    </div>
    <div id="vis_scielta_random"></div>
</div>
<script src="Asset/Js/index.js" type="text/javascript"></script>
<?php include_once('footer.php') ?>