<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Unicorn</title>
</head>


<body>
    <?php
    if(isset($_REQUEST["mode"])){
        if($_REQUEST["mode"]=="alr"){
            echo"<script>alert('Alredy Reserved')</script>";
        }

    }
    ?>

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
                <h4><a href="adddata.php">Add Data</a></h4>
                <h4><a href="viewAdd.php">View Addmission</a></h4>
                <h4><a href="addfee.php"  style="color:gray">Add Fees</a></h4>
                <h4><a href="request.php">Requests</a></h4>

            </div>
        </div>
        <ul>
            <label for="uncheck" id="uncheckbtn"><i class="fa-regular fa-circle-xmark"></i></i></label>
            <li><a href="adddata.php">Add Data</a></li>
            <li><a href="viewAdd.php">View Addmission</a></li>
            <li><a href="addfee.php">Add Fees</a></li>
            <li><a href="request.php">Requests</a></li>
        </ul>

        <!-- <div class="content">
            
          
        </div> -->
        <div class="heading" >
            <h2>Monthly Paid History</h2>
            <img src="underline.png" alt="">
        </div>
        
        
        <div class="bookseat">
            
            <form action="adds_pdf.php" method="POST">
             
                <h3 style="text-align:center">Paid</h3>
                <div class="seatno" ><label for="">Select Month</label></div>
                <div class="txt"><select name="month" style="text-align:center;width:90%">
                    <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                </select></div>
                <div class="seatno"><label for="">Year</label></div>
                <div class="txt"><input type="text" name="year" required="required"></div>
               
                <div class="seatbtn"><button>Submit</button></div>
                
            </form>
            

        </div>
        


        




        
        <script>
           
           
           
            function check() {
               
                // One liner function:
                const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML = css;

                // Usage: 
                addCSS("ul{left:0}")
                return true;
            }
            function uncheck(){
               
                // One liner function:
                const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML = css;

                // Usage: 
                addCSS("ul{left:-120%}")
                return true;

            }
        </script>
        </div>
        <div class="foot">
            @All Copyright Reserved By Shubham Patil
        </div>
    </div>






</body>

</html>