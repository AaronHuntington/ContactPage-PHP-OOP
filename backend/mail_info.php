<?php include("../includes/config.php"); ?>
<?php include("../includes/init.php"); ?>
   
<?php
   $id = $_GET['id'];

   $inbox_class = new contact_inbox;
   $inbox = $inbox_class->get_message($id);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" 
         content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <title>Contact Page</title>
      <!-- Bootstrap Core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <!-- Main CSS -->
      <link href="../css/main.css" rel="stylesheet">
	 <body>
      <section id="header_container" class="row">
         <div class="col-md-8 col-md-offset-2 borderRe">
            <a href="../index.php" style="float: left;">
               <h3>Contact Form</h3>
            </a>
            <a href="index.php" style="float: left; margin-left: 40px;">
               <h3>Inbox</h3>
            </a>
         </div>
      </section>
      <br><br>
      <h1 style="text-align: center;">Message Page</h1>
		<section class="row">
			<div class="col-md-10 col-md-offset-1 borderRe">
				<table class="table table-hover">
               <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
               </tr>
               <tr>
                  <td><?php echo $inbox['id'];?></td>
                  <td><?php echo $inbox['date'];?></td>
                  <td><?php echo $inbox['name'];?></td>
                  <td><?php echo $inbox['email'];?></td>
                  <td><?php echo $inbox['phone'];?></td>
               </tr>
            </table>
			</div>
         <div class="col-md-10 col-md-offset-1">
            <br>
            <h1>Message</h1>
            <p style="padding: 5px 25px; font-size: 20px;">
               <?php echo $inbox['message'];?>
            </p>
         </div>	
         <div class="col-md-12" style="margin-top: 25px;">
            <a href="index.php?delete=<?php echo $inbox['id'];?>">
               <p style="font-size: 20px; color: red; font-weight: bold; text-align: center;">
                  Delete Message
               </p>
            </a> 
         </div>
		</section>
   </body>
</html>
