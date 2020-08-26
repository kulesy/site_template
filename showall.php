<!-- <?php echo $find_rs['URL']; ?> -->
<?php include("topbit.php");
	$find_sql = "SELECT *FROM `game_detaills`
JOIN genreid ON (game_detaills.GenreID = genreid.GenreID)
JOIN developerid ON (game_detaills.DevoloperID = developerid.DeveloperID)
	";
	$find_query = mysqli_query($dbconnect, $find_sql);
	$find_rs = mysqli_fetch_assoc($find_query);
	$count = mysqli_num_rows($find_query);

?>

			<div class="box main">
				<h2>All results</h2>


<?php

if($count < 1) {

?>

<div class="error">

	Sorry! There are no results that match your search.
	Please use the search box in the side bar to try again.

</div> <!-- end error -->
<?php
} // end no results if

else {
	do
	{

			?>
			<!-- Results go here -->
			<div class="results">
				<span class="sub_heading">
					<a href="<?php echo $find_rs['URL']; ?>">
				<?php echo $find_rs['Name']; ?>
				</a>
			</span> - <?php echo $find_rs['Subtitle']; ?>

			<p>

<b>Genre: </b>
				<?php echo $find_rs['Genre']; ?>
		</p>
<br />
<b>Developer: </b>
				<?php echo $find_rs['Developer']; ?>
			</p>
<br />
<b>Ratings: </b>
				<?php echo $find_rs['User Rating']; ?>
				(based on <?php echo $find_rs['Rating Count']; ?> entries)
			</p>
<br />
<hr>
				<?php echo $find_rs['Description']; ?>
</div>  <!-- results -->
<br />

			<?php
	} // end results 'do'
while
		($find_rs=mysqli_fetch_assoc($find_query));
} // end else

 ?>


			</div> <!-- / main -->
<?php include("botbit.php") ?>
