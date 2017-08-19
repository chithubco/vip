<?php
namespace App\Library;
use Mail;
use App\Mail\PasswordReset;

class Email{

public function randomString( $length = 20 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), rand(0,70), $length );
    return $password;
}

public function passwordRecovery($user, $email){
    $code = $this->randomString();
    $title = "Password Recovery";
    $content = "click on this";
    Mail::send(new PasswordReset, ['title' => $title, 'content' => $content, 'key' => $code, 'id'=> $user->id], function ($message) use ($email)
    {

        $message->from('vip@gmail.com', 'Vicampro-VIP');

        $message->to($email);

    });

  }
}
?>
