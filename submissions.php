<?php include_once dbh.php;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Contact Us</title>
      <link rel="stylesheet" href="css/submissions.css" type="text/css"/>
      <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>

    <body>
      <!--Navigation Section-->
      <nav>
        <div id="navDiv">
          <ul id="navUL">
            <div class="navItemDiv"><li id="homePageLI" class="navTabLI"><a href="index.html" class="navLink">Home</a></li></div>
            <div class="navItemDiv"><li id="episodesPageLI" class="navTabLI"><a href="episodes.html" class="navLink">Episodes</a></li></div>
            <div class="navItemDiv"><li id="contactPageLI" class="navTabLI"><a href="submissions.html" class="navLink">Submissions</a></li></div>
            <div class="navItemDiv"><li id="meetTheTeamPageLI" class="navTabLI"><a href="meetTheTeam.html" class="navLink">About the Team</a></li></div>
            <div class="navItemDiv"><li id="shopLI" class="navTabLI"><a href="shop.html" class="navLink">Shop</a></li></div>
          </ul>
        </div>
      </nav>

      <div id="contactWrapper">
        <!--Section for people to just write a quick message with name and email.-->
        <div id="reachingOutDiv">
          <!--New Idea Section-->
          <h1>Have a Story to Tell?</h1>
          <h2>We Would Love to Hear From You!</h2>
          <ul id="submissionRequirementList">
            <li class="submissionRequirementLI">We value real shit</li>
            <li class="submissionRequirementLI">Spooooooks alerttttt</li>
            <li class="submissionRequirementLI">fillin in stuffffffffff</li>
            <li class="submissionRequirementLI" >you'll probably have to interview, homie</li>
          </ul>

        </div>
        <!--Section for people to submit a story.-->
        <div id="submitStoryDiv">

          <form action="/includes/submission.inc.php" method="POST">
            <div id="submissionsNameInputDiv">
              <label class="formLabel" id="submissionsNameLabel">What's your name?</label>
              <input type="text" name="name" class="inputBox">
            </div>
            <div id="preferredNameInputDiv">
              <label class="formLabel" id="preferredNameLabel">What should we call you?</label>
              <input type="text" name="preferredName" class="inputBox">
            </div>
            <div id="pronounsInputDiv">
              <label class="formLabel" id="pronounsLabel">What are your pronouns?</label>
              <input type="text" name="pronouns" class="inputBox">
            </div>
            <div id="ageInputDiv">
              <label class="formLabel" id="ageLabel">How old are you?</label>
              <input type="text" name="age" class="inputBox">
            </div>
            <div id="submissionsEmailInputDiv">
              <label class="formLabel" id="submissionsEmailLabel">What's your email?</label>
              <input type="email" name="email" class="inputBox">
            </div>
            <div id="phoneNumberInputDiv">
              <label class="formLabel" id="phoneNumberLabel">What's your phone number?</label>
              <input type="text" name="phoneNumber" class="inputBox">
            </div>
            <div id="socialsInputDiv">
              <label class="formLabel" id="socialsLabel">Where can we find you on social media?</label>
              <input type="text" name="socials" class="inputBox">
            </div>
            <div id="taggingInputDiv">
              <label class="formLabel" id="taggingLabel">Would you like to be tagged on social media when your episode comes out?</label>
              <input type="radio" name="taggingPreference" id="yesValue" value="Yes"><p class="value">Yes</p>
              <input type="radio" name="taggingPreference" id="noValue" value="No"><P class="value">No</P>
            </div>
            <div id="storyInputDiv">
              <label class="formLabel" id="storyLabel">Tell us your story!</label>
              <textarea name="story" id="storyTextArea"></textarea>
            </div>
            <input type="submit">
          </form>

        </div>
      </div>


    </body>

</html>