
<x-master title="login">

  
  
 
  <h3>login</h3>
      <form method="POST" action="{{ route('login') }}">
  
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
               <div class="text-danger">{{$message}}</div> 
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
         <div class="d-grid">
          
              <button type="submit" class="btn btn-primary block-btn">Login</button>
           
            </div>
        </form>
  </x-master>