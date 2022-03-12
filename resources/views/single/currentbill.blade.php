<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body {background-color: tomato;}
</style>
</head>
<body>
<center>
<form action="{{route('currentSubmit')}}" method="post">
{{@csrf_field()}}
    <h1>Enter Current Bill of the Flat</h1>
    <hr>
    
    <label for="Name"><b>Building Code</b></label>
    <input type="text" name="bcode" id="bcode">
    <br>


    <label for="Name"><b>Flat Number</b></label>
    <input type="text" placeholder="Enter How many Floors" name="flat">
    <br>
    
    <label for="ccode"><b>Unit</b></label>
    <input type="text" name="unit" placeholder="Enter How many Flat" value="Kilo watt">
    <br>

    
    <label for="Name"><b>Bill Start Date</b></label>
    <input type="date" name="dates" >
    <br>
    
    <label for="Name"><b>Bill End Date</b></label>
    <input type="date" name="dend">
    <br>

    
    <label for="Name"><b>unitAmount</b></label>
    <input type="text" name="ua" id="ua">
    <br>

    <label for="Name"><b>Total Amount</b></label>
    <input type="text" name="ta">
    <br>

    <label for="status">Choose Payment Status:</label>
 <select id="status" name="status">
  <option value="Unpaid">Unpaid</option>
  <option value="Paid">Paid</option>
 </select> 
<br>

    <button type="Submit">Submit</button>
    <a class="btn btn-success" href="{{route('dbb')}}">Back</a>
    
    
  </form> 
</center>

</body>
</html>