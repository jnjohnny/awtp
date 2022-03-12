<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
    <table class="table table-bprdered">
        <center><h1>Buildings</h1></center>
        <tr>
           <th>User Name</th>
           <th>Building Name</th>
           <th>Building Code</th>
           <th>Colony Code</th>
        </tr>
@foreach($build as $b)     
        <tr>
            <td> {{$b->username}}</td>
            <td> {{$b->buildingName}}</td>
            <td> {{$b->buildingCode}}</td>
            <td> {{$b->colonyCode}}</td>
    </tr>
    @endforeach

    
    </table>
   <center> <p>go Back <a href="{{route('dbb')}}">BACK</a></p></center>
   <center> <p>Custom Search <a href="{{route('searchl')}}">Search</a></p></center>
   <center> <p>Print the Result<a href="{{route('printpdf')}}">Search</a></p></center>

</body>


    </html>