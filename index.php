<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MAMAKU</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>

    <script type="text/javascript">
    var omitformtags=["input", "textarea", "select"]
    omitformtags=omitformtags.join("|")
    function disableselect(e){
    if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
    return false
    }
    function reEnable(){
    return true
    }
    if (typeof document.onselectstart!="undefined")
    document.onselectstart=new Function ("return false")
    else{
    document.onmousedown=disableselect
    document.onmouseup=reEnable
    }
    </script>

    <script type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
    </script>

    <script>
    $("#share").delay(1000).animate({"opacity": "1"}, 700);
    </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="noBack();"onpageshow="if (event.persisted) noBack();" onunload="">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand navbar-brand-vis page-scroll" href="#page-top">MAMAKU
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">..And we are?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projects">projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 vert">
                        <ul>
                            <li>
                            <h1 class="title1">WHARE</h1>
                            </li>
                            <li>
                            <h1 class="title2">MAMAKU</h1>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div>
                <h1>FROM AOTEAROA</h1>
                <div class="wow fadeInLeft bodytext">
                <p>WHARE <span class="color">MAMAKU</span> is a production group with a focus on developing creative projects from Aotearoa. The diversity of our people and our land is the inspiration behind many beautiful stories of struggle, friendship, conflict and love. Sharing these stories is a legacy of our past and a pathway to our future. </p>
                <br>
                <p id="share">Let’s share our stories.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div>
                <div class="wow fadeInRight people">
                <h4>Whetu Paitai</h4>
                <h6>Ngati Porou Ki Harataunga</h6>
                <p>Whetu is a Writer and Producer. He is developing our current projects and is looking forward to their production and distribution.  </p>
                </div>
                <div class="wow fadeInLeft people">
                <h4>Dougal Austin</h4>
                <h6>K&#257;ti Māmoe<br>Kāi Tahu</h6>
                <p>Dougal is a Writer and Researcher. He has carried out many years of leading research on Pounamu and is a senior curator at Te Papa Mueseum. </p>
                </div>
                <div class="wow fadeInRight people">
                <h4>Toa Waaka</h4>
                <h6>Ngāti Toa Rangatira<br>Te Āti awa<br>Ngāpuhi<br>Ngati Porou Ki Harataunga</h6>
                <p>Toa Waaka is a veteran of the film industry with credits in acting, directing and producing. He is also an active researcher in the field of Tātai Arorangi, Māori astronomy, and a founding member of the Society for Māori Astronomy, Research and Traditions Trust (SMART Trust). </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section 1 -->
    <section id="projects" class="content-section-proj">
        <div class="projects-section">
        <h1 class="proj-title">Our Projects</h1>
            <div class="container">
                <div class="wow fadeInLeft col-sm-4 projbar" id="stonesong">
                    <h4>Stone Song</h4>
                    <h6 class="status"><span style="color:#fff">STATUS:</span> DEVELOPMENT</h6><!--
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-xs"><i class="fa fa-facebook"></i>  Facebook</a> -->
                    <p>Stone Song is an epic journey packed into a tiny short. A ballad of hope, jealousy, and tragedy, it is the story of one mans desperate attempts to save his love. It is also a waka huia, holding an extraordinary secret, left for us by our knowledgeable ancestors.</p>
                </div>
                 <div class="wow fadeInUp col-sm-4 projbar" id="thequestion">
                    <h4>The Question</h4>
                    <h6 class="status"><span style="color:#fff">STATUS:</span> WRITING</h6><!--
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-xs"><i class="fa fa-facebook"></i>  Facebook</a>-->
                    <p>Indigenous knowledge is gained using observations that stretch back far beyond the memory of mankind as recorded in written history. But with innumerable fireside re-tellings, how can we trust these records handed down by our ancestors? Surely, they are riddled with errors... Or are they? </p>
                </div>
                 <div class="wow fadeInRight col-sm-4 projbar" id="pineridge">
                    <h4>PINE RIDGE</h4>
                    <h6 class="status"><span style="color:#fff">STATUS:</span> DEVELOPMENT</h6>

                    <button type="button" class="btn btn-default-proj btn-md" data-toggle="modal" data-target="#modalPineridge"><i class="fa fa-book"></i> <span class="network-name">READ STORY [R18]</span></button>

                    <p>The hunt. His dogs, his swani, his knife... He has done this a million times before. This is the place he finds space. This is the way he finds his quiet. It is here that he comes to leave there. Somehow, he knows, thats not happening this time.. </p>
                </div>
            </div>
   
            <div class="container">
                <div class="wow fadeInLeft col-sm-4 projbar" id="acavesilent">
                    <h4>A Cave Silent</h4>
                    <h6 class="status"><span style="color:#fff">STATUS:</span> WRITING</h6>
                    <button type="button" class="btn btn-default-proj btn-md" data-toggle="modal" data-target="#modalAcavesilent"><i class="fa fa-book"></i> <span class="network-name">READ STORY [R18]</span></button>
                    <p>What begins as an uneventful hunt, onfolds into an out of this world experience that leads two close friends to question everything and everyone around them. Can the pair survive this experience? Can they survive the night? Can they survive themselves?</p>
                </div>
                 <div class="wow fadeInUp col-sm-4 projbar" id="descendant">
                    <h4>Descendant</h4>
                    <h6 class="status"><span style="color:#fff">STATUS:</span> WRITING</h6>

                    <p>After losing everything in life while overseas, a young man returns home. He finds his past, his present and his future colliding together in a tragic yet inspiring way. He must unravel who he is and where he is from to understand who he can be and where he can go. This is a story of tragedy and hope.    </p>
                </div>
                <div class="wow fadeInRight col-sm-4 projbar" id="broken">
                    <h4>Broken</h4>
                    <h6 class="status"><span style="color:#fff">STATUS:</span> WRITING</h6>

                    <button type="button" class="btn btn-default-proj btn-md" data-toggle="modal" data-target="#modalBroken"><i class="fa fa-book"></i> <span class="network-name">READ STORY [R18]</span></button>

                    <p> L-42 has broken down again. Manu Katene, an automaton technician, is the only man for the job if this Proto-bot is to do what it was built to do. But what was L-42 built to do? </p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section">
        <div class="row">
            <div class="bodytext">
               <h1>Contact Us</h1>
                <div class="wow fadeInLeft">
                <p>Feel free to contact us. We would love to hear your ideas and will work confidentially with you to help you share your story. </p>

                <p>We are located in a little town called Wellington, NZ. However, we are mobile and willing to travel our beautiful country to meet up with you and your story if needed.</p>

                <p>Send us an email or give us a call.</p>
                </div>
            </div>
        </div>
        <div class="wow fadeInRight row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
               <p id="ph">PH. 022 370 5991</p>
               <a href="mailto:stories@housemamaku.nz" id="email">stories@wharemamaku.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li class="wow fadeInLeftBig">
                        <a href="https://www.facebook.com" class="btn btn-default btn-lg"><i class="fa fa-facebook"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li class="wow fadeInRightBig">
                        <a href="https://twitter.com" class="btn btn-default btn-lg"><i class="fa fa-twitter"></i> <span class="network-name">Twitter</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>


    <!-- Modal pineridge-->
    <div class="modal fade" id="modalPineridge" role="dialog">
        <div class="modal-dialog">
            
              <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-header">
                  <h4 class="modal-text">YOU ARE ALMOST THERE!</h4>
                </div>

                <div class="modal-body">
                  <p class="modal-text">This story is restricted to 18 years and older. </p>
                  <p class="modal-text"> It may contain violence or bad language.</p>
                </div>

                <div class="modal-footer">
                        <a href="PineRidge.php" class="btn btn-success">Read Story</a>
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Too Young</button>
                </div>
                
            </div><!-- End Modal content -->

        </div>
    </div><!-- End Modal -->

    <!-- Modal acavesilent-->
    <div class="modal fade" id="modalAcavesilent" role="dialog">
        <div class="modal-dialog">
            
              <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-header">
                  <h4 class="modal-text">YOU ARE ALMOST THERE!</h4>
                </div>

                <div class="modal-body">
                  <p class="modal-text">This story is restricted to 18 years and older. </p>
                  <p class="modal-text"> It may contain violence or bad language.</p>
                </div>

                <div class="modal-footer">
                        <a href="ACaveSilent.php" class="btn btn-success">Read Story</a>
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Too Young</button>
                </div>
                
            </div><!-- End Modal content -->

        </div>
    </div><!-- End Modal -->

    <!-- Modal broken-->
    <div class="modal fade" id="modalBroken" role="dialog">
        <div class="modal-dialog">
            
              <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-header">
                  <h4 class="modal-text">YOU ARE ALMOST THERE!</h4>
                </div>

                <div class="modal-body">
                  <p class="modal-text">This story is restricted to 18 years and older. </p>
                  <p class="modal-text"> It may contain violence or bad language.</p>
                </div>

                <div class="modal-footer">
                        <a href="Broken.php" class="btn btn-success">Read Story</a>
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Too Young</button>
                </div>
                
            </div><!-- End Modal content -->

        </div>
    </div><!-- End Modal -->
      
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center footer-copy">
            <p>WHARE <span class="color">MAMAKU</span> &copy; 2015</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
