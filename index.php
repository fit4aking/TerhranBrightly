<?php
session_start();
$_SESSION['session_active'] = "1";
$session=session_id();
$_SESSION['sid'] = "$session";
include("online_now.php");

ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Business Networking Events, Free Business Networking Ads</title>
<meta name="author" content="mr brightly" />
<meta name="robots" content="index, follow" />
<meta name="msnbot" content="index" />
<meta name="description" content="Fit4aking provides Business Networking Events, Online Business Networking, Business Meetups, Free Events, Business Conferences, Business Fairs, Business Seminars, Network Marketing Events, Free ads for Events, Free ads, Free Business Directory Listing, kent UK" />
<meta name="keywords" content="Business Networking Events, Online Business Networking, Free Events, Free Business Directory Listing, Free Event Ads, Free ads" />

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="pickadate.js-3.5.6/lib/themes/default.css">
<link rel="stylesheet" href="pickadate.js-3.5.6/lib/themes/default.date.css">
<link rel="stylesheet" type="text/css" href="css/mobile.css"/>
<link href="../SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />

<!--<link rel="stylesheet" type="text/css" href="css/animate.css"/>-->
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/manifest.json">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/lay1.css">
<link rel="stylesheet" type="text/css" href="dt_picker/src/DateTimePicker.css" />
<script type="text/javascript" src="dt_picker/demo/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="dt_picker/src/DateTimePicker.js"></script>
<style type="text/css">
.TabbedPanelsContent table {
	text-align: left;
}
.TabbedPanelsContent h1 {
	font-size: 130%;
}
.style1 {font-size: 180%}
.style5 {
	color: #000000;
	font-size: 130%;
}
</style>
<meta name="theme-color" content="#ffffff">
<script type="text/javascript" src="city_state.js"></script><!--Fine 2-->
<script src="../SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script>
$(function() {

  $('#txtNumeric').keydown(function (e) {
  
    if (e.shiftKey || e.ctrlKey || e.altKey) {
    
      e.preventDefault();
      
    } else {
    
      var key = e.keyCode;
      
      if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
      
        e.preventDefault();
        
      }

    }
    
  });
  
});
</script>
</head>
<body>
<div id="eon-header">
<a href="home.php"><img src="logo/fit4aking-business-networking-events-logo.jpg" width="100%" height="100%" alt="Business Networking Events Kent UK" longdesc="http://www.fit4aking.com" /></a>
<br />
</div>
<div id="menu">
  <div id="CollapsiblePanel1" class="CollapsiblePanel">
    <div class="CollapsiblePanelTab" tabindex="0">MENU</div>
    <div class="CollapsiblePanelContent"> 
        <?php include("toc_mobile.php"); ?>
      </div>
  </div>
</div>
<div id="search">
<div id="CollapsiblePanel2" class="CollapsiblePanel">
    <div class="CollapsiblePanelTab" tabindex="0">EVENTS SEARCH</div>
      <div class="CollapsiblePanelContent">
          <?php include("external-date-time.php"); ?>
     </div>
  </div>
  <div align="center">
<div id="CollapsiblePanel3" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">UPCOMING EVENTS</div>
        <div class="CollapsiblePanelContent">
         <!--external_upcoming_events-->
         <?php include("external_upcoming_events.php"); ?>
       
      </div>
    </div>  
<div id="CollapsiblePanel4" class="CollapsiblePanel">
    <div class="CollapsiblePanelTab" tabindex="0" style="font-size:110%;">EVENTS MAILING LIST</div>
    <div class="CollapsiblePanelContent"> 	
<br />
<form action="mailing-list.php" method="post">
  <table width="80%" border="1" cellspacing="2" align="center">
  <tr>
    <td class="table4">
    
    <table width="99%" border="0" align="center">
    <tr>
      <td class="content_text">
      
     <h2 style="font-size:150%; padding-left:2%;">Events Mailing List</h2>
     <h3 style="font-size:100%; padding-left:2%;">Join our mailing list and get alerted on the Events you want, where you want them.</h3>
      
      </td>
    </tr>
    <tr>
      <td class="content_text">Your name</td>
    </tr>
    <tr>
      <td><input name="name" id="txtNumeric" type="text" maxlength="30" value="" class="cp_forms" style="width:98%;" /></td>
    </tr>
  <tr>
      <td colspan="2" class="content_text">Required Event</td>
      </tr>
    <tr>
      <td>
    <select name="cat" id="cat"  class="cp_forms" style="width:98%;">
    <option value="">Not Selected</option>
    <option value="Accessories">Accessories</option>
    <option value="Accounting">Accounting</option>
    <option value="Acting">Acting</option>
    <option value="Adult content">Adult content</option>
    <option value="Advertising">Advertising</option>
    <option value="Aging | Anti aging">Aging | Anti aging</option>
    <option value="Air Travel">Air Travel</option>
    <option value="Alcohol & Tobacco">Alcohol & Tobacco</option>
    <option value="Ancestry">Ancestry</option>
    <option value="Animal Related">Animal Related</option>
    <option value="Apartments / Condos">Apartments / Condos</option>
    <option value="Appliances">Appliances</option>
    <option value="Architecture">Architecture</option>
    <option value="Art">Art</option>
    <option value="Auctions">Auctions</option>
    <option value="Autos New">Autos New</option>
    <option value="Autos Used">Autos Used</option>
    <option value="Banking">Banking</option>
    <option value="Beer & Wine">Beer & Wine</option>
    <option value="Biking">Biking</option>
    <option value="Birth Days">Birth Days</option>
    <option value="Boating">Boating</option>
    <option value="Books | Authors">Books | Authors</option>
    <option value="Business">Business</option>
    <option value="Cats">Cats</option>
    <option value="Celebrities">Celebrities</option>
    <option value="Charity">Charity</option>
    <option value="Child related">Child related</option>
    <option value="Chiropractor">Chiropractor</option>
    <option value="Cleaning">Cleaning</option>
    <option value="Coffee & Tea">Coffee & Tea</option>
    <option value="Communication">Communication</option>
    <option value="Conspiracies">Conspiracies</option>
    <option value="Construction">Construction</option>
    <option value="Cooking">Cooking</option>
    <option value="Cooking">Cosmetics</option>
    <option value="Counseling">Counseling</option>
    <option value="Credit | Loan">Credit | Loan</option>
    <option value="Currency Trading">Currency Trading</option>
    <option value="Dating">Dating</option>
    <option value="Dental">Dental</option>
    <option value="Dogs">Dogs</option>
    <option value="Drugs | Medicine">Drugs | Medicine</option>
    <option value="Economy">Economy</option>
    <option value="Education">Education</option>
    <option value="Electronics">Electronics</option>
    <option value="Email & messaging">Email & messaging</option>
    <option value="Energy drinks">Energy drinks</option>
    <option value="Energy Nuclear">Energy Nuclear</option>
    <option value="Energy Oil & Gas">Energy Oil & Gas</option>
    <option value="Energy Renewable">Energy Renewable</option>
    <option value="Engineering">Engineering</option>
    <option value="Entertainment">Entertainment</option>
    <option value="Environment">Environment</option>
    <option value="Escort Service">Escort Service</option>
    <option value="Events | Networking">Events | Networking</option>
    <option value="Expats">Expats</option>
    <option value="Family & Marriage">Family & Marriage</option>
    <option value="Farming">Farming</option>
    <option value="Fashion">Fashion</option>
    <option value="Finance">Finance</option>
    <option value="Fishing">Fishing</option>
    <option value="Fitness & Nutrition">Fitness & Nutrition</option>
    <option value="Flying">Flying</option>
    <option value="Food">Food</option>
    <option value="Football / Soccer">Football / Soccer</option>
    <option value="Funding">Funding</option>
    <option value="Furniture">Furniture</option>
    <option value="Future">Future</option>
    <option value="Gambling">Gambling</option>
    <option value="Games">Games</option>
    <option value="Gardening">Gardening</option>
    <option value="Gifts">Gifts</option>
    <option value="Golf">Golf</option>
    <option value="Government">Government</option>
    <option value="Graphics Design">Graphics Design</option>
    <option value="Green Technology">Green Technology</option>
    <option value="Guns & Knifes">Guns & Knifes</option>
    <option value="Hair & Make Up">Hair & Make Up</option>
    <option value="Health">Health</option>
    <option value="Heating & Cooling">Heating & Cooling</option>
    <option value="History">History</option>
    <option value="Hobbies">Hobbies</option>
    <option value="Home business">Home business</option>
    <option value="Home Improvement">Home Improvement</option>
    <option value="Horoscope | Psychic">Horoscope | Psychic</option>
    <option value="Horse Related">Horse Related</option>
    <option value="Hotels">Hotels</option>
    <option value="Hunting">Hunting</option>
    <option value="Immigration">Immigration</option>
    <option value="Insurance">Insurance</option>
    <option value="Intellectual Property">Intellectual Property</option>
    <option value="Interior Design">Interior Design</option>
    <option value="Internet">Internet</option>
    <option value="Jewelry">Jewelry</option>
    <option value="Jobs">Jobs</option>
    <option value="Kitchen & Bath">Kitchen & Bath</option>
    <option value="Language Learning">Language Learning</option>
    <option value="Language Translation">Language Translation</option>
    <option value="Law | Corporate">Law | Corporate</option>
    <option value="Law | International">Law | International</option>
    <option value="Law | Personal">Law | Personal</option>
    <option value="LGBT">LGBT</option>
    <option value="Linux Admin">Linux Admin</option>
    <option value="Love & Romance">Love & Romance</option>
    <option value="Marketing">Marketing</option>
    <option value="Martial Arts">Martial Arts</option>
    <option value="Math">Math</option>
    <option value="Media">Media</option>
    <option value="Metals">Metals</option>
    <option value="Military">Military</option>
    <option value="Mining | Resources">Mining | Resources</option>
    <option value="Mobile Phone">Mobile Phone</option>
    <option value="Money">Money</option>
    <option value="Motherhood">Motherhood</option>
    <option value="Motorcycles">Motorcycles</option>
    <option value="Movies">Movies</option>
    <option value="Moving">Moving</option>
    <option value="Music">Music</option>
    <option value="Nature">Nature</option>
    <option value="Networking">Networking</option>
    <option value="News Related">News Related</option>
    <option value="Night Life/Clubs">Night Life/Clubs</option>
    <option value="Olympics">Olympics</option>
    <option value="Other">Other</option>
    <option value="PCs | Apple Computer">PCs | Apple Computer</option>
    <option value="PCs | MS based">PCs | MS based</option>
    <option value="Peace & Good Will">Peace & Good Will</option>
    <option value="Photography">Photography</option>
    <option value="Pizza & Pasta">Pizza & Pasta</option>
    <option value="Politics Asia">Politics Asia</option>
    <option value="Politics Europe">Politics Europe</option>
    <option value="Politics USA">Politics USA</option>
    <option value="Politics World">Politics World</option>
    <option value="Psychology">Psychology</option>
    <option value="Real Estate">Real Estate</option>
    <option value="Relax Meditate">Relax Meditate</option>
    <option value="Religion Buddhism">Religion Buddhism</option>
    <option value="Religion Christian">Religion Christian</option>
    <option value="Religion Islam">Religion Islam</option>
    <option value="Religion Judaism">Religion Judaism</option>
    <option value="Religion Others">Religion Others</option>
    <option value="Restaurants">Restaurants</option>
    <option value="Retirement">Retirement</option>
    <option value="Rich | Wealthy">Rich | Wealthy</option>
    <option value="Running">Running</option>
    <option value="Sales">Sales</option>
    <option value="Scams & Frauds">Scams & Frauds</option>
    <option value="Science">Science</option>
    <option value="Scuba Diving">Scuba Diving</option>
    <option value="Sea">Sea</option>
    <option value="Search Engine">Search Engine</option>
    <option value="Security | Police">Security | Police</option>
    <option value="Seminars">Seminars</option>
    <option value="Senior Citizens">Senior Citizens</option>
    <option value="Sexual in nature">Sexual in nature</option>
    <option value="Shoes">Shoes</option>
    <option value="Skill Training">Skill Training</option>
    <option value="Skin Care">Skin Care</option>
    <option value="Sleep | Dream">Sleep | Dream</option>
    <option value="Social Network">Social Network</option>
    <option value="Social Welfare">Social Welfare</option>
    <option value="Software Development">Software Development</option>
    <option value="Solar">Solar</option>
    <option value="Spa | Massage">Spa | Massage</option>
    <option value="Space">Space</option>
    <option value="Sports">Sports</option>
    <option value="SQL | MySQL">SQL | MySQL</option>
    <option value="Stamps">Stamps</option>
    <option value="Stocks & Bonds">Stocks & Bonds</option>
    <option value="Studying">Studying</option>
    <option value="Style">Style</option>
    <option value="Supplies | Camping">Supplies | Camping</option>
    <option value="Supplies | Cooking">Supplies | Cooking</option>
    <option value="Supplies | Office">Supplies | Office</option>
    <option value="Taxes">Taxes</option>
    <option value="Teaching">Teaching</option>
    <option value="Teens">Teens</option>
    <option value="Tennis">Tennis</option>
    <option value="Toys - Hobbies">Toys - Hobbies</option>
    <option value="Transportation">Transportation</option>
    <option value="Travel">Travel</option>
    <option value="TV">TV</option>
    <option value="UFOs">UFOs</option>
    <option value="University">University</option>
    <option value="Vacation">Vacation</option>
    <option value="Vegetarian | Vegan">Vegetarian | Vegan</option>
    <option value="Venture Capital">Venture Capital</option>
    <option value="War & Peace">War & Peace</option>
    <option value="Web development">Web development</option>
    <option value="Web site hosting">Web site hosting</option>
    <option value="Web site promotion">Web site promotion</option>
    <option value="Weddings">Weddings</option>
    <option value="Weight Loss">Weight Loss</option>
    <option value="Women Issues">Women Issues</option>
    <option value="Work | Employment">Work | Employment</option>
  </select>
     </td>
     </tr>
   <tr>
     <td width="176" colspan="2" class="content_text">Regions</td>
   </tr>
<tr>
<td><select name="myRegion" size="1" id="region" onchange="set_country(this,country,city_state)" class="cp_forms" style="width:98%;"><label><script type="text/javascript">setRegions(this);</script></label>
</select></td>
	 </tr>
       <tr>
     <td class="content_text" colspan="2">Country</td>
   </tr>
   <tr>
    <td>
    <select name="myCountry" size="1" disabled="disabled" id="country" onchange="set_city_state(this,city_state)" class="cp_forms" style="width:98%;">
    </select>
    </td>
   </tr>
      <tr>
     <td class="content_text" colspan="2">City/State</td>
   </tr>
   
   <tr>
    <td ><span class="content_text">
      <select name="myCitystate" size="1" disabled="disabled" id="city_state" onchange "print_city_state(country,this)" class="cp_forms" style="width:98%;">
      </select>
    </span></td>
  </tr>
  <tr>
      <td class="content_text">Email address</td>
    </tr>
      <tr>
      <td><input type="text" name="email" class="cp_forms" style="width:98%;" /></td>
     </tr>
    <tr>
      <td align="center"><br /><input type="submit"  id="" name="" value="Submit" alt="Run Search" class="pimpmybutton2" style="width:100%; height:25%; text-align:center;" /><br /></td>
      </tr>
  </table>
    </td>
  </tr>
</table>
<br />
 </form> 
   </div>
  </div>
  </div>
<div id="eon-event-categories">
      <div id="TabbedPanels1" class="TabbedPanels">
      <menu class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">Welcome</li>
        <li class="TabbedPanelsTab" tabindex="0">Chat</li>
        <li class="TabbedPanelsTab" tabindex="0">Events</li>
      </menu>
      <div class="TabbedPanelsContentGroup">
     <div class="TabbedPanelsContent">
<div id="main_container">
<div id="border_container">
<div id="inner_content_container"> 
<div id="title_container">Welcome</div>
<div style="width:100%; height:800px; overflow-y: scroll; word-wrap: break-word; text-align:left;
padding-left:20px; padding-top:40px;">
  <p>Fit4aking.com is an Internet-based Events and Business Networking platform with  Business promotional tools. Made for Small, Medium, and Large Business. It  allows you to Post Free and paid Events, dispense Event Tickets, via Web, SMS,  and Email. It's promotional tools include Free Business Networking Chat, Free  Listings in our Business Directory, Skill Exchanges, Events Mailing List, Web design and E-commerce  solutions.
</p>
  <ul>
    <li><a href="register-account.php" class="dblinks">Post Events </a></li>
    <li><a href="register-account-business-networking.php" class="dblinks">Business Networking Chat</a></li>
    <li><a href="register-account.php" class="dblinks">Directory Listings</a></li>
    <li><a href="skill-exchange-registration.php" class="dblinks">Skill Exchange</a></li>
    <li><a href="it-solutions.php" class="dblinks">Web Design &amp; E-commerce Solution</a></li>
  </ul>
</div>
</span>
</div>
</div>
</div>
<br />
</div>
<div class="TabbedPanelsContent">
<div id="main_container1">
<div id="border_container1">
<div id="inner_content_container1"> 
<div id="title_container1">On-line Business Networking</div>
<div style="width:100%; height:800px; overflow-y: scroll; word-wrap: break-word; text-align:left; padding-left:20px; padding-top:0px;">
<span class="content_text">
<div style="background:#e5e5e5; margin-right:20px; padding:15px; word-wrap: break-word; font-size:70%; font-weight:700;">
<h1 class="content_headings"><strong>Fit4aking.com bringing local Business Entrepreneurs into the spotlight for you to connect with</strong></h1></div><br />
<div align="left"><a href="register-account-business-networking.php" class="dblinks">Register for Free Business Networking Chat</a></div>
<br />
 <div align="left"><a href="../xmchat/index.php" class="dblinks" style="text-decoration:underline;">Login to Business Networking Chat</a></div>     
</div>
</span>
</div>
</div>
</div>  
<br />
</div>
<div class="TabbedPanelsContent"><?php require("toc.php"); ?></div>
</div>
</div>
</div>
</div>
<div id="eon-footer">&nbsp;</div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"><!--Fine 3-->
</script>
</div>
<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4", {contentIsOpen:false});
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
<script type="text/javascript">
$(document).ready(function()
{
$("#dtBox").DateTimePicker();
});
</script>
</body>
</html>
