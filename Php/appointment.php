<?php
include ('connect.php');
if(isset($_POST['savebtn'])){

  $name = $_POST['fullName'];
  $email = $_POST['email'];
  $phoneno = $_POST['phoneno'];
  $appointment = $_POST['appointmentDate'];
  $address= $_POST['address'];

  $insert_q = "insert into book_appointment (full_name,email,mobile,address,date) values ('$name','$email','$phoneno','$address','$appointment')";
  $mayank = mysqli_query($con,$insert_q);
  if($mayank){
    echo "<script>alert('Your appointment is Booked Now')</script>";
  }
  else{
    echo "<script>alert('sorry for the incovenience')</script>";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HCare</title>
    <!------------------ CSS ------------------>
    <link rel="stylesheet" href="index.css">
    <!------------------Side Icons------------------>
    <link rel="shortcut icon"  href="img/pexels-pixabay-139398.jpg">
    <!------------------ Import Font ------------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
    <!------------------ Font-Awesome-for-Icons------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-------Link Swiper's Css------->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>
<body>
    <div class="mainn">
       <!-- <div class="hamburger">
          <img class="ham" src="hamb.png" alt="" width="23">
          <img class="cross" src="cross.png" alt="" width="23">-->
         <div class="book">
          <h1> Book An Appointment </h1>
          <form action="" method="post">
              <div class="mb-3">
                  <label for="personename" class="form-label"> Enter Your Full Name </label>
                  <input type="name" class="form-control" id="personename" name="fullName">
              </div>
              <div class="mb-3">
                <label for="personeemail" class="form-label">Email Id</label>
                <input type="email" class="form-control" id="personeemail" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your Email Id and Phone Number with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="personenumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="personenumber" name="phoneno">
              </div>
              <div class="mb-3">
                  <label for="personeappo" class="form-label"> Appointment Date </label>
                  <input type="enq" class="form-control" id="personeappo" name="appointmentDate">
              </div>
              <div class="mb-3">
                <label for="personeaddress" class="form-label"> Address Details </label>
                <input type="enq" class="form-control" id="personesddress" name="address">
            </div>
              
              <button type="submit" class="btn btn-sn" name="savebtn">Submit</button>
            </form>
         </div>
    
</body>
</html>