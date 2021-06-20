<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Sorry! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('MONEY TRANSACTED SUCESSFULLY!');
                                     window.location='thistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    
<style>
.th{
    text-align:center;
}


table, th, td {
  border: 1px solid black;
  height: 42px;

}

table {
  width: 100%;
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
.trans{
display: flex;
align-items: center;
text-align:center;
}
.fy{
    text-align:center;
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
                <li> <a href="index.php"><b>Home</b></a> </li>
                <li> <a href="about.php"><b>About Us</b></a> </li>
                <li> <a href="thistory.php"> <b>Transfer History</b></a>  </li>
                <li> <a href="try.php"><b>Customers</b></a> </li>
                <li> <a href="transfermoney.php" target="_blank"> <b>Transfer Money</b></a>  </li>
                <li> <a href="FAQs.html"><b>FAQ's</b></a> </li>
            </ul>
        </div>
        </nav>
    </section>   

   <div class="container">
        <h2 class="th">Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-hover">
                <tr style="color : black;" class="kets">
                    <th class="th">S-no</th>
                    <th class="th">Name</th>
                    <th class="th">IFSC-Code</th>
                    <th class="th">E-mail</th>
                    <th class="th">Gender</th>
                    <th class="th">Balance</th>
                
                </tr>
                <tr style="color : black;">
                    <td class="tentry"><?php echo $rows['id'] ?></td>
                    <td class="tentry"><?php echo $rows['name'] ?></td>
                    <td class="tentry"><?php echo $rows['ifsc_code'] ?></td>
                    <td class="tentry"><?php echo $rows['email'] ?></td>
                    <td class="tentry"><?php echo $rows['gender'] ?></td>
                    <td class="tentry"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <div class="fy">
        <a class="trans" style="color : black;"><b>Transfer To:</b></a>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            </div>
            </select>
            <div class="fy">
     
        <br>
        <br>

            <a class="trans" style="color : black;"><b>Amount:</b></a>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
                <button class="btn btn-outline-dark" name="submit" type="submit" id="myBtn" >Proceed</button>
            </div>
        </form>
    </div> 
</body>
</html>