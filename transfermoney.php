<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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
                <li> <a href="index.php"><b>Home</b></a> </li>
                <li> <a href="about.php"><b>About Us</b></a> </li>
                <li> <a href="thistory.php"> <b>Transfer History</b></a>  </li>
                <li> <a href="try.php"><b>Customers</b></a> </li>
                <li> <a href="transfermoney.php" target="_blank"> <b>Transfer Money</b></a>  </li>
                <li> <a href="faq.php"><b>FAQ's</b></a> </li>
            </ul>
        </div>
        </nav>
    </section>   


















<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>


<div class="container">
        <h2 class="th" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div>
                    <table>
                        <thead style="color : black;"  class="kets">
                            <tr>
                            <th  class="th">Id</th>
                            <th  class="th">Name</th>
                            <th  class="th">IFSC_Code</th>
                            <th  class="th">E-mail</th>
                            <th  class="th">Gender</th>
                            <th  class="th">Balance</th>
                            <th  class="th">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                    <td class="tentry"><?php echo $rows['id'] ?></td>
                    <td class="tentry"><?php echo $rows['name'] ?></td>
                    <td class="tentry"><?php echo $rows['ifsc_code'] ?></td>
                    <td class="tentry"><?php echo $rows['email'] ?></td>
                    <td class="tentry"><?php echo $rows['gender'] ?></td>
                    <td class="tentry"><?php echo $rows['balance'] ?></td>
                        <td class="tentry"><a href="customers.php?id= <?php echo $rows['id'] ;?>"> <button class="btn">View and Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>

         <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

         
</body>
</html>