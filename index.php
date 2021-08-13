<?php 
include_once dbh.php;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Conjuring Conversations</title>
      <link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

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
        
        <!--Welcome Section-->
        <div id="welcomeDiv">
            <img id="skelly" src="images/RyandCamandMadamBWIDE.jpg" alt="Ryan and Cameren at table with Skeleton">
        </div>

        <section id="mainContent">
            <div id="descriptionDivWrapper">
                <div id="descriptionDiv">
                    <h1 id="podcastDescriptionP1">Hello fellow conjurers! We are the Conjuring Conversations Podcast, and we aim to explore authentic paranormal experience stories in collaboration with listeners like you.
                    We exist because of many things — unemployment, journalistic integrity, and a love for the 12 ft Home Depot skeleton (this is NOT an ad but we are open to negotiations, Home Depot).</h1>

                    <h1 id="podcastDescriptionP2">Every other week, we want to entertain you. We want to spook you with tales from beyond the veil, make you question what's hiding in the shadows, and bring you closer to the spirit world. 
                    But our larger purpose — why the Conjuring Conversations team embarked on this project — is to legitimize a subject that is often discounted as fantasy or untruth. We want this podcast to be a safe space for people with paranormal experiences. </h1>
                </div>
            </div>
    
            <!--Episodes and Streaming Services Section-->
            <div id=listenNowDiv>
                <!--Soundcloud embed section of latest episode-->
                <div id="latestEpisodesDiv">
                    <p id="latestEpisodesHeader">Check out our latest episode</p>
                    <iframe width="50%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1097137054&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/user-501657202" title="Conjuring Conversations" target="_blank" style="color: #cccccc; text-decoration: none;">Conjuring Conversations</a> · <a href="https://soundcloud.com/user-501657202/promo-1" title="PROMO: A Message From The Ether" target="_blank" style="color: #cccccc; text-decoration: none;">PROMO: A Message From The Ether</a></div>
                    <a id="allEpisodesLink" href="episodes.html"><p id="allEpisodes">See all episodes ></p></a>
                </div>


                <!--Streaming Services Section for "Listen Now"-->
                <div id="streamingServicesWrapper">
                        <!--Apple-->
                        <div class="listenDiv">
                            <a id="applePodcastLink" href="https://podcasts.apple.com/us/podcast/conjuring-conversations-podcast/id1580462687?itsct=podcast_box_badge&amp;itscg=30200&amp;ls=1"><img id="applePodcastImage" src="https://tools.applemediaservices.com/api/badges/listen-on-apple-podcasts/mono-white/en-us?size=250x83&amp;releaseDate=1624572900&h=da8c1183774d6452267869232a445a52" alt="Listen on Apple Podcasts"></a>
                        </div>
                        <!--Google Podcasts-->
                        <div class="listenDiv">
                            <div style="display: inline;">
                                <a id="goodlePodcastLink" href="https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zb3VuZGNsb3VkLmNvbS91c2Vycy9zb3VuZGNsb3VkOnVzZXJzOjEwMDAzODkyNDEvc291bmRzLnJzcw">
                                <img src="https://www.gstatic.com/podcasts_console/promote/English_EN/EN_Google_Podcasts_Badge.svg" width="250" height="83" alt="Listen on Google Podcasts">
                                </a>
                            </div>
                        </div>
                        <!--Spotify-->
                        <div class="listenDiv">
                            <a id="spotifyPodcastLink" href="https://open.spotify.com/show/03aVArFNsn2hsenuJp0aYc"><button id="spotifyButton">Spotify</button></a>
                        </div>
                        <!--Soundcloud-->
                        <div class="listenDiv">
                            <a id="soundcloudLink" href="https://soundcloud.com/user-501657202"><button id="soundcloudButton">Soundcloud</button></a>
                        </div>
                </div>
            </div>

            <!--social media links section-->
            <div id="findUsDiv">
                <h1 id="findUsText">Find us on social media!</h1>
                <a class="socialLinks" href="https://twitter.com/ConjuringConvos"><ion-icon name="logo-twitter" class="ionIcon"></ion-icon></a>
                <a class="socialLinks" href="https://www.instagram.com/conjuringconversations/"><ion-icon name="logo-instagram" class="ionIcon"></ion-icon></a>
                <a class="socialLinks" href="https://www.tiktok.com/@conjuringconversations?lang=en"><ion-icon name="logo-tiktok" class="ionIcon"></ion-icon></a>
                <a class="socialLinks" href="https://www.facebook.com/ConjuringConversations"><ion-icon name="logo-facebook" class="ionIcon"></ion-icon></a>
            </div>

            <div id="fakeFooter">

            </div>
            

        </section>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>