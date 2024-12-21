         <!----------------- LEFT -------------------->
         <div class="left">
            <a class="profile">
                <div class="profile-photo">
                    <img src="{{ asset('storage/'.auth()->user()->image) }}">
                </div>
                <div class="handle">
                    <h4>    {{auth()->user()->name}}</h4>
                    <p class="text-muted">
                        {{auth()->user()->name}}
                    </p>
                </div>
            </a>
            <br>
            <a class="profile">
                <div class="profile-photo">    
                </div>
                <div class="handle">
                    <h4>    </h4>
                    <p class="text-muted">
                        {{auth()->user()->bio}}
                    </p>
                </div>
            </a>

            <!----------------- SIDEBAR -------------------->
            <div class="sidebar">
                <a class="menu-item active">
                    <span><i class="uil uil-home"></i></span>
                    <h3>Home</h3>   
                </a>
                <a class="menu-item">
                    <span><i class="uil uil-compass"></i></span>
                    <h3>Explore</h3>
                </a>
                <a class="menu-item"  id="notifications">
                    <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span>
                    <h3>Notification</h3>
                    <!--------------- NOTIFICATION POPUP --------------->
                    <div class="notifications-popup">
                        <div>
                            <div class="profile-photo">
                                <img src="./images/profile-2.jpg">
                            </div>
                            <div class="notification-body">
                                <b>Keke Benjamin</b> accepted your friend request
                                <small class="text-muted">2 Days Ago</small>
                            </div>
                        </div>
                        <div>
                            <div class="profile-photo">
                                <img src="./images/profile-3.jpg">
                            </div>
                            <div class="notification-body">
                                <b>John Doe</b> commented on your post
                                <small class="text-muted">1 Hour Ago</small>
                            </div>
                        </div>
                      
                
                    </div>
                    <!--------------- END NOTIFICATION POPUP --------------->
                </a>
                <a class="menu-item" id="messages-notifications">
                    <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
                    <h3>Messages</h3>
                </a>
                <a class="menu-item">
                    <span><i class="uil uil-bookmark"></i></span>
                    <h3>Bookmarks</h3>
                </a>
                <a class="menu-item">
                    <span><i class="uil uil-chart-line"></i></span>
                    <h3>Analytics</h3>
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
            <label class="btn btn-primary" for="create-post">Create Post</label>
        </div>