<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
        <link rel="stylesheet" href="/resources/css/style.css"> 
    </head>
    <body>
       
        <h2>Sign In</h2> 
        <div > 
        
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <label for="name">Email:</label>
                
                <input type="name" id="name" name="name" required>
                
                <label for="password">Password:</label>
                
                <input type="password" id="password" name="psw" required>
                
                <input type="submit" value="Login"> 
                 
            </form>
        </div>
        @if(session()->has('err_msg'))
            <p> {{ session()->get('err_msg') }} </p> 
        @endif 
        <a href="{{ route('register') }}">New User</a>
    
        

        
    </body>
</html> 

