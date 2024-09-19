$(window).on('resize',function()
{
    if(window.innerWidth < layout_breakpoint_middle)
    {
        $('.middle-show').show();
        $('.middle-hide').hide();

        if(window.innerWidth < layout_breakpoint_small)
        {
            $('.small-show').show();
            $('.small-hide').hide();
        }
        else
        {
            $('.small-show').hide();
            $('.small-hide').show();
        }
    }
    else
    {
        $('.middle-show').hide();
        $('.middle-hide').show();
    }
});

$(document).click(function(event)
{
    var outsideClick = !$('#menu-list')[0].contains(event.target);
    outsideClick = !$('#menu-toggler')[0].contains(event.target);

    if(outsideClick)
        $('#menu-list').toggle(600);
});

$(document).ready(function()
{
    $(window).resize();
})

function getFormData(element_id)
{
    var dati = $('#'+element_id).find('input');
    var textarea = $('#'+element_id).find('textarea');
    var form_data = {};
    var errore = false;
    $.each(dati,function(key,value)
    {
        var element = $(value);
        var parent = element.parent();
        var display_errore = parent.find('.errore');
        if(element.prop('required') && element.val() == '')
        {
            errore = true;
            if(display_errore.length == 1)
            {
                display_errore.html('Errore il campo è obbligatorio.');
                display_errore.show();
            }
        }
        else if(display_errore.length == 1)
            display_errore.hide();
        form_data[element.prop('name')] = element.val();
    });
    $.each(textarea,function(key,value)
    {
        var element = $(value);
        var parent = element.parent();
        var display_errore = parent.find('.errore');
        if(element.prop('required') && element.val() == '')
        {
            errore = true;
            if(display_errore.length == 1)
            {
                display_errore.html('Errore il campo è obbligatorio.');
                display_errore.show();
            }
        }
        else if(display_errore.length == 1)
            display_errore.hide();
        form_data[element.prop('name')] = element.val();
    });
    if(!errore)
        return form_data;
    else
        return false;
}

function display_array(container,array,vis_btn)
{
    var content = '';
    $.each(array,function(key,value)
    {
        content+= '<p><span>'+value+'</span>';
        if(vis_btn == 'x')
            content+= '<button type="button" class="btn btn-delete" data-key="'+key+'"><i class="fa-solid fa-trash-can"></i></button>';
        content+= '</p>';
    });
    container.html(content);
}

function validateEmail(email)
{
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);    
}