{{-- 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySocial </title>
    <!-- IconScout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <title>Voir les Publications</title>
</head>


<body>
    @include('partials.nav')
    <header>
        
        <h1>Voir les Publications</h1>
    </header>

    <div class="container">
        @foreach($publications as $publication)
        {{-- <x-publication canUpdate='auth()->user()->id === $publication->profile_id' :publication="$publication"/> 
        <x-publication  :publication="$publication"/>

        @endforeach



    </div>

    <footer>
        &copy; 2024 Mon Site de Publication
    </footer>
   --}}



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>mySocial </title>
        <!-- IconScout CDN -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    </head>
    <body>
        <nav>
            <div class="container">
                <h2 class="logo">
                    mySocial
                </h2>
                <div class="search-bar">
                    <i class="uil uil-search"></i>
                    <input type="search" placeholder="Search for creators, inspirations, and projects">
                </div>
                <div class="create">
                    <label class="btn btn-primary" for="create-post">Create</label>
                    <div class="profile-photo">
                        {{-- <img src="{{ asset('storage/'.$profile->image) }}" alt=""> --}}
                    </div>
                </div>
            </div>
        </nav>
    
        <!-------------------------------- MAIN ----------------------------------->
        <main>
            <div class="container">
                <!----------------- LEFT -------------------->
                <div class="left">
                    <a class="profile">
                        <div class="profile-photo">
                            {{-- <img src="{{ asset('storage/'.$profile->image) }}"> --}}
                        </div>
                        <div class="handle">
                            {{-- <h4>{{$profile->name}}</h4> --}}
                            <p class="text-muted">@
                                {{-- {{$profile->name}} --}}
                            </p>
                            <p class="text-muted">
                                {{-- {{$profile->created_at->format('M d Y');}} --}}
                            </p>
                            
                        </div>
                    </a>
            
                    <!----------------- SIDEBAR -------------------->
                    <div class="sidebar">
                        <a class="menu-item " >
                            <span><i class="uil uil-home"></i></span>
                            <h3>My Page</h3>   
                        </a>
                        <a class="menu-item active">
                            <span><i class="uil uil-home "></i></span>
                            <h3>Home</h3>   
                        </a>
                        <a class="menu-item" id="theme">
                            <span><i class="uil uil-palette"></i></span>
                            <h3>Theme</h3>
                        </a>
                        <a class="menu-item">
                            <span><i class="uil uil-setting"></i></span>
                            <h3>Setting</h3>
                        </a>
                    </div>
                    <!----------------- END OF SIDEBAR -------------------->
                    <a href="{{route('publications.create')}}">
                    <label class="btn btn-primary" >Create Post</label></a>
                </div>
    
                <!----------------- MIDDLE -------------------->
                <div class="middle">
                     
                    <form action="{{route('publications.create')}}" class="create-post">
                        <div class="profile-photo">
                          <img src="" alt="aa"> 
                        </div>
                        <input type="text" placeholder="What's on your mind, " id="create-post">
                        <input type="submit" value="Post" class="btn btn-primary" href="{{route('publications.create')}}" > 
                    </form>
                    <!----------------- FEEDS -------------------->
                    <div class="feeds">
                        <!----------------- FEED 1 -------------------->
    
                               
                        @foreach($publications as $publication)
         
                                    {{-- <div class="feed">
                                        <div class="head">
                                            <div class="user">
                                                <div class="profile-photo">
                                                    <img src="">
                                                </div>
                                                <div class="info">
                                    <h3>{{$publication->created_at->diffForHumans()}}</h3>
                                    <small>{{$publication->created_at->diffForHumans()}}</small>
                                </div>
                            </div>

                        <span class="edit"> --}}
                    <x-publication canUpdate='auth()->user()->id === $publication->profile_id' :publication="$publication"/>
                    @endforeach




                    <script src="{{ asset('js/index.js') }}"></script> 