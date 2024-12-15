{{-- <div class="publication">

    <div class="publication-content my-5">

        @auth
        @if (auth()->user()->id === $publication->profile_id)
        <a  type="button" href="{{route('publications.edit',$publication->id)}}" class="float-end btn btn-sm btn-success">Modifier</a>
        <form action="{{route('publications.destroy',$publication->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button onclick="return confirm('Voulez vous vraiment Deleted cette publication ')" class="btn btn-danger btn-sm float-end">Deleted</button>
        </form>
      
        
        @endif
        @endauth
       
    </div>
   
    <h2 class="publication-title">{{$publication->titre}}</h2>
    <p class="publication-text">{{$publication->body}}</p>
    @if(!is_null($publication->image))
    <img src="{{ asset('storage/'.$publication->image) }}" alt="Image de l'article">

    @endif
   
</div> --}}





<small>{{$publication->created_at->diffForHumans()}}</small>
</div>
</div>
<span class="edit">
<i class="uil uil-ellipsis-h"></i>
</span>
</div>
    <div class="photo">
        <img src="{{ asset('storage/'.$publication->image) }}">
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
        <p><b></b>{{$publication->body}}
        <span class="harsh-tag">#lifestyle</span></p>
    </div>

    
</div>