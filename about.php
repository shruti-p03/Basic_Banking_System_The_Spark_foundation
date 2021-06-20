<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with-device-width; initial-scale=1.0">
    
    <title>About Page</title>
    
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
 .new{
    text-align: center;
    width: 80%;
    margin:auto;

}
.new p{
    line-height: 20px;
    
}
#image {
    flex-basis: 32%;
    padding-top: 20px;
    border-radius: 10px ;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
    width: 500px;
    height: 500px;
    padding-left: 33%;
    

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
                
                
                <li> <a href="index.php"><b>Home</b></a> </li>
                <li> <a href="about.php" ><b>About Us</b></a> </li>
                <li> <a href="thistory.php" > <b>Transfer History</b></a>  </li>
                <li> <a href="try.php"><b>Customers</b></a> </li>
                <li> <a href="transfermoney.php" target="_blank"> <b>Transfer Money</b></a>  </li>
                <li> <a href="faq.php" ><b>FAQ's</b></a> </li>
            </ul>
        </div>
        </nav>
    </section>
    

<section class="new">

    <h1>About Us</h1>
    <br>

    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur vel amet obcaecati provident quibusdam placeat, quia nobis iusto dignissimos eum. Deserunt ea eligendi illo molestiae labore nemo delectus laborum odit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit hic qui commodi beatae aliquid, numquam ad alias quas fuga similique perferendis minus ipsa deleniti dolores iusto eaque eligendi necessitatibus. Provident! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus fuga maiores nihil magnam quo, expedita iste qui ut voluptas blanditiis ullam explicabo eum, unde minus? In nostrum consequatur cum assumenda! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non fugiat iure sit beatae enim, officiis deserunt pariatur nesciunt, repellendus nam vitae modi delectus, animi nobis fuga aliquam eaque sed? Odit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum itaque nobis assumenda laborum facere recusandae molestias omnis quia dolore magnam, sapiente perferendis obcaecati officiis nesciunt! Modi, repudiandae? Explicabo, eaque. Labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deserunt libero quis recusandae dolorem, esse nisi quidem doloremque minus quas. Sunt libero itaque optio laborum odit pariatur placeat porro ipsa.
    </p>
    <div id="image">
        <img src="money-transfer-services.png" alt="">
        
    </div>
 </section> 
</main>
</body>
</html>