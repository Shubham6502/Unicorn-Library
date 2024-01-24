<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v2">
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


                <  <div class="nav-menu">
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
            
          
        </div> -->
            <div class="heading">
                <h2>Seating Arrangement</h2>
                <img src="underline.png" alt="">
            </div>


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
                    <div class="s1 desk ss1" id="1">1</div>
                    <div class="s1 desk ss2" id="2">2</div>
                    <div class="s1 desk ss3" id="3">3</div>
                    <div class="s1 desk ss4" id="4">4</div>
                    <div class="s1 desk ss5" id="5">5</div>
                    <div class="s1 desk ss6" id="6">6</div>
                    <div class="s1 desk ss7" id="7">7</div>
                </div>
                <div class="row">
                    <div class="s1 desk ss37" >37</div>
                    <div class="s1 desk ss38" >38</div>
                    <div class="s1 desk ss39">39</div>
                    <div class="s1 desk ss40">40</div>
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

                    <div class="s1 desk ss41">41</div>
                    <div class="s1 desk ss42">42</div>
                    <div class="s1 desk ss43">43</div>
                    <div class="s1 desk ss44">44</div>
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
                    <div class="s1 desk ss8">8</div>

                </div>
                <div class="row">
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss36">36</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss9">9</div>
                </div>
                <div class="row">
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss35">35</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss16">16</div>
                    <div class="s1 desk ss15">15</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss10">10</div>
                </div>
                <div class="row">
                    <div class="s1 desk ss45">45</div>
                    <div class="s1 desk ss46">46</div>
                    <div class="s1 desk ss47">47</div>
                    <div class="s1 desk ss48">48</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss34">34</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss17">17</div>
                    <div class="s1 desk ss14">14</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss11">11</div>
                </div>
                <div class="row">
                    <div class="s1 desk ss52 pink">52</div>
                    <div class="s1 desk ss51 pink">51</div>
                    <div class="s1 desk ss50 pink">50</div>
                    <div class="s1 desk ss49 pink">49</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss33">33</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss18">18</div>
                    <div class="s1 desk ss13">13</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss12">12</div>
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
                    <div class="s1 desk ss53  pink">53</div>
                    <div class="s1 desk ss54  pink">54</div>
                    <div class="s1 desk ss55  pink">55</div>
                    <div class="s1 desk ss56 pink">56</div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss57  pink">57</div>
                    <div class="s1 desk ss58  pink">58</div>
                    <div class="s1 desk ss59  pink">59</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss19">19</div>
                    <div class="s1 desk ss20">20</div>
                    <div class="s1 desk ss21">21</div>
                    <div class="s1 desk ss22">22</div>
                </div>
                <div class="row">  
                    <div class="s1 desk ss60 pink">60</div>
                    <div class="s1 desk ss61 pink">61</div>
                    <div class="s1 desk ss62 pink">62</div>
                    <div class="s1 desk ss63 pink">63</div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss64 pink">64</div>
                    <div class="s1 desk ss65 pink">65</div>
                    <div class="s1 desk ss66 pink">66</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss23">23</div>
                    <div class="s1 desk ss24">24</div>
                    <div class="s1 desk ss25">25</div>
                    <div class="s1 desk ss26">26</div>
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
                    <div class="s1 desk ss74 pink">74</div>
                    <div class="s1 desk ss73 pink">73</div>
                    <div class="s1 desk ss72 pink">72</div>
                    <div class="s1 desk ss71 pink">71</div>
                    <div class="s1 desk ss70 pink">70</div>
                    <div class="s1 desk ss69 pink">69</div>
                    <div class="s1 desk ss68 pink">68</div>
                    <div class="s1 desk ss67 pink">67</div>
                    <div class="s1 blank"></div>
                    <div class="s1 blank"></div>
                    <div class="s1 desk ss32">32</div>
                    <div class="s1 desk ss31">31</div>
                    <div class="s1 desk ss30">30</div>
                    <div class="s1 desk ss29">29</div>
                    <div class="s1 desk ss28">28</div>
                    <div class="s1 desk ss27">27</div>
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

            <button><a href="bookseat.php">Book Seat</a></button>


        </div>
 <?php
            include ("connection.php");
            $q="select * from seat";
            if($res=mysqli_query($con,$q)){
                while($row=mysqli_fetch_array($res)){
                  echo "<script>  var obj=$row[0]</script>";  
                 
                   
            echo"
            <script>
                  

              
                for(let i=1;i<75;i++){
                    
                    if(i== obj){
                
                    txt='.ss'+i;
                    const addCSS = css => document.head.appendChild(document.createElement('style')).innerHTML = css;
                addCSS(txt+'{background-color:aqua}');
                    }
                    
                }
                </script>";

               
            
                }
            }
            ?>









        <script>
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
        @All Copyright Reserved By Shubham Patil
    </div>
    </div>






</body>

</html>