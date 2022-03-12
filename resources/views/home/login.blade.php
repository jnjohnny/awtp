<html>

<head>
</head>
<body>
    <form action="{{route('loginsubmit')}}" method="post">
      {{@csrf_field()}}
            <input type="text" name="uname" value="{{old('uname')}}" placeholder="Enter username"><br>
            
            @error('uname')
            <span>{{$message}}</span><br>
            @enderror 
            <input type="password" nane="password" placeholder="Enter password"><br>
            <input type="submit" value="Submit">
</form>
</body>

    </html>