<?php include("includes/config.php"); ?>
<?php include("includes/init.php"); ?>

<?php
   $name = "";
   $email = "";
   $phone = "";
   $message = "";

   $warning = new warning;
   if(isset($_POST["name"])){

      $name    = trim($_POST['name']);
      $email   = trim($_POST['email']);
      $phone   = trim($_POST['phone']);
      $message = trim($_POST['message']);

      $field_checker = $warning->inputFields_checker();

      if($field_checker){
         $mailTo_class = new mail;

         $mailTo_class->name = $name;
         $mailTo_class->from = $email;
         $mailTo_class->phone = $phone;
         $mailTo_class->message = $message;

         // if($mailTo_class->send()){
            $mailTo_class->send_to_database();
            header("location: thankyou_page.php");
         // } else {
         // }
      } else {
      }
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
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Main CSS -->
      <link href="css/main.css" rel="stylesheet">
   </head>
   <body>
      <section id="header_container" class="row">
         <div class="col-md-8 col-md-offset-2 borderRe">
            <a href="backend/index.php">
               <h3>Contact Inbox</h3>
            </a>
         </div>
      </section>
      <br>
      <h1 style="text-align: center;">Contact Form</h1>
      <section id="contactPage_container" class="row borderRe">
         <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 borderRed">
               <form action="index.php" method="post">
                  <div class="form-group">
                     <label for="name">
                        Name &nbsp&nbsp&nbsp
                        <span class="warning">
                           <?php echo $warning->warning_message('name');?> 
                        </span>
                     </label>
                     <input name="name" class="form-control" id="name" placeholder="Enter Name"
                        value="<?php echo $name;?>">
                  </div>
                  <div class="form-group">
                     <label for="email">
                        Email &nbsp&nbsp&nbsp
                        <span class="warning">
                           <?php echo $warning->warning_message('email');?> 
                        </span>
                     </label>
                     <input type="" class="form-control" name="email" id="email" 
                        placeholder="Enter Email" value="<?php echo $email;?>">
                  </div>
                  <div class="form-group">
                     <label for="phone">
                        Phone 
                        <span style="font-size: 11px;"> 
                           (optional)
                        </span>
                     </label>
                     <input type="" class="form-control" name="phone" id="phone" 
                        placeholder="Enter Phone" value="<?php echo $phone;?>">
                  </div>
                  <div class="row form-group">
                     <div class="col-md-12">
                     <label for="message" class="">
                        Message &nbsp&nbsp&nbsp
                        <span class="warning">
                           <?php echo $warning->warning_message('message');?> 
                        </span>
                     </label>
                     <br>
                     <textarea id="message" name="message">
                     <?php echo $message;?>
                     </textarea>
                  </div>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
               </form>
            </div>
         </section>
   </body>
</html>
