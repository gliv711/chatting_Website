<?php
include './php/connection.php';
if (session_status()!=2)
{
  echo "<h1> veuillez vous connecter d'abord";
}
?>


<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard</title>
</head>


<body>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-4 static">
                <div class="profile-card">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="profile-photo">
                    <h5><a href="#" class="text-white"> </a></h5>
                    <a href="#" class="text-white"><i class="fa fa-user"></i> 1,299 followers</a>
                </div><!--profile card ends-->
                <ul class="nav-news-feed">
                  <li><i class="fa fa-list-alt icon1"></i><div><a href="#">My Newsfeed</a></div></li>
                  <li><i class="fa fa-users icon2"></i><div><a href="#">People Nearby</a></div></li>
                  <li><i class="fa fa-user icon3"></i><div><a href="#">Friends</a></div></li>
                  <li><i class="fa fa-comments icon4"></i><div><a href="#">Messages</a></div></li>
                  <li><i class="fa fa-picture-o icon5"></i><div><a href="#">Images</a></div></li>
                  <li><i class="fa fa-video-camera icon6"></i><div><a href="#">Videos</a></div></li>
                </ul><!--news-feed links ends-->
                <div id="chat-block">
                  <div class="title">Chat online</div>
                  <ul class="online-users list-inline">
                    <li><a href="#" title="Linda Lohan"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Sophia Lee"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="John Doe"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Alexis Clark"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="James Carter"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Robert Cook"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Richard Bell"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Anna Young"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                    <li><a href="#" title="Julia Cox"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="img-responsive profile-photo"><span class="online-dot"></span></a></li>
                  </ul>
                </div><!--chat block ends-->
            </div>
        </div>
    </div>
</body>

</html>