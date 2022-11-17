<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>

    <?php
    
        $fr_id=$_GET['id'];
    
    
    ?>
			<div id="masthead">  
				<div class="container">

                <div class="row">
                <?php
           
                    $session_query = $conn->query("select * from members where member_id = '$fr_id'");
                    $user_row = $session_query->fetch();
                    $image = $user_row['image'];
                    ?>
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160" ></center>
		<hr>
		
      </div>
		<div class="col-md-10">
			<hr>
			
			<p>Personal Info
			
			</p>
				<?php
                
			$query = $conn->query("select * from members where member_id = '$fr_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<p>Name:<?php echo $row['firstname']." ".$row['lastname']; ?><span class="margin-p"> </span>Gender:<?php echo $row['gender']; ?></p>
			<hr>
			<p>Address:<?php echo $row['address']; ?></p>
			<hr>
			<p>Gender:<?php echo $row['gender']; ?></p>
						<hr>
			<p>Birthdate:<?php echo $row['birthdate']; ?></p>
						<hr>
			<p>Contact No:<?php echo $row['mobile']; ?></p>
						<hr>
			<p>Status:<?php echo $row['status']; ?></p>
						<hr>
				<p>Work:<?php echo $row['work']; ?></p>
			<hr>
				<p>Religion:<?php echo $row['religion']; ?></p>
		</div>

    </div> 
    
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>

                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>