<?php

   include "conn.php";

      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = "INSERT INTO book_form (name, email, phone, address, location, guest, arrivals, leaving) VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

      if (mysqli_query($conn, $request))
      {
         echo "<script type='text/javascript'>alert(Booking Completed!');</script>";
         echo "<script>document.location='home.php'</script>";
      }
      else
      {
      echo "Error" . mysqli_error($conn);
      }
   
?>