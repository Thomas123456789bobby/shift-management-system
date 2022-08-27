<?php include('include/header.php'); 
include('../database/connectdb.php');

if ($_SESSION["login"] == true){
    include('include/navbar.php'); 
    /* draws a calendar */

function draw_calendar($month,$year){

	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	/* table headings */
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day" id="'.$list_day.'">';
			/* add in the day number */
			$calendar.='<form method="post" action="">
                <input type="hidden" name="day" value="'.$list_day.'">
                <input type="hidden" name="month" value="'.$month.'">
                <input type="hidden" name="year" value="'.$year.'">
                <input class="btn btn-info" type="submit" name="submit" value="'.$list_day.'">
            </form>';

			/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
			$calendar.= str_repeat('<p> </p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}



if(!empty($_POST['maand'])) {
    
    $maand = $_POST['maand'];
}else{
    $maand = date('m');
}

if(!empty($_POST['yaar'])) {
    
    $yaar = $_POST['yaar'];
}else{
    $yaar = date("Y");
}

if ($maand == 13){
    $maand = 1;
    $yaar = $yaar + 1;
}

if ($maand == 0){
    $maand = 12;
    $yaar = $yaar - 1;
}

?>
<br><br><br>
<div class="sel">
    <form method="post" action="/php/rooster.php">
        <input type="hidden" name="maand" value="<?php echo $maand - 1 ?>" />
        <input type="hidden" name="yaar" value="<?php echo $yaar ?>" />
        <input class="btn btn-secondary" type="submit" name="submit" value="vorige">
    </form>     
    <form method="post" action="/php/rooster.php">
        <input class="btn btn-success" type="submit" name="submit" value="nu">
    </form>
    <form method="post" action="/php/rooster.php">
        <input type="hidden" name="maand" value="<?php echo $maand + 1 ?>" />
        <input type="hidden" name="yaar" value="<?php echo $yaar ?>" />
        <input class="btn btn-secondary" type="submit" name="submit" value="volgende">
    </form>
</div>
<?php
echo "<h2>".$maand."-".$yaar."</h2>";
echo draw_calendar("$maand","$yaar");


    

    } else {
    header("Location: /index.php");
}
?>

<?php include('include/footer.php'); ?>