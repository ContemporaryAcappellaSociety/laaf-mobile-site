<?php

function footer($currentPage)
{
  $footer = <<<FOOTER
  <div data-role="navbar">
    <ul>
FOOTER;

  $pages = array(
    'schedule',
    'music',
    'share',
  );
  foreach ($pages as $page)
  {
    if ($page == $currentPage)
    {
      $footer .= "<li><a href='#{$page}' class='ui-btn-active'>" . ucfirst($page) . "</a></li>";
    } else {
      $footer .= "<li><a href='#{$page}'>" . ucfirst($page) . "</a></li>";
    }
  }

  $footer .= <<<FOOTER
     <li><a href="http://la-af.com/laaf2012-schedule/map.php" rel="external" data-prefetch>Map</a></li>
    </ul>
  </div><!-- /navbar -->
FOOTER;

  return $footer;
}

?>
<!DOCTYPE html>
<html>
  <head>
  <title>LAAF 2012 Schedule</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="jquery.mobile-1.0rc1.min.css" />
  <link rel="stylesheet" href="css/themes/LAAF.css" />
  <script type="text/javascript" src="jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="jquery.mobile-1.0rc1.min.js"></script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-26399761-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</head>



<body>

  <!-- Start of Splash page -->
  <div data-role="page" data-theme="a" id="splash">

    <div data-role="header">
      <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
      <div data-role="navbar">
        <ul>
         <li><a href="#schedule">Schedule</a></li>
         <li><a href="#music">Music</a></li>
         <li><a href="#share">Share</a></li>
         <li><a href="http://la-af.com/laaf2012-schedule/map.php" rel="external" data-prefetch>Map</a></li>
        </ul>
      </div>
    </div><!-- /header -->

    <div data-role="content">
      <h2>LAAF 2012 Schedule</h2>
      <h3>Subscribe to Schedule Changes via Text</h3>
      <p>To receive notifications of any last minute schedule changes on your phone, text "subscribe" to <a href="sms:+13107362696">(310) 736-2696</a></p>
      <hr>
      <img style="float:right;" src="./images/uFkn8c.qrcode.png" width="50">
      <h3>What is a QR Code?</h3>
      <p>A QR Code is like a barcode but can hold much more data. Even better, many smart phones come with built-in software that can read a QR Code with its camera. When the smart phone reads the QR Code, it can then take an action like opening a web page or making a phone call.</p>
      <p>Here are a few recommended apps for various platforms:</p>
        <ul>
          <li>iPhone: <a href="http://itunes.apple.com/us/app/qr-code-reader-and-scanner/id388175979?mt=8">QR Code Reader and Scanner</a></li>
          <li>Android: <a href="https://market.android.com/details?id=com.google.zxing.client.android&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5nb29nbGUuenhpbmcuY2xpZW50LmFuZHJvaWQiXQ..">Barcode Scanner</a></li>
          <li>BlackBerry: Go to BBM, choose "Invite Contact", choose "Scan a Person's Barcode"</li>
        </ul>
      <hr>
      <p>LAAF 2012 is brought to you by <a href="http://casa.org/">The Contemporary A Cappella Society</a>.</p>
      <img width="100" style="margin-left: auto; margin-right: auto;" src="./images/casa.jpg" alt="CASA">
    </div><!-- /content -->

  </div><!-- /page -->

<!-- Start of Share page -->
<div data-role="page" data-theme="a" id="share">

  <div data-role="header">
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('share'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>LAAF 2012 Schedule</h2>
    <p>LAAF 2012 is brought to you by <a href="http://casa.org/">CASA</a>.</p>
    <img width="200" style="margin-left: auto; margin-right: auto;" src="./images/casa.jpg" alt="CASA">
    <a href="http://www.facebook.com/laacappellafestival" data-role="button">Like LAAF on Facebook</a>
    <a href="http://www.facebook.com/acappellanow" data-role="button">Like CASA on Facebook</a>
    <a href="http://twitter.com/home?status=%23laaf2012" data-role="button">Tweet about LAAF</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Schedule page -->
<div data-role="page" id="schedule">

  <div data-role="header">
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Friday, Jan. 27</li>
      <li><a href="#registration">5:00 pm - Open Registration</a></li>
      <li><a href="#competition">7:30 pm - Competition</a></li>
      <li><a href="#fri-afterparty">Afterparty</a></li>
      <li data-role="list-divider">Saturday, Jan. 28</li>
      <li><a href="#sat-welcome">8:30 am - Open Registration</a></li>
      <li><a href="#sat-workshops-9am">9:00 am - Workshops</a></li>
      <li><a href="#performance-sat-10am">10:00 am - AcaBombs</a></li>
      <li><a href="#sat-workshops-1030am">10:30 am - Workshops</a></li>
      <li><a href="#performance-sat-1130am">11:30 am - AcaBombs</a></li>
      <li><a href="#lunch">12:00 pm - Lunch Break</a></li>
      <li><a href="#sat-workshops-1pm">1:00 pm - Workshops</a></li>
      <li><a href="#performance-sat-2pm">2:00 pm - AcaBombs</a></li>
      <li><a href="#sat-workshops-230pm">2:30 pm - Workshops</a></li>
      <li><a href="#performance-sat-330pm">3:30 pm - AcaBombs</a></li>
      <li><a href="#sat-workshops-4pm">4:00 pm - Workshops</a></li>
      <li><a href="#dinner">5:00 pm - Dinner Break</a></li>
      <li><a href="#proconcert">7:30 pm - Professional Concert</a></li>
      <li><a href="#sat-afterparty">Afterparty</a></li>
      <li data-role="list-divider">Sunday, Jan. 29</li>
      <li><a href="#sun-workshops-10am">10:00 am - Workshops</a></li>
      <li><a href="#performance-sun-11am">11:00 am - Special Performance</a></li>
      <li><a href="#sun-workshops-1130am">11:30 am - Workshops</a></li>
      <li><a href="#recording">1:00 pm - Collaborative Recording Session</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Registration page -->
<div data-role="page" data-theme="a" id="registration">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
      <h2>Registration</h2>
      <h3>Friday, 5:00 - 7:30 pm</h3>
      <h3><em>Ackerman Grand Ballroom</em></h3>
    <p>
      Registration will be open from 5:00pm to 7:30pm on Friday, January 27 at the Ackerman Grand Ballroom, 2nd floor lobby. All passes will be available for pick-up. Please bring your Eventbrite ticket to trade in for your pass(es).
        </p>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Competition page -->
<div data-role="page" data-theme="a" id="competition">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Scholastic Competition</h2>
    <h3>Friday, 7:30 pm</h3>
      <h3><em>Ackerman Grand Ballroom</em></h3>
    <p>The doors will open at 7:00pm and the show will start prompty at 7:30pm.</p>
    <p>Competitors:</p>
     <ul>
       <li>UCLA Scattertones</li>
       <li>Cal Poly Take It SLO</li>
       <li>UCLA Bruin Harmony</li>
       <li>Calabasas High School Unstrumental</li>
       <li>University of Oregon On The Rocks</li>
       <li>UCLA Random Voices</li>
     </ul>
     <h3>Audience Favorite Award</h3>
     <p>At the end of the competition, when the judges leave to deliberate, we'll announce when the polls are open for you to vote for your favorite performance of the evening.  All you have to do is click the button below or text your vote using the instructions.  The system will only allow one vote per person, and will only be open for a 15 minute period.  You'll receive a confirmation message letting you know that your vote went through.</p>
     <a href="http://PollEv.com/LAAF" data-role="button" data-inline="true" data-theme="b">Vote</a>
     <p>To vote by text message, text one of the codes below to <a href="sms:22333">22333</a>.</p>

     <ul>
       <li>UCLA Scattertones - SCATTERTONES</li>
       <li>Cal Poly Take It SLO - TAKEITSLO</li>
       <li>UCLA Bruin Harmony - BRUIN</li>
       <li>Calabasas High School Unstrumental - UNSTRUMENTAL</li>
       <li>University of Oregon On The Rocks - ONTHEROCKS</li>
       <li>UCLA Random Voices - RANDOMVOICES</li>
     </ul>
     
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Friday Afterparty page -->
<div data-role="page" data-theme="a" id="fri-afterparty">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Afterparty</h2>
    <h3>Friday, after Collegiate Competition</h3>
      <h3>
        <strong>Acapulco Mexican Restaurant Y Cantina</strong><br />
    </h3>
      <p>1109 Glendon Ave<br />
         Los Angeles, CA 90024<br />
        <a href="tel:310-208-3884">310-208-3884</a><br />
        <a href="http://maps.google.com/maps?q=Acapulco+Mexican+Restaurant+Y+Cantina&hl=en&ll=34.068729,-118.439226&spn=0.041166,0.077162&sll=34.060695,-118.44429&sspn=0.04117,0.077162&vpsrc=6&t=m&radius=2.65&hq=Acapulco+Mexican+Restaurant+Y+Cantina&z=14&iwloc=A" data-role="button" data-inline="true" data-theme="b">Directions</a>
      </p>
  </div><!-- /content -->

</div><!-- /page -->



<!-- Start of Welcome Session page -->
<div data-role="page" data-theme="a" id="sat-welcome">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Open Registration</h2>
    <h3>Saturday, 8:30 am</h3>
      <h3><em>LAAF Check-in (between Haines and Royce Halls)</em></h3>
    <p>Just getting into town?  Weren't able to pick up your registration materials on Friday? Come to the official check-in area between Haines and Royce Halls to get them Saturday morning.</p>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Saturday 9AM Workshops page -->
<div data-role="page" id="sat-workshops-9am">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Saturday, 9:00 AM Workshops</li>
      <li><a href="#livesoundbasics">Live Sound Basics</a></li>
      <li><a href="#masterclass-sat-9am">Open Masterclass</a></li>
      <li><a href="#GroupDynamics">Group Dynamics</a></li>
      <li><a href="#arrangingpanel">Arranging Panel</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Live Sound Basics page -->
<div data-role="page" data-theme="a" id="livesoundbasics">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Live Sound Basics</h2> <span style="float:right; background-color: #4f4f4f; color: #ffffff; font-size: 12px; padding: 4px;">Sound!</span>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>Longo</em><br /><em>Royce 362</em></h4>
    <p>An introduction to the wide world of live sound. Learn how to amplify your voice to please crowds of people without running into trouble.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23LiveSound" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->



<!-- Start of Open Masterclass page -->
<div data-role="page" data-theme="a" id="masterclass-sat-9am">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Open Masterclass</h2> <span style="float: right; background-color: #fdff96; color: #000000; font-size: 12px; padding: 4px;">Master!</span>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>w/ competitor or host</em><br /><em>Haines 118</em></h4>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23masterclass" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Group Dynamics page -->
<div data-role="page" data-theme="a" id="GroupDynamics">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Group Dynamics</h2> <span style="float:right; background-color: #80ace6; color: #ffffff; font-size: 12px; padding: 4px;">Manage!</span>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>J. Hoffman</em><br /><em>Haines 220</em></h4>
    <p>Description TBA. This limited-enrollment workshop requires advance registration</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23GroupDynamics" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Arranging Panel page -->
<div data-role="page" data-theme="a" id="arrangingpanel">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Arranging Panel</h2> <span style="float:right; background-color: #067d11; color: #ffffff; font-size: 12px; padding: 4px;">Create!</span>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>Anderson, Bram, et al.</em><br /><em>Royce 156</em></h4>
    <p>Don't settle for just "getting the notes right". Move beyond imitation and into creation, and learn what separates an okay arrangement from a truly effective one, as this workshop gives you a whole new bag of things to ponder while scribbling and/or clicking.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23AcaArrange" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Performance Saturday 10:00 am page -->
<div data-role="page" data-theme="a" id="performance-sat-10am">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>AcaBombs</h2>
    <h3>Saturday, 10:00 am</h3>
      <p><strong>Abbe Road Jazz Choir (Santa Susana High School)</strong> - <em>Janss Patio</em></p>
      <p><strong>Frequency (CAL)</strong> - <em>Royce Steps</em></p>
      <p><strong>Medleys (UCLA)</strong> - <em>between Royce and Rolfe</em></p>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Saturday 10:30 AM Workshops page -->
<div data-role="page" id="sat-workshops-1030am">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Saturday, 10:30 AM Workshops</li>
      <li><a href="#deconstructinglead">Deconstructing the Lead</a></li>
      <li><a href="#iamwoman">I Am Woman</a></li>
      <li><a href="#allmaleacappella">All-male A Cappella</a></li>
      <li><a href="#improv">Improv</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Deconstructing the Lead page -->
<div data-role="page" data-theme="a" id="deconstructinglead">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Deconstructing the Lead</h2> <span style="float:right; background-color: #c4162a; color: #ffffff; font-size: 12px; padding: 4px;">Perform!</span>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>G. Hoffman</em><br /><em>Royce 362</em></h4>
    <p>A cappella is an ensemble sport, but a great lead can make a performance while a mediocre one can sink it. Come learn about all of the tools you need to step forward from the group and deliver a powerful solo, from developing your performance concept and style, to stage presence and connecting with the audience, to phrasing, mic technique, and recording in the studio.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23DeconstructLead" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of I Am Woman page -->
<div data-role="page" data-theme="a" id="iamwoman">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>I Am Woman</h2> <span style="float:right; background-color: #274165; color: #ffffff; font-size: 12px; padding: 4px;">Explore!</span>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>Francis, et al.</em><br /><em>Haines 118</em></h4>
      <p>It ain't easy walking stilettos... but somebody's gotta do it! Come listen to some of the biggest female names in a cappella talk about all things woman! From their thoughts on being sexy on stage to who their biggest influences are, moderator Kari Francis will be asking our esteemed panel all about what it's like to be a woman in a cappella.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23IAmWoman" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of All-male A Cappella page -->
<div data-role="page" data-theme="a" id="allmaleacappella">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>All-male A Cappella</h2> <span style="float:right; background-color: #80ace6; color: #ffffff; font-size: 12px; padding: 4px;">Manage!</span>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>Koutzoukis</em><br /><em>Haines 220</em></h4>
      <p>An open but guided discussion on succeeding as an all-male group, from music to image.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23MaleAcappella" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of A Cappella Strategy page -->
<div data-role="page" data-theme="a" id="improv">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Improv</h2> <span style="float:right; background-color: #067d11; color: #ffffff; font-size: 12px; padding: 4px;">Create!</span>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>Gawboy</em><br /><em>Royce 156</em></h4>
    <p>Improvisation in warmups, rehearsals, and song creation!</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23Improv" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->



<!-- Start of Performance Saturday 11:30 am page -->
<div data-role="page" data-theme="a" id="performance-sat-1130am">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>AcaBombs</h2>
    <h3>Saturday, 11:30 am - 12:00 pm</h3>
    <p><strong>Lounge Lizards (UC Davis)</strong> - <em>Janss Patio</em></p>
    <p><strong>Harmonics (Stanford University)</strong> - <em>Royce Steps</em></p>
    <p><strong>Hightones (UC Santa Cruz)</strong> - <em>between Royce and Rolfe</em></p>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Saturday Lunch page -->
<div data-role="page" data-theme="a" id="lunch">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Lunch Break</h2>
    <h3>Saturday, 12:00 - 1:00 pm</h3>
    <p>There are plenty of options for lunch at the Ackerman Union, adjacent to Ackerman Grand Ballroom.</p>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Saturday 1:00 PM Workshops page -->
<div data-role="page" id="sat-workshops-1pm">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Saturday, 1:00 PM Workshops</li>
      <li><a href="#beginningVP">Beginning VP</a></li>
      <li><a href="#TSOQA">The Sing-Off Q&amp;A</a></li>
      <li><a href="#GoldRecords">I Make Gold Records</a></li>
      <li><a href="#visualIdentity">Visual Identity</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Beginning VP page -->
<div data-role="page" data-theme="a" id="beginningVP">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Beginning VP</h2> <span style="float:right; background-color: #c4162a; color: #ffffff; font-size: 12px; padding: 4px;">Perform!</span>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>Francis, Pilat</em><br /><em>Royce 362</em></h4>
    <p>Want to make atomic clocks weep cesium tears in envy of your superhuman groove? Start here.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23BeginningVP" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of The Sing-Off Q and A page -->
<div data-role="page" data-theme="a" id="TSOQA">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>The Sing-Off Q&amp;A</h2> <span style="float: right; background-color: #fdff96; color: #000000; font-size: 12px; padding: 4px;">Master!</span>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>Moderator: G. Hoffman</em><br /><em>Haines 118</em></h4>
    <p>Want to find out how the groups on The Sing-Off <em>did that</em>? Here's your chance to ask! Join this exciting conversation with performers and others from The Sing-Off, moderated by George Hoffman of LAAF 2012 headliners Hookslide.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23TSOQ%26A" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of I Make Gold Records page -->
<div data-role="page" data-theme="a" id="GoldRecords">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>I Make Gold Records</h2> <span style="float:right; background-color: #4f4f4f; color: #ffffff; font-size: 12px; padding: 4px;">Sound!</span>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>Sperandio, et al.</em><br /><em>Haines 220</em></h4>
    <p>Planning, syllable sexification, sonic goals, distribution, group image, and more: how to make your album go triple platinum! ...without breaking the bank.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23GoldRecords" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Visual Identity page -->
<div data-role="page" data-theme="a" id="visualIdentity">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Defining your Group's VISUAL Identity</h2> <span style="float:right; background-color: #80ace6; color: #ffffff; font-size: 12px; padding: 4px;">Manage!</span>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>Daly</em><br /><em>Royce 156</em></h4>
    <p>Your group can't afford to just sound good, you have to look good too - on stage AND in promotional efforts, in print and online. Kieran Daly, a communication design specialist, will explain what it takes to create a cohesive visual presentation across your entire "product". Using examples of great and not-so-great presentations and promo materials, he'll help you zero in on the key elements your group needs to create an identity that helps creat a following, and brings fans back show after show.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23VisualIdentity" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Performance Saturday 2:00 pm page -->
<div data-role="page" data-theme="a" id="performance-sat-2pm">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>AcaBombs</h2>
    <h3>Saturday, 2:00 - 2:30 pm</h3>
    <p><strong>Voxel Rox (CAL)</strong> - <em>Janss Patio</em></p>
    <p><strong>Take it SLO (Cal Poly San Luis Obispo)</strong> - <em>Royce Steps</em></p>
    <strong>Signature (UCLA)</strong> - <em>between Royce and Rolfe</em></p>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Saturday 2:30 PM Workshops page -->
<div data-role="page" id="sat-workshops-230pm">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Saturday, 2:30 PM Workshops</li>
      <li><a href="#rhythmSection">The Rhythm Section</a></li>
      <li><a href="#EssList">Essential Listening</a></li>
      <li><a href="#DigitalDistribution">Digital Distribution</a></li>
      <li><a href="#AcappellaPSYCH">A cappella PSYCH</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of The Rhythm Section page -->
<div data-role="page" data-theme="a" id="rhythmSection">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>The Rhythm Section</h2> <span style="float:right; background-color: #c4162a; color: #ffffff; font-size: 12px; padding: 4px;">Perform!</span>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>Curless, Smith</em><br /><em>Royce 362</em></h4>
    <p>Vocal percussion is cool, but is it just for show or rather an integral contribution to the music? Discover some key elements in making your bass and percussion work TOGETHER to make better music!</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23RhythmSection" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Essential Listening page -->
<div data-role="page" data-theme="a" id="EssList">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Essential Listening</h2> <span style="float:right; background-color: #274165; color: #ffffff; font-size: 12px; padding: 4px;">Explore!</span>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>Stevens</em><br /><em>Haines 118</em></h4>
    <p>What is there to listen to, how might we listen to it, and why? In this interactive seminar we develop our critical listening skills -- think Alexander technique for the ears! -- by asking historical, formal, and ethical questions about the music we love so much ... and by rediscovering what it means to be astonished!</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23EssList" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Digital Distribution page -->
<div data-role="page" data-theme="a" id="DigitalDistribution">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Digital Distribution</h2> <span style="float:right; background-color: #80ace6; color: #ffffff; font-size: 12px; padding: 4px;">Manage!</span>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>Crawford</em><br /><em>Haines 220</em></h4>
    <p>Whether it's on iTunes, YouTube, Facebook, Pandora, Spotify, Turntable.fm, or your website, showcasing your live and recorded music should be simple and straight-forward. But if it's a cover, you usually need a license. This class will teach you how to quickly and easily license your music so that you can get back to the much more fun job of creating it.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23DigitalDistribution" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of A cappella PSYCH page -->
<div data-role="page" data-theme="a" id="AcappellaPSYCH">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>A cappella PSYCH</h2> <span style="float:right; background-color: #067d11; color: #ffffff; font-size: 12px; padding: 4px;">Create!</span>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>Caruso</em><br /><em>Royce 156</em></h4>
    <p>Get the most out of your singers! This interactive workshop includes warm-ups and other exercises from the psychological point of view of sensation and perception. Intrigued? Come check it out. It'll change the way you and your group sing forever!</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23AcaPSYCH" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Performance Saturday 3:30 pm page -->
<div data-role="page" data-theme="a" id="performance-sat-330pm">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>AcaBombs</h2>
    <h3>Saturday, 3:30 - 4:00 pm</h3>
    <p><strong>Traffic Jam (CAL)</strong> - <em>Janss Patio</em></p>
    <p><strong>Shades (The Claremont Colleges)</strong> - <em>Royce Steps</em></p>
    <p><strong>Trojan Men (University of Southern California)</strong> - <em>between Royce and Rolfe</em></p>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Saturday 4:00 PM Workshops page -->
<div data-role="page" id="sat-workshops-4pm">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Saturday, 4:00 PM Workshops</li>
      <li><a href="#BassLowdown">The Lowdown on Bass Vocals</a></li>
      <li><a href="#masterclass-sat-4pm">Open Masterclass</a></li>
      <li><a href="#PlanYrAcaFest">Planning an A Cappella Festival</a></li>
      <li><a href="#Songwriting">Songwriting</a></li>
      
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of The Lowdown on Bass Vocals page -->
<div data-role="page" data-theme="a" id="BassLowdown">

  <div data-role="header">
    <a href="#sat-workshops-4pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>The Lowdown on Bass Vocals</h2> <span style="float:right; background-color: #c4162a; color: #ffffff; font-size: 12px; padding: 4px;">Perform!</span>
    <h3>Saturday, 4:00 - 5:00 pm</h3>
      <h4><em>Vinson</em><br /><em>Royce 362</em></h4>
    <p>Discussing singing and arranging for bass in an all female group, as well as learning how to use your bass voice, mic technique, and recording techniques for both men and women.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23BassVocals" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Open Masterclass page -->
<div data-role="page" data-theme="a" id="masterclass-sat-4pm">

  <div data-role="header">
    <a href="#sat-workshops-4pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Open Masterclass</h2> <span style="float: right; background-color: #fdff96; color: #000000; font-size: 12px; padding: 4px;">Master!</span>
    <h3>Saturday, 4:00 - 5:00 pm</h3>
      <h4><em>w/ competitor or host</em><br /><em>Haines 118</em></h4>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23masterclass" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Planning an A cappella Festival page -->
<div data-role="page" data-theme="a" id="PlanYrAcaFest">

  <div data-role="header">
    <a href="#sat-workshops-4pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Planning an A cappella Festival</h2> <span style="float:right; background-color: #80ace6; color: #ffffff; font-size: 12px; padding: 4px;">Manage!</span>
    <h3>Saturday, 4:00 - 5:00 pm</h3>
      <h4><em>LoBiondo, He</em><br /><em>Haines 220</em></h4>
    <p>Collegiate a cappella communities all over the country aspire to host their own festivals that bring other groups to their campus. This workshop will provide the fundamentals of event planning, techniques for communicating with other a cappella groups and campus administrators, and how to get your campus excited about your festival!</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23PlanYrAcaFest" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Songwriting page -->
<div data-role="page" data-theme="a" id="Songwriting">

  <div data-role="header">
    <a href="#sat-workshops-4pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Songwriting</h2> <span style="float:right; background-color: #067d11; color: #ffffff; font-size: 12px; padding: 4px;">Create!</span>
    <h3>Saturday, 4:00 - 5:00 pm</h3>
      <h4><em>Willacy</em><br /><em>Royce 156</em></h4>
    <p>Learn the basics about writing good lyrics, melodies, and chords, and how to fit them together to write more, and better, songs.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23Songwriting" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Saturday Dinner page -->
<div data-role="page" data-theme="a" id="dinner">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Dinner Break</h2>
    <h3>Saturday, 5:00 - 7:30 pm</h3>
    <p>Please visit one of our food sponsors for dinner.</p>
    <h3>Enzo's Pizzeria</h3>
    <p>10940 Weyburn Ave<br />
       Los Angeles, CA 90024<br />
       <a href="http://www.enzospizzeria.com/">Website</a><br />
       <a href="tel:310-208-3696">310-208-3696</a>
  </div><!-- /content -->

</div><!-- /page -->



<!-- Start of Pro Concert page -->
<div data-role="page" data-theme="a" id="proconcert">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Professional Concert</h2>
    <h3>Saturday, 7:30 pm</h3>
    <h4><em>Ackerman Grand Ballroom</em></h4>
    <p><strong>Featuring:</strong><br /><br />
      Duwende<br /><br />
      Pentatonix<br /><br />
      Hokslide<br />
    </p>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Saturday Afterparty page -->
<div data-role="page" data-theme="a" id="sat-afterparty">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Afterparty</h2>
    <h3>Saturday, after Professional Concert</h3>
    <h3>
      <strong>Acapulco Mexican Restaurant Y Cantina</strong><br />
  </h3>
    <p>1109 Glendon Ave<br />
       Los Angeles, CA 90024<br />
      <a href="tel:310-208-3884">310-208-3884</a><br />
      <a href="http://maps.google.com/maps?q=Acapulco+Mexican+Restaurant+Y+Cantina&hl=en&ll=34.068729,-118.439226&spn=0.041166,0.077162&sll=34.060695,-118.44429&sspn=0.04117,0.077162&vpsrc=6&t=m&radius=2.65&hq=Acapulco+Mexican+Restaurant+Y+Cantina&z=14&iwloc=A" data-role="button" data-inline="true" data-theme="b">Directions</a>
    </p>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Sunday 10:00 AM Workshops page -->
<div data-role="page" id="sun-workshops-10am">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Sunday, 10:00 AM Workshops</li>
      <li><a href="#LAAF2012QA">Headliners Q&amp;A</a></li>
      <li><a href="#GroupMotivation">Group Motivation</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Headliners Q&A page -->
<div data-role="page" data-theme="a" id="LAAF2012QA">

  <div data-role="header">
    <a href="#sun-workshops-10am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Headliners Q&amp;A</h2> <span style="float: right; background-color: #fdff96; color: #000000; font-size: 12px; padding: 4px;">Master!</span>
    <h3>Sunday, 10:00 - 11:00 am</h3>
      <h4><em>Headliners</em><br /><em>Haines 118</em></h4>
    <p>Wondering how the headliners <em>did that</em>? Here's your chance to ask! Join this exciting conversation with LAAF 2012 performers.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23HeadlinerQ%26A" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Group Motivation page -->
<div data-role="page" data-theme="a" id="GroupMotivation">

  <div data-role="header">
    <a href="#sun-workshops-10am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Group Motivation</h2> <span style="float:right; background-color: #80ace6; color: #ffffff; font-size: 12px; padding: 4px;">Manage!</span>
    <h3>Sunday, 10:00 - 11:00 am</h3>
      <h4><em>Aldag, Friday</em><br /><em>Haines 220</em></h4>
    <p>Having trouble keeping your group going? You're not the only one! Contemporary A cappella music is very demanding, and keeping people interested is a challenge. Come learn some motivational methods from two veterans of the community on how to keep your group happy and moving forward through auditions, rehearsals, recording, and everyday life!</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23GroupMotivation" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Performance Sunday 11:00 am page -->
<div data-role="page" data-theme="a" id="performance-sun-11am">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Performance</h2>
    <h3>Sunday, 11:00 - 11:30 am</h3>
      <h3><em>TBA</em></h3>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Sunday 11:30 AM Workshops page -->
<div data-role="page" id="sun-workshops-1130am">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Sunday, 11:30 AM Workshops</li>
      <li><a href="#sing-for-life">CAL: Sing for Your Life!</a></li>
      <li><a href="#seeing-music">Seeing Music</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of CAL: Sing for Your Life page -->
<div data-role="page" data-theme="a" id="sing-for-life">

  <div data-role="header">
    <a href="#sun-workshops-1130am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>CAL: Sing for your Life!</h2> <span style="float: right; background-color: #fdff96; color: #000000; font-size: 12px; padding: 4px;">Master!</span>
    <h3>Sunday, 11:30 am - 12:30 pm</h3>
      <h4><em>Keyes</em><br /><em>Haines 118</em></h4>
    <p>Current and prospective CAL group directors are invited to close out the festival with Contemporary A Cappella League Program Manager Tom Keyes to share ideas, thoughts and team up for future networking opportunities!</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23CAL" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Open Masterclass page -->
<div data-role="page" data-theme="a" id="seeing-music">

  <div data-role="header">
    <a href="#sun-workshops-1130am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Seeing Music </h2> <span style="float: right; background-color: #fdff96; color: #000000; font-size: 12px; padding: 4px;">Master!</span>
    <h3>Sunday, 11:30 am - 12:30 pm</h3>
      <h4><em>Eldredge</em><br /><em>Haines 220</em></h4>
      <p>Event photographer Michael Eldredge presents a collection of images from a cappella performances. Reflects on mechanisms used by performers to excite, entertain, and elicit emotion from their audience. And invites discussion on translating emotion and experience into performance with physical expression, both individually, and as a group.</p>
    <a href="http://twitter.com/home?status=%23laaf2012%20%23SeeingMusic" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Collaborative Recording page -->
<div data-role="page" data-theme="a" id="recording">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Collaborative Recording Session</h2>
    <h3>Sunday, 1:00 pm</h3>
      <h3><em>TBA</em></h3>
      <p>A closed session, open to VIP pass holders and collegiate competition winners only.</p>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Music page -->
<div data-role="page" id="music">

  <div data-role="header">
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('music'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <ul data-role="listview" data-theme="g">
      <li data-role="list-divider">Duwende</li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/remember-the-music-michael/id438291046">
          <img src="./images/remember-the-music.jpg" class="ul-li-thumb" />
          Remember: The Music of Michael Jackson
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/collective/id274631797">
          <img src="./images/collective.jpg" class="ul-li-thumb" />
          Collective
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/radio-screaming/id75370148">
          <img src="./images/radio-screaming.jpg" class="ul-li-thumb" />
          Radio Screaming
        </a>
      </li>
      <li data-role="list-divider">Hookslide</li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://www.cdbaby.com/cd/hookslide2">
          <img src="./images/hookslide_cover.jpg" class="ul-li-thumb" />
          Bump it up
        </a>
      </li>
      <li data-role="list-divider">Sing! Compilations</li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/sing-a-vocal-explosion-a-cappella/id395435524">
          <img src="./images/sing1.jpg" class="ul-li-thumb" />
          Sing: A Vocal Explosion
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/sing-2-eclectic-boogaloo-a/id395467542?uo=4">
          <img src="./images/sing2.jpg" class="ul-li-thumb" />
          Sing 2: Eclectic Boogaloo
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/id395442220?uo=4">
          <img src="./images/sing3.jpg" class="ul-li-thumb" />
          Sing 3: Melange a Trois
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/sing-iv-good-medicine-a-cappella/id395375366?uo=4">
          <img src="./images/sing4.jpg" class="ul-li-thumb" />
          Sing 4: Good Medicine
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/sing-v-groovus-a-cappella/id395337952?uo=4">
          <img src="./images/sing5.jpg" class="ul-li-thumb" />
          Sing 5: Groovus
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/sing-six-sunny-side-up-a-cappella/id359334942?uo=4">
          <img src="./images/sing6.jpg" class="ul-li-thumb" />
          Sing 6: Sunny Side Up
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/sing-7-lucky-a-cappella/id403899873">
          <img src="./images/sing7.png" class="ul-li-thumb" />
          Sing 7: Lucky
        </a>
      </li>
      <li>
        <a class="ul-li-desc" target="_blank" class="external" href="http://itunes.apple.com/us/album/sing-8-too-cubed-a-cappella/id480173505">
          <img src="./images/sing8.jpg" class="ul-li-thumb" />
          Sing 8: Too Cubed
        </a>
      </li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

</body>

</html>