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

				<!-- /heading and subtitle -->

				<div class="flex-container">
<div>

				<span class="sub_heading">
					<a href="<?php echo $find_rs['URL']; ?>">
				<?php echo $find_rs['Name']; ?>
				</a>
			</span>

</div> <!--/ Title -->
<?php
if ($find_rs['Subtitle'] != "")

{

?>

<div >

&nbsp; &nbsp; | &nbsp; &nbsp;

	<?php echo $find_rs['Subtitle'] ?>
</div> <!--/ subtitle -->

<?php


}


 ?>


		</div>
<!-- /heading and subtitle -->
<!-- Rating -->
<div class="flex-container">
	<!-- Partial Stars Original Source:
https://codeopen.io/bluetidero/pen/GkpEa -->
<div class="star-ratings-sprite">
<span style="width:<?php echo $find_rs['User Rating'] /5 * 100?>" class="star-ratings-sprite-rating"></span>
</div>
<div class="actual-rating">
	(<?php echo $find_rs['User Rating'] ?>
 based on <?php echo number_format ($find_rs['Rating Count']) ?> ratings)

 </div> <!--/text rating div  -->
</div> <!-- / ratings flexbox -->

<!-- /Ratings -->
<!-- Price -->

<?php

if($find_rs['Price'] == 0)
?>
<p>
Free!
<?php
if($find_rs['In App'] == 1)
{
	?>
	(In App Purchase)
	<?php
}
 ?>
</p>

<!-- /Price -->
<p>
	<!-- Genre -->
	<br />
<b>Genre: </b>
				<?php echo $find_rs['Genre']; ?>
<!-- /genre -->
<!-- Developer -->
<br />
<b>Developer: </b>
				<?php echo $find_rs['Developer']; ?>
<!-- /Developer -->
<br />
Suitable for ages # and up
<br />
<!-- Description -->
<hr>
				<?php echo $find_rs['Description']; ?>
<!-- /Description -->


</div>  <!-- results -->
<br />

			<?php
	} // end results 'do'
while
		($find_rs=mysqli_fetch_assoc($find_query));
} // end else

 ?>
