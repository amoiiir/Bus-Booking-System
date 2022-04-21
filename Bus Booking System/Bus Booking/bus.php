<!-- Nur Najua binti Abdul Rahim 1919230 -->

<!DOCTYPE html>
<head>
<title> Buses schedules </title>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="StyleSheet.css">
</head>

<body>
<center><h1><img class="logo" src="images/Logo.png" alt="Logo"> GOOD BUS</h1></center>

<?php
$from = $_GET['From'];
$to = $_GET['To'];
$date = date("d-m-Y", strtotime($_GET['Date']));
 ?>

  <ul>
       <li><a href="Homepage.php">Select Destination</a></li>
       <li ><a class="active"  href="bus.html" >Select Bus</a></li>
   </ul><br>

        <h2 style="text-align:center";>BUSES SCHEDULE</h2>
        <hr>
        <h4>Buses Available > <?php echo $date; ?></h4>

        <table>
            <tr>
              <th>Buses</th>
              <th>From</th>
              <th>To</th>
              <th>Departure</th>
              <th>Fare</th>
              <th>Available Seats</th>
            </tr>
            <tr>
              <td>MARALINER</td>
              <td><?php echo strtoupper($from);?></td>
              <td><?php echo strtoupper($to); ?></td>
              <td>1:30 PM</td>
              <td>
                Double seat: RM21.00
                <br>
                Single Seat: RM25.00
              </td>
              <td>
                <form action="selectSeat3.php" method="get">
                  <input type="hidden" name="From" value="<?php echo $from; ?>">
                  <input type="hidden" name="To" value="<?php echo $to; ?>">
                  <input type="hidden" name="Date" value="<?php echo $date; ?>">
                  <input type="hidden" name="Time" value="1:30 PM">
                  <input type="hidden" name="Comp" value="MARALINER">
                <button class="open-button" type="submit">Select Seat</button>
                </form>
          </td>

          </tr>
          <tr>
            <td>MAYANG SARI</td>
              <td><?php echo strtoupper($from);?></td>
              <td><?php echo strtoupper($to); ?></td>
              <td>3:00 PM</td>
              <td >
                Double seat: RM21.00
                <br>
                Single Seat: RM25.00
              </td>
              <td>
                <form action="selectSeat3.php" method="get">
                  <input type="hidden" name="From" value="<?php echo $from; ?>">
                  <input type="hidden" name="To" value="<?php echo $to; ?>">
                  <input type="hidden" name="Date" value="<?php echo $date; ?>">
                  <input type="hidden" name="Time" value="3:00 PM">
                  <input type="hidden" name="Comp" value="MAYANG SARI">
                <button class="open-button" type="submit">Select Seat</button>
                </form>
          </tr>

          <tr>
            <td>TRANSNASIONAL</td>
              <td><?php echo strtoupper($from);?></td>
              <td><?php echo strtoupper($to); ?></td>
              <td>8:15 PM</td>
              <td>
                Double seat: RM21.00
                <br>
                Single Seat: RM25.00
              </td>
              <td>
                <form action="selectSeat3.php" method="get">
                  <input type="hidden" name="From" value="<?php echo $from; ?>">
                  <input type="hidden" name="To" value="<?php echo $to; ?>">
                  <input type="hidden" name="Date" value="<?php echo $date; ?>">
                  <input type="hidden" name="Time" value="8:15 PM">
                  <input type="hidden" name="Comp" value="TRANSNASIONAL">
                <button class="open-button" type="submit">Select Seat</button>
                </form>
          </tr>

          <tr>
            <td>KKKL</td>
              <td><?php echo strtoupper($from);?></td>
              <td><?php echo strtoupper($to); ?></td>
              <td>9:00 PM</td>
              <td >
                Double seat: RM21.00
                <br>
                Single Seat: RM25.00
              </td>
              <td>
                <form action="selectSeat3.php" method="get">
                  <input type="hidden" name="From" value="<?php echo $from; ?>">
                  <input type="hidden" name="To" value="<?php echo $to; ?>">
                  <input type="hidden" name="Date" value="<?php echo $date; ?>">
                  <input type="hidden" name="Time" value="9:00 PM">
                  <input type="hidden" name="Comp" value="KKKL">
                <button class="open-button" type="submit">Select Seat</button>
                </form>
          </tr>
      </table>

</body>
