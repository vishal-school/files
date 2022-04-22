<div class="container">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="{{ url('/front_transport') }}" method="post">
    @csrf
    <input class="form-control mr-sm-2" style="width:600px " name="value"  type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>
