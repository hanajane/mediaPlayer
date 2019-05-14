	<?php
	include ("includes/data.php");
    include ("core/functions/mainFunction.php");

	$pageTitle = "Personal media library";
	$section = null;
	
	include ("includes/header.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section catalog random">
					<div class="wrapper">
						<h2>May we suggest something?</h2>
						<ul class="items">
							<?php
							// foreach ($catalog as $id => $item)  //basic format. all items will be shown thats inside the foreach
							// {
							// 	echo get_item_html($id,$item);
							// }

							$random = array_rand($catalog, 4); //array_rand() is a built in function whice takes 2 priameter($theValue, howManyIndexesToShow)
							foreach ($random as $id)
							{
								echo get_item_html($id,$catalog[$id]);
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		include 'includes/footer.php';
	?>
