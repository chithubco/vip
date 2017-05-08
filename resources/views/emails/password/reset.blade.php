@component('mail::message')
# Hi {{$user->first_name}}

We recieved a request to reset your password. If you did not make this request,
kindly ignore this email. otherwise, you can reset youer password by clicking
this link.

<a class="btn btn-default" href="{{route('password_recovery', [$user->id])}}">Reset Password</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
