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
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </nav>
    <div class="mainS">
        <div class="container">
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="">
                    </div>
                    <div class="handle">
                        <h4></h4>
                        <p class="text-muted">@
                        
                        </p>
                        <p class="text-muted">
                           
                        </p>
                        
                    </div>
                </a>
                <a class="profile" style="margin-top: 10px">
                    {{-- <div class="profile-photo">
                        
                    </div> --}}
                    <div class="handle">
                        
                        <p class="text-muted">
                           
                            
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
        </div>
    </div>

    <!-------------------------------- MAIN ----------------------------------->




    <script src="{{ asset('js/index.js') }}"></script> 
