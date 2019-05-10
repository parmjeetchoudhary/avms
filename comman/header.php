<html>
<head>
<title>Project.in</title>
<link rel="ahortcut icon" href="image\favicon (2).ico" type="image/png"> 
<link rel="stylesheet" href="http://localhost:8081/project2/css/main.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
  
</head>
<body style="background-color:lightgreen">#f3f3f3;
<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size:20px;background-color:#29631d;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#click">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	   <a class="navbar-brand" href="#">
    <img src="image\favicon (2).ico" alt="logo" style="width:25px;height:25px;">
  </a>
  
      <a class="navbar-brand" style="font-family:jokerman;color:#008080;" href="#">Entertainment Hub</a>
    </div>
    <div class="collapse navbar-collapse" id="click">
	 <form class="navbar-form navbar-right" action="search.php?sc">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
    </form>
      <ul class="nav navbar-nav  navbar-right" style="font-size:20px">
        <li ><a href="index.php"><i class="fas fa-home"></i>&nbsp;Home&nbsp;|</a></li>
        <li><a href="audio.php"><i class="fa fa-music"></i>&nbsp;Audios&nbsp;|</a></li>
        <li><a href="video.php"><i class="fas fa-video"></i>&nbsp;Videos&nbsp;|</a></li>
		<li><a href="request.php">Request&nbsp;|</a></li>
      </ul>
    
    </div>
  </div>
</nav>