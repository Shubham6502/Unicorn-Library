<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v=10">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Unicorn</title>
</head>


<body>


    <div class="main">
        <div class="main-con">
            <div class="nav">

                <div class="nav-logo">
                    <img src="unicorn.png">
                    <span>Unicorn</span>
                </div>
                <input type="submit" name="" id="check" value="" onclick="return check();">
                <input type="submit" name="" id="uncheck" value="" onclick="return uncheck();">
                <label for="check" id="checkbtn"><i class="fa-solid fa-bars"></i></label>


                <div class="nav-menu">
                    <h4><a href="index.html">Home</a></h4>
                    <h4><a href="contact.html">About</a></h4>
                    <h4><a href="contact.html">Contact</a></h4>
                    <h4><a href="gallery.php">Reservation</a></h4>

                </div>
            </div>
            <ul>
                <label for="uncheck" id="uncheckbtn"><i class="fa-regular fa-circle-xmark"></i></i></label>
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="gallery.php">Reservation</a></li>
            </ul>

            <!-- <div class="content">
        useradd.php
          
        </div> -->
        <?php

        $seat=$_POST['no'];
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];

        ?>
            <div class="heading">
                <h2>Payment</h2>
                <img src="underline.png" alt="">
            </div>


            <div class="payment">
                <div class="details">
                    <form >
                        <lable>Seat No</lable>
                        <input type="text" name="seat" value="<?php echo $seat?>" readonly>
                        <lable>Name</lable>
                        <input type="text" name="name" value="<?php echo $name?>" readonly>
                        <lable>Mobile</lable>
                        <input type="text" name="mobile" value="<?php echo $mobile?>" readonly>
                        <input type="hidden" name="email" value="<?php echo $mobile?>" readonly>

                    </form>

                </div>
                <div class="method  bigDis">
                    <div class="method-menu" >
                        <a href="#"><img src="payment/visa.png"></a>
                        <a href="#"><img src="payment/googlepay.png"></a>
                        </div>
                        <div class="method-menu" >
                        <a href="#"><img src="payment/phonepay.png"></a>
                        <a href="#"><img src="payment/paytm.png"></a>
                    </div>
                </div>
                <div class="method  mobileDis">
                    <div class="method-menu ">
                        <a href="#"><img src="payment/visa.png"></a>
                        <a href="#"><img src="payment/googlepay.png"></a>
                       
                        <a href="#"><img src="payment/phonepay.png"></a>
                        <a href="#"><img src="payment/paytm.png"></a>
                    </div>
                </div>
               <?php echo" <a href='useradd.php? no=$seat & name=$name &mobile=$mobile & email=$email' class='payment-btn'>
                <b>PAY</b>
               </a>"?>
               <marquee>Sorry Currently Its not supporting online payment method just click pay and deposit your fee offline</marquee>
            </div>


        </div>










        <script>
            var seatno = (window.onload = localStorage.getItem('getid'));

            document.getElementById("seatno").setAttribute('value', seatno);


            function check() {

                // One liner function:
                const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML = css;

                // Usage: 
                addCSS("ul{left:0}")
                return true;
            }
            function uncheck() {

                // One liner function:
                const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML = css;

                // Usage: 
                addCSS("ul{left:-120%}")
                return true;

            }
        </script>
    </div>
    <div class="foot">
        @All Copyright Reserved By Shubham Patil.
    </div>
    </div>






</body>

</html>