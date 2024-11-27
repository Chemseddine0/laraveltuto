

<x-master title="profile Page">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
        </tr>
    @foreach($profiles as $profile)
        <tr>
            <td>{{$profile->id}}</td>
            <td>{{$profile->name}}</td>
            <td>{{$profile->email}}</td>
            <td>{{ Str::limit($profile->bio,50,'....etc')}}</td>
        </tr>
    @endforeach

     
    </table>
    {{$profiles->links()}}
</x-master>