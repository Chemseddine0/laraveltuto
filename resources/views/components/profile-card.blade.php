{{-- <div class="col-sm-3">
  <div class="card" style="width: 15rem;">
    <img src="https://picsum.photos/id/237/200/300" class="card-img-top"  alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$profile->name}}</h5>
      <p class="card-text">{{ Str::limit($profile->bio,50,'....etc')}}</p>
      <p class="card-text">{{$profile->email}}</p>

      <a href="{{route('profiles.show',$profile->id)}}"class="btn btn-primary stretched-link">Afficher</a>
    </div>
  </div>
</div>  --}}



<div class="card col-sm-3 mb-4 mx-5">
  <img src="{{ asset('storage/'.$profile->image) }}" width="300">
  {{-- <img src="../{{$profile->image}}" class="card-img-top" alt="..."> --}}
  <div class="card-body">
    <h3 class="card-title">{{$profile->id}}</h3>
    <h5 class="card-title">{{$profile->name}}</h5>
    <p class="card-text">{{ Str::limit($profile->bio,50,'....etc')}}</p>
    <p class="card-text"><small class="text-muted">{{$profile->email}}</small></p>
    <a href="{{route('profiles.show',$profile->id)}}" class="btn btn-primary stretched-link">Afficher</a>
  </div> 
  <div class="card-foot border-top px-3 py-3 bg-light" style="z-index:9">
    <form action="{{route('profiles.destroy',$profile->id)}}" method="post">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger btn-sm float-end">Deleted</button>
    </form>
    <a href="{{route('profiles.edit',$profile->id)}}">Update</a>
    <form action="{{route('profiles.edit',$profile->id)}}" method="GET">
      {{-- @method('PUT') --}}
      @csrf
      <button class="btn mx-1    btn-primary btn-sm float-end">Update</button>
    </form>
  </div>
</div>
