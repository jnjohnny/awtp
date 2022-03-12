<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <center>
    <form action="{{route('loginsubmit')}}" method="post">
      {{@csrf_field()}}
      <h1>LOGIN TO THE SYSTEM</h1>
            <input type="text" name="uname" value="{{old('uname')}}" placeholder="Enter username"><br>
            
            @error('uname')
            <span>{{$message}}</span><br>
            @enderror 
            <input type="password" name="password" placeholder="Enter password"><br>
            <input type="submit" value="Submit" class="btn btn-primary">
            
    <p>Don't have an account? <a href="{{route('registration')}}">Sign Up</a>.</p>
</form>
</center
</body>

    </html>