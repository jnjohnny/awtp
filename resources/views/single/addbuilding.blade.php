<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body {background-color: tomato;}
</style>
</head>
<body>
<center>
<form action="{{route('buildingSubmit')}}" method="post">
{{@csrf_field()}}
    <h1>ADD A BUILDING</h1>
    <p>Please add your Buildings</p>
    <hr>
    <label for="name"><b>User Name</b></label>
    <!-- <p>{{session()->get('username')}}</p> -->
    <!-- <p>{{session(['uname'])}}</p> -->
    <input type="text" name="username" id="name" placeholder="Enter Username" value="">
    <br>
    
    <label for="Name"><b>Building Name</b></label>
    <input type="text" placeholder="Enter Building Name" name="bname" id="bname" value="{{old('bname')}}">
    <br>
    @error('bname')
            <span>{{$message}}</span><br>
    @enderror 

    <label for="Name"><b>Building Code</b></label>
    <input type="text" name="bcode" id="bcode" value="{{$bbcode}}">
    <br>

    <label for="ccode"><b>Colony Code</b></label>
    <input type="text" name="ccode" id="ccode" value="Not Applicable" readonly>
    <br>
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="Submit">Submit</button>
    <a class="btn btn-success" href="{{route('dbb')}}">Back</a>
    
    
    <p>View Building <a href="">Show Building</a>.</p>
  </form> 
</center>

</body>
</html>