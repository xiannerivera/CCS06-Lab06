<?php
    $cname = $_POST['complete_name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $lsatisfaction = $_POST['satisfaction_level'];
    $message = $_POST['message'];
?>


<h3>Thank you!</h3>
<p>Received <?php echo $type; ?> message from <?php echo $cname . " " . $email; ?></p>
<p><?php echo $message ?></p>
<p>Satisfaction Level: <?php echo $lsatisfaction; ?> </p>