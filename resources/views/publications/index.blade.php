

<x-master title="profile Page">
<div class="row my-5">
    @foreach($profiles as $profile)
    {{-- <tr>
        <td>{{$profile->id}}</td>
        <td>{{$profile->name}}</td>
        <td>{{$profile->email}}</td>
        <td>{{ Str::limit($profile->bio,50,'....etc')}}</td>
        <td><a type="button" href="{{route('profiles.show',$profile->id)}}" class="btn btn-success">Afficher plus</a></td>
    </tr> --}}
    <x-profile-card :profile="$profile"/> 
@endforeach
</div>
{{$profiles->links()}}

  
         
</x-master>