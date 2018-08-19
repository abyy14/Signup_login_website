<?php if(isset($_SESSION['user_name'])): ?>
 			 <?php echo "<i class='fa fa-check-circle'></i> Hi <strong>". $_SESSION['user_name']."</strong> Welcome to our website we are glad to see you here <a href='index.php#'> Login</a>"; ?>
 			 <?php endif; ?>
 			 <?php unset($_SESSION['user_name']); ?>