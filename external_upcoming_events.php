<?php
include_once "connect_mysql.php";    
	  $myFile = "events.txt";
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, filesize($myFile));
      fclose($fh);
      //echo $theData;
      $tbla = "$theData";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$newtime = (new \DateTime())->format('d-M-Y');	
//echo "$newtime";
$sql = "SELECT event_id, event_name, event_cat, event_brief,event_address,event_currency, event_date, event_time_from,event_time_to, event_img, username, addmission_status,event_addmission_price,event_idcode,username, COUNT(*) AS counter FROM $tbla WHERE addmission_status='Available' AND event_date >= UNIX_TIMESTAMP(NOW()) GROUP BY event_cat ASC";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
$rowcount=mysqli_num_rows($result);
//mysqli_free_result($result);
$_SESSION['cnt']=$rowcount;
echo	 "<div id=\"eon-page-container\">
<div class=\"container\">
	<div class=\"row\">
    	<div class=\"col-md-3\">
            <!-- Carousel
            ================================================== -->
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
              <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <div class=\"thumbnail\">
                      <img src=\"http://placehold.it/300x200/\" alt=\"Slide1\">
                      <div class=\"caption\">
                        <h3 class=\"content_text_uce\">Product label</h3>
                        <p class=\"content_text_uce\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">12,99 €</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Wishlist</a></p>
                      </div>
                    </div>        
                </div><!-- End Item -->";    
while($row = mysqli_fetch_assoc($result)) {
       $eventid = "" . $row["event_id"] . ""; 
	   $ec = "" . $row["event_cat"] . ""; 
	   $eb = "" . $row["event_brief"] . "";
	   $ea = "" . $row["event_address"] . "";
	   $evecurr = "".$row["event_currency"]."";
	   $olddate = "" . $row["event_date"] . "";
	   $time_from = "" . $row["event_time_from"] . "";
	   $time_to = "" . $row["event_time_to"] . "";
       $timestamp=$olddate;
       $ed = gmdate("d-m-Y", $timestamp);
	   $tot = "" . $row['counter']. ""; 
	   $event_img = "" . $row["event_img"]. "";     
	   $en = "" . $row["event_name"]. "";  
	   $event_img = "" . $row["event_img"]. ""; 
	   $user = "" . base64_encode ( $row["username"] ) ."";
	   $str = base64_decode($user);
	   $status = "" . $row['addmission_status']. ""; 
	   $addmission = "" . $row['event_addmission_price']. ""; 
	   $idc = "".$row["event_idcode"]."";
	   $user = "" . base64_encode ( $row["username"] ) ."";
	   if ($addmission == '0.00')
	   {
	   $fee = "THIS IS A FREE EVENT";
	   }
	   elseif ($addmission > '0.00' && $tot == '1')
	   {
	   $fee = "THIS IS A PAY AT THE DOOR / BOOK TICKETS BY PHONE EVENT";
	   }
	   else
	   {
	   $fee = "TICKETS LEFT: $tot";
	   }
echo "<div class=\"item\">
                    <div class=\"thumbnail\">
                      <img src=\"../events-on-now/$str/$event_img\" alt=\"Slide1\">
                      <div class=\"caption\">

                        
						<div class=\"content_text_uce\">
						
						<strong>$en</strong><br/>
                        <strong>$ed</strong><br/>
						
						
						$eb <br/> $ea <br/> $fee</div>
						
						<br/>
					
                        <a href=\"#\" class=\"btn btn-primary\" role=\"button\">$evecurr$addmission</a> <a href=\"register.php?srch=$eC&eventname=$en&eventcode=$idc&eid=$eventid&trader=$user\" class=\"btn btn-default\" role=\"button\">Buy</a>
						
						
						</p>
                      </div>
                    </div>        
                </div>
<!-- End Item -->";
}	   
} else {
    echo "0 results";
}
//mysqli_close($conn); 	   
?>
        <?php 
echo "</div><!-- End Carousel Inner -->
              <div class=\"carousel-controls\">
              	<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
              	<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
              </div>
            </div><!-- /.carousel -->
    	</div>
    </div>
</div>";
?>
        <p>&nbsp;</p>
        <p><br />
          <br/><br /><br/>
        </p>
        