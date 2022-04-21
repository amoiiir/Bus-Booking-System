<!-- Muhammad Firdaus bin Shahrum 2013803 -->
<!-- Muhammad Amir Hamzah bin Abd Aziz 2011685 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="StyleSheet.css" rel="stylesheet">
    <center><h1><img class="logo" src="images/Logo.png" alt="Logo"> GOOD BUS</h1></center>

    <style>
        html {
          font-family: Helvetica;
        }

        table {
          border-collapse: collapse;
          border: 2px solid black;
          letter-spacing: 1px;
          font-size: 0.8rem;
          width: 100px;
        }

        td, th {
          border: 1px solid black;
          padding: 10px 20px;
        }

        td {
          text-align: center;
        }

        button{
          cursor: pointer;
          border: none;
          background: none;
          -webkit-appearance: none;
          padding: 0px;
        }

      .details{
        position: absolute;
        margin: auto;
        text-align: left;
        padding: 10px;
      }

      .tooltip {
        position: relative;
        display: inline-block;
        }

      .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 5px 0;
        border-radius: 6px;
        position: absolute;
        z-index: 1;
      }

      .tooltip:hover .tooltiptext {
        visibility: visible;
      }

      .tooltip .tooltiptext {
        opacity: 0;
        transition: opacity 0.5s;
      }

      .tooltip:hover .tooltiptext {
        opacity: 1;
      }

      .bus{
        margin: auto;
        width: 500px;
        height: 270px;
        border: 3px solid blue;
        padding: 10px;
      }

      .seaticon{
        transform:scaleX(-1);
      }

      .details_left{
        position : relative;
      	left : 30%;
        text-align : left;
        line-height: 27px;
        height: 120px;
        width: 70%;
      }

    </style>

  </head>
  <body>

    <!-- navbar -->
    <ul>
           <li><a  href="Homepage.php">Select Destination</a></li>
           <li ><a href="bus.php" >Select Bus</a></li>
           <li><a class="active" href="selectSeat3.html" > Select Seat</a></li>
       </ul><br>
    <!-- end of navbar -->

    <!-- content -->

    <?php
    $company = $_GET['Comp'];
    $time = $_GET['Time'];
    $from = $_GET['From'];
    $to = $_GET['To'];
    $date = $_GET['Date'];
     ?>

     <div class="details">
       <h3>Operator : <?php echo $company ?></h3>
       <h3>Date : <?php echo $date ?> </h3>
       <h3>Time : <?php echo $time ?> </h3>
       <h3>Destination : <?php echo $from ?> - <?php echo $to ?> </h3>
     </div>

     <?php

     include("Seat.php");

     $data = array(
               array(0,0,1,0,0,0,0,0,0,0),//window seat
               array(0,0,0,1,0,0,1,0,0,0),//aisle seat
               array(1,0,0,0,1,0,0,0,0,0),//single seat
               );

               for($row = 0; $row < 3; $row++){
                 static $seatno = 1;
                       for($col = 0; $col <= 9; $col++){
                         $seats[$seatno] = new seat();
                         $seats[$seatno]->set_seatno($seatno);
                         $seats[$seatno]->set_taken($data[$row][$col]);
                         $seats[$seatno]->set_row($row);
                         $seats[$seatno]->set_col($col);
                         if($row<2){
                           $seats[$seatno]->set_fare(21);
                         }
                         else if($row=2){
                           $seats[$seatno]->set_fare(25);
                         }
                         $seatno++;
                   }
               }?>

           <div class="bus">

               <?php
               //printing all elements in the array
               for($row = 0; $row < 3; $row++)
               {
                 if($row >1){
                   echo "<br>"."<br>";
                 }
                 static $seatnum = 1;
                 ?>
                 <div style="display:flex;">
                 <?php
                 for($col = 0; $col <= 9; $col++)
                 {
                     $seatnum++;
                     if($seats[$seatnum-1]->get_taken() == 0)
                     {
                   ?>
                         <form action="Passenger.php" method="get">
                           <input type="hidden" name="From" value="<?php echo $from; ?>">
                           <input type="hidden" name="To" value="<?php echo $to; ?>">
                           <input type="hidden" name="Time" value="<?php echo $time; ?>">
                           <input type="hidden" name="Comp" value="<?php echo $company; ?>">
                           <input type="hidden" name="Seatnum" value="<?php echo $seatnum; ?>">
                           <input type="hidden" name="Date" value="<?php echo $date; ?>">
                           <input type="hidden" name="Fare" value="<?php echo $seats[$seatnum-1]->get_fare(); ?>">
                             <div class="tooltip">
                               <button type="submit"><img class="seaticon" onclick="document.getElementById('images').src='seatWhite.png'" id="images" src="images/seatWhite.png" style="width:50px"></button>
                             <span class="tooltiptext"><?php echo "Seat ". $seatnum-1; ?></span>
                             </div>
                         </form>
                         <?php
                       }
                       else if ($seats[$seatnum-1]->get_taken() == 1)
                       {
                     ?>
                         <a href="">
                           <div class="tooltip">
                           <img class="seaticon" onclick="seattaken()" id="images" src="images/seatBlack.png" style="width:50px">
                           <span class="tooltiptext"><?php echo "Seat ". $seatnum-1; ?></span>
                         </div>
                         </a><?php
                       }
                 }
                   ?>
                 </div>
                 <?php
                 echo "<br>";
                 echo "<br>";
               }
               ?>
           </div>

             <script type="text/javascript">
             function seattaken(){
               alert("The seat is already taken. Plase select another seat.");
             }
             </script>

    <!-- end of content -->


    <!-- footer -->
    <br><br>
    <table class="center">
      <tr>
        <th>Seat Type</th>
        <th>Rate (RM)</th>
      </tr>
      <tr>
        <td>Window Seat</td>
        <td>21</td>
      </tr>
      <tr>
        <td>Aisle Seat</td>
        <td>21</td>
      </tr>
      <tr>
        <td>Single Seat</td>
        <td>25</td>
      </tr>
      </table>
    <!-- end of footer -->

  </body>
</html>
