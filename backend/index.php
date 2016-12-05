<?php include("../includes/config.php"); ?>
<?php include("../includes/init.php"); ?>
   
<?php
   $inbox_class = new contact_inbox;
   $inbox = $inbox_class->get_inbox();

   if(isset($_GET['delete'])){
      $inbox_class->delete_contact($_GET['delete']);
      header("Location: index.php");
   }
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
            <a href="../index.php">
               <h3>Contact Form</h3>
            </a>
         </div>
      </section>
      <br>
      <h1 style="text-align: center;">Inbox Page</h1>
      <br>
		<section class="row">
			<div class="col-md-10 col-md-offset-1 borderRe">
				<table class="table table-hover">
               <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message</th>
                  <th></th>
               </tr>
               <?php 
                  foreach($inbox as $contact){
               ?>
               <tr>
                  <td><?php echo $contact['id'];?></td>
                  <td><?php echo $contact['date'];?></td>
                  <td><?php echo $contact['name'];?></td>
                  <td><?php echo $contact['email'];?></td>
                  <td><?php echo $contact['phone'];?></td>
                  <td><?php echo substr($contact['message'],0,15)."...";?></td>
                  <td>
                     <a href="mail_info.php?id=<?php echo $contact['id']; ?>">Read</a> | 
                     <a href="index.php?delete=<?php echo $contact['id']; ?>">Delete</a>
                  </td>
               </tr>
               <?php } ?>
            </table>
			</div>	
		</section>
   </body>
</html>
