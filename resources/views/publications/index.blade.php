
{{-- 
<x-master title="publications">
<div class="row my-5">
    <h1>publications</h1>
    @foreach($publications as $publication)
 
    <tr>
        <td>{{$publication->id}}</td>
        <td>{{$publication->titre}}</td>
        <td>{{$publication->body}}</td>
        <img src="{{ asset('storage/'.$publication->image) }}" >
        <td><a type="button" href="{{route('publications.show',$publication->id)}}" class="btn btn-success">Afficher plus</a></td>
    </tr>

@endforeach
</div>
{{$publications->links()}}
</x-master> --}}
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Voir les Publications</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        color: #333;
    }

    header {
        background-color: #6200ea;
        color: #fff;
        padding: 5px;
        text-align: center;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .publication {
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 15px;
        text-align: center;
    }

    .publication img {
        max-width: 100%;
        border-radius: 8px;
        margin-top: 15px;
    }

    .publication-content {
        text-align: left;
        margin-bottom: 15px;
    }

    .publication-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .publication-text {
        font-size: 14px;
        line-height: 1.6;
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: #6200ea;
        color: #fff;
        position: fixed;
        width: 100%;
        bottom: 0;
    }
</style>

<body>
    @include('partials.nav')
    <header>
        
        <h1>Voir les Publications</h1>
    </header>

    <div class="container">
        @foreach($publications as $publication)
        {{-- <x-publication canUpdate='auth()->user()->id === $publication->profile_id' :publication="$publication"/> --}}
        <x-publication  :publication="$publication"/>

        @endforeach



    </div>

    <footer>
        &copy; 2024 Mon Site de Publication
    </footer>


         