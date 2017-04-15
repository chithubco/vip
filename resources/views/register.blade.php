<!DOCTYPE html>
<html>
    <head>
        <title>Vicampro-vip</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" type="text/css" />
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        <style type="text/css">
            /*@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);*/

            body {
              background: #F1ECEB;
              font-family: 'Open Sans', sans-serif;
            }

            .login {
              width: 400px;
              margin: 16px auto;
              font-size: 16px;
            }

            /* Reset top and bottom margins from certain elements */
            .login-header,
            .login p {
              margin-top: 0;
              margin-bottom: 0;
            }

            /* The triangle form is achieved by a CSS hack */
            .login-triangle {
              width: 0;
              margin-right: auto;
              margin-left: auto;
              border: 12px solid transparent;
              border-bottom-color: #F1ECEB;
            }

            .login-header {
              background: #F1ECEB;
              padding: 20px;
              font-size: 1.4em;
              font-weight: bold;
              text-align: center;
              text-transform: uppercase;
              color: #000;
            }

            .login-container {
              background: #ebebeb;
              padding: 12px;
            }

            /* Every row inside .login-container is defined with p tags */
            .login p {
              padding: 12px;
            }

            .login input {
              box-sizing: border-box;
              display: block;
              width: 100%;
              border-width: 1px;
              border-style: solid;
              padding: 16px;
              outline: 0;
              font-family: inherit;
              font-size: 0.95em;
            }

            .login input[type="email"],
            .login input[type="password"] {
              background: #fff;
              border-color: #bbb;
              color: #555;
            }

            /* Text fields' focus effect */
            .login input[type="email"]:focus,
            .login input[type="password"]:focus {
              border-color: #888;
            }

            .login input[type="submit"] {
              background: #D2AE6D;
              border-color: transparent;
              color: #fff;
              cursor: pointer;
            }

            .login input[type="submit"]:hover {
              background: #373435;
            }

            /* Buttons' focus effect */
            .login input[type="submit"]:focus {
              border-color: #373435;
            }
        </style>
    </head>
    <body>
        <div class="login">
            <p style="text-align:center;">
              <img src="{{asset('/images/viplogo.jpg')}}" width="50px" height="50px" />
            </p>
            <div class="login-triangle"></div>
            <h2 class="login-header">Register</h2>

            <form action="{{ route('register_user') }}" method="post" class="login-container">
                {{ csrf_field() }}
                 @include('layouts.sessions')
                 @include('layouts.errors')
                <p><input type="text" name="first_name" placeholder="First Name"></p>
                <p><input type="text" name="last_name" placeholder="Last Name"></p>
                <p><input type="text" name="email" placeholder="Email"></p>
                <p><input type="text" name="phone_number" placeholder="Phone Number"></p>
                <p><input type="password" name="password" placeholder="Password"></p>
                <p><input type="submit" value="Register"></p>
            </form>
        </div>
    </body>
</html>
