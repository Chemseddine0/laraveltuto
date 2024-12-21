<div class="right">
    <!------- MESSAGES ------->
    <div class="messages">
        <div class="heading">
            <h4>Messages</h4>
            <i class="uil uil-edit"></i>
        </div>
        <!------- SEARCH BAR ------->
        <div class="search-bar">
            <i class="uil uil-search"></i>
            <input type="search" placeholder="Search messages" id="message-search">
        </div>
        <!------- MESSAGES CATEGORY ------->
        <div class="category">
            <h6 class="active">Primary</h6>
            <h6>General</h6>
            <h6 class="message-requests">Requests (7)</h6>
        </div>
       
        <!------- MESSAGES ------->
        <div class="message">
            <div class="profile-photo">
                <img src="./images/profile-15.jpg">
            </div>
            <div class="message-body">
                <h5>Benjamin Dwayne</h5>
                <p class="text-muted">haha got that!</p>
            </div>
        </div>
    </div>
    <!------- END OF MESSAGES ------->

    <!------- FRIEND REQUEST ------->
    <div class="friend-requests">
        <h4>Requests</h4>
        {{-- @foreach($profiles as $profile) --}}
        <div class="request">
            <div class="info">
                <div class="profile-photo">
                    <img src="./images/profile-20.jpg">
                </div>
                <div>
                    <h5>Hajia Bintu</h5>
                    <p class="text-muted">8 mutual friends</p>
                </div>
            </div>
        
        </div>
        {{-- @endforeach --}}
   
    </div>
</div>