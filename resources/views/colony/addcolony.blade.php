<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body {background-color: green;}
</style>
</head>
<body>
<center>
<form action="{{route('colonySubmit')}}" method="post">
{{@csrf_field()}}
    <h1>Add Colony</h1>
    <p>Please add your Colony</p>
    <hr>
    <label for="name"><b>User Name</b></label>
    <input type="text" name="username" id="name" placeholder="Enter Username" value="">
    <br>
    
    <label for="Name"><b>Colony Name</b></label>
    <input type="text" placeholder="Enter Colony Name" name="cname" id="cname" value="{{old('cname')}}">
    <br>
    @error('cname')
            <span>{{$message}}</span><br>
    @enderror 

    <label for="Name"><b>Building Code</b></label>
    <input type="text" name="bcode" id="bcode" value="{{$bbcode}}">
    <br>

    <label for="ccode"><b>Colony Code</b></label>
    <input type="text" name="ccode" id="ccode" value="{{$ccode}}">
    <br>
    
    <button type="Submit">Submit</button>
    <a class="btn btn-success" href="{{route('dc')}}">Back</a>
    
    
    <p>View Building <a href="">Show Building</a>.</p>
  </form> 
</center>

</body>
</html>