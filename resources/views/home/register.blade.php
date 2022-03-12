<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body {background-color: tomato;}
</style>

</head>

<body>
<center>
<form action="{{route('registerSubmit')}}" method="post">
{{@csrf_field()}}
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" value="{{old('name')}}">
    <br>
    @error('name')
            <span>{{$message}}</span><br>
    @enderror 
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" value="{{old('email')}}">
    <br>
    @error('email')
            <span>{{$message}}</span><br>
    @enderror
    <label for="mobile"><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile" name="mobile" id="mobile" value="{{old('mobile')}}">
    <br>
    @error('mobile')
            <span>{{$message}}</span><br>
    @enderror
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address" value="{{old('address')}}">
    <br>
    @error('address')
            <span>{{$message}}</span><br>
    @enderror
<label for="Division">Choose your Division:</label>
 <select id="division" name="division">
  <option value="Dhaka">Dhaka</option>
  <option value="Chattogram">Chattogram</option>
  <option value="Barishal">Barishal</option>
  <option value="Sylhet">Sylhet</option>
  <option value="Khulna">Khulna</option>
  <option value="Rajshahi">Rajshahi</option>
  <option value="Rangpur">Rangpur</option>
  <option value="Mymensingh">Mymensingh</option>
</select> 
<br>
@error('division')
            <span>{{$message}}</span><br>
@enderror


<br>
<label for="status">Choose User Type:</label>
 <select id="status" name="status">
  <option value="single">Single Building</option>
  <option value="colony">Colony</option>
</select> 
<br>
@error('status')
            <span>{{$message}}</span><br>
@enderror


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw">
<br>
    @error('psw')
            <span>{{$message}}</span><br>
    @enderror
    <label for="pswrepeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat">
    <br>
    @error('pswrepeat')
            <span>{{$message}}</span><br>
    @enderror

    <hr>

    <button type="submit">Register</button>
    
    <p>Already have an account? <a href="\login">Sign in</a>.</p>
  </form> 
</center>

</body>


</html>