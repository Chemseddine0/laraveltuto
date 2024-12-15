
<x-master title="Modifier  publication">
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
  
      <form method="POST" action="{{route('publications.update',$publication->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">titre </label>
              <input type="text" name="titre" class="form-control" value="{{old('titre',$publication->titre)}}" id="exampleInputEmail1" >
              @error('titre')
              <div class="text-danger">{{$message}}</div> 
           @enderror
            </div>

          <div class="mb-3">
              <label for="bio" class="form-label">Descroption</label>
              <textarea  name="body" class="form-control" id="exampleInputPassword1"  >{{old('body',$publication->body)}}  </textarea>
              @error('body')
              <div class="text-danger">{{$message}}</div> 
           @enderror
          
            </div>
          
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            </div>
            <div>
              <img src="{{ asset('storage/'.$publication->image) }}" class="my-2" alt="" width="200">
             </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary block-btn">publication</button>
           
            </div>
        </form>
  </x-master>