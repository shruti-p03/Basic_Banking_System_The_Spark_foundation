<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
     
<style>

#tejas {
    
    background:url(image.jpg);
    background-position: center;
}
#icon{
    height: 50px;
    width:50px ;
    padding-right: 10px;
    padding-bottom: 10px;   
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(#ccccff,white);

}
.nav-links{
    flex:1;
    text-align: right;
}
.nav-links ul li{
list-style: none;
display: inline-block;
padding:8px 12px ;
position: relative;
}
.nav-links ul li a{
    color: black;
    text-decoration: none;
    font-size: 20px;
    font-style: normal;
    text-emphasis: bold;

}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336 ;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;
}
.th{
    text-align:center;
}


table, th, td {
  border: 1px solid black;
  height: 42px;

}

table {
  width: 100%;
  /* height: 125px; */
}
.tentry{
    text-align:center;
}
.kets{
  background:#ccccff;  
}
h1{
    text-align: left;
    font-size: 20px;
}
</style>
</head>
<body>
<section id="tejas">
        <nav>
            <div> <img src="dummy bank.PNG" id="icon" x></div>
            <div class="main" > <h1> <b> THE GRIP <br> BANKING </b> </h1>
               
            </div>
            <div class="nav-links">
            <ul>
                <li> <a href="index.php" ><b>Home</b></a> </li>
                <li> <a href="about.php" ><b>About Us</b></a> </li>
                <li> <a href="thistory.php" > <b>Transfer History</b></a>  </li>
                <li> <a href="try.php" ><b>Customers</b></a> </li>
                <li> <a href="transfermoney.php" target="_blank"> <b>Transfer Money</b></a>  </li>
                <li> <a href="faq.php"><b>FAQ's</b></a> </li>
            </ul>
        </div>
        </nav>
    </section>   

<div class="container">
        <h2 class="th">Transaction History</h2>
        
       <br>

    
       <div>
    <table>
        <thead style="color :black ;" class="kets">
            <tr>
                <th class="th">S.No.</th>
                <th class="th">Sender</th>
                <th class="th">Receiver</th>
                <th class="th">Amount</th>
                <th class="th">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'config.php';

$sql ="select * from transaction";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr>
            <td class="tentry"><?php echo $rows['sno']; ?></td>
            <td class="tentry"><?php echo $rows['sender']; ?></td>
            <td class="tentry"><?php echo $rows['receiver']; ?></td>
            <td class="tentry"><?php echo $rows['balance']; ?> </td>
            <td class="tentry"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<!-- End Table -->
</body>
</html>