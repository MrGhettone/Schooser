$(document).ready(function()
{
    $('#btn_login').click(async function()
    {
        var form_data = getFormData('login');
        if(form_data != false)
        {
            console.log(form_data);
            var risp = await axios.post('../../Asset/Api/user.php',{
                'request': 'login',
                'username': form_data.username,
                'password': form_data.password
            });
            console.log(risp.data);
        }
    });
});