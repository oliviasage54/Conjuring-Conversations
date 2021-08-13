<?php 
include_once dbh.php;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Submit A Story</title>
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
            <div class="navItemDiv"><li id="homePageLI" class="navTabLI"><a href="index.php" class="navLink">Home</a></li></div>
            <div class="navItemDiv"><li id="episodesPageLI" class="navTabLI"><a href="episodes.php" class="navLink">Episodes</a></li></div>
            <div class="navItemDiv"><li id="contactPageLI" class="navTabLI"><a href="submissions.php" class="navLink">Submissions</a></li></div>
            <div class="navItemDiv"><li id="meetTheTeamPageLI" class="navTabLI"><a href="meetTheTeam.html" class="navLink">About the Team</a></li></div>
            <div class="navItemDiv"><li id="shopLI" class="navTabLI"><a href="shop.html" class="navLink">Shop</a></li></div>
          </ul>
        </div>
      </nav>

      <!--BODY-->
      <div id="contactWrapper">
        <!--Section for people to just write a quick message with name and email.-->
          <div id="submissionWarning">
            <h1 class="expectationsText">Have a Story to Tell?</h1>
            <h2 class="expectationsText">We Would Love to Hear From You!</h2>
            <h2 class="expectationsText">...BUT BEFORE YOU SUBMIT:</h2>
            <h3 class="expectationsDisclaimer">A reminder: this is a NON-FICTION paranormal podcast. While we love and respect ALL 
              spooky tales, our podcast aims to establish legitimacy to experiences that are often discounted as untrue. Therefore, for the sake of this project, 
              this is a space for real experiences. </h3>
          </div>

          <div id="expectationsDiv">
            <h3 class="expectations">Once you’ve submitted a story, we’ll get back to you with some follow up questions followed by a scheduled pre-interview so our team can meet you!
               This is also where we’ll discuss a narration for your story. </h3>
            <h3 class="expectations">If all goes well, next steps include an on-air interview.
               You’ll interview with Ryan and Cameren for the podcast and from there we develop our episodes! </h3> 
            <h2 id="dontFret">Don't fret; you’ll hear from us along the way.</h2>
          </div>


        <!--Section for people to submit a story.-->
        <div id="submitStoryDiv">

          <form action="/includes/submission.inc.php" method="POST">
            <div id="questionDiv">
              <div id="submissionsNameInputDiv" class="formDiv">
                <label class="formLabel" id="submissionsNameLabel">What's your name?*</label>
                <input type="text" name="name" class="inputBox" required>
              </div>
              <div id="preferredNameInputDiv" class="formDiv">
                <label class="formLabel" id="preferredNameLabel">What should we call you?</label>
                <input type="text" name="preferredName" class="inputBox">
              </div>
              <div id="pronounsInputDiv" class="formDiv">
                <label class="formLabel" id="pronounsLabel">What are your pronouns?</label>
                <input type="text" name="pronouns" class="inputBox">
              </div>
              <div id="ageInputDiv" class="formDiv">
                <label class="formLabel" id="ageLabel">How old are you?</label>
                <input type="text" name="age" class="inputBox">
              </div>
              <div id="submissionsEmailInputDiv" class="formDiv">
                <label class="formLabel" id="submissionsEmailLabel">What's your email?*</label>
                <input type="email" name="email" class="inputBox" required>
              </div>
              <div id="phoneNumberInputDiv" class="formDiv">
                <label class="formLabel" id="phoneNumberLabel">What's your phone number?*</label>
                <input type="text" name="phoneNumber" class="inputBox" required>
              </div>
              <div id="socialsInputDiv" class="formDiv">
                <label class="formLabel" id="socialsLabel">Where can we find you on social media?</label>
                <input type="text" name="socials" class="inputBox">
              </div>
              <div id="taggingInputDiv" class="formDiv">
                <label class="formLabel" id="taggingLabel" style="width: 500px;">Would you like to be tagged on social media when your episode comes out?</label>
                <input type="radio" name="taggingPreference" id="yesValue" value="Yes"><p class="value">Yes</p>
                <input type="radio" name="taggingPreference" id="noValue" value="No"><P class="value">No</P>
              </div>
            </div>

            <div id="storyAndSubmitWrapper">
              <div id="storyInputDiv">
                <label class="formLabel" id="storyLabel">Tell us your story!</label>
                <textarea name="story" id="storyTextArea" style="width: 50%;"></textarea>
              </div>
              <div id="submitButtonDiv">
                <input type="submit">
              </div>
            </div>
          </form>

        </div>
      </div>


    </body>

</html>