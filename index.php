<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Cyber Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/mailform.css"/>
    <link rel="stylesheet" href="css/material-design.css"/>
    <link href="css/mailform.css" rel="stylesheet">
    <link href="css/camera.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/subscribe.css" rel="stylesheet">
    <link href="css/google-map.css" rel="stylesheet">
    <!--<link href="css/codepen.css" rel="stylesheet">

    JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>
    <!--<script src="js/fiddle.js"></script>

    


    [if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75326339-3', 'auto');
    ga('send', 'pageview');

    </script>

    <script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("isi").innerHTML = "";
            return;
        } else if (str == "2") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "3") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "4") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "5") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "6") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "7") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "8") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "9") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "10") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "11") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }else if (str == "13") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("isi").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","haha.php?flag="+str,true);
            xmlhttp.send();
        }
    }
    </script>
    <script>
        function module(str) {
        if (str == "1") { 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","module.php?hunt="+str,true);
                xmlhttp.send();
            } else if (str == "2") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","module.php?hunt="+str,true);
            xmlhttp.send();
            } else if (str == "3") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","module.php?hunt="+str,true);
            xmlhttp.send();
            } else if (str == "4") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","module.php?hunt="+str,true);
            xmlhttp.send();
            } else if (str == "5") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","module.php?hunt="+str,true);
            xmlhttp.send();
            } else if (str == "6") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","module.php?hunt="+str,true);
            xmlhttp.send();
            } else if (str == "7") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","module.php?hunt="+str,true);
            xmlhttp.send();
            } else if (str == "8") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","module.php?hunt="+str,true);
            xmlhttp.send();
            } else if (str == "9") { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("tajuk").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","module.php?hunt="+str,true);
            xmlhttp.send();
            }
        }
    </script>
    

</head>
<body>
<div style="border:solid black">
 <!-- Begin BidVertiser code -->
<SCRIPT SRC="http://bdv.bidvertiser.com/BidVertiser.dbm?pid=736599&bid=1821685" TYPE="text/javascript"></SCRIPT>
<!-- End BidVertiser code --> 
</div>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header class="header_mod">
        <div id="stuck_container" class="stuck_container">
            <nav class="navbar navbar-default navbar-static-top ">
                <div class="navbar-header">
                    <h1 class="navbar-brand">
                        <a data-type='rd-navbar-brand' href="./">Cyberhax</a>
                    </h1>
                </div>

                <div class="navbar-right">
                    <ul class="navbar-nav sf-menu" data-type="navbar">
                        
                        <li>
                            <a href="./">Main Page</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" onclick="showUser(9)">Search</a>
                                </li>
                                <li>
                                    <a href="#">Offers</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Fresh</a>
                                        </li>
                                        <li>
                                            <a href="#">Archive</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" onclick="showUser(2);">About</a>
                        </li>
                        <li>
                            <a href="#" onclick="showUser(3);">Organization</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" onclick="showUser(11)">Members</a>
                                </li>                                                               
                            </ul>
                        </li>
                        <li>
                            <a href="#" onclick="showUser(4);">Training</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" onclick="showUser(12)">Gallery</a>
                                </li>                                                               
                            </ul>
                        </li>

                        <li>
                            <a href="#" onclick="showUser(7);">Contacts</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="join.php">Join Us</a>
                                </li>                                                               
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        
    </header>


<div id="isi"> <!-- MODIFIER -->

        <div class="cam_wrap">
            <div class="camera_container">
                <div class="cam_cnt"> 


                    <h6 id="example4"></h6>
                </div>
                <div id="camera" class="camera_wrap">
                    <div data-src="images/page-1_slide01.jpg">
                        <div class="camera_caption fadeIn">

                        </div>
                    </div>
                    <div data-src="images/page-1_slide02.jpg">
                        <div class="camera_caption fadeIn">

                        </div>
                    </div>
                    <div data-src="images/page-1_slide03.jpg">
                        <div class="camera_caption fadeIn">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--========================================================
                              CONTENT
    =========================================================-->

<main>
    <div class="bg-primary">
            <div class="row">
                <div class="col-md-4 "></div>    
                <div class="col-md-4 col-xs-10" >
                        
                        <img src="images/cyberhax.png"/>
                </div> 
            </div>
            <div class="row text-center">
                <div class="col-md-12 col-sm-4 col-xs-10">
                        <p class="l-height clr_4"><br/><br/>CyberHax is the first IT club under CISD UTP, committed to supporting 
                            students with great minds, creativity and vastly talented.
                            <br/>
                                                  CyberHax will actively create awareness on ethical hacking and skills so as such, 
                                                  our presence and active role in the domain of computer security and networking 
                                                  in Malaysia become apparent..</p>
        
                        <a href="#" onclick="showUser(2);" class="btn btn-default">more</a>
                </div>
                    
            </div>  
    </div>    

        <section class="well1 text-center">
            <div class="container">
                <h3>experience</h3>

                <p>We groom you to be the best with various kind of trainings</p>

                <div class="row text-left">
                    <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
                        <div class="media bord ins">
                            <div class="media-left">
                                <span class="fl-36-slim-icons-photo193"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">Network Forensics</h5>

                                <p>Digital forensics for the purpose of information gathering, evidence, or intrusion detection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                        <div class="media bord ins">
                            <div class="media-left">
                                <span class="fl-36-slim-icons-video166"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">Web Programming</h5>

                                <p>Development of web sites or web apps.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
                        <div class="media bord ins">
                            <div class="media-left">
                                <span class="fl-36-slim-icons-star165"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">Penetration Testing</h5>

                                <p>Testing of a computer system, network or Web application to find 
                                    vulnerabilities that an attacker could exploit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                        <div class="media bord ins">
                            <div class="media-left">
                                <span class="fl-36-slim-icons-monitor79"></span>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">Ethical Hacker</h5>

                                <p>Hacking on behalf of its owners for the purpose of 
                                    finding security vulnerabilities that a malicious hacker could potentially exploit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" onclick="showUser(4);" class="btn btn-default wow fadeInUp">more</a>
            </div>
        </section>
 <section class="well2 well2_ins bg-primary">
            
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h3>our members</h3>

                        <p class="l-height fw-n" style="text-align:justify;">Our members are trained with variety of skills. 
                                                 We recruit all UTPians who has the passion and commitment.
                                                 Charts besides are students who are from all courses that have joined us.</p>
                        <a href="#" class="btn btn-default">more</a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="progress_wrap wow fadeInRight">
                            <h6>PE</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg" style="width: 10%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr">10%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>PG</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg1" style="width: 0%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr1">0%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>ICT</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg2" style="width: 62%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr2">62%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>BIS</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg3" style="width: 20%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr3">20%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>CE</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg4" style="width: 5%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr4">5%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>ME</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg5" style="width: 10%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr5">10%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>EE</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg5" style="width: 7%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr5">7%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>CV</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg5" style="width: 0%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr5">0%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>AP</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg5" style="width: 0%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr5">0%</span>
                        </div>
                        <div class="progress_wrap wow fadeInRight">
                            <h6>AC</h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-bg5" style="width: 0%"><span
                                        class="sr-only"></span></div>
                            </div>
                            <span class="progress_text progress-bar-clr5">0%</span>
                        </div>
                    </div>
                </div>
            
        </section>

        <section class="text-center">
            
    <div class="container well3">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>Modules</h3><h5>Cyberhax Learning Center</h5>

                        <p class="l-height" >Cyberhax learning modules are base on the exposure that was analyse on UTP student. 
                            Therefore cyberhax tend to develop modules in a 
                            way to improve the ability and professionalism of 
                            UTP students. Those students who have extra knowledge that 
                            wanted to share are greatly welcome to be part of our training community. 
                        </p>
                        <a href="#" class="btn btn-default">more</a>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="well1 well1__ins bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                        <blockquote class="media">
                            <div class="media-left media-left">
                                <img class="media-object img-circle" src="images/benjaminfranklin.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <cite class="media-heading h3">Benjamin Franklin</cite>

                                <p class="l-height p_mod"><q><span class="quote">“</span>Tell me and I forget. Teach me and I remember. Involve me and I learn...</q>
                                </p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

</div>
    

    <!--========================================================
                            FOOTER
  =========================================================-->
    <footer>
        <div class="footer_cnt">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h3>newsletter sign up</h3>

                        <div class="subscribe">
                            <form class='mailform' method="post" action="bat/rd-mailform.php" data-type="subscribe">
                                <div class="form-group" data-add-placeholder>
                                    <label for="subscribe-form-email">your@email</label>
                                    <input id="subscribe-form-email"
                                           type="text"
                                           name="email"
                                           data-constraints="@Email @NotEmpty"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn-link" type="submit">subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                        <address class="h3">Universiti Teknologi PETRONAS, 32610 Bandar Seri Iskandar,  <br/>
                                            Perak Darul Ridzuan, Malaysia
                        </address>
                        <ul class="inline-list">
                            <li>
                                <a class="fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa-google-plus" href="https://plus.google.com/113801425938133512830"></a>
                            </li>
                            <li>
                                <a class="fa-rss" href="#"></a>
                            </li>
                            <li>
                                <a class="fa-github" href="https://github.com/cyberhax"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">

                        <h3 class="rights">
                            &#169; <span id="copyright-year"></span> |
                            <a href="#" onclick="showUser(10);">Privacy Policy</a>
                            <!-- {%FOOTER_LINK} -->
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.158062281242!2d100.96619441449141!3d4.3814814455634075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cade176212abb7%3A0xc8ca7aa508f194db!2sFaculty+of+Science+%26+Information+Technology!5e0!3m2!1sen!2smy!4v1458578214002" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </footer>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/3.0.1/typeit.js"></script>
<script>
$(window).bind("load", function() {
   $('#example4').typeIt({
    strings: ["Nuture towards perfection;", "we push you to become excellent;"],
     speed: 150
});
   
});

</script>
<!-- </script> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="tajuk">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div id="modalbody" class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="container" align="center" style="border:solid black">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- neoad -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8061712990718999"
     data-ad-slot="4074723260"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


</body>
</html>
