<?php
session_start();
$session=session_id();
$time=time();
$time_check=$time-600; //SET TIME 10 Minute
      //include_once "connect_mysql.php";
	  $myFile = "copy_eight.txt";
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, filesize($myFile));
      fclose($fh);
      $tbl = "$theData";
// Script 12.4 - Create table.php
/*ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);*/
//include_once "connect_mysql.php";
$servername = "fit4aking.com.mysql";
$username = "fit4aking_com";
$password = "fp2e4RXzXXXYZ";
$dbname = "fit4aking_com";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	  
$sql="SELECT * FROM $tbl WHERE session='$session'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);
if($count=="0"){

$sql1="INSERT INTO $tbl(session, time)VALUES('$session', '$time')";
$result1=mysqli_query($conn,$sql1);
}

else {
$sql2="UPDATE $tbl SET time='$time' WHERE session = '$session'";
$result2=mysqli_query($conn,$sql2);
}

$sql3="SELECT * FROM $tbl";
$result3=mysqli_query($conn,$sql3);
$count_user_online=mysqli_num_rows($result3);
$total_users = "Users online : $count_user_online ";

// if over 10 minute, delete session 
$sql4="DELETE FROM $tbl WHERE time<$time_check";
$result4=mysqli_query($conn,$sql4);

// Open multiple browser page for result
// Close connection
mysqli_close($conn);
?>
<?php
// first, setup your DB-connection
define('DB_SERVER', "fit4aking.com.mysql");
define('DB_USER', "fit4aking_com");
define('DB_PASSWORD', "fp2e4RXzXXXYZ");
define('DB_TABLE', "fit4aking_com");
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_TABLE);
$stmt = $conn->stmt_init();
$sql = 'SELECT * FROM myevents WHERE event_citystate LIKE ? AND addmission_status="Available"';
$stmt->prepare($sql);
$x =  '%'.$_POST['mycitystate'].'%';
$stmt->bind_param('s', $x);
$stmt->execute();
// store result of prepared statement
$stmt->store_result();
$numrows = $stmt->num_rows;
$catquant = "$numrows";
//echo htmlspecialchars($x);
if ("$catquant" == 0 ){
$catnum = "Tickets sold out!<br>";
$catsubnum = "$catquant";
}else{
$catnum = "$catquant<br>";   
$extrainfo = "results";
}
$stmt->close();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>National International Events | Fit4aking</title>
<meta name="description" content="Produkt Thumbnail - Bootstrap Carousel - Collection by sevenXdemo - More Information: www.sevenX.de/blog" />
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">-->
<!--<link rel="stylesheet" type="text/css" href="css/slideshow_caps.css"/>
<link rel="stylesheet" type="text/css" href="css/slideshow-part1.css"/>-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="dt_picker/src/DateTimePicker.css" />
<link href="../SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/mobile.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="city_state.js"></script>	
<script type="text/javascript" src="dt_picker/demo/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="dt_picker/src/DateTimePicker.js"></script>
<script src="../SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script type="text/javascript">  
        $(document).ready(function(){
            $("#report tr:odd").addClass("odd");
            $("#report tr:not(.odd)").hide();
            $("#report tr:first-child").show();
            
            $("#report tr.odd").click(function(){
                $(this).next("tr").toggle();
                $(this).find(".arrow").toggleClass("up");
            });
            //$("#report").jExpand();
        });
function toggle(el,ev) {
    ev.preventDefault();  // prevent the link from being followed
    el = next(el);        // get the next element
    if (el.style.display == "none") { // toggle the display
        el.style.display = "block";
    } else {
        el.style.display = "none";
    }
}
/* 
   Credit to John Resig for this function 
   taken from Pro JavaScript techniques 
*/
function next(elem) {
    do {
        elem = elem.nextSibling;
    } while (elem && elem.nodeType != 1);
    return elem;                
}
</script>
</head>

<body>
<div id="eon-header">
  <h1><a href="home.php"><img src="logo/fit4aking-business-networking-events-logo.jpg" width="100%" height="100%" alt="Business Networking Events in Kent UK" longdesc="http://www.fit4aking.com" /></a></h1>
</div>
<div id="menu">
  <div id="CollapsiblePanel1" class="CollapsiblePanel">
    <div class="CollapsiblePanelTab" tabindex="0">MENU</div>
    <div class="CollapsiblePanelContent"> <?php include("toc_mobile.php"); ?></div>
  </div>
</div>
<div id="search">
  <div id="CollapsiblePanel2" class="CollapsiblePanel">
    <div class="CollapsiblePanelTab" tabindex="0">EVENTS SEARCH</div>
      
      <div class="CollapsiblePanelContent">
       <?php include("external-date-time.php"); ?>
      </div>

    </div>
  </div>
  <div align="center">
    <div id="CollapsiblePanel3" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">UPCOMING EVENTS</div>
        <div class="CollapsiblePanelContent">
         
 <?php include("external_upcoming_events.php"); ?>
       
      </div>
    </div>
  </div>
 <div id="eon-event-categories">
<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/
// include_once("mysqli_connection.php");
// Script and tutorial written by Adam Khoury @ developphp.com
// Line by line explanation : youtube.com/watch?v=T2QFNu_mivw
// This first query is just to get the total count of rows
// Make a MySQL Connection
$servername = "fit4aking.com.mysql";
$username = "fit4aking_com";
$password = "fp2e4RXzXXXYZ";
$dbname = "fit4aking_com";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$d = strtotime($_POST['eventDate']);
//echo "$d";
$w = strip_tags(trim($_POST['cat']));
$x = strip_tags(trim($_POST['myregion']));
$y = strip_tags(trim($_POST['mycountry']));
$z = strip_tags(trim($_POST['mycitystate']));



$newevent_date = "$d%";     
$search_cat = '%' . $w . '%';
$search_region = '%' . $x . '%';
$search_country = '%' . $y . '%';
$search_citystate = '%' . $z . '%';
//echo "$newevent_date";
//$search = "S%";

$myFile = "copy_one.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
//echo $theData;
//$tbl = "$theData";

$sql = "SELECT COUNT(event_id) FROM myevents";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($query);
// Here we have the total row count
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 5;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit

$myFile = "copy_one.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
//echo $theData;
$tbl = "$theData";
/*$query = "SELECT event_id,event_name, event_cat, event_img,username, addmission_status, COUNT(*) AS counter FROM $tbla WHERE     addmission_status='Available' GROUP BY event_name";*/ 
//$stmt = mysqli_prepare($mysqli, "SELECT website_name, prod_name FROM $tbl WHERE prod_name  LIKE ?");
//$newtime = (new \DateTime())->format('d-M-Y');
$sql = mysqli_prepare($conn, "SELECT event_id, event_name,event_brief,event_cat,event_date,event_time_from,event_time_to,event_address,event_region,event_country,event_citystate,event_zip,event_currency,addmission_status,event_addmission_price,ticket_num,reg_date,sales_ref,item_num,event_img,youtube_url,username, COUNT(*) AS counter FROM myevents WHERE event_cat LIKE ? AND event_region LIKE ? AND event_country LIKE ? AND event_citystate LIKE ? AND addmission_status = 'Available' AND event_date LIKE ? GROUP BY event_name ASC $limit");
if ($sql) {
    mysqli_stmt_bind_param($sql, "sssss", $search_cat,$search_region,$search_country,$search_citystate,$newevent_date);
    mysqli_stmt_execute($sql);
    mysqli_stmt_bind_result($sql,$event_id,$event_name,$event_brief_desc,$event_cat,$newevent_date,$event_time_from,
	$event_time_to,$event_address,$event_region,$event_country,$event_citystate,$event_zip,$event_currency,$event_addmission_status,$event_addmission_price,$ticket_quantity,$ticket_number,$sales_ref,$item_num,$event_img,$youtubeurl,$username,$counter);
}
$query = mysqli_query($conn,$sql);
// This shows the user what page they are on, and the total number of pages
$textline1 = "$rows Items";
$textline2 = "Paged $pagenum of $last";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to 
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	// Render the target page number, but without it being a link
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	// Render clickable number links that should appear on the right of the target page number
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';

		if($i >= $pagenum+4){
			break;
		}
	}
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}

     /*while ($row = mysqli_stmt_fetch($sql)) {
     printf (
	"<br><br><br>%s %s %s <br>",
	 $prod_id,
	 $website_name, 
	 $prod_name
	 );
	}*/
    mysqli_stmt_execute($sql);   
    /* store result */
    mysqli_stmt_store_result($sql);
	/* print statement */
  printf("<span class=\"content_text\"><div align=\"center\">%d\n item/s paged of $catsubnum $catnum <!--$extrainfo-->
	</div></span>
	<!--<span class=\"style24\"><div align=\"center\"><strong>Tickets available on this site: $quaunt</strong></div</span>>-->", mysqli_stmt_num_rows($sql));
	while($sql->fetch()){
	$mynum = "%d";
	$eventid = "$event_id";	
        $eventname = "$event_name";
	$eventbriefdesc = "$event_brief_desc";
        $eventcat = "$event_cat";
        $olddate = "$newevent_date";
	$timestamp=$olddate;
        $eventdate = gmdate("d-m-Y", $timestamp);
	$eventtimefrom = "$event_time_from";
	$eventtimeto = "$event_time_to";
	$eventaddress = "$event_address";
	$eventregion = "$event_region";
	$eventcountry = "$event_country";
	$eventcity = "$event_city";
	$eventzip = "$event_zip";
	$evecurr = "$event_currency";
	$eventaddmissionstatus = "$event_addmission_status";
	$ticketprice = "$event_addmission_price";
	$ticketquantity = "$ticket_quantity";
	$ticketnumber = "$ticket_number";
	$itemnum  =  "$item_num"; //item number
	$eventimg = "$event_img";
	$tot = "$counter";   
	   if ($ticketprice == '0.00')
	   {
	   $eventaddmissionstatus = "THIS IS A FREE EVENT";
	   }
	   elseif ($ticketprice > '0.00' && $tot == '1')
	   {
	   $eventaddmissionstatus = "THIS IS A BOOK TICKET BY PHONE/PAY AT THE DOOR EVENT";
	   }
	   else
	   {
	   $eventaddmissionstatus = "Tickets left: $tot";
	   }
	$user = "" . base64_encode ($username) ."";
	$str = base64_decode($user);
	$youtube = "$youtubeurl";
	$_SESSION['in'] = "$itemnum";
	$x ="$youtube";
    $y=str_replace("560","350", "$x");
    $z=str_replace("315","350", "$y");
if ( $z == "" ){
$youtubevideo = "<!--<img src=\"mydefault_img/default.png\" />-->";
}else{
$youtubevideo = "$z";
}
//echo "<br>$sn $pn $pc $in";
echo "<div align=\"center\">
<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\" class=\"table1\">
  <tr>
    <td colspan=\"2\" class=\"tableheight\">
	<span class=\"eventdetails\">
	 <br/>  Upcoming Event: $eventname
	</span> 
	<br/> 
	<span class=\"eventdetails\">
	   $eventdate
	</span>
	</td>    
  </tr>
  <tr>
    <td colspan=\"2\"><img src=\"../events-on-now/$str/$event_img\" width=\"100%\" /></td>
  </tr>
  <tr>
    <td colspan=\"2\"><div class=\"eventdetails\"><br/>Associated Video</div></td>
  </tr>
  <tr>
    <td height=\"600px\" colspan=\"2\" class=\"novids\">
	<div class=\"video-container\">$z</div>
	<!--<div class=\"videowrapper\">$z</div>--></td>
  </tr>
  <tr>
    <td colspan=\"2\">
    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
     <tr>
       <td>   
        <div align=\"center\">
        <table width=\"100%\" align=\"left\" id=\"report\" class=\"table3\">
        <tr>
       <th width=\"100%\"></th>
       <th width=\"100%\"></th>
        </tr>	
        <tr>
         <td width=\"100%\"><div class=\"eventdetails\">More Details...</div></td>
         <td width=\"100%\"><div class=\"arrow\"></div></td>
        </tr>	
        <tr>
          <td colspan=\"2\" class=\"a\">          
  <div class=\"more_event_details_headings\">Event Name</div><br/>
  <div class=\"content_text\">$eventname</div><br/>
  <strong class=\"more_event_details_headings\">Event Description</strong><br/>
  <div class=\"content_text\">$eventbriefdesc</div><br/>
  <strong class=\"more_event_details_headings\">Event Date</strong><br/>
  <div class=\"content_text\">$eventdate</div><br/>
  <strong class=\"more_event_details_headings\">Event Time</strong><br/>
  <div class=\"content_text\">Starts: $eventtimefrom - Ends: $eventtimeto</div><br/>
  <strong class=\"more_event_details_headings\">Event Address</strong><br/>
  <div class=\"content_text\">$eventaddress</div><br/>
  <div class=\"more_event_details_headings\"><strong>Entrance Fee</strong></div><br/>
  <div class=\"content_text\">$evecurr$ticketprice</div><br/>
  <strong class=\"more_event_details_headings\">Note!</strong><br/> 
  <div class=\"content_text\">$eventaddmissionstatus</div>
      </td>
            </tr>
            <tr>
            <th>
	     <br/>
<div align=\"left\">		
<a href=\"register.php?srch=$eventcat&amp;eventname=$eventname&amp;eid=$eventid&amp;trader=$user\" class=\"dblinks\">Buy this Ticket</a><br/><br/>
<a href=\"map.php?pc=$eventzip&amp;return=$path\" class=\"dblinks\">Find on Map</a> <br/><br/> 
<a href=\"#\" onclick=\"toggle(this,event)\" class=\"dblinks\">Share this link</a>
<div style=\"position:absolute; background-color:#FFFFFF; left:150px; display:none; width:80%; height:500px; font-size:130%; color:#000; text-align:center; padding:10px; word-wrap: break-word; border-style: solid;
	border-width: 7px;
	border-color: #E5E5E5;
    border-radius: 5px; z-index:2; overflow:auto;\"> 
<span class=\"style3\">
http://www.fit4aking.com$path</span>
</div>
<br/><br/>
<a href=\"mailinglist.php?srch=$eventcat&amp;eventname=$eventname&amp;eid=$eventid&amp;trader=$user\" class=\"dblinks\">Join this Events Mailing List</a><br/><br/>
</div>
 </th>
      <th width=\"44\"></th>
        </tr>
        </table>
        </div>
    </td>
  </tr>
</table>
</td>
  </tr><br/>
</table></div><br/>";
	}	
mysqli_close($conn);
?>
<br>
<div align="center">
  <p> 
  <span class="content_text"><?php echo $textline1; ?></span>
  <span class="content_text"><?php echo $textline2; ?></span>
  <span class="content_text"><?php echo $list; ?></span><p>&nbsp;</p>
  <div id="pagination_controls" class="db_results"><?php echo $paginationCtrls; ?>
    </p>
</div>
<!--Categories container-->
 </div>
</div>
  <div id="eon-footer">&nbsp;</div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js">
</script>
</div>
<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3", {contentIsOpen:false});
</script>
<script type="text/javascript">
$(document).ready(function()
{
$("#dtBox").DateTimePicker();
});
</script>
</body>
</html>
