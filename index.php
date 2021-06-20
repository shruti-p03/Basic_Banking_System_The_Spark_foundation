<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with-device-width; initial-scale=1.0">
    
    <title>Home Page</title>
</head>
<style>
    /* ------------------------------Header----------------------- */

   
    *{
   margin:0;
   padding: 0;
      }
    
.header{
    
    min-height: 100vh;
    width: 100%;
     background-image: /*linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7))*/url(pexels-scott-webb-532568.jpg); 
    background-position: center;
    background-size: cover;
    position: relative;
   }

   nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
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
.text-box{
    width:90% ;
    color:black; 
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}
.text-box h1{
    font-size: 50px;
}
.text-box p{
    margin: 30px 0 40px;
    font-size: 13px;
    color:black;
}
h2{
    background: rgb(195, 199, 250);
    font-size: 15px;
    
}
.main{
    text-align: left;
    font-size: 15px;
}
#icon{
    height: 50px;
    width:50px ;
    padding-right: 10px;
    padding-bottom: 10px;   
}
</style>

<body>
    
   <!-- --------------header------------------------------> 
  <main>
    <section class="header">
        
        <nav>
            <div> <img src="dummy bank.PNG" id="icon" x></div>
            <div class="main" > <h1> <b> THE GRIP <br> BANKING </b> </h1>
               
            </div>
            <div class="nav-links">
               
                
            <ul>
                
                
                <li> <a href="index.php" > <b>Home</b></a> </li>
                <li> <a href="about.php" ><b>About Us</b></a></li>
                <li> <a href="thistory.php" > <b>Transfer History</b></a> </li>
                <li> <a href="try.php" > <b>Customers</b></a></li>
                <li> <a href="transfermoney.php" target="_blank"> <b>Transfer Money</b></a> </li>
                <li> <a href="faq.php" ><b>FAQ's</b></a></li>
            </ul>
        </div>
        </nav>
        
        <div class="text-box">
            <h1><b>Secure way of Money Transfer</b></h1>
            <p> <b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus beatae, harum nobis cumque voluptas perspiciatis in,<br> deserunt, possimus velit soluta non maxime voluptate inventore nam odit sit asperiores aliquid sed.</b></p>
        </div>
         <h2><marquee behavior="scroll"direction="left">   |   Grip Bank never asks for your Card/PIN/OTP/CVV details on phone, message or email. Please do not click on links received on your email or mobile asking your Bank/Card details.   |   Dear Customer, if you have donated for PM CARES through Grip Bank Internet Banking, you can download the Receipt from PMCares portal of govt. using the reference number available with you.   |   Have you tried our new simplified and intuitive business banking platform? Log in to yonobusiness.gripbank to avail business banking services.</marquee></h2>  
        

    </section>
</body>
</html>