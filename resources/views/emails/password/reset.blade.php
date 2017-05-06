@component('mail::message')
# Hi {{$user->first_name}}

We recieved a request to reset your password. If you did not make this request,
kindly ignore this email. otherwise, you can reset youer password by clicking
this link.

@component('mail::button', ['url' => 'http/localhost:8000/password/recovery/{id}/{key}', 'color' => 'red'])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
