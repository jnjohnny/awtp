<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body {background-color: tomato;}
</style>
</head>
<body>
<center>
<form action="{{route('detailsSubmit')}}" method="post">
{{@csrf_field()}}
    <h1>ADD BUILDING DETAILS</h1>
    <p>Please add your Building Details</p>
    <hr>
    
    <label for="Name"><b>Building Code</b></label>
    <input type="text" name="bcode" id="bcode">
    <br>


    <label for="Name"><b>Floor Details</b></label>
    <input type="text" placeholder="Enter How many Floors" name="floor">
    <br>
    
    <label for="ccode"><b>Flat No</b></label>
    <input type="text" name="flat" placeholder="Enter How many Flat">
    <br>

    <button type="Submit">Submit</button>
    <a class="btn btn-success" href="{{route('dbb')}}">Back</a>
    
    
  </form> 
</center>

</body>
</html>