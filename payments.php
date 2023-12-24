<?php require_once('./config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin: 0; padding: 0;
    box-sizing: none;
    outline: none;
    border: none;
    text-transform: capitalize;
    transition: all .2s linear;
  

}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    min-height: 100vh;
    background-image: url(train-93.jpg);
    background-size: cover;
    padding-bottom: 70px;
}

.container form{
    padding: 20px;
    width: 700px;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,1);
   
    
}
.container form .row{
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.container form .row .col{
    flex: 1 1 250px;

}

.container form .row .col .title{
    font-size: 20px;
    color: #333;
    padding-bottom: 5px;
    text-transform: uppercase;
}

.container form .row .col .inputBox{
    margin: 15px 0;
}

.container form .row .col .inputBox span{
    margin-bottom: 5px;
    display: block;
}

.container form .row .col .inputBox input{
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
    text-transform: none;

}

.container form .row .col .inputBox input:focus{
    border: 1px solid #000;

}

.container form .row .col .flex{
    display: flex;
    gap: 15px;

}
.container form .row .col .flex .inputBox{
    margin-top: 5px;

}

.container form .row .col .inputBox img{
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #000);
}
.container form .submit-btn{
    width: 180px;
    padding: 12px;
    font-size: 15px;
    background: #2ecc71;
    color: #fff;
    margin-top: 5px;
    cursor: pointer;
}

.container form .submit-btn:hover{
    background: #2ecc71;

}

 

</style>
      </head>

<?php require_once('inc/header.php') ?>
  <body class="layout-top-nav layout-fixed layout-navbar-fixed" style="height: auto;">
    <div class="wrapper">
        
            </div>
          <br>
          <br>
          <br>
          <br>
          <a href="Home.html"></a>

<div class = "container">

        <form action = "">

    <div class = "row">
        <div class = "col">
            <h3 class = "title">Billing Address</h3>

            <div class="inputBox">
                <span>Full name:</span>
                <input type="text" placeholder="john deo">

                </div>

                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" placeholder="example@example.com">
    
                    </div>

                    
                <div class="inputBox">
                    <span>Address:</span>
                    <input type="text" placeholder="room - street - locality">
    
                    </div>

                    <div class="inputBox">
                        <span>City:</span>
                        <input type="text" placeholder="Colombo">
        
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                            <span>State:</span>
                            <input type="text" placeholder="Western">
                            </div>

                            <div class="inputBox">
                                <span>Zip code:</span>
                                <input type="text" placeholder="123456">

                            </div>
            </div>
    </div>




    <div class = "col">
        <h3 class = "title">Payment</h3>

        <div class="inputBox">
            <span>Cards accepted:</span>
            <img src="cardpayments.png" alt = "">

            </div>

        <div class="inputBox">
            <span>Name on card:</span>
            <input type="text" placeholder="john deo">

            </div>

                
            <div class="inputBox">
                <span>Credit card number:</span>
                <input type="text" placeholder="1111-2222-3333-4444">

                </div>

                <div class="inputBox">
                    <span>Exp month:</span>
                    <input type="text" placeholder="january">
    
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                        <span>exp year:</span>
                        <input type="text" placeholder="2023">
                        </div>

                        <div class="inputBox">
                            <span>CVV:</span>
                            <input type="text" placeholder="123">

                        </div>
                </div>
        </div>
</div>

<input type="submit" value="proceed to checkout" class = "submit-btn">



</form>

</div>
    
          
    
  </body>
</html>
