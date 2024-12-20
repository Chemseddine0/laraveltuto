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
                    <img src="{{ asset('storage/'.$profile->image) }}" alt="">
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
                        <img src="{{ asset('storage/'.$profile->image) }}">
                    </div>
                    <div class="handle">
                        <h4>{{$profile->name}}</h4>
                        <p class="text-muted">@
                            {{$profile->name}}
                        </p>
                        <p class="text-muted">
                            {{$profile->created_at->format('M d Y');}}
                        </p>
                        
                    </div>
                </a>
                <a class="profile" style="margin-top: 10px">
                    {{-- <div class="profile-photo">
                        
                    </div> --}}
                    <div class="handle">
                        
                        <p class="text-muted">
                            {{$profile->bio}}
                            
                        </p>
                        <p class="text-muted">
                           
                        </p>
                        
                    </div>
                </a>
                <!----------------- SIDEBAR -------------------->
                <div class="sidebar">
                    <a class="menu-item active" >
                        <span><i class="uil uil-home"></i></span>
                        <h3>My Page</h3>   
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-home"></i></span>
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
                        <img src="{{ asset('storage/'.$profile->image) }}">
                    </div>
                    <input type="text" placeholder="What's on your mind,{{$profile->name}} " id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary" href="{{route('publications.create')}}" >
                </form>
                <!----------------- FEEDS -------------------->
                <div class="feeds">
                    <!----------------- FEED 1 -------------------->

                           
                    @foreach($profile->publications as $publication)
                 
                                <div class="feed">
                                    <div class="head">
                                        <div class="user">
                                            <div class="profile-photo">
                                                <img src="{{ asset('storage/'.$profile->image) }}">
                                            </div>
                                            <div class="info">
                                <h3>{{$profile->name}}</h3>
                                <small>{{$publication->created_at->diffForHumans()}}</small>
                            </div>
                        </div>
                        <span class="edit">
                    <x-publication canUpdate='auth()->user()->id === $publication->profile_id' :publication="$publication"/>
                    @endforeach
                
                    <!----------------- END OF FEED 1 -------------------->

                    
                 
               

               

                    
                   
                </div>
                <!----------------- END OF FEEDS -------------------->
            </div>
             <!----------------- END OF MIDDLE -------------------->

       
        </div>
    </main>

    <!----------------- THEME CUSTOMIZATION -------------------->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background</p>

            <!----------- FONT SIZE ----------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!----------- PRIMARY COLORS ----------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!----------- BACKGROUND COLORS ----------->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                    <div class="bg-4">
                        <span></span>
                        <h5 for="bg-4">Purple</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/index.js') }}"></script> 
</body>
</html>