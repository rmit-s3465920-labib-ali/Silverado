<?php
$title = "Movies";
include_once('Header.php');
?>
<?php
if (isset($_POST["add"]))
    $_SESSION['cart'][] = $_POST;
?>
<!DOCTYPE html>
<html>
        <body style="background-image: url('Images/Background.jpg')">  
        
       
        <style>

            #tab1 {
                width:100%;
            }
            th, td {
                padding: 5px;
                text-align: left;
            }
            #tab1 tr:nth-child(even) {
                background-color: #eee;
            }
            #tab1 tr:nth-child(odd) {
                background-color:#fff;
            }
            #tab1 th	{
                background-color: black;
                color: white;
            }
        </style>
    </style>
    <script>
        function AddToCart(id)
        {
            if (id == 1)
            {
                var day = document.getElementById("day1").value;
                var time = document.getElementById("time1").value;
                var price1 = document.getElementById("price1").value;
                var name = document.getElementById("movie1").value;

                var sa = document.getElementById("SA").value;
                var sp = document.getElementById("SP").value;
                var sc = document.getElementById("SC").value;
                var fa = document.getElementById("FA").value;
                var fc = document.getElementById("FC").value;
                var b1 = document.getElementById("B1").value;
                var b2 = document.getElementById("B2").value;
                var b3 = document.getElementById("B3").value;

                var ssa = document.getElementById("1subtotalSA").value;
                var ssp = document.getElementById("1subtotalSP").value;
                var ssc = document.getElementById("1subtotalSC").value;
                var sfa = document.getElementById("1subtotalFA").value;
                var sfc = document.getElementById("1subtotalFC").value;
                var sb1 = document.getElementById("1subtotalB1").value;
                var sb2 = document.getElementById("1subtotalB2").value;
                var sb3 = document.getElementById("1subtotalB3").value;

                var n1 = document.getElementById("n1").value;
                var n2 = document.getElementById("n2").value;
                var n3 = document.getElementById("n3").value;
                var n4 = document.getElementById("n4").value;
                var n5 = document.getElementById("n5").value;
                var n6 = document.getElementById("n6").value;
                var n7 = document.getElementById("n7").value;
                var n8 = document.getElementById("n8").value;
                
                $.ajax({
                    type: 'post',
                    url: 'store_items.php',
                    data: {
                        one: 1, day: day, time: time, price1: price1, name: name,
                        sa: sa, sp: sp, sc: sc, fa: fa, fc: fc, b1: b1, b2: b2, b3: b3,
                        ssa: ssa, ssp: ssp, ssc: ssc, sfa: sfa, sfc: sfc, sb1: sb1, sb2: sb2, sb3: sb3,
                        n1: n1, n2: n2, n3: n3, n4: n4, n5: n5, n6: n6, n7: n7, n8: n8
                    },
                    success: function (response) {
                        document.getElementById("total_items").value = response;
                        alert(response + " Item has been  added  to  Cart");
                    }
                });
            }
            if (id == 2)
            {
                var day = document.getElementsByName("day1")[0].value;
                var time = document.getElementsByName("time1")[0].value;
                var price2 = document.getElementById("price2").value;
                var name2 = document.getElementById("movie2").value;

                var sa = document.getElementById("q1").value;
                var sp = document.getElementById("q2").value;
                var sc = document.getElementById("q3").value;
                var fa = document.getElementById("q4").value;
                var fc = document.getElementById("q5").value;
                var b1 = document.getElementById("q6").value;
                var b2 = document.getElementById("q7").value;
                var b3 = document.getElementById("q8").value;

                var ssa = document.getElementById("2subtotalSA").value;
                var ssp = document.getElementById("2subtotalSP").value;
                var ssc = document.getElementById("2subtotalSC").value;
                var sfa = document.getElementById("2subtotalFA").value;
                var sfc = document.getElementById("2subtotalFC").value;
                var sb1 = document.getElementById("2subtotalB1").value;
                var sb2 = document.getElementById("2subtotalB2").value;
                var sb3 = document.getElementById("2subtotalB3").value;

                var n1 = document.getElementById("n1").value;
                var n2 = document.getElementById("n2").value;
                var n3 = document.getElementById("n3").value;
                var n4 = document.getElementById("n4").value;
                var n5 = document.getElementById("n5").value;
                var n6 = document.getElementById("n6").value;
                var n7 = document.getElementById("n7").value;
                var n8 = document.getElementById("n8").value;

                $.ajax({
                    type: 'post',
                    url: 'store_items.php',
                    data: {
                        three: 3, day: day, time: time, price1: price2, name: name2,
                        sa: sa, sp: sp, sc: sc, fa: fa, fc: fc, b1: b1, b2: b2, b3: b3,
                        ssa: ssa, ssp: ssp, ssc: ssc, sfa: sfa, sfc: sfc, sb1: sb1, sb2: sb2, sb3: sb3,
                        n1: n1, n2: n2, n3: n3, n4: n4, n5: n5, n6: n6, n7: n7, n8: n8
                    },
                    success: function (response) {
                        document.getElementById("total_items").value = response;
                        alert(response + " Item has been  added  to  Cart");
                    }
                });
            }
            if (id == 3)
            {
                var day = document.getElementsByName("day3")[0].value;
                var time = document.getElementsByName("time3")[0].value;
                var price3 = document.getElementById("price3").value;
                var name3 = document.getElementById("movie3").value;

                var sa = document.getElementById("c1").value;
                var sp = document.getElementById("c2").value;
                var sc = document.getElementById("c3").value;
                var fa = document.getElementById("c4").value;
                var fc = document.getElementById("c5").value;
                var b1 = document.getElementById("c6").value;
                var b2 = document.getElementById("c7").value;
                var b3 = document.getElementById("c8").value;

                var ssa = document.getElementById("3subtotalSA").value;
                var ssp = document.getElementById("3subtotalSP").value;
                var ssc = document.getElementById("3subtotalSC").value;
                var sfa = document.getElementById("3subtotalFA").value;
                var sfc = document.getElementById("3subtotalFC").value;
                var sb1 = document.getElementById("3subtotalB1").value;
                var sb2 = document.getElementById("3subtotalB2").value;
                var sb3 = document.getElementById("3subtotalB3").value;

                var n1 = document.getElementById("n1").value;
                var n2 = document.getElementById("n2").value;
                var n3 = document.getElementById("n3").value;
                var n4 = document.getElementById("n4").value;
                var n5 = document.getElementById("n5").value;
                var n6 = document.getElementById("n6").value;
                var n7 = document.getElementById("n7").value;
                var n8 = document.getElementById("n8").value;

                $.ajax({
                    type: 'post',
                    url: 'store_items.php',
                    data: {
                        three: 3, day: day, time: time, price1: price3, name: name3,
                        sa: sa, sp: sp, sc: sc, fa: fa, fc: fc, b1: b1, b2: b2, b3: b3,
                        ssa: ssa, ssp: ssp, ssc: ssc, sfa: sfa, sfc: sfc, sb1: sb1, sb2: sb2, sb3: sb3,
                        n1: n1, n2: n2, n3: n3, n4: n4, n5: n5, n6: n6, n7: n7, n8: n8
                    },
                    success: function (response) {
                        document.getElementById("total_items").value = response;
                        alert(response + " Item has been  added  to  Cart");
                    }
                });
            }

            if (id == 4)
            {
                var day = document.getElementsByName("day4")[0].value;
                var time = document.getElementsByName("time4")[0].value;
                var price4 = document.getElementById("price4").value;
                var name4 = document.getElementById("movie4").value;

                var sa = document.getElementById("d1").value;
                var sp = document.getElementById("d2").value;
                var sc = document.getElementById("d3").value;
                var fa = document.getElementById("d4").value;
                var fc = document.getElementById("d5").value;
                var b1 = document.getElementById("d6").value;
                var b2 = document.getElementById("d7").value;
                var b3 = document.getElementById("d8").value;

                var ssa = document.getElementById("4subtotalSA").value;
                var ssp = document.getElementById("4subtotalSP").value;
                var ssc = document.getElementById("4subtotalSC").value;
                var sfa = document.getElementById("4subtotalFA").value;
                var sfc = document.getElementById("4subtotalFC").value;
                var sb1 = document.getElementById("4subtotalB1").value;
                var sb2 = document.getElementById("4subtotalB2").value;
                var sb3 = document.getElementById("4subtotalB3").value;

                var n1 = document.getElementById("n1").value;
                var n2 = document.getElementById("n2").value;
                var n3 = document.getElementById("n3").value;
                var n4 = document.getElementById("n4").value;
                var n5 = document.getElementById("n5").value;
                var n6 = document.getElementById("n6").value;
                var n7 = document.getElementById("n7").value;
                var n8 = document.getElementById("n8").value;

                $.ajax({
                    type: 'post',
                    url: 'store_items.php',
                    data: {
                        four: 4, day: day, time: time, price1: price4, name: name4,
                        sa: sa, sp: sp, sc: sc, fa: fa, fc: fc, b1: b1, b2: b2, b3: b3,
                        ssa: ssa, ssp: ssp, ssc: ssc, sfa: sfa, sfc: sfc, sb1: sb1, sb2: sb2, sb3: sb3,
                        n1: n1, n2: n2, n3: n3, n4: n4, n5: n5, n6: n6, n7: n7, n8: n8
                    },
                    success: function (response) {
                        document.getElementById("total_items").value = response;
                        alert(response + " Item has been  added  to  Cart");
                    }
                });
            }


        }
        function show_cart()
        {
            $.ajax({
                type: 'post',
                url: 'store_items.php',
                data: {
                    showcart: "cart"
                },
                success: function (response) {
                    document.getElementById("mycart").innerHTML = response;
                    $("#mycart").slideToggle();
                }
            });
        }
        function deletecart(val, n)
        {
            $.ajax({
                type: 'post',
                url: 'store_items.php',
                data: {
                    deletecart: val, n: n
                },
                success: function (response) {
                    show_cart();
                }
            });
        }
        function seltime(val, num)
        {
            val = val.value;
            var listarr = [];
            if (num == 1)
            {
                listarr.push("9pm");
            }
            if (num == 2)
            {
                if (val == "Monday" || val == "Tuesday") {
                    listarr.push("1pm");
                }
                if (val == "Wednesday" || val == "Friday" || val== "Thursday") {
                    listarr.push("6pm");
                }
                if (val == "Saturday" || val == "Sunday") {
                    listarr.push("12pm");
                }
            }
            if (num == 3) {
                if (val == "Monday" || val == "Tuesday") {
                    listarr.push("9pm");
                }
                if (val == "Wednesday" || val == "Friday" || val=="Thursday") {
                    listarr.push("1pm");
                }
                if (val == "Saturday" || val == "Sunday") {
                    listarr.push("6pm");
                }
            }
            if (num == 4) {
                if (val == "Monday" || val == "Tuesday") {
                    listarr.push("6pm");
                }
                if (val == "Saturday" || val == "Sunday") {
                    listarr.push("3pm");
                }
            }
            var selectList = document.getElementsByName("time" + num)[0];
            for (i = 0; i < selectList.options.length; i++) {
                selectList.options[i] = null;
            }

            for (var i = 0; i < listarr.length; i++) {
                var option = document.createElement("option");
                option.value = listarr[i];
                option.text = listarr[i];
                selectList.appendChild(option);
            }

        }
        function setCustomerSession()
        {
                return true;       
        }
    </script>
    <main>
        <div class="main">

            <div id="cctt" style="margin-left: 80%; border: 1px solid #454545;">
                <p id="cart_button" onclick="show_cart();">
                <img src="Images/cart_icon.png">
                <input type="button" id="total_items" value="">
            </p>
            </div>

            <div id="mycart">
            </div>

            <div id="login">
                <div id="customerlogin">
                    <form action="store_items.php" id="loginform" method="post" name="form" onsubmit="return setCustomerSession()">
                        <img src="Images/X.png" onclick="div_hide()"   alt="close" width="10%" height="10%">
                        <h1>Customer Details</h1>
                        <hr>
                        <input type="hidden" name="customer" value="1">
                        Name:</br></br>
                        <input id="name" name="cname" placeholder="Name" type="text" pattern="^[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*$" required>
                 
                        </br></br>
                        Email:</br></br>
                        <input id="email" name="email" placeholder="Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        
                        </br></br>
                        Phone Number:</br></br>
                        <input id="number" name="number" placeholder="Phone Number" type="tel" pattern="^(?:\+?61|0)4[0-9]{8}$" required>
                        <input type="submit" name="submit" >
                    </form>
                </div>
            </div>

            <div class="movie">
                <img src="Images/deadpool.png" alt="Deadpool" width="50%" height="50%;">
                <div class="Content">
                    <h4><b>DEADPOOL | RATING: R</b></h4>

                    <p>Wade Wilson (Ryan Reynolds) is a former Special Forces operative who now works as a mercenary. His world comes crashing down when evil scientist Ajax (Ed Skrein) tortures, disfigures and transforms him into Deadpool.</p></br></br>
                    <details>
                        <summary style="color:red">More Details</summary>
                        </br>
                        <p>Wade Wilson is a former special forces operative who works as a mercenary in New York City. He meets escort Vanessa Carlysle at a local bar and they become romantically attached. One year later, Wade proposes to her and she accepts, but he suddenly collapses. Wade is diagnosed with terminal cancer and though Vanessa remains by his side, he does not want her to watch him die.</p>
                        <p><b>Show Timings:</b></br></br> Mon:9pm</br>Tue: 6pm</br>Fri: 3pm</p>
                    </details>
                </div>
                <form id="firstform" action='addToCart.php' method='Post'>
                    <div class="booking">
                        
                        <details>
                            <summary style="color:red">Book Now</summary> -->
                        <br/><br/>
                        <input type="hidden" id="movie1" value="DEADPOOL">
                        Movie Name:
                        <select name="movie1">
                            <option  type="text" value="Deadpool">Dead Pool</option>
                        </select>

                        Session Day:
                        <select name="day" id="day1" onchange="seltime(this, 1)" oninput="calculatePrice(1);">
                            <option >Wednesday</option>
                            <option >Thursday</option>
                            <option >Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                        Session Time:
                        <select name="time1" id="time1" oninput="calculatePrice(1);">
                        </select>
                        </br>
                        </br>

                        <table>
                            <tr>
                                <td></td>
                                <td>Quantity</td>
                                <td>Subtotal</td>
                            </tr>
                            <tr>
                                <td>Adult:</td><input type="hidden" value="Adult" id="n1">
                            <td><input style="width:30%" type="number" name="SA" class="1" min="0" id="SA" oninput="calculatePrice(1);" value="0" ></td>
                            <td>$<input style="width:30%" value="00.00" name="STSA" id="1subtotalSA"  readonly></td>
                            </tr>
                            <tr>
                                <td>Concession:</td><input type="hidden" value="Concession" id="n2">
                            <td><input style="width:30%" type="number" name="SP" class="1" id="SP" min="0" oninput="calculatePrice(1);" value="0" pattern="^\d*$"></td>
                            <td>$<input style="width:30%" value="00.00" name="STSP" id="1subtotalSP"  readonly></td>
                            </tr>
                            <tr>
                                <td>Child:</td><input type="hidden" value="Child" id="n3">
                            <td><input style="width:30%" type="number" min="0" name="SC" class="1" id="SC" oninput="calculatePrice(1);" value="0" pattern="^\d*$" ></td>
                            <td>$<input style="width:30%" value="00.00" name="STSC" id="1subtotalSC"  readonly></td>
                            </tr>
                            <tr>								 
                                <td>First Class Adult:</td><input type="hidden" value="First Class Adult" id="n4">
                            <td><input style="width:30%" type="number" min="0" name="FA" class="1" id="FA" oninput="calculatePrice(1);" value="0" pattern="^\d*$" ></td>
                            <td>$<input style="width:30%" value="00.00" name="STFA" id="1subtotalFA" readonly></td>
                            </tr>
                            <tr>
                                <td>First Class Child:</td><input type="hidden" value="First Class Child" id="n5">
                            <td><input style="width:30%" type="number" min="0" name="FC" class="1" id="FC" oninput="calculatePrice(1);" value="0" pattern="^\d*$" ></td>
                            <td>$<input style="width:30%" value="00.00" name="STFC" id="1subtotalFC"  readonly></td>
                            </tr>
                            <tr>
                                <td>Beanbag-1 Person:</td><input type="hidden" value="Beanbag-3 Person" id="n6">
                            <td><input style="width:30%" type="number" min="0" name="B1" id="B1" class="1" oninput="calculatePrice(1);" value="0" pattern="^\d*$"></td>
                            <td>$<input style="width:30%" value="00.00" name="STB1" id="1subtotalB1"  readonly></td>
                            </tr>
                            <tr>
                                <td>Beanbag-2 People:</td><input type="hidden" value="Beanbag-3 People" id="n7">
                            <td><input style="width:30%" type="number" min="0" name="B2" class="1" id="B2" oninput="calculatePrice(1);" value="0" pattern="^\d*$"></td>
                            <td>$<input style="width:30%" value="00.00" name="STB2" id="1subtotalB2" readonly></td>
                            </tr>

                            <tr>
                                <td>Beanbag-3 Children:</td><input type="hidden" value="Beanbag-3 Children:" id="n8">
                            <td><input style="width:30%" type="number" min="0" name="B3" class="1" id="B3" oninput="calculatePrice(1);" value="0" pattern="^\d*$"></td>
                            <td>$<input style="width:30%" value="00.00" name="STB3" id="1subtotalB3" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="2">Total</td>
                                <td>$<input style="width:30%" value="00.00" id="price1" name="price" readonly></td>
                            </tr>
                        </table>
                        </br>  							 
                      
                        <input class="" type="button" value="Add To Cart" name="add" onclick="AddToCart('1')">
                    </div>
                    </br>
                </form>


             
  
                 </details>

            </div>
            </br></br>

            <div class="movie">
                <img src="Images/kangfu.jpg" alt="Kangfu pand3" width="50%" height="50%;">
                <div class="Content">
                    <h4><b>Kangfu Panda 3| RATING: PG</b></h4>
                    <p>Living large and loving life, Po (Jack Black) realizes that he has a lot to learn if he's going to fulfill the next challenge from his beloved instructor (Dustin Hoffman).</p></br></br>
                    <details>
                        <summary style="color:red">More Details</summary>
                        </br>
                        <p>After reuniting with his long-lost father (Bryan Cranston), Po must transition from student to teacher and train a group of fun-loving, clumsy pandas to become martial-arts fighters. Together, the kung-fu brethren unite to take on the evil Kai (J.K. Simmons), a supernatural warrior who becomes stronger with each battle.</p>
                        <p><b>Show Timings:</b></br></br> Tue:3pm</br>Wed: 6pm</br>Sat: 3pm</p>
                    </details>
                </div>	 
                <div class="booking">

                     <details>
                        <summary style="color:red">Book Now</summary>-->
                    </br></br>
                    <form action='' method='Post'>
                        <input type="hidden" id="movie2" value="Kangfu Panda 3">
                        Movie Name:
                        <select name="movie">
                            <option value="Kangfu Panda 3">Kangfu Panda 3</option>
                        </select>

                        Session Day:
                        <select name="day1" id="day2" onchange="seltime(this, 2)" oninput="calculatePrice(2);">
                            <option >Monday</option>
                            <option >Tuesday</option>
                            <option >Wednesday</option>
                            <option>Thursday</option>
                            <option >Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                        Session Time:
                        <select name="time2" id="time2" oninput="calculatePrice(2);">
                        </select>
                        </br>
                        </br>
                        <table>
                            <tr>
                                <td></td>
                                <td>Quantity</td>
                                <td>Subtotal</td>
                            </tr>
                            <tr>
                                <td>Adult:</td>
                                <td><input style="width:30%" type="number" name="SA" class="2" min="0" id="q1" oninput="calculatePrice(2);" value="0" ></td>
                                <td>$<input style="width:30%" value="00.00" name="STSA" id="2subtotalSA"  readonly></td>
                            </tr>
                            <tr>
                                <td>Concession:</td>  
                                <td><input style="width:30%" type="number" name="SP" class="2" id="q2" min="0" oninput="calculatePrice(2);" value="0" pattern="^\d*$"></td>
                                <td>$<input style="width:30%" value="00.00" name="STSP" id="2subtotalSP"  readonly></td>
                            </tr>
                            <tr>
                                <td>Child:</td>
                                <td><input style="width:30%" type="number" min="0" name="SC" class="2" id="q3" oninput="calculatePrice(2);" value="0" pattern="^\d*$" ></td>
                                <td>$<input style="width:30%" value="00.00" name="STSC" id="2subtotalSC"  readonly></td>
                            </tr>
                            <tr>								 
                                <td>First Class Adult:</td>
                                <td><input style="width:30%" type="number" min="0" name="FA" class="2" id="q4" oninput="calculatePrice(2);" value="0" pattern="^\d*$" ></td>
                                <td>$<input style="width:30%" value="00.00" name="STFA" id="2subtotalFA" readonly></td>
                            </tr>
                            <tr>
                                <td>First Class Child:</td>
                                <td><input style="width:30%" type="number" min="0" name="FC" class="2" id="q5" oninput="calculatePrice(2);" value="0" pattern="^\d*$" ></td>
                                <td>$<input style="width:30%" value="00.00" name="STFC" id="2subtotalFC"  readonly></td>
                            </tr>
                            <tr>
                                <td>Beanbag-1 Person:</td>
                                <td><input style="width:30%" type="number" min="0" name="B1" id="q6" class="2" oninput="calculatePrice(2);" value="0" pattern="^\d*$"></td>
                                <td>$<input style="width:30%" value="00.00" name="STB1" id="2subtotalB1"  readonly></td>
                            </tr>
                            <tr>
                                <td>Beanbag-2 People:</td>
                                <td><input style="width:30%" type="number" min="0" name="B2" class="2" id="q7" oninput="calculatePrice(2);" value="0" pattern="^\d*$"></td>
                                <td>$<input style="width:30%" value="00.00" name="STB2" id="2subtotalB2" readonly></td>
                            </tr>

                            <tr>
                                <td>Beanbag-3 Children:</td>
                                <td><input style="width:30%" type="number" min="0" name="B3" class="2" id="q8" oninput="calculatePrice(2);" value="0" pattern="^\d*$"></td>
                                <td>$<input style="width:30%" value="00.00" name="STB3" id="2subtotalB3" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="2">Total</td>
                                <td>$<input style="width:30%" value="00.00" id="price2" name="price" readonly></td>
                            </tr>
                        </table>
                        </br>

                        <input  type="button" value="Add To Cart" name="add" onclick="AddToCart('2')">
                        </br>

                    </form>
                    </details>

                </div>








                </br></br>

                <div class="movie">
                    <img src="Images/lobster.jpg" alt="Lobster" width="50%" height="50%;">
                    <div class="Content">
                        <h4><b>THE LOBSTER | RATING: R</b></h4>
                        <p>In a dystopian society, single people must find mates within 45 days or risk being transformed into animals</p></br></br>
                        <details>
                            <summary style="color:red">More Details</summary>
                            </br>
                            <p>The Lobster is a 2015 film directed by Greek director Yorgos Lanthimos in his English language feature film debut. Set in a dystopian near-future, the film tells the story of a city where singles are given 45 days to find a romantic partner before they are turned into an animal.</p>
                            <p><b>Show Timings:</b></br></br> Mon:9pm</br>Tue: 9pm</br>Wed: 1pm</br>Thu: 1pm</br>Fri: 1pm</br>Sat: 6pm</br>Sun: 6pm</p>
                        </details>
                    </div>	 
                    <div class="booking">

                        <details>
                            <summary style="color:red">Book Now</summary>
                            </br></br>
                            <form action='' method='Post'>
                                <input type="hidden" id="movie3" value="The Lobster">

                                Movie Name:
                                <select name="movie" >
                                    <option  type="text" value="The Lobster">The Lobster</option>
                                </select>

                                Session Day:
                                <select name="day3" id="day3" onchange="seltime(this, 3)" oninput="calculatePrice(3);">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                                Session Time:
                                <select name="time3" id="time3" oninput="calculatePrice(3);">
                                </select>
                                </br>
                                </br>
                                <table>
                                    <tr>
                                        <td></td>
                                        <td>Quantity</td>
                                        <td>Subtotal</td>
                                    </tr>
                                    <tr>
                                        <td>Adult:</td>
                                        <td><input style="width:30%" type="number" name="SA" class="3" min="0" id="c1" oninput="calculatePrice(3);" value="0" ></td>
                                        <td>$<input style="width:30%" value="00.00" name="STSA" id="3subtotalSA"  readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Concession:</td>  
                                        <td><input style="width:30%" type="number" name="SP" class="3" id="c2" min="0" oninput="calculatePrice(3);" value="0" pattern="^\d*$"></td>
                                        <td>$<input style="width:30%" value="00.00" name="STSP" id="3subtotalSP"  readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Child:</td>
                                        <td><input style="width:30%" type="number" min="0" name="SC" class="3" id="c3" oninput="calculatePrice(3);" value="0" pattern="^\d*$" ></td>
                                        <td>$<input style="width:30%" value="00.00" name="STSC" id="3subtotalSC"  readonly></td>
                                    </tr>
                                    <tr>								 
                                        <td>First Class Adult:</td>
                                        <td><input style="width:30%" type="number" min="0" name="FA" class="3" id="c4" oninput="calculatePrice(3);" value="0" pattern="^\d*$" ></td>
                                        <td>$<input style="width:30%" value="00.00" name="STFA" id="3subtotalFA" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>First Class Child:</td>
                                        <td><input style="width:30%" type="number" min="0" name="FC" class="3" id="c5" oninput="calculatePrice(3);" value="0" pattern="^\d*$" ></td>
                                        <td>$<input style="width:30%" value="00.00" name="STFC" id="3subtotalFC"  readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Beanbag-1 Person:</td>
                                        <td><input style="width:30%" type="number" min="0" name="B1" id="c6" class="3" oninput="calculatePrice(3);" value="0" pattern="^\d*$"></td>
                                        <td>$<input style="width:30%" value="00.00" name="STB1" id="3subtotalB1"  readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Beanbag-2 People:</td>
                                        <td><input style="width:30%" type="number" min="0" name="B2" class="3" id="c7" oninput="calculatePrice(3);" value="0" pattern="^\d*$"></td>
                                        <td>$<input style="width:30%" value="00.00" name="STB2" id="3subtotalB2" readonly></td>
                                    </tr>

                                    <tr>
                                        <td>Beanbag-3 Children:</td>
                                        <td><input style="width:30%" type="number" min="0" name="B3" class="3" id="c8" oninput="calculatePrice(3);" value="0" pattern="^\d*$"></td>
                                        <td>$<input style="width:30%" value="00.00" name="STB3" id="3subtotalB3" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Total</td>
                                        <td>$<input style="width:30%" value="00.00" id="price3" name="price" readonly></td>
                                    </tr>
                                </table>
                                </br>
                               
                                <input class="button" type="button" value="Add To Cart" onclick="AddToCart('3')">
                                </br>
                            </form>
                        </details>

                    </div>

                    </br></br>
                    <div class="movie">
                        <img src="Images/amour.jpg" alt="Amour" width="50%" height="50%;">
                        <div class="Content">
                            <h4><b>AMOUR | RATING: PG</b></h4>
                            <p>Retired music teachers Georges (Jean-Louis Trintignant) and Anne (Emmanuelle Riva) have spent their lives devoted to their careers and to each other.</p></br></br>
                            <details>
                                <summary style="color:red">More Details</summary>
                                </br>
                                <p>Their relationship faces its greatest challenge when Anne suffers a debilitating stroke. Though Georges himself suffers from the aches and infirmities of old age, he bravely ignores his own discomfort to take care of his wife, and is determined to keep his promise to her that she never go back to the hospital.</p>
                                <p><b>Show Timings:</b></br></br> Mon:6pm</br>Tue: 6pm</br>Sat: 3pm</br>Sun: 3pm</p>
                            </details>
                        </div>	 
                        <div class="booking">

                            <details>
                                <summary style="color:red">Book Now</summary>
                                </br></br>
                                <form action='' method='Post'>
                                    Movie Name:
                                    <input type="hidden" id="movie4" value="Amour">
                                    <select name="movie" >
                                        <option  type="text" value="Amour">Amour</option>
                                    </select>

                                    Session Day:
                                    <select name="day4" id="day4" onchange="seltime(this, 4)" oninput="calculatePrice(4);">
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday" disabled>Wednesday</option>
                                        <option value="Thursday" disabled>Thursday</option>
                                        <option value="Friday" disabled>Friday</option>
                                        <option value="Saturday" >Saturday</option>
                                        <option value="Sunday" >Sunday</option>
                                    </select>
                                    Session Time:
                                    <select name="time4" id="time4" oninput="calculatePrice(4);">
                                    </select>
                                    </br>
                                    </br>
                                    <table>
                                        <tr>
                                            <td></td>
                                            <td>Quantity</td>
                                            <td>Subtotal</td>
                                        </tr>
                                        <tr>
                                            <td>Adult:</td>
                                            <td><input style="width:30%" type="number" name="SA" class="4" min="0" id="d1" oninput="calculatePrice(4);" value="0" ></td>
                                            <td>$<input style="width:30%" value="00.00" name="STSA" id="4subtotalSA"  readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Concession:</td>  
                                            <td><input style="width:30%" type="number" name="SP" class="4" id="d2" min="0" oninput="calculatePrice(4);" value="0" pattern="^\d*$"></td>
                                            <td>$<input style="width:30%" value="00.00" name="STSP" id="4subtotalSP"  readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Child:</td>
                                            <td><input style="width:30%" type="number" min="0" name="SC" class="4" id="d3" oninput="calculatePrice(4);" value="0" pattern="^\d*$" ></td>
                                            <td>$<input style="width:30%" value="00.00" name="STSC" id="4subtotalSC"  readonly></td>
                                        </tr>
                                        <tr>								 
                                            <td>First Class Adult:</td>
                                            <td><input style="width:30%" type="number" min="0" name="FA" class="4" id="d4" oninput="calculatePrice(4);" value="0" pattern="^\d*$" ></td>
                                            <td>$<input style="width:30%" value="00.00" name="STFA" id="4subtotalFA" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>First Class Child:</td>
                                            <td><input style="width:30%" type="number" min="0" name="FC" class="4" id="d5" oninput="calculatePrice(4);" value="0" pattern="^\d*$" ></td>
                                            <td>$<input style="width:30%" value="00.00" name="STFC" id="4subtotalFC"  readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Beanbag-1 Person:</td>
                                            <td><input style="width:30%" type="number" min="0" name="B1" id="d6" class="4" oninput="calculatePrice(4);" value="0" pattern="^\d*$"></td>
                                            <td>$<input style="width:30%" value="00.00" name="STB1" id="4subtotalB1"  readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Beanbag-2 People:</td>
                                            <td><input style="width:30%" type="number" min="0" name="B2" class="4" id="d7" oninput="calculatePrice(4);" value="0" pattern="^\d*$"></td>
                                            <td>$<input style="width:30%" value="00.00" name="STB2" id="4subtotalB2" readonly></td>
                                        </tr>

                                        <tr>
                                            <td>Beanbag-3 Children:</td>
                                            <td><input style="width:30%" type="number" min="0" name="B3" class="4" id="d8" oninput="calculatePrice(4);" value="0" pattern="^\d*$"></td>
                                            <td>$<input style="width:30%" value="00.00" name="STB3" id="4subtotalB3" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td>$<input style="width:30%" value="00.00" id="price4" name="price" readonly></td>
                                        </tr>
                                    </table>
                                    </br>
                                    <input  type="button" value="Add TO Cart" onclick="AddToCart('4')">
                                    </br>
                                </form>
                            </details>

                        </div>

                    </div>

                    </main>



                    </body>

                    </html>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
                    <?php
                    include_once('Footer.php');
                    ?>