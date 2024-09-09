<?php

class User
{
    public function login()
    {
        global $DB,$username,$password;

        $risp_user = $DB->query("SELECT * FROM users WHERE username = '$username' ");
        if(!empty($risp_user[0]))
        {
            $risp = $DB->query("SELECT * FROM users WHERE username = '$username' AND pwd = '$password' ");
            
            if(!empty($risp[0]))
                return ['stato' => 'ok','msg' => 'Utente loggato','username' => $risp[0]['username'],'user_id' => $risp[0]['id']];
            else
                return ['stato' => 'error','msg' => 'La password è errata.'];
        }
        else
            return ['stato' => 'error','msg' => 'Utente non trovato.'];
    }
    
    public function register()
    {
        global $DB,$username,$password,$email;
        if(empty($username))
            return ['stato' => 'error','msg' => 'Lo username non può essere vuoto.'];
        elseif(empty($password))
            return ['stato' => 'error','msg' => 'La password non può essere vuoto.'];
        elseif(empty($email))
            return ['stato' => 'error','msg' => 'L\'e-mail non può essere vuoto.'];
        else
        {
            $risp_user = $DB->query("SELECT * FROM users WHERE username = '$username' ");
            $risp_mail = $DB->query("SELECT * FROM users WHERE email = '$email' ");
            
            if(!empty($risp_user[0]))
                return ['stato' => 'error','msg' => 'Username già usato.'];
            elseif(!empty($risp_mail[0]))
                return ['stato' => 'error','msg' => 'E-mail già usata.'];
            else
            {
                $DB->query("INSERT INTO users (username,email,pwd) VALUES ('$username','$email','$password') ");
                $risp = $DB->query("SELECT * FROM users WHERE username = '$username' AND pwd = '$password' ");
    
                if(!empty($risp[0]))
                    return ['stato' => 'ok','msg' => 'Utente loggato.','username' => $risp[0]['username'],'user_id' => $risp[0]['id']];
                else
                    return ['stato' => 'error','msg' => 'Utente non trovato.'];
            }
        }
    }
}