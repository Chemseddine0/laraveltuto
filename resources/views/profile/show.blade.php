<x-social title="My profil">
    <style>
        .middle .create-post {
        
            justify-content: left;
        }
        .desc {
            margin-left: 5PX;
            
        }
    </style>
    <!-------------------------------- MAIN ----------------------------------->


            <!----------------- MIDDLE -------------------->
            <div class="middle">
                <form action="" class="create-post">
                    <div class="profile-photo">
                        <img src="{{ asset('storage/'.$profile->image) }}">
                    </div>
                   <div class="desc">
                    {{$profile->name}} 
                    {{$profile->created_at->format(' D M Y')}}
                   </div>
              
                </form>
                <br>
                <form action="" class="create-post">                  
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non 
                    sunt a quidem nihil dolores, itaque quos atque nulla beatae deleniti 
                    deserunt, aut 
                    odit iste, nemo accusantium laudantium tempore? Totam, velit!
                </form>
                {{-- <div class="left">
                    <a class="profile">
                        <div class="profile-photo">
                            <img src="{{ asset('storage/'.$profile->image) }}">
                        </div>
                        <div class="handle">
                            <h4>     {{$profile->name}} </h4>
                            <p class="text-muted">
                                {{$profile->created_at->format(' D M Y')}}
                            </p>
                            <p class="text-muted">
                               
                            </p>
                        </div>
                       
                    </a>
                    <br>
                    <a class="profile">
                       
                        <div class="handle">
                            <h4> {{$profile->name}} bio :    </h4>
                            <p class="text-muted">
                                {{$profile->bio}} 
                            </p>
                        </div>
                    </a>
                </div> --}}
            
                <!----------------- FEEDS -------------------->
                <div class="feeds">
                    <!----------------- FEED 1 -------------------->

                           
                    @foreach($profile->publications as $publication)
                 
                     
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
</x-social >