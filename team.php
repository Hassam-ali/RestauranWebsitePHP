<?php 

define("TITLE", "Team | Dining by Hassam Ali");

include('includes/header.php'); ?>

<div id="team-members" class="cf">

<h1>Our Team Members</h1>
<p>Following are profeesional chef and team members at the Franklin Dining by Hassam Ali.</p>
<strong>Hot and Tasty food in Town!</strong>

<hr>

 
		
		<?php foreach ($teamMembers as $member) { ?>
			
			<div class="member">
				<img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
				<h2><?php echo $member["name"]; ?></h2>
				<p><?php echo $member["bio"]; ?></p>
			</div><!-- member -->
		
		<?php } ?>
		
	</div><!-- team-members -->
	
	<hr>



<?php include('includes/footer.php'); ?>