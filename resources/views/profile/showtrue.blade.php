
{{-- 
{{ asset('storage/'.$profile->image) }}
{{$profile->id}} <br>
{{$profile->name}} <br>
{{$profile->email}} <br>
{{$profile->bio}}  --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
        <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
        <link rel="stylesheet" href="{{ asset('css/profileShow.css') }}">

    </head>
    
    <body class="profile-page">
        <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  color-on-scroll="100"  id="sectionsNav">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html" target="_blank">Material Kit </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown nav-item">
                          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                              <i class="material-icons">apps</i> Components
                          </a>
                          <div class="dropdown-menu dropdown-with-icons">
                            <a href="../index.html" class="dropdown-item">
                                <i class="material-icons">layers</i> All Components
                            </a>
                            
                            <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Documentation
                            </a>
                          </div>
                        </li>
                          <li class="nav-item">
                              <a class="nav-link" href="javascript:void(0)">
                                  <i class="material-icons">cloud_download</i> Download
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="https://twitter.com/CreativeTim" target="_blank">
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="https://www.facebook.com/CreativeTim" target="_blank">
                                  <i class="fa fa-facebook-square"></i>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link"  href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                                  <i class="fa fa-instagram"></i>
                              </a>
                          </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                           <div class="profile">
                                <div class="avatar">
                                    <img src="{{ asset('storage/'.$profile->image) }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="title">{{$profile->name}}</h3>
                                    <h6>{{$profile->email}}</h6>
                                </div>
                                                                    
                                <p>{{$profile->created_at->format('M d Y');}}</p>
                        
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                        <p>{{$profile->bio}}</p>
                    </div>
                   
                </div>
            
              <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="studio">
                    <div class="name">
                        <h3 class="title">Publications</h3>
                        @foreach($profile->publications as $publication)
                        <x-publication canUpdate='auth()->user()->id === $publication->profile_id' :publication="$publication"/>
                        @endforeach
                    </div>
