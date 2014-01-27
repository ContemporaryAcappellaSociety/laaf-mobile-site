<?php

function footer($currentPage)
{
  $footer = <<<FOOTER
  <div data-role="navbar">
    <ul>
FOOTER;

  $pages = array(
    'schedule',
    'masterclasses',
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
     <li><a href="http://m.la-af.com/map.php" rel="external" data-prefetch>Map</a></li>
    </ul>
  </div><!-- /navbar -->
FOOTER;

  return $footer;
}

?>
<!DOCTYPE html>
<html>
  <head>
  <title>LAAF 2013 Schedule</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="jquery.mobile-1.0rc1.min.css" />
  <link rel="stylesheet" href="css/themes/LAAF.css" />
  <link rel="apple-touch-icon" href="/custom_icon.png"/>
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
         <li><a href="#masterclasses">Masterclasses</a></li>
         <li><a href="http://m.la-af.com/map.php" rel="external" data-prefetch>Map</a></li>
        </ul>
      </div>
    </div><!-- /header -->

    <div data-role="content">
      <h2>LAAF 2013 Schedule</h2>
      <h3>Subscribe to Schedule Changes via Text</h3>
      <p>To receive notifications of any last minute schedule changes on your phone, text "subscribe" to <a href="sms:+13107362696">(310) 736-2696</a></p>
      <hr>
      <p>LAAF 2013 is brought to you by <a href="http://casa.org/">The Contemporary A Cappella Society</a>.</p>
      <img width="100" style="margin-left: auto; margin-right: auto;" src="./images/casa.jpg" alt="CASA">
      <a href="http://www.facebook.com/laacappellafestival" data-role="button">Like LAAF on Facebook</a>
      <a href="http://www.facebook.com/acappellanow" data-role="button">Like CASA on Facebook</a>
      <a href="http://twitter.com/home?status=%23laaf2013" data-role="button">Tweet about LAAF</a>
    </div><!-- /content -->

  </div><!-- /page -->


  <!-- Start of Masterclasses page -->
  <div data-role="page" data-theme="a" id="masterclasses">

    <div data-role="header">
      <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
      <?= footer('masterclasses'); ?>
    </div><!-- /header -->

    <div data-role="content">
      <h2>Masterclass Schedule</h2>

      <p>All sessions listed here are closed and only open to the participants listed below.</p>

      <h3>Saturday</h3>
      <table>
        <tr>
          <td><strong>Time</strong></td>
          <td><strong>THH 205</strong></td>
          <td><strong>THH 207</strong></td>
          <td><strong>THH 209</strong></td>
          <td><strong>THH 211</strong></td>
          <td><strong>THH 217</strong></td>
        </tr
        <tr>
          <td>9:00 AM</td>
          <td>Abbe Road Jazz Choir<br /><br /><em>Stevens</em></td>
          <td>Tritones<br /><br /><em>Dietz</em></td>
          <td>Lounge Lizards<br /><br /><em>Kamp</em></td>
          <td>Veritas<br /><br /><em>Rogers</em></td>
          <td>[open]</td>
        </tr>
        <tr>
          <td>10:30 AM</td>
          <td>Take it SLO<br /><br /><em>Slutsky</em></td>
          <td>Unstrumental<br /><br /><em>Dietz</em></td>
          <td>Vocal Rush<br /><br /><em>Anderson</em></td>
          <td>Divisi<br /><br /><em>Sperandio</em></td>
          <td>Voxel Rox<br /><br /><em>Aldag, Keyes</em></td>
        </tr>
        <tr>
          <td>1:00 PM</td>
          <td>Signature<br /><br /><em>Stevens, Juliano</em></td>
          <td>MEDleys<br /><br /><em>J. Hoffman, Koutzoukis</em></td>
          <td>Reverse Osmosis<br /><br /><em>Ruiz</em></td>
          <td>Traffic Jam<br /><br /><em>Keyes</em></td>
          <td>VP Breakaway</td>
        </tr>
        <tr>
          <td>2:30 PM</td>
          <td>Harmonics<br /><br /><em>Stevens, Holland</em></td>
          <td>Cadenza<br /><br /><em>Baldwin, LoBiondo</em></td>
          <td>Daughters of Triton<br /><br /><em>Forkish</em></td>
          <td>Vocal Motion<br /><br /><em>Smith</em></td>
          <td>Scattertones<br /><br /><em>Bram</em></td>
        </tr>
      </table>

      <h3>Sunday</h3>
      <table>
        <tr>
          <td><strong>Time</strong></td>
          <td><strong>VKC 261</strong></td>
          <td><strong>VKC 257</strong></td>
          <td><strong>VKC 252</strong></td>
        </tr
        <tr>
          <td>10:00 AM</td>
          <td>Mind the Gap<br /><br /><em>Ruiz</em></td>
          <td>Trojan Men<br /><br /><em>Baumgartner</em></td>
          <td>Brothas From Otha Mothas<br /><br /><em>TBD</em></td>
        </tr>
      </table>
  
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
      <!-- 
      <li data-role="list-divider">Friday, Feb. 1</li>
      <li><a href="#registration">5:00 pm - Open Registration</a></li>
      <li><a href="#fri-acabombs">7:00 pm - AcaBombs</a></li>
      <li><a href="#competition">8:00 pm - Competition</a></li>
      <li><a href="#fri-afterparty">Afterparty</a></li>
      -->
      <li data-role="list-divider">Saturday, Feb. 2</li>
      <li><a href="#sat-welcome">8:30 am - Late Registration</a></li>
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
      <li><a href="#proconcert">8:00 pm - Professional Concert</a></li>
      <li><a href="#sat-afterparty">Afterparty</a></li>
      <li data-role="list-divider">Sunday, Feb. 3</li>
      <li><a href="#sun-workshops-10am">10:00 am - Workshops</a></li>
      <li><a href="#sun-workshops-1130am">11:30 am - Workshops</a></li>
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
      <h3>Friday, 5:00 - 8:00 pm</h3>
      <h3><em>Bovard Auditorium</em></h3>
    <p>
      Registration will be open from 5:00pm to 8:00pm on Friday, February 1 at the Bovard Auditorium. All passes will be available for pick-up. Please bring your Eventbrite ticket to trade in for your pass(es).
    </p>
  </div><!-- /content -->

</div><!-- /page -->



<!-- Start of Friday AcaBombs page -->
<div data-role="page" data-theme="a" id="fri-acabombs">

  <div data-role="header">
    <a href="#schedule" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
      <h2>AcaBombs</h2>
      <h3>Friday, 7:00 - 7:30 pm</h3>
      <h3><em>Outside Bovard Auditorium</em></h3>
    <p>
      Vocal Motion
    </p>
    <p>
      Divisi
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
    <h3>Friday, 8:00 pm</h3>
    <h3><em>Bovard Auditorium</em></h3>
    <p>
      University of Southern California<br />
      3551 Trousdale Parkway<br />
      Los Angeles, CA 90089<br />
    </p>
    <p>Doors open at 7:30pm</p>
    <p>Competitors:</p>
     <ul>
       <li>UCLA Scattertones</li>
       <li>Oakland School for the Arts Vocal Rush</li>
       <li>USC Reverse Osmosis</li>
       <li>Calabasas High School Unstrumental</li>
       <li>USC Trojan Men</li>
       <li>UCLA Medleys</li>
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
       <strong>Traditions</strong><br />
     </h3>
     <p>3551 Trousdale Pkwy<br />
        Los Angeles, CA 90089<br />
       <a href="tel:213-821-3445">213-821-3445</a><br />
       <a href="http://goo.gl/maps/0wf5p" data-role="button" data-inline="true" data-theme="b">Directions</a>
     </p>
     <p>Traditions is located in the basement of the Ronald Tutor Campus Center at the University of Southern California. The main entrance to Traditions is located on Downey Way at the rear of the building. Be ready to present ID though patrons of all ages are allowed to enter.</p>
  </div><!-- /content -->

</div><!-- /page -->



<!-- Start of Late Registration page -->
<div data-role="page" data-theme="a" id="sat-welcome">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Open Registration</h2>
    <h3>Saturday, 8:30 am</h3>
      <h3><em>LAAF Check-in / Info Table</em></h3>
    <p>Just getting into town?  Weren't able to pick up your registration materials on Friday? Come to the official check-in area outside of Taper Hall to get them Saturday morning.</p>
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
      <li><a href="#rhythm-section">Rhythm Section</a></li>
      <li><a href="#mastering-audio">Mastering Audio</a></li>
      <li><a href="#strengthen-female-aca">Strengthening Female A Cappella</a></li>
      <li><a href="#arranging-panel">PANEL: Understanding Arranging</a></li>
      <li><a href="#group-motivation">Group Motivation</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Rhythm Section page -->
<div data-role="page" data-theme="a" id="rhythm-section">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Rhythm Section</h2>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>Curless, Smith</em><br /><em>THH 301</em></h4>
    <p>Showy vocal percussion and creative bass lines are impressive, but how do you make them groove together? Learn some key strategies from industry pros, Trist and Jeff of m-pact, to make your rhythm section set the tone.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23RhythmSection" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Mastering Audio page -->
<div data-role="page" data-theme="a" id="mastering-audio">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Mastering Audio</h2>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>Sperandio</em><br /><em>THH 116</em></h4>
    <p>Mastering is an essential part of making your recorded music amazing. In this workshop we distinguish mastering from mixing; discuss how to prepare for mastering; learn about the process; discuss aspects of mastering specific to vocal music; and look to the future!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23mastering" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Strengthening Female A Cappella page -->
<div data-role="page" data-theme="a" id="strengthen-female-aca">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Strengthening Female A cappella</h2>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>Forkish</em><br /><em>WPH 207</em></h4>
    <p>The "rise of female a cappella" has been steady for about a decade, but has it been strong? Has it reached its fullest potential, largest audience, and greatest representation? From arrangement, to performance acumen, to vocal stylings and range, we will explore the genre's tremendous capacity to grow, innovate, take risks and make voices heard.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23AcaFemales" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of PANEL: Understanding Arranging page -->
<div data-role="page" data-theme="a" id="arranging-panel">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>PANEL: Understanding Arranging</h2>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>T. Anderson, Headliners</em><br /><em>WPH 205</em></h4>
    <p>Don't settle for just "getting the notes right". Move beyond imitation and into creation, and learn what separates an okay arrangement from a truly effective one, as this workshop gives you a whole new bag of things to ponder while scribbling and/or clicking.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23arranging" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Group Motivation page -->
<div data-role="page" data-theme="a" id="group-motivation">

  <div data-role="header">
    <a href="#sat-workshops-9am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Group Motivation</h2>
    <h3>Saturday, 9:00 - 10:00 am</h3>
      <h4><em>Aldag</em><br /><em>WPH 107</em></h4>
    <p>Having trouble keeping your group going? You're not the only one! Contemporary A cappella music is very demanding, and keeping people interested is a challenge. Come learn some motivational methods from a veteran of the community on how to keep your group happy and moving forward through auditions, rehearsals, recording, and everyday life!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23motivation" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of AcaBomb Saturday 10:00 am page -->
<div data-role="page" data-theme="a" id="performance-sat-10am">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>AcaBombs</h2>
    <h3>Saturday, 10:00 am</h3>
      <p><strong>Signature</strong> - <em>Trousdale South - on the median, facing north</em></p>
      <p><strong>Lounge Lizards</strong> - <em>Trousdale North - behind the fountain, facing south. In front of main entrance of Taper Hall.</em></p>
      <p><strong>Abbe Road Jazz Choir</strong> - <em>Bogardus Courtyard - upper level, off the SE corner of WPH facing southwest</em></p>
      <img src="./images/acabombs.png" style="width:100%;">
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
      <li><a href="#open-master-1">Open Masterclass</a></li>
      <li><a href="#singtech">Better Singing Through Technology</a></li>
      <li><a href="#global">PANEL: Global Future of A Cappella</a></li>
      <li><a href="#arrangingstyles">Arranging in Various Styles</a></li>
      <li><a href="#improv">On-Stage Improvisation</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Open Masterclass page -->
<div data-role="page" data-theme="a" id="open-master-1">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Open Masterclass</h2>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>Delilah, UCLA Scattertones</em><br /><em>THH 301</em></h4>
      <p>In open masterclasses, LAAF headliners work one-on-one with an attendee group to bring their music to the next level in real time!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23masterclass" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Better Singing Through Technology page -->
<div data-role="page" data-theme="a" id="singtech">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Better Singing Through Technology</h2>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>Green, Koutzoukis</em><br /><em>THH 116</em></h4>
      <p>You're in an a cappella group and you sing together; that's a given. After recording many a cappella groups and editing hundreds of individual voices, trends begin to emerge that may not be that obvious to the naked ear. With Melodyne as our tool, come listen to and look at (anonymous) examples from real singers and learn to break (or enforce) some habits to give your group that extra edge, whether singing live or in the studio. Consider it a masterclass for your singing brain.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23bettersinging" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of PANEL: Global Future of A Cappella page -->
<div data-role="page" data-theme="a" id="global">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>PANEL: Global Future of A Cappella</h2>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>Hare, Girard, Bosio, Freeman</em><br /><em>WPH 207</em></h4>
      <p>Join our panel of international experts for a richly interactive discussion of the future of a cappella around the globe!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23globalaca" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Arranging in Various Styles page -->
<div data-role="page" data-theme="a" id="arrangingstyles">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Arranging in Various Styles</h2>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>Bram</em><br /><em>WPH 205</em></h4>
      <p>What makes musical styles tick? We'll cover genres including pop, funk, jazz, R&amp;B, Latin, reggae, folk, country, and everything in between, focusing on the key characteristics of each genre, developing the tools to deconstruct and recreate any musical style with a greater ease and authenticity.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23arrangingstyles" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of On-Stage Improvisation page -->
<div data-role="page" data-theme="a" id="improv">

  <div data-role="header">
    <a href="#sat-workshops-1030am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>On-Stage Improvisation and Patter</h2>
    <h3>Saturday, 10:30 - 11:30 am</h3>
      <h4><em>Ruiz</em><br /><em>WPH 107</em></h4>
      <p>In this workshop we focus on what to do during all of those times on stage when you're <em>not</em> singing, finding creative and unique ways to present your music, and taking the "fear" out of "Improvfearisation"! "Think outside the vox!"</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23improv" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of AcaBombs Saturday 11:30 am page -->
<div data-role="page" data-theme="a" id="performance-sat-1130am">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>AcaBombs</h2>
    <h3>Saturday, 11:30 am - 12:00 pm</h3>
    <p><strong>Mind the Gap</strong> - <em>Trousdale South - on the median, facing north</em></p>
    <p><strong>Cadenza</strong> - <em>Trousdale North - behind the fountain, facing south. In front of main entrance of Taper Hall.</em></p>
    <p><strong>Voxel Rox</strong> - <em>Bogardus Courtyard - upper level, off the SE corner of WPH facing southwest</em></p>
    <img src="./images/acabombs.png" style="width:100%;">
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
    <p>A variety of food options can be found at the Tutor Campus Center by Tommy Trojan and more options along Figueroa Ave between Exposition and 32nd.</p>
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
      <li><a href="#VPpanel">PANEL: Vocal Percussion</a></li>
      <li><a href="#open-master-2">Open Masterclass</a></li>
      <li><a href="#seeing-music">Seeing Music</a></li>
      <li><a href="#arrange4recording">Arranging for Recording</a></li>
      <li><a href="#festival-planning">Festival Planning</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of VP Panel page -->
<div data-role="page" data-theme="a" id="VPpanel">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>PANEL: Vocal Percussion</h2>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>Dietz, Headliners</em><br /><em>THH 101</em></h4>
    <p>Meet skilled vocal percussionists in the a cappella community and discover their strategies for mastering grooves, rhythms, and sounds!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23vp" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Open Masterclass page -->
<div data-role="page" data-theme="a" id="open-master-2">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Open Masterclass</h2>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>Mo5aic, Vocal Rush</em><br /><em>THH 116</em></h4>
    <p>In open masterclasses, LAAF headliners work one-on-one with an attendee group to bring their music to the next level in real time!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23masterclass" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Seeing Music page -->
<div data-role="page" data-theme="a" id="seeing-music">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Seeing Music</h2>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>Eldredge</em><br /><em>WPH 207</em></h4>
    <p>A visual exploration of live performance through concert photography. Followed by a discussion about the nature of impression and expression using non verbal communication to connect with our audience and better convey emotional content.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23seeingmusic" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Arranging for Recording page -->
<div data-role="page" data-theme="a" id="arrange4recording">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Arranging for Recording</h2>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>Girard</em><br /><em>WPH 205</em></h4>
    <p>Some arrangements sound incredible live. Some arrangements sound incredible recorded. Some arrangements don't sound incredible ever. Before wasting time, money and emotional energy on your next recording project, learn the tips and tricks for getting the most out of your arrangements. Additional topics include how not to piss off your editor and why mixing engineers aren't mind readers.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23arrange4recording" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Festival Planning page -->
<div data-role="page" data-theme="a" id="festival-planning">

  <div data-role="header">
    <a href="#sat-workshops-1pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Festival Planning</h2>
    <h3>Saturday, 1:00 - 2:00 pm</h3>
      <h4><em>He</em><br /><em>WPH 107</em></h4>
    <p>Collegiate a cappella communities all over the country aspire to host their own festivals that bring other groups to their campus. This workshop will provide the fundamentals of event planning, techniques for communicating with other a cappella groups and campus administrators, and how to get your campus excited about your festival!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23festivals" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of AcaBombs Saturday 2:00 pm page -->
<div data-role="page" data-theme="a" id="performance-sat-2pm">

  <div data-role="header">
    <a href="#schedule" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>AcaBombs</h2>
    <h3>Saturday, 2:00 - 2:30 pm</h3>
    <p><strong>Tritones</strong> - <em>Trousdale South - on the median, facing north</em></p>
    <p><strong>Traffic Jam</strong> - <em>Trousdale North - behind the fountain, facing south. In front of main entrance of Taper Hall.</em></p>
    <p><strong>Stanford Harmonics</strong> - <em>Bogardus Courtyard - upper level, off the SE corner of WPH facing southwest</em></p>
    <img src="./images/acabombs.png" style="width:100%;">
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
      <li><a href="#makefunny">Make A Funny</a></li>
      <li><a href="#producers">PANEL: Producers</a></li>
      <li><a href="#beyond-virtuosity">Beyond Virtuosity</a></li>
      <li><a href="#arranging4performance">Arranging for Performance</a></li>
      <li><a href="#rehearsal-techniques">Rehearsal Techniques</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Make A Funny page -->
<div data-role="page" data-theme="a" id="makefunny">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Make A Funny</h2>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>Dakaboom</em><br /><em>THH 101</em></h4>
    <p>Learn how Dakaboom do what they do in this interactive, energizing masterclass!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23dakaboom" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of PANEL: Producers page -->
<div data-role="page" data-theme="a" id="producers">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>PANEL: Producers</h2>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>Sperandio, Green, Koutzoukis, Hare, Bosio</em><br /><em>THH 116</em></h4>
    <p>Producers Dave Sperandio, Alex Green, Alex Koutzoukis, Bill Hare and Erik Bosio answer your questions about the ins and outs of making an album.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23producers" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Beyond Virtuosity page -->
<div data-role="page" data-theme="a" id="beyond-virtuosity">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Beyond Virtuosity</h2>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>D. Anderson, et al.</em><br /><em>WPH 207</em></h4>
    <p>Give your solos emotional depth! You already have a good voice and you're singing the right notes at the right time. We'll take tools like dynamics, phrasing, word emphasis, and physical movements and explore how they can help you convey meaning, elicit a powerful emotional response, and create a depth of purpose to your performance that transcends beauty. Learn to be more than just another pretty voice!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23solosinging" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Arranging for Performance page -->
<div data-role="page" data-theme="a" id="arranging4performance">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Arranging for Performance</h2>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>Pilat</em><br /><em>WPH 205</em></h4>
    <p>Set your group up for success by arranging songs that will kick @$$ on stage. Make your arrangement work in the real world of unpredictable sound systems, acoustic performances, and singing while your audience eats dinner. Learn techniques and tips that will make sure you connect to the live audience through your arrangement and your singers.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23arranging" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Rehearsal Techniques page -->
<div data-role="page" data-theme="a" id="rehearsal-techniques">

  <div data-role="header">
    <a href="#sat-workshops-230pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Rehearsal Techniques</h2>
    <h3>Saturday, 2:30 - 3:30 pm</h3>
      <h4><em>Dietz</em><br /><em>WPH 107</em></h4>
    <p>Tired of running out of practice time with your group? Feel like you're just shy of becoming a champion ensemble, if only you had the right focus? Come learn how to get the most out of every minute of your group's rehearsal! Together we will take a song through every level of preparation, from the foundation of technical accuracy to the development of emotional arc, all within 50 minutes!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23rehearsing" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
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
    <p><strong>Veritas</strong> - <em>Trousdale South - on the median, facing north</em></p>
    <p><strong>Bare Rhythm</strong> - <em>Trousdale North - behind the fountain, facing south. In front of main entrance of Taper Hall.</em></p>
    <p><strong>Take it SLO</strong> - <em>Bogardus Courtyard - upper level, off the SE corner of WPH facing southwest</em></p>
    <img src="./images/acabombs.png" style="width:100%;">
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
      <li><a href="#essential-listening">Essential Listening</a></li>
      <li><a href="#diy-recording">DIY Recording</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Essential Listening page -->
<div data-role="page" data-theme="a" id="essential-listening">

  <div data-role="header">
    <a href="#sat-workshops-4pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Essential Listening</h2>
    <h3>Saturday, 4:00 - 5:00 pm</h3>
      <h4><em>Stevens</em><br /><em>THH 101</em></h4>
    <p>What is there to listen to, how might we listen to it, and why? In this interactive workshop we sharpen our critical listening skills so as to deepen our love of music. This special edition of Essential Listening will culminate in an extended conversation with Sonos, who will be debuting original tracks from their new album!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23EssentialListening" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of DIY Recording page -->
<div data-role="page" data-theme="a" id="diy-recording">

  <div data-role="header">
    <a href="#sat-workshops-4pm" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>DIY Recording</h2>
    <h3>Saturday, 4:00 - 5:00 pm</h3>
      <h4><em>Ozment</em><br /><em>THH 116</em></h4>
    <p>Learn how to record your own album just like the pros while saving A LOT of money! Danny Ozment, owner of Emerald City Productions, will show you what equipment you need and what pro techniques to use to get amazing raw tracks that professional editors and producers can easily (and less expensively) turn into a cappella gold! We will also discuss what it takes to make your recorded arrangement come alive!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23DIYrecording" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
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
    <h3>Saturday, 5:00 - 8:00 pm</h3>
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
    <h3>Saturday, 8:00 pm</h3>
    <h4><em>Bovard Auditorium</em></h4>
    <p>
      University of Southern California<br />
      3551 Trousdale Parkway<br />
      Los Angeles, CA 90089<br />
    </p>
    <p>Doors open at 7:30pm</p>
    <p><strong>Featuring:</strong><br /><br />
      Mo5aic<br /><br />
      Delilah<br /><br />
      Freeman<br /><br />
      Dakaboom<br />
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
      <strong>Lotus</strong><br />
    </h3>
    <p>3742 S Flower St<br />
       Los Angeles, CA 90007<br />
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
      <li><a href="#recording-perspectives">Recording: Two Unique Perspectives</a></li>
      <li><a href="#open-master-3">Open Masterclass</a></li>
      <li><a href="#instrumental-imitation">Instrumental Imitation</a></li>
      <li><a href="#sytycd">So You Think You Can't Dance?</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Recording Perspectives page -->
<div data-role="page" data-theme="a" id="recording-perspectives">

  <div data-role="header">
    <a href="#sun-workshops-10am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Recording: Two Unique Perspectives</h2>
    <h3>Sunday, 10:00 - 11:00 am</h3>
      <h4><em>Hare, Bosio</em><br /><em>THH 210</em></h4>
    <p>Join renowned recording engineers Bill Hare and Erik Bosio for an energizing conversation about their experiences recording internationally, with an eye on the future!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23recording" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Open Masterclass page -->
<div data-role="page" data-theme="a" id="open-master-3">

  <div data-role="header">
    <a href="#sun-workshops-10am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Open Masterclass</h2>
    <h3>Sunday, 10:00 - 11:00 am</h3>
      <h4><em>Overboard, Unstrumental</em><br /><em>THH 101</em></h4>
    <p>In open masterclasses, LAAF headliners work one-on-one with an attendee group to bring their music to the next level in real time!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23masterclass" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of Instrumental Imitation page -->
<div data-role="page" data-theme="a" id="instrumental-imitation">

  <div data-role="header">
    <a href="#sun-workshops-10am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Instrumental Imitation</h2>
    <h3>Sunday, 10:00 - 11:00 am</h3>
      <h4><em>Rogers</em><br /><em>THH 114</em></h4>
    <p>You only use a fraction of the sounds you are capable of when speaking or singing. In this workshop we work through body awareness and basic concepts to achieve greater creativity and to find our own unique sounds. Topics include overtones, psychoacoustics, inhaling notes, buzzing pitches, split-voice singing, common throat positions, pneumatic independence, mic technique, and vocal health.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23imitation" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of So You Think You Can't Dance? page -->
<div data-role="page" data-theme="a" id="sytycd">

  <div data-role="header">
    <a href="#sun-workshops-10am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>So You Think You Can't Dance?</h2>
    <h3>Sunday, 10:00 - 11:00 am</h3>
      <h4><em>Fuller</em><br /><em>THH 116</em></h4>
    <p>Improve a cappella with choreography! In this interactive workshop we focus on the stories of songs to help inspire your choices in movement. We will investigate the entire process of choreographing a song: how to approach the material, develop an appropriate movement style, create meaningful and effective formations, and make sure the overall performance has passion, energy and truth. We will also break into groups and workshop choreography before ending with Q&amp;A.</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23soyouthinkyoucantdance" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
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
      <li><a href="#open-master-4">Open Masterclass</a></li>
      <li><a href="#group-business">PANEL: Group Business &amp; Financing</a></li>
    </ul>
  </div><!-- /content -->

</div><!-- /page -->

<!-- Start of Open Masterclass page -->
<div data-role="page" data-theme="a" id="open-master-4">

  <div data-role="header">
    <a href="#sun-workshops-1130am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Open Masterclass</h2>
    <h3>Sunday, 11:30 am - 12:30 pm</h3>
      <h4><em>Dakaboom, TBA</em><br /><em>THH 101</em></h4>
    <p>In open masterclasses, LAAF headliners work one-on-one with an attendee group to bring their music to the next level in real time!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23masterclass" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


<!-- Start of PANEL: Group Business &amp; Financing page -->
<div data-role="page" data-theme="a" id="group-business">

  <div data-role="header">
    <a href="#sun-workshops-1130am" data-rel="back" data-icon="arrow-l">Back</a>
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <?= footer('schedule'); ?>
  </div><!-- /header -->

  <div data-role="content">
    <h2>Let's Get Down to Business!</h2>
    <h3>Sunday, 11:30 am - 12:30 pm</h3>
      <h4><em>Eisner, Kamp</em><br /><em>THH 116</em></h4>
    <p>Master the fundamentals of business and ask advanced questions with a panel of international experts!</p>
    <a href="http://twitter.com/home?status=%23laaf2013%20%23" data-role="button" data-inline="true" data-theme="b">Tweet about this class</a>
  </div><!-- /content -->

</div><!-- /page -->


</body>

</html>