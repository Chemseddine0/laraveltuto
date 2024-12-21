

<x-social title="profile Page">
<div class="row my-5">
  
    

      <div class="grid grid-cols-6 gap-x-4 gap-y-1 max-w-2xl">
    
        <!-- Title -->
        <div class="col-span-full mb-3">
          <p class="text-xl text-gray-800"> Today's popular searches </p>
        </div>
        @foreach($profiles as $profile)
        <!-- Card 1 -->
        <div class="col-span-2">
          <a href="{{route('profiles.show',$profile->id)}}">
            <img src="{{ asset('storage/'.$profile->image) }}" class="rounded-xl brightness-75" />
          </a>
          <p class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3"> {{$profile->name}}</p>
        </div>
    
        @endforeach
    
 
    
       
    
      </div>
    
   
    {{-- <x-profile-card :profile="$profile"/>  --}}

</div>
{{$profiles->links()}}

  
  <div class="feeds">
</x-social>


{{-- <x-social title="a" >
  <div class="middle">
    <div class="feeds">

</div>
</div>
<div class="feeds">
</x-social > --}}