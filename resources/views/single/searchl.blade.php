<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
    <center>
<form action="{{route('searchlist')}}" method="post">
      {{@csrf_field()}}
<input type="text" name="bcode" placeholder="Enter Building Code to Search"><br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>
</center>

   <center> <p>go Back <a href="{{route('dbb')}}">BACK</a></p></center>

</body>


    </html>