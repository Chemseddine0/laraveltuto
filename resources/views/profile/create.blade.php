
<x-master title="Create  Profile">
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name </label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
         </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email </label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Description</label>
            <textarea  name="bio" class="form-control" id="exampleInputPassword1">  </textarea>
          </div>
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary block-btn">Ajouter</button>

          </div>
      </form>
</x-master>