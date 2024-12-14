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
  <img src="https://fastly.picsum.photos/id/4/5000/3333.jpg?hmac=ghf06FdmgiD0-G4c9DdNM8RnBIN7BO0-ZGEw47khHP4" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$profile->id}}</h3>
    <h5 class="card-title">{{$profile->name}}</h5>
    <p class="card-text">{{ Str::limit($profile->bio,50,'....etc')}}</p>
    <p class="card-text"><small class="text-muted">{{$profile->email}}</small></p>
    <a href="{{route('profiles.show',$profile->id)}}"class="btn btn-primary stretched-link">Afficher</a>
  </div>
</div>