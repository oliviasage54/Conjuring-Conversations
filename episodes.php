<?php 
include_once dbh.php;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Episodes</title>
      <link rel="stylesheet" href="css/episodesCss.css" type="text/css"/>
      <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
    </head>

    <body>
      <!--Navigation Section-->
      <nav>
        <div id="navDiv">
          <ul id="navUL">
            <div class="navItemDiv"><li id="homePageLI" class="navTabLI"><a href="index.php" class="navLink">Home</a></li></div>
            <div class="navItemDiv"><li id="episodesPageLI" class="navTabLI"><a href="episodes.php" class="navLink">Episodes</a></li></div>
            <div class="navItemDiv"><li id="contactPageLI" class="navTabLI"><a href="submissions.php" class="navLink">Submissions</a></li></div>
            <div class="navItemDiv"><li id="meetTheTeamPageLI" class="navTabLI"><a href="meetTheTeam.html" class="navLink">About the Team</a></li></div>
            <div class="navItemDiv"><li id="shopLI" class="navTabLI"><a href="shop.html" class="navLink">Shop</a></li></div>
          </ul>
        </div>
      </nav>

      <div class="episodeTileWrapper">
        <div class="episodeImageDiv">
          <img src="" alt="episode title here" width="300" height="300">
        </div>
        <div class="episodeDescripDiv">
          <h3 class="episodeText">Episode Title Here</h3> 
          <h6 class="episodeText">Episode Description/Show notes</h6>
          <!--Release date goes below-->
          <date class="episodeText">00/00/0000</date>
        </div>
      </div>

      
        

    </body>

</html>