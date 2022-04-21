<!-- Alfin Najeehah binti Zahid 2019618 -->

<!DOCTYPE html>
<html>
<head>
  <meta name="paypage" content="width=device-width, initial scale = 1">
  <link rel="stylesheet" href="payment.css">
  <link rel="icon" href="images/Logo.png" type="image/ico">

  <center><h2><img class="logo" src="images/Logo.png" alt="Logo"> GOOD BUS</h2></center>

  <!--Navigation bar -->
 <ul>
   <li><a  href="Homepage.php">Select Destination</a></li>
   <li ><a href="bus.php" >Select Bus</a></li>
   <li><a href="selectSeat3.php" > Select Seat</a></li>
   <li><a href="Passenger.php" > Passenger Details</a></li>
   <li><a class="active" href="Passenger.php" > Payment</a></li>
    </ul><br>
</head>

<?php
$company = $_GET['Comp'];
$time = $_GET['Time'];
$from = $_GET['From'];
$to = $_GET['To'];
$date = $_GET['Date'];
$seatnum = $_GET['Seatnum'];
$fare = $_GET['Fare'];
$name = $_GET['Name'];
$age = $_GET['Age'];
$email = $_GET['Email'];
$phoneNo = $_GET['Number'];
 ?>

<center>
<div class="credentials">
  <center><h1>Booking Details</h1></center>

  <!-- bus name -->
  <br>

<center>
<body>
<?php
$name = $_GET['Name'];

echo "Name: ".$name;
 ?>

    <p>Departure : <?php echo $time; ?></p>

    <p>Seat Number :<?php echo $seatnum; ?></p>

    <p>Origin : <?php echo $from; ?></p>

    <p>Destination : <?php echo $to; ?></p>



    <p><strong>Total Amount : RM <?php echo $fare; ?></strong></p></center>
</div>
</center>
<br><br>
    <!--  -->
    <!-- next -->
<center>
  <div class="col-75">
    <div class="container">

        <div class="col-50">
            <strong><label for="fname">Payment Method : Debit/Credit Card</label></strong><br>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Siti Hadijah">
            <label for="ccnum">Card Number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111 2222 3333 4444">
            <label for="expmonth">Exp Date</label>
            <input type="text" id="expdate" name="expdate" placeholder="06/25">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
        </div>


     <input type="submit" value="Pay" class="open-button" onclick="myFunction()">
     <!-- <button class="open-button" onclick="openForm()">Open Form</button> -->

<script>
function myFunction() {
  alert("Your booking is confirmed!\nThank you for purchasing the ticket.\nThe ticket will be sent to your details.");
}
</script>

   </body>
 </center>
   </html>
