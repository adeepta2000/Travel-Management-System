<?php
include("../controller/getPac.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
    margin: 0;
    padding: 0;
}

nav{
    background-color: #57688F;
    height: 80px;
    width: 100%;
}

nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;

}
nav ul{
    float: right;
    margin-right: 55px;
}

nav ul li a{
    color: white;
    text-decoration: none;
    font-size: 15px;
    font-family: cursive;
    padding: 7px 13px;
}

a:hover{
    color: #f7c324;
}
    </style>
</head>
<body>
<nav>

<ul>
    <li><a href="userDash.php" class="active">Home</a></li>
    <li><a href="userProfile.php">Profile</a></li>
    <li><a href="hotels.php">Hotels</a></li>
    <li><a href="userBooked.php">Booked Packages</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</nav>
<?php
include("../controller/bookedPac.php");
?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" style="text-align: center">
<br><br>
                <label style="font-size:20px;"><strong>Package Information</strong></label>
                <br><br>
 
 
                <table border="0" align="center" width="450px" height="450px">
                <tr>
          <td>Place:</td>
          <td><input type="text" name="place" value="<?php echo $data['Place'];?>"></td>
        </tr>
        <tr>
            <td>Duration:</td>
            <td><input type="text" name="dura" value="<?php echo $data['Duration'];?>"></td>
          </tr>
        <tr>
            <td>StartDate:</td>
            <td><input type="text" name="sdate" value="<?php echo $data['StartDate'];?>"></td>
          </tr>
        
        <tr>
           <td>EndDate:</td>
           <td><input type="text" name="edate" value="<?php echo $data['EndDate'];?>"></td>
       </tr>
       <tr>
            <td>Cost:</td>
            <td><input type="text" name="cost" value="<?php echo $data['Cost'];?>"></td>
        </tr>

        <tr>
            <td>BookingAmount:</td>
            <td><input type="text" name="bamount" value="<?php echo $data['BookingAmount'];?>"></td>
        </tr>
        <tr>
            <td>BookingLastDate:</td>
            <td><input type="text" name="bdate" value="<?php echo $data['BookingLastDate'];?>"></td>
        </tr>
        <tr>
            <td>OfferAmount:</td>
            <td><input type="text" name="oamount" value="<?php echo $data['OfferAmount'];?>"></td>
        </tr>
        <tr>
            <td>Transport:</td>
            <td><input type="text" name="tra" value="<?php echo $data['Transport'];?>"></td>
        </tr>


    
      
<tr>
            <td ><input type="submit" name="submit" value="Book Now" class="btn">
            <input type="submit" name="submit2" value="Go Back" class="btn">
           
            </td>
            
        </tr>
    </td>
</tr>
</table>
</form>

</body>
</html>