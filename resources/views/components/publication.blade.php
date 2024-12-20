<div class="feed">
    <div class="head">
        <div class="user">
            <div class="profile-photo">
                <img src="{{ asset('storage/'.$publication->profile->image) }}">
            </div>
            <div class="info">
                <h3>{{$publication->profile->name}}</h3>
                <small>{{$publication->created_at->diffForHumans()}}</small>
            </div>
        </div>

        <span class="edit">
            @auth
            @if (auth()->user()->id === $publication->profile_id)
            <i class="uil uil-ellipsis-h"></i>
            <a type="submit" href="{{route('publications.edit',$publication->id)}}"><i class="uil uil-edit"
                    style="color: #052bff;font-size:20px;float:right"></i></a>
            <form action="{{route('publications.destroy',$publication->id)}}" method="post" style="display: inline;">
                @method('DELETE')
                @csrf
                {{-- <a type="button" onclick="return confirm('Voulez vous vraiment Deleted cette publication ')"><i
                        class="uil uil-trash" style="color: #ff0000;font-size:25px"></i></a> --}}
                <button onclick="return confirm('Voulez vous vraiment Deleted cette publication ')"
                    style="background-color: transparent;width:7px;padding:5px;margin-right:25px"
                    class="btn btn-danger btn-sm float-end d-none "><i class="uil uil-trash"
                        style="color: #ff0000;font-size:20px"></i></button>
            </form>
            @endif
            @endauth


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
            <span class="harsh-tag"></span>
        </p>
    </div>


</div>