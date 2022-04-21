<!-- Alfin Najeehah binti Zahid 2019618 -->

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="StyleSheet.css">
  <link rel="icon" href="Logo.png" type="image/ico">

  <center><h1><img class="logo" src="images/Logo.png" alt="Logo"> GOOD BUS</h1></center>

  <!--Navigation bar -->
 <ul>
        <li><a  href="Homepage.php">Select Destination</a></li>
        <li ><a href="bus.php" >Select Bus</a></li>
        <li><a href="selectSeat3.php" > Select Seat</a></li>
        <li><a class="active" href="Passenger.php" > Passenger Details</a></li>
    </ul><br>
</head>

<body>

  <?php
  $company = $_GET['Comp'];
  $time = $_GET['Time'];
  $from = $_GET['From'];
  $to = $_GET['To'];
  $date = $_GET['Date'];
  $seatnum = $_GET['Seatnum'];
  $fare = $_GET['Fare'];
   ?>

  <div class="container">
    <center><h1>Passenger Details</h1>
    <p><strong>Your ticket will be sent to these details</strong></p>
    <hr>
  </center>

<div class="details_passenger">
  <form class="form_passenger" action="payment.php">

      <label for="name"><b>Name</b></label><br>
      <input class="input_passenger" type="text" placeholder="Name" name="Name" id="name" require><br>

      <label for="age"><b>Age</b></label><br>
      <input class="input_passenger" type="age" placeholder="Age" name="Age" id=age require><br>

      <label for="email"><b>Email</b></label><br>
      <input class="input_passenger" type="email" placeholder="Email" name="Email" id="email" require><br>

      <label for="number"><b>Phone Number</b></label><br>
      <input class="input_passenger" type="phonenumber" placeholder="Phone Number" name="Number" id="number" require><br>
      <hr>
          <input type="hidden" name="From" value="<?php echo $from; ?>">
          <input type="hidden" name="To" value="<?php echo $to; ?>">
          <input type="hidden" name="Time" value="<?php echo $time; ?>">
          <input type="hidden" name="Comp" value="<?php echo $company; ?>">
          <input type="hidden" name="Seatnum" value="<?php echo $seatnum-1; ?>">
          <input type="hidden" name="Date" value="<?php echo $date; ?>">
          <input type="hidden" name="Fare" value=" <?php  echo $fare; ?>">

      <p><strong>Total Amount : RM <?php echo $fare; ?></strong></p>

      <p>By clicking on proceed, I agree to the <a href="#">Terms & Privacy</a>.</p>

      <!-- <a href="payment.php"> -->
      <input type="submit" class="proceedbtn" value="Proceed to Pay" require>
    <!-- </a> -->
      </form>
</div>

  </div>
</body>
</html>
