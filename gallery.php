<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Unicorn</title>
    <style>
        .desk button{
        color: black;
         background-color: transparent;
          border-color: transparent; 
          cursor: cursor;
           width:90%;
           height:80%;
           display:flex;
           align-items:center;
           justify-content:center;
           font-size:0.80rem;
        }
        .seatbtn button{
            width:15vw;
            height:4vw;
            background-color:#f48a3e;
            border:none;
            border-radius:4px;
            margin:2vw auto;
            
        }
        @media (max-width:600px) {
            .desk button{
            font-size:0.68rem;
            padding-top:1vw;
            }
            .seatbtn button{
                width:30vw;
                height:6vw;
            }
        }
        </style>

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
                <h4><a href="gallery.php" style="color:gray">Reservation</a></h4>

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
            
          
        </div> -->
            <div class="heading">
                <h2>Seating Arrangement</h2>
                <img src="underline.png" alt="">
            </div>
            <h3 style="margin:auto;color:#f48a3e;margin-top:2vw;margin-bottom:2vw">Please Select Seat Below </h3>

            <div class="seats">
                <div class="row">
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <!-- <div class="s1 blank door"></div> -->
                    <div class="s1 blank door">ENTRY</div>
                    <div class="s1 desk ss1" id="1"><button value="1"  onclick="select(this.value)">1</button></div>
                    <div class="s1 desk ss2" id="2"><button value="2"  onclick="select(this.value)">2</button></div>
                    <div class="s1 desk ss3" id="3"><button value="3"  onclick="select( this.value)">3</button></div>
                    <div class="s1 desk ss4" id="4"><button value="4"  onclick="select( this.value)">4</button></div>
                    <div class="s1 desk ss5" id="5"><button value="5"  onclick="select( this.value)">5</button></div>
                    <div class="s1 desk ss6" id="6"><button value="6"  onclick="select(this.value)">6</button></div>
                    <div class="s1 desk ss7" id="7"><button value="7"  onclick="select(this.value)">7</button></div>
                </div>
                <div class="row">
                    <div class="s1 desk ss37"><button value="37"  onclick="select(this.value)">37</button></div>
                    <div class="s1 desk ss38"><button value="38"  onclick="select(this.value)">38</button></div>
                    <div class="s1 desk ss39"><button value="39"  onclick="select(this.value)">39</button></div>
                    <div class="s1 desk ss40"><button value="40"  onclick="select(this.value)">40</button></div>
                    <div class="s1 blank "></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>

                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                </div>

                <div class="row">

                    <div class="s1 desk ss41"><button value="41"  onclick="select(this.value)">41</button></div>
                    <div class="s1 desk ss42"><button value="42"   onclick="select(this.value)">42</button></div>
                    <div class="s1 desk ss43"><button value="43"   onclick="select(this.value)">43</button></div>
                    <div class="s1 desk ss44"><button value="44"   onclick="select(this.value)">44</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss8"><button value="8"   onclick="select(this.value)">8</button></div>

                </div>
                <div class="row">
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss36"><button value="36"   onclick="select(this.value)">36</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss9"><button value="9"   onclick="select(this.value)">9</button></div>
                </div>
                <div class="row">
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss35"><button value="35"  onclick="select(this.value)">35</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss16"><button value="16"   onclick="select(this.value)">16</button></div>
                    <div class="s1 desk ss15"><button value="15"   onclick="select(this.value)">15</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss10"><button value="10"   onclick="select(this.value)">10</button></div>
                </div>
                <div class="row">
                    <div class="s1 desk ss45"><button value="45"  onclick="select(this.value)">45</button></div>
                    <div class="s1 desk ss46"><button value="46"  onclick="select(this.value)">46</button></div>
                    <div class="s1 desk ss47"><button value="47"  onclick="select(this.value)">47</button></div>
                    <div class="s1 desk ss48"><button value="48"  onclick="select(this.value)">48</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss34"><button value="34"  onclick="select(this.value)">34</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss17"><button value="17"  onclick="select(this.value)">17</button></div>
                    <div class="s1 desk ss14"><button value="14"  onclick="select(this.value)">14</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss11"><button value="11"  onclick="select(this.value)">11</button></div>
                </div>
                <div class="row">
                    <div class="s1 desk ss52 pink"><button value="52"  onclick="select(this.value)">52</button></div>
                    <div class="s1 desk ss51 pink"><button value="51"  onclick="select(this.value)">51</button></div>
                    <div class="s1 desk ss50 pink"><button value="50"  onclick="select(this.value)">50</button></div>
                    <div class="s1 desk ss49 pink"><button value="49"  onclick="select(this.value)">49</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss33"><button value="33"  onclick="select(this.value)">33</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss18"><button value="18"  onclick="select(this.value)">18</button></div>
                    <div class="s1 desk ss13"><button value="13"  onclick="select(this.value)">13</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss12"><button value="12"  onclick="select(this.value)">12</button></div>
                </div>
                <div class="row">
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                </div>
                <div class="row"> 
                    <div class="s1 desk ss53  pink"><button value="53"  onclick="select(this.value)">53</button></div>
                    <div class="s1 desk ss54  pink"><button value="54"  onclick="select(this.value)">54</button></div>
                    <div class="s1 desk ss55  pink"><button value="55"  onclick="select(this.value)">55</button></div>
                    <div class="s1 desk ss56 pink"><button value="56"  onclick="select(this.value)">56</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss57  pink"><button value="57"  onclick="select(this.value)">57</button></div>
                    <div class="s1 desk ss58  pink"><button value="58"  onclick="select(this.value)">58</button></div>
                    <div class="s1 desk ss59  pink"><button value="59"  onclick="select(this.value)">59</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss19"><button value="19"  onclick="select(this.value)">19</button></div>
                    <div class="s1 desk ss20"><button value="20"  onclick="select(this.value)">20</button></div>
                    <div class="s1 desk ss21"><button value="21"  onclick="select(this.value)">21</button></div>
                    <div class="s1 desk ss22"><button value="22"  onclick="select(this.value)">22</button></div>
                </div>
                <div class="row">  
                    <div class="s1 desk ss60 pink"><button value="60"  onclick="select(this.value)">60</button></div>
                    <div class="s1 desk ss61 pink"><button value="61"  onclick="select(this.value)">61</button></div>
                    <div class="s1 desk ss62 pink"><button value="62"  onclick="select(this.value)">62</button></div>
                    <div class="s1 desk ss63 pink"><button value="63"  onclick="select(this.value)">63</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss64 pink"><button value="64"  onclick="select(this.value)">64</button></div>
                    <div class="s1 desk ss65 pink"><button value="65"  onclick="select(this.value)">65</button></div>
                    <div class="s1 desk ss66 pink"><button value="66"  onclick="select(this.value)">66</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss23"><button value="23"  onclick="select(this.value)">23</button></div>
                    <div class="s1 desk ss24"><button value="24"  onclick="select(this.value)">24</button></div>
                    <div class="s1 desk ss25"><button value="25"  onclick="select(this.value)">25</button></div>
                    <div class="s1 desk ss26"><button value="26"  onclick="select(this.value)">26</button></div>
                </div>
                <div class="row">
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                </div>
                <div class="row">
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                </div>
                <div class="row">
                    <div class="s1 desk ss74 pink"><button value="74"  onclick="select(this.value)">74</button></div>
                    <div class="s1 desk ss73 pink"><button value="73"  onclick="select(this.value)">73</button></div>
                    <div class="s1 desk ss72 pink"><button value="72"  onclick="select(this.value)">72</button></div>
                    <div class="s1 desk ss71 pink"><button value="71"  onclick="select(this.value)">71</button></div>
                    <div class="s1 desk ss70 pink"><button value="70"  onclick="select(this.value)">70</button></div>
                    <div class="s1 desk ss69 pink"><button value="69"  onclick="select(this.value)">69</button></div>
                    <div class="s1 desk ss68 pink"><button value="68"  onclick="select(this.value)">68</button></div>
                    <div class="s1 desk ss67 pink"><button value="67"  onclick="select(this.value)">67</button></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss32"><button value="32"  onclick="select(this.value)">32</button></div>
                    <div class="s1 desk ss31"><button value="31"  onclick="select(this.value)">31</button></div>
                    <div class="s1 desk ss30"><button value="30"  onclick="select(this.value)">30</button></div>
                    <div class="s1 desk ss29"><button value="29"  onclick="select(this.value)">29</button></div>
                    <div class="s1 desk ss28"><button value="28"  onclick="select(this.value)">28</button></div>
                    <div class="s1 desk ss27"><button value="27"  onclick="select(this.value)">27</button></div>
                </div>
                <div class="row"></div>
                <div class="row" style="border:1px solid ;justifycontent:space-between;align-items:center;font-size:0.9rem">
                    <div class="s1 desk pink"></div>
                    <div class="indexing">-Ladies</div>
                    <div class="s1 desk "></div>
                    <div class="indexing">-Availabel</div>
                    <div class="s1 desk res"></div>
                    <div class="indexing">-Reserved</div>
                   
                    
                </div>


            </div>

           <!-- <div class="seatbtn"> <button><a href="bookseat.php">Book Seat</a></button></div> -->


        </div>
 <?php
            include ("connection.php");
           
            $q="select * from admission";
            if($res=mysqli_query($con,$q)){
                while($row=mysqli_fetch_array($res)){
                  echo "<script>  var obj=$row[0]</script>";  
                 
                 
                   
            echo"
            <script>
            for(i=0;i<75;i++){
                if(i==obj){
            var txt='.ss'+i;
            const addCSS = css => document.head.appendChild(document.createElement('style')).innerHTML = css;
           addCSS(txt+'{background-color:aqua}');
                }
            }
           
                </script>";

               
            
                }
            }
            
            ?>









        
           <script> function select(getid){
                    var flag=0;
                    
                    <?php
                    include("connection.php");
                    $s="select * from admission";
                    if($res=mysqli_query($con,$s)){
                        while($row=mysqli_fetch_array($res)){
                            ?>
                            
                            
                            var seatno=<?php echo $row[0]?>;
                           
                                
                            if(getid==seatno){
                            
                                           
                                alert('booked');
                                flag=1;
                               
                    
                                
                            }
                            
                            <?php 
                        }
                         ?>
                         if(flag==0){
                            myFunc(getid);
                         }
                         <?php
                    }?>
                    

                    
                
              
                    
                }
               
                    // function select(getid){
                    //     alert(getid);
                    // }
            function myFunc(getid) {
                localStorage.setItem('getid',getid);
            window.location.href = "bookseat.php";
        }
            function check() {

                // One liner function:
                const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML = css;

                // Usage: 
                addCSS("ul{left:0}");
                
                addCSS(".seats{display:none}");
                return true;
            }
            function uncheck() {

                // One liner function:
                const addCSS = css => document.head.appendChild(document.createElement("style")).innerHTML = css;

                // Usage: 
                addCSS("ul{left:-120%}");
                addCSS(".seats{display:flex}");
                return true;

            }
           
        </script>
    </div>
    <div class="foot" style="margin-top:20px">
        @All Copyright Reserved By Shubham Patil
    </div>
    </div>






</body>

</html>