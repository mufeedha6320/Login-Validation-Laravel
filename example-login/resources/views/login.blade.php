<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME </h1> 
    @if(session()->has('ret_msg'))
        <p> {{ session()->get('ret_msg') }} </p> 
    
    @endif
    <h3>You logged in Successfully </h3>
</body>
</html>