<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body> 
    @if(session()->has('ret_msg'))
        <p> {{ session()->get('ret_msg') }} </p> 
        <button> <a href="{{ route('home') }}">Sign in</a> </button>
    
    @else
    @if(session()->has('err_msg'))
            <p> {{ session()->get('err_msg') }} </p> 
        @endif 
        <form action="{{ route('store') }}" method="POST"> 
        @csrf
        <div class="container">
            <h1>REGISTER</h1>

            <label for="name"><b>User Name :</b></label>
            <input type="text" placeholder="Enter Email" name="name" id="name" required>
            
            <label for="psw"><b>Password :</b></label>
            <input type="password" placeholder="Enter Password" name="psw"  required>

            <label for="psw-repeat"><b>Repeat Password :</b></label>
            <input type="password" placeholder="Repeat Password" name="psw2" id="psw-repeat" required>
            

            <button type="submit">Register</button>
            
        </div>
        </form>

        
    @endif
</body>
</html>