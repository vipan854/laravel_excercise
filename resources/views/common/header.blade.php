@if (Route::has('login'))
                <div class="top-right links" style="    text-align: right;
    font-size: 20px;
    background-color: lightgray;">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/user-list">User List</a></li>
      <li><a href="{{ URL::route('list') }}">Users</a></li>
      <li><a href="/users">Users</a></li>
    </ul>
  </div>
</nav>