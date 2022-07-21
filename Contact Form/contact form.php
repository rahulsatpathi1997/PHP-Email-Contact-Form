<?php
if(isset($_POST['Submit'])){


$to = 'rahul46588@gmail.com'; // note the comma
// subject
$subject = 'Contact Enquiry!';
$from = 'support@rbmsoftwares.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers .= 'Cc: $email' . "\r\n";

// message
$message = '
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: 1px collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  <h2>Contact Enquiry!</h2>
 
  
 
  <table>
  <tr>
  <th>'."Name</th><td>  ".$_POST['name'].'</td></tr>
  
  <tr>
  <th>'."Email</th><td>".$_POST['email'].'</td></tr>
  <tr>
  <th>'."Phone</th><td> ".$_POST['contact'].'</td></tr>
  <tr>
  <th>'."Date Of Birth</th><td> ".$_POST['date'].'</td></tr>
  <tr>
  <th>'."Country </th><td> ".$_POST['country'].'</td></tr>
  <tr>
  <th>'."State</th><td> ".$_POST['state'].'</td></tr>
  <tr>
  <th>'."Uplode Ducument</th><td> ".$_POST['file'].'</td></tr>
  <tr>
  <th>'."Street Address</th><td> ".$_POST['Address'].'</td></tr>
  </table>
</body>
</html>';


mail($to,$subject,$message,$headers);
echo "<script>alert('Your Message has been Sucessfully sent . We will contact you shortly')</script>";

}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="container">
  <div class="panel panel-default">
<h3>Contact Form</h3>
<div class="panel-body">

 <form action=""method="post">
 <div class="row">
 <div class="col-sm-4">
    <label for="fname">Full Name</label>
    <input type="text" class="form-control"id="fname" name="name" placeholder="Full Name.."required>
</div>
<div class="col-sm-4">
    <label for="lname">Email Address</label>
    <input type="email"class="form-control" id="lname" name="email" placeholder="Email Address.."required>
    </div>
    <div class="col-sm-4">
    <label for="lname">Contact Number</label>
    <input type="text" class="form-control" id="lname" name="contact" placeholder="Contact Number.."required>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
	<label for="lname">Date Of Birth</label>
    <input type="date" class="form-control" id="lname" name="date" placeholder="Date of Birth.."required>
    </div>
    <div class="col-sm-4">
	<label for="country">Country</label>
    <select id="country" class="form-control" name="country"required>
	<option value="india">--Select Cuntry--</option>
      <option value="india">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    </div>
   <div class="col-sm-4">
	<label for="country">State</label>
    <select id="country" class="form-control" name="state"required>
	<option value="india">--Select state--</option>
      <option value="West Bengal">West Bengal</option>
      <option value="bihar">Bihar</option>
      <option value="jharkhand">Jharkhand</option>
    </select>
    </div>
    </div>
   <div class="row">
    <div class="col-sm-12">
  <label for="subject">Street Address</label>
    <textarea id="subject" class="form-control" name="Address" placeholder="Street Address" style="height:200px"required></textarea>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6">
    <br>
    <input type="submit"class="btn btn-primary"name="Submit" value="Submit">
    </div>
   <div class="col-sm-6">
	<label for="lname">Uplode Ducument</label>
    <input type="file" id="lname" class="form-control" name="file" <?php $allowedExts = array("pdf", "doc", "docx"); ?>>
    </div>
     
    </div>
  </form>
</div>