{{-- @extends('layouts.master')
@section('title')
    Home page
@endsection --}}
<x-master title="Home Page">
    
<h1>Home</h1>
{{-- @section('main') --}}
{{-- <table class="table">
    <tr>
        <td>
            Id
        </td>
        <td>
            NOM
        </td>
        <td>
            metier
        </td>

    </tr>

    @foreach ($users as $users)
        <tr>
            <td>{{ $users['id'] }}</td>
            <td>{{ $users['nom'] }}</td>
            <td>{{ $users['metier'] }}</td>
        </tr>
    @endforeach
</table> --}}
{{-- <x-alert type="warning"> 
    <strong>hey</strong> rd lbal 
</x-alert>
<x-alert type="danger"> 
    <strong>Erorr</strong> rd lbal 
</x-alert>
<x-usertable  :users="$users" /> --}}
{{-- @endsection --}}


</x-master>