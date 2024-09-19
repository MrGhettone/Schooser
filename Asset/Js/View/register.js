$(document).ready(function()
{
    $('#btn_register').click(async function()
    {
        var form_data = getFormData('register');
        if(form_data != false)
        {
            console.log(form_data);
            var risp = await axios.post('../../Asset/Api/user.php',{
                'request': 'register',
                'username': form_data.username,
                'e-mail': form_data.e_mail,
                'password': form_data.password,
                'password_confirm': form_data.password_confirm,
            });
            console.log(risp.data);
        }
    });
});