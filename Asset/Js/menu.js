$(document).ready(function()
{
    $('.menu-toggler').click(function() {
        $('#'+$(this).data('target')).toggle(600);
        $('#menu-bar').toggle();
        $('#menu-x').toggle();
    });
});