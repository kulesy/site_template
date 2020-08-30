+<!-- <?php echo $find_rs['URL']; ?> -->
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

<?php include("results.php") ?>



			</div> <!-- / main -->
<?php include("botbit.php") ?>
