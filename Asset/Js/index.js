$(document).ready(function()
{
    var array_scielte = [];
    $('#ins_scielta').click(function(){
        var form_data = getFormData('form-ins-scielta');
        if(form_data != false)
            if(!array_scielte.includes(form_data.descr_scielta))
            {
                array_scielte.push(form_data.descr_scielta);
                display_array($('#vis_scielte'),array_scielte,'x');
            }
    });

    $('#vis_scielte').on('click','button.btn-delete',function()
    {
        var key = $(this).data('key');
        console.log(key);
        array_scielte = array_scielte.slice(key);
        display_array($('#vis_scielte'),array_scielte,'x');
    });
});