<?php
/*
	STOP! DO NOT MODIFY THIS FILE!
	If you wish to customize the output, you can safely do so by COPYING this file into a new folder called 'gigpress-templates' in your 'wp-content' directory	and then making your changes there. When in place, that file will load in place of this one.
	
	This template displays all of our individual show data in the main shows listing (upcoming and past).

	If you're curious what all variables are available in the $showdata array, have a look at the docs: http://gigpress.com/docs/
*/
?>

<tbody>
	
	<?php
	$date = $showdata['date'];
	$date = explode('/', $date);

	$day = $date[0];
	$month = $date[1];
	$year = $date[2];

	$month = strval($month);
	if($month == '01' )	$month = 'JAN';
	if($month == '02' )	$month = 'FEB';
	if($month == '03' )	$month = 'MAR';
	if($month == '04' )	$month = 'APR';
	if($month == '05' )	$month = 'MAY';
	if($month == '06' )	$month = 'JUN';
	if($month == '07' )	$month = 'JUL';
	if($month == '08' )	$month = 'AUG';
	if($month == '09' )	$month = 'SEP';
	if($month == '10' )	$month = 'OCT';
	if($month == '11' )	$month = 'NOV';
	if($month == '12' )	$month = 'DEC';

	$city = $showdata['city'];
	$city = strtoupper($city);

	$artist = $showdata['artist'];
	$artist = strtoupper($artist);

	
	?>
	
<tr class="gigpress-row" height="40" >
		<td class="gigpress-day" >
		
		<p class="day"><?php echo $day;?></p>	
		</td>
		

<td class="gigpress-month"><p class="month"><?php  echo $month;  ?></p></td>
	<?php if((!$artist && $group_artists == 'no') && $total_artists > 1) : ?>
		<td class="gigpress-artist">
			<?php echo $artist ?>
		</td>
	<?php endif; ?>
		<td class="gigpress-artist"><p class="artist"><?php echo $artist;?></p></td>
		<td class="gigpress-country"><p class="city"><?php echo $city; if(!empty($showdata['state'])) echo ', '.$showdata['state']; ?></p></td>
		<td class="buy-button"><a class="buy" href="#" target="_blank" >BUY</a></td>
		

</tr>
</tbody>	