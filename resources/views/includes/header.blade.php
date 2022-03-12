

<div>
    @if(!Session::get('username'))
    <a class="btn btn-primary" href="/login">Login</a>
    <a class="btn btn-secondary" href="{{route('registration')}}">Register</a>
    @endif
    @if(Session::get('username'))
        <a class="btn btn-success" href="{{route('addb')}}">Add Building</a>
        <a class="btn btn-danger" href="{{route('list')}}">Show Building</a>
        <a class="btn btn-primary" href="{{route('adetails')}}">add Building Details</a>
        <a class="btn btn-secondary" href="{{route('current')}}">Show All Bills</a>

    <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
    @endif
  
    
</div>


