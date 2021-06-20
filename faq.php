<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with-device-width; initial-scale=1.0">
    
    <title>FAQs</title>
</head>
<style>
    
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
    @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

body{
   background: #f6f6f6;
}

.box{
   width: 500px;
   margin: 100px auto;
   background: #fff;
   border-radius: 7px;
   box-shadow: 1px 2px 4px rgba(0,0,0,.3);
}

.box .heading{
   background: rgb(168, 173, 243);
   border-radius: 7px 7px 0px 0px;
   padding: 20px;
   color: #fff;
   text-align: center;
   font-family: "Rubik";
}

.faqs{
   padding: 0px 30px 30px;
}

::-webkit-details-marker{
   float: right;
   margin-top: 3px;
}

details{
   background: #f6f6f6;
   padding: 10px 30px;
   border-radius: 7px;
   margin-top: 20px;
   font-family: "Rubik";
   font-size: 14px;
   letter-spacing: 1px;
   cursor: pointer;
}

details summary{
   outline: none;
}
#tejas {
    
    background: url(image.jpg);
    background-position: center;
}
#icon{
    height: 50px;
    width:50px ;
    padding-right: 10px;
    padding-bottom: 10px;   
}

</style>
    <body>
    <main> 
        <section id="tejas">
        <nav>
            <div> <img src="dummy bank.PNG" id="icon" x></div>
            <div class="main" > <h1> <b> THE GRIP <br> BANKING </b> </h1>
               
            </div>
            <div class="nav-links">
               
                
            <ul>
                
                
                <li> <a href="index.php" ><b>Home</b></a> </li>
                <li> <a href="about.php"><b>About Us</b></a> </li>
                <li> <a href="thistory.php" > <b>Transfer History</b></a>  </li>
                <li> <a href="try.php" ><b>Customers</b></a> </li>
                <li> <a href="transfermoney.php" target="_blank"> <b>Transfer Money</b></a>  </li>
                <li> <a href="faq.php" ><b>FAQ's</b></a> </li>
            </ul>
        </div>
        </nav> 
        </section>

        <section>
        <div class="box">
            <p class="heading">FAQs</p>
            <div class="faqs">
               <details>
                  <summary>How do I change my address online?</summary>
                  <p class="text">In order for you to change your address on your accounts, we need to have your signature for security reasons.</p>
               </details>
               <details>
                  <summary>How do I transact Money?</summary>
                  <p class="text">You can go to transfer money and click View & Transact.</p>
               </details>
               <details>
                <summary>Do I get the list?</summary>
                <p class="text">Yes you get customer's list.</p>
             </details>
             <details>
                <summary>What is Lorem ipsum?</summary>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </details>
             <details>
                <summary>Does it perfrom real transactions?</summary>
                <p class="text">No, it is a dummy model.</p>
             </details>
            </div>
         </div>  
        </section>
  
    

</main>
</body>
</html>