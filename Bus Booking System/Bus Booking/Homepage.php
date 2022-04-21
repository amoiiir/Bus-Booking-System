<!-- Nur Faizah binti Mhd Kamil 2016834 -->
<!--Homepage-->

<!DOCTYPE html>
<html lang="en">
<head>
  <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
  <link rel="stylesheet" href="StyleSheet.css" type="text/css">
  <link rel="icon" href="images/Logo.png" type="image/ico">
  <center><h1><img class="logo" src="images/Logo.png" alt="Logo"> GOOD BUS</h1></center>
  <title>Bus Booking System</title>
</head>

<body>
   <!--Navigation bar -->
  <ul>
    <li><a class="active" href="Homepage.php">Select Destination</a></li>
  </ul><br>
  
  <!-- Image Header -->
  <center><img class="imgGB" src="images/bus.png" alt="Good Bus"></center>
  
  <!-- Choose Destinations -->
  <div class="DestinationDate">
  <form action="bus.php" onsubmit="return validation(event)" id="Form">
  
    <!-- From Destination -->
    <label for="From">From:</label>
    <select name="From" id="From">
      <option >Choose Destination</option>
      <?php
        $fromdestination = array("Kuala Lumpur", "Melaka", "Johor Bahru", "Kuantan");
        foreach($fromdestination as $fromdes) {
          echo "<option>$fromdes</option>";
        }
      ?>
    </select>

    <!-- To Destinations -->
    <label for="To">To:</label>
    <select name="To" id="To" require>
      <option selected="selected" >Choose Destination</option>
      <?php
        $todestination = array("Kuala Lumpur", "Melaka", "Johor Bahru", "Kuantan");
        foreach($todestination as $todes) {
          echo "<option required>$todes</option>";
        }
      ?>
    </select>

    <!-- Date -->
    <label for="Date">Date:</label>
    <input type="Date" name="Date" id="Date" required>
    <br><br>

    <!-- Submit button to the next page -->
    <input type="submit" onclick="validation()" class="button" id="SearchBus" value="Search Bus" require>
  </form>
  </div>
  
  <!-- Text -->
  <div class="HomepageBox">
    <div class="box">
      <div class="titles">
      <h3>Great Price!</h3>
      </div>
        <p> Traveling within Malaysia can be done at a reasonable
          cost with our service</p>
    </div>
    <div class="box">
      <div class="titles">
      <h3>Best Seat!</h3>
      </div>
      <p>We provide the most comfortable and nicest seating available
        for the convenience of our customer
      </p>
    </div>
    <div class="box">
      <div class= "titles">
      <h3>Safe Journey!</h3>
      </div>
      <p>Travel safely with GoodBus, which has drivers
        who have been trained in safe bus driving
      </p>
    </div>
  </div>
  
  <!-- Warning message -->
  <script type="text/javascript">
    function validation(){
      if(document.getElementById("From").value == "Choose Destination" || document.getElementById("To").value == "Choose Destination"){
        alert("Please fill in all the forms!");
        return false;
      }
      else if (document.getElementById("To").value == document.getElementById("From").value) {
        alert("Please select a different destination!");
        return false;
      }
      else {
        return true;
      }
    }
  </script>
</body>
</html>
