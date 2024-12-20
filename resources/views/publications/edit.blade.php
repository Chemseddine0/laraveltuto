{{--
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
      <input type="text" name="titre" class="form-control" value="{{old('titre',$publication->titre)}}"
        id="exampleInputEmail1">
      @error('titre')
      <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="bio" class="form-label">Descroption</label>
      <textarea name="body" class="form-control"
        id="exampleInputPassword1">{{old('body',$publication->body)}}  </textarea>
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
</x-master>---}}



<x-social title="a">

  <!-- Success message (optional) -->
  {{-- @if(session('success'))
  <div id="alert-additional-content-3"
    class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
    role="alert">
    <div class="flex items-center">
      <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <h3 class="text-lg font-medium">success</h3>
    </div>
    <div class="mt-2 mb-4 text-sm">
      {{session('success') }}
    </div>
    <div class="flex">

      <button type="button"
        class="text-green-800 bg-transparent border border-green-800 hover:bg-green-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-green-600 dark:border-green-600 dark:text-green-400 dark:hover:text-white dark:focus:ring-green-800"
        data-dismiss-target="#alert-additional-content-3" aria-label="Close">
        Dismiss
      </button>
    </div>
  </div>
  @endif  --}}
  <!-- Display validation errors -->
   {{-- @if ($errors->any())
  <ul>

  </ul>
  <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
      fill="currentColor" viewBox="0 0 20 20">
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Danger</span>
    <div>
      <span class="font-medium">Ensure that these requirements are met:</span>
      <ul class="mt-1.5 list-disc list-inside">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif


  <form class="p-11 bg-light" method="POST" action="{{route('publications.update',$publication->id)}}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="flex gap-[20px] ">
      <div class="w-2/4 w-full">
        <div class="mb-5">
          <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
            Title
          </label>
         
        </div>
        <div class="mb-5">

          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
            Description</label>
          <textarea id="message" rows="4" name="body"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            placeholder="Write your thoughts here...">{{old('body',$publication->body)}}</textarea> --}}

        {{-- </div>
      </div>
      <div class="w-2/4  w-full ml-11 ">
        <div class="grow">
          <label for="image" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white"> Image City :</label>
          <div class="mb-5"> --}}
            <!-- Photo File Input with preview -->
           {{-- <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">  --}}
              <!-- Photo File Input -->
              {{-- <input type="file" name="image" class="hidden" x-ref="photo" x-on:change="
                  photoName = $refs.photo.files[0].name;
                  const reader = new FileReader();
                  reader.onload = (e) => {
                      photoPreview = e.target.result;
                  };
                  reader.readAsDataURL($refs.photo.files[0]);  ">
              <div class="text-center">  --}}
                <!-- Current Profile Photo -->
               {{-- <div class="mt-2 " x-show="! photoPreview">
                  <img
                    src="{{ asset('storage/'.$publication->image) }}"
                    class="w-96 h-96  rounded-3xl shadow">
                </div>  --}}
                <!-- New Profile Photo Preview -->
                {{-- <div class="mt-2  w-96 h-52" x-show="photoPreview" style="display: none;">
                  <span class="block w-96 h-96 rounded-3xl m-11 shadow"
                    x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'"
                    style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                  </span>
                </div>
                <button type="button"
                  class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3"
                  x-on:click.prevent="$refs.photo.click()">
                  Select New Photo
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button type="submit"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form> 

  <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>  --}}

  
         <!----------------- MIDDLE -------------------->
         
         <div class="middle">
                 
          <form action="{{route('publications.create')}}" class="create-post">
              <div class="profile-photo">
                  <img src="">
              </div>
              <input type="text" placeholder="What's on your mind, " id="create-post">
              <input type="submit" value="Post" class="btn btn-primary" href="{{route('publications.create')}}" >
          </form>
          <!----------------- FEEDS -------------------->
          <div class="feeds">
              <!----------------- FEED 1 -------------------->
              <div class="feed">
                  <div class="head">
                    <form  method="POST" action="{{route('publications.update',$publication->id)}}"
                      enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
           
                      <span class="edit ">
                        <label for="message" class="block ml-2  mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                          Title :</label>
                        <input type="text" name="titre" id="fName" placeholder="First Name"
                        value="{{old('titre',$publication->titre)}}"
                        class="w-96 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        <label for="message" class="block ml-2  mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                          Description :</label>
                        <textarea id="message" rows="4" name="body"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-[#6A64F1] focus:border-[#6A64F1] focus:shadow-md"
                        placeholder="Write your thoughts here...">{{old('body',$publication->body)}}</textarea>
                      </span>
                  </div>
                  <div class="photo" x-show="! photoPreview">
                      <img src="{{ asset('storage/'.$publication->image) }}" alt="iùage">
                      
                  </div>
              
                  <div class="action-buttons">
                      <div class="interaction-buttons">
                          <span><i class="uil uil-heart"></i></span>
                          <span><i class="uil uil-comment-dots"></i></span>
                          <span><i class="uil uil-share-alt"></i></span>
                      </div>
                      <div class="bookmark">
                          <span><i class="uil uil-bookmark-full"></i></span>
                      </div>
                  </div>
              
              
              
                  <div class="caption">
                      <p><b></b>body
                          <span class="harsh-tag"></span>
                      </p>
                  </div>
              
              
              </div>
                     
             
           
          
              <!----------------- END OF FEED 1 -------------------->

              
           
         

         

              
             
          </div>
          <!----------------- END OF FEEDS -------------------->
      </div>
       <!----------------- END OF MIDDLE -------------------->
       Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum perspiciatis voluptatem natus dignissimos voluptatibus perferendis doloremque. Esse voluptate ullam accusantium quod ratione beatae, perspiciatis, illum, cum sunt deleniti quis libero?
</x-social>