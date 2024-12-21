
<x-master title="Create  Profile">
  @if ($errors->any())
 
    <x-alert type="danger">
      <h6>Errors</h6>
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach 
  </ul>
    </x-alert>


  @endif

    <form method="POST" action="{{ route('profiles.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name </label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}" id="exampleInputEmail1" >
            @error('name')
            <div class="text-danger">{{$message}}</div> 
         @enderror
          </div>
        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email </label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}"  aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          @error('email')
            <div class="text-danger">{{$message}}</div> 
         @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          @error('password')
          <div class="text-danger">{{$message}}</div> 
       @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirme Password</label>
          <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
      
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Description</label>
            <textarea  name="bio" class="form-control" id="exampleInputPassword1"  >{{old('bio')}}  </textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary block-btn">Ajouter</button>
         
          </div>
      </form>
</x-master> 






