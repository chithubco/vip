<html>
<head></head>
<body style="background: white; color: black">
<h1>{{$title}}</h1>
<p>{{$content}} <a href="{{route('password_recovery', [$id, $key])}}">link</a></p>
</body>
</html>
