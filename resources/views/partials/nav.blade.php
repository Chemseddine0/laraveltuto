

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('profiles.index')}}">tous les Profile</a>
          </li>
    
          <li class="nav-item">
            <a class="nav-link " href="{{route('settings.index')}}" tabindex="-1" aria-disabled="false">My Inforamtion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('publications.index')}}" tabindex="-1" aria-disabled="false">My publications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('publications.create')}}" tabindex="-1" aria-disabled="false">ajouter  publications</a>
          </li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name}}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item"  href="{{route('login.logout')}}">logout</a></li>
            
            </ul>
          </div>
          @endauth
          @guest
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login.show')}}">Sign in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('profiles.create')}}" tabindex="-1" aria-disabled="false">ajouter  profile</a>
          </li>
      
          @endguest
        
        
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>



<script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
</script>
{{-- @once
<script>
    alert('include navigation')
</script>
@endonce --}}

