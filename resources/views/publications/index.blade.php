



<x-social title="a" >
    
    <style>
        #home svg path {
            stroke: #6B4DE6;

}
    </style>
  <!----------------- MIDDLE -------------------->
  <div class="middle">
 
   <form action="" class="create-post">
       <div class="profile-photo">
           <img src="./images/profile-1.jpg">
       </div>
       <input type="text" placeholder="What's on your mind, Diana ?" id="create-post">
       <input type="submit" value="Post" class="btn btn-primary">
   </form>
   <!----------------- FEEDS -------------------->
   <div class="feeds">
       <!----------------- FEED -------------------->
       
        @foreach($publications as $publication)
        <x-publication canUpdate='auth()->user()->id === $publication->profile_id' :publication="$publication"/>
        @endforeach      
       <!----------------- END OF FEED  -------------------->
     </div>
   <!----------------- END OF FEEDS -------------------->
</div>
<!----------------- END OF MIDDLE -------------------->



























































    
               
              
           
                    <div class="feeds">
              
    
                               
                        {{-- @foreach($publications as $publication) --}}
         
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
                    {{-- <x-publication canUpdate='auth()->user()->id === $publication->profile_id' :publication="$publication"/> --}}
                    {{-- @endforeach --}}





                    </x-social >