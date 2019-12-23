<?php
include './php/db.php';
include './php/error_message_control.php';
if(isset($_GET['editid'])){
	$selected_id = $_GET['editid'];
	$edit_query = "SELECT * FROM users WHERE id=$selected_id";
	$edit_result = mysqli_query($connection,$edit_query);
	
	while($edit_row = mysqli_fetch_assoc($edit_result)){
	$sid = $edit_row['id'];
	$sfname = $edit_row['first_name'];
	$slname = $edit_row['last_name'];
	$semail = $edit_row['email_id'];
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD PHP/SQL</title>
	<link rel="icon" href="icon.png" type="image/png">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/286824e84e.js" crossorigin="anonymous"></script>
</head>
<body>
	<main class="main">
		<div class="main-frame">
		
			<div class="form">
			<div class="mobile-fix">
			<div class="fix">
				<span class="app-title">CRUD PHP/MYSQL</span><br>
				<span class="tagline">(Create | Read | Update | Delete)</span>
				</div>
			<?php if($showerror):?>
			<span class="error">numbers &amp; special characters are not allowed in names</span>
			<?php endif;?>
			<?php if($deleted):?>
			<span class="error">data deleted successfully!</span>
			<?php endif;?>
			<?php if($blank_entry):?>
			<span class="error">enter the information before submit</span>
			<?php endif;?>
			<?php if($showsuccess):?>
			<span class="success">data saved successfully!</span>
			<?php endif;?>
			<?php if($updated):?>
			<span class="success">data updated successfully!</span>
			<?php endif;?>
				<form method="post" action="./php/<?php echo isset($_GET['editid'])?"edit.php?id=$sid":"store-data.php"; ?>" autocomplete="off">
				<div class="input-align">
				<input type="text" class="fname input" name="first_name" value="<?php echo isset($sfname)?$sfname:'';?>"placeholder="first name">
				<input type="text" class="lname input" name="last_name" value="<?php echo isset($slname)?$slname:'';?>" placeholder="last name">
				<input type="email" class="email input" name="email_id" value="<?php echo isset($semail)?$semail:'';?>" placeholder="email id">
				</div>
				<input type="submit" class="input sub-btn" name="submit" value="<?php echo isset($_GET['editid'])?'UPDATE':'SAVE';?>" >
				</form>
				<div class="saved-data">
					<?php
					$query = "SELECT * FROM users ORDER BY id DESC";
					$result = mysqli_query($connection,$query);
					
					while($row = mysqli_fetch_assoc($result)){?>
					<div class="info-box">
						<span class="f_name"><?php echo "{$row['first_name']} {$row['last_name']}";?></span><br>
						<span class="f_email"><?php echo "{$row['email_id']}";?></span>
						<span class="m_buttons">
							<a href="index.php?editid=<?php echo $row['id']; ?>"><i class="fas fa-edit" title="Edit"></i></a>
							<a href="php/del.php?id=<?php echo $row['id'];?>"><i class="fas fa-trash-alt" title="Delete"></i></a>
						</span>
					</div>
					<?php
						
					}
					?>
					
				</div>
			</div>
			</div>
		</div>
		<div class="credit">
<div class="name-section"><span class="name">Developed by Monu Giri</span></div>
<div class="social-icons">
<a href="https://github.com/whomonugiri" target="_blank"><i title="@whomonugiri" class="fab fa-github git"></i></a>
<a href="https://instagram.com/oyeitsmg" target="_blank"><i title="@oyeitsmg" class="fab fa-instagram insta"></i></a>
<a href="https://www.linkedin.com/in/whomonugiri/" target="_blank"><i title="@whomonugiri" class="fab fa-linkedin-in in"></i></a>
</div>
</div>
	</main>
</body>
</html>