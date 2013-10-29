
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Scholars Cooperative</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="sc_style.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <link rel="stylesheet" href="fontello/css/animation.css"><!--[if IE 7]>
    <link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
    <script>
      function toggleCodes(on) {
        var obj = document.getElementById('icons');
        
        if (on) {
          obj.className += ' codesOn';
        } else {
          obj.className = obj.className.replace(' codesOn', '');
        }
      }
      
    </script>

    <!-- Le fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="icon" href="http://www.lib.wayne.edu/inc/img/favicon.ico" type="image/x-icon" />

  </head>

  <body>

      <!-- header (nav and jumbotron) -->

      <div id="header">

      <!--  <div id="wsuls">
          <div class="container">
            <div class="brand">
              <img src="img/ls_logo.png" alt="Wayne State University Library System" />
            </div>
          </div>
        </div> -->


          <!-- Static navbar -->
          <div class="navbar navbar-static-top">
            <div class="navbar-inner">
            <div class="container">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand brand" href="http://www.lib.wayne.edu/" target="_blank"><img src="img/ls_logo.png" alt="Wayne State University Library System" /><!--scholars<strong>cooperative</strong>--> WSU Library System</a>
              <div class="nav-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                  <li><a href="#about">About</a></li>
                  <li><a href="#news">Blog</a></li>
                  <li><a href="#contacts">Contact</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
            </div>
          </div>


        <div id="about" class="container">

          <div class="jumbotron">
          	<img src="img/sc_final.png" class="img-responsive" alt="scholars cooperative" />
            <p>The Scholars Cooperative aids, educates and empowers the Wayne State community to advance the creation, distribution and preservation of scholarship beyond traditional academic publishing models.</p>
          </div>

        </div>

      </div>

      <!-- /header (nav and jumbotron) -->

      <!-- services -->

      <div id="services">

        <div class="container">

          <div class="col-lg-12">
            <p>We offer a wide range of services including self-archiving, promoting and distributing scholarship, providing alternative forms of Scholarly Publishing, retaining author rights, advancing open access, DigitalCommons@WayneState, copyright consultation and much more.</p>
          </div>
      
        </div>

      </div>
      
      <hr class="container">

      <!-- /services -->

      <!-- service highlights -->

      <div id="highlights">

        <div class="container">

          <div class="col-sm-4 col-lg-4">
            <h4><i class="icon-graduation-cap-1"></i> Education</h4>
            <ul class="icons-ul">
            <li><i class="icon-li icon-ok"></i>Open Access</li>
            <li><i class="icon-li icon-ok"></i>DigitalCommons@WayneState</li>
            <li><i class="icon-li icon-ok"></i>Copyright</li>
            <li><i class="icon-li icon-ok"></i>Author’s Rights</li>
            <li><i class="icon-li icon-ok"></i>Departmental workshops and presentations</li></ul>
          </div>

          <div class="col-sm-4 col-lg-4">
            <h4><i class="icon-users-2"></i> Consultation</h4>
            <p><ul class="icons-ul">
            <li><i class="icon-li icon-ok"></i>CV Review</li>
            <li><i class="icon-li icon-ok"></i>Copyright Issues</li>
            <li><i class="icon-li icon-ok"></i>Becoming Open Access</li></ul>
          </div>

          <div class="col-sm-4 col-lg-4">
            <h4><i class="icon-book-open"></i> Publishing Services</h4>
            <p><ul class="icons-ul">
            <li><i class="icon-li icon-ok"></i>Journal Publication</li>
            <li><i class="icon-li icon-ok"></i>Digitization</li>
            <li><i class="icon-li icon-ok"></i>Self- or mediated-archiving</li>
            <li><i class="icon-li icon-ok"></i>Post-print formatting</li></ul> 
          </div>

        </div>

      </div>

      <!-- /service highlights -->

      <!-- latest news -->

      <div id="news">

        <div class="container">

          <div class="col-lg-12">
              <h4><a href="http://blogs.wayne.edu/scholarscoop" target="_blank">Latest news from our blog <i class="icon-rss"></i></a></h4>

        <?php
            $rss = new DOMDocument();
            $rss->load('http://blogs.wayne.edu/scholarscoop/feed/');
            $feed = array();
            foreach ($rss->getElementsByTagName('item') as $node) {
              $item = array ( 
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                );
              array_push($feed, $item);
            }
            $limit = 2;
            for($x=0;$x<$limit;$x++) {
              $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
              $link = $feed[$x]['link'];
              $description = $feed[$x]['desc'];
              $date = date('M d, Y', strtotime($feed[$x]['date']));


              echo   '<div class="date">'.$date.'</div>        
                        <h5><a href="'.$link.'" title="'.$title.'" target="_blank">'.$title.'</a></h5>';
              echo      '<p>'.$description.'</p>
                        <p class="more"><a href="'.$link.'" title="'.$title.'" target="_blank">more...</a></p>';
            }
          ?>

          </div>

        </div>

      </div>

      <!-- /latest news -->

      <!-- contacts -->

      <div id="contacts">

        <div class="container">

          <div class="col-lg-12 title">
            <h4>Contact us to get started</h4>
            <p class="scemail"><a href="mailto:scholarscooperative@wayne.edu">scholarscooperative@wayne.edu</a></p>
          </div>

        </div>

        <div class="container">
            <!--<div class="col-12 col-sm-6 col-lg-6">
              <img class="img-rounded img-responsive" data-src="holder.js/500x300" alt="">
            </div>-->

            <div class="col-12 col-sm-6 col-lg-6 pull-left">
              <form method="post" action="contactengine.php">
                <fieldset>
                  <div class="form-group">
                    <label for="Name" class="pull-left">Name</label>
                    <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="Email" class="pull-left">Email</label>
                    <input type="text" class="form-control" name="Email" id="Email" placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                    <label for="Tel" class="pull-left">Phone</label>
                    <input type="text" class="form-control" name="Tel" id="Tel" placeholder="Enter your phone number">
                  </div>            
            </div>  
            <div class="col-12 col-sm-6 col-lg-6 pull-right">
                  <div class="form-group">
                    <label for="Message" class="pull-left">Message</label>
                    <textarea name="Message" id="Message" class="form-control" rows="9" placeholder="Enter your message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default pull-right">Submit</button>
                </fieldset>
              </form>
            </div>

          </div>

          <hr class="container">

          <div class="container">

          <div class="col col-lg-12">

            <!--<div class="col-lg-4 rightborder">
              <h5><a href="http://scholarscooperative.wayne.edu/">Scholars Cooperative</a></h5>
              <p><a href="http://scholarscooperative.wayne.edu/">scholarscooperative.wayne.edu</a></p>
              <p><a href="mailto:scholarscooperative@wayne.edu">scholarscooperative@wayne.edu</a></p>
            </div>-->

            <div class="col-12 col-sm-6 col-lg-6 rightborder otherservices">
              <h5><a href="http://digitalcommons.wayne.edu" target="_blank">DigitalCommons@WayneState</a></h5>
              <p><a href="http://digitalcommons.wayne.edu" target"_blank">digitalcommons.wayne.edu</a></p>
              <p><a href="mailto:digitalcommons@wayne.edu">digitalcommons@wayne.edu</a></p>
            </div>

            <div class="col-12 col-sm-6 col-lg-6 ohterservices">
              <h5><a href="http://copyright.wayne.edu" target="_blank">Copyright</a></h5>
              <p><a href="http://copyright.wayne.edu" target="_blank">copyright.wayne.edu</a></p>
              <p><a href="mailto:copyright@wayne.edu">copyright@wayne.edu</a></p>
            </div>

          </div>

        </div>

        <hr class="container">

        <div class="container team">

          <div class="row">

          <div class="col-lg-2 col-sm-4"> 
            <img class="img-circle hide" src="holder.js/140x140" alt="">
            <h5>Damecia Donahue</h5>
            <p>Scholarly Communications Librarian</p>
            <p><a href="mailto:dnd@wayne.edu">dnd@wayne.edu</a></p>
            <p class="digits">(313) 577-5811</p>
          </div>

          <div class="col-lg-3 col-sm-4">
            <img class="img-circle hide" src="holder.js/140x140" alt="">
            <h5>Cole Hudson</h5>
            <p>Digital Publishing Librarian</p>
            <p><a href="mailto:cole.hudson@wayne.edu">cole.hudson@wayne.edu</a></p>
            <p class="digits">(313) 577-2659</p>
          </div>
          
          <div class="col-lg-2 col-sm-4">
            <img class="img-circle hide" src="holder.js/140x140" alt="">
            <h5>Graham Hukill</h5>
            <p>Digital Publishing Librarian</p>
            <p><a href="mailto:graham.hukill@wayne.edu">graham.hukill@wayne.edu</a></p>
            <p class="digits">(313) 577-5951</p>
          </div>

          <div class="col-lg-3 col-sm-6">
            <img class="img-circle hide" src="holder.js/140x140" alt="">
            <h5>Joshua Neds-Fox</h5>
            <p>Coordinator for Digital Publishing</p>
            <p><a href="mailto:jnf@wayne.edu">jnf@wayne.edu</a></p>
            <p class="digits">(313) 577-4460</p>
          </div>   
                 
          <div class="col-lg-2 col-sm-6">
            <img class="img-circle hide" src="holder.js/140x140" alt="">
            <h5>Michael Priehs</h5>
            <p>Coordinator for Scholarly Communications &amp; Copyright</p>
            <p><a href="mailto:mpriehs@wayne.edu">mpriehs@wayne.edu</a></p>
            <p class="digits">(313) 577-8743</p>
          </div>

          </div>
       
        </div>   
        
       

      </div>

      <!-- /contacts -->    

      <div id="footer">

        <div class="container">

          <div class="footer">

            <!--<a href="http://www.lib.wayne.edu/" target="_blank"><img src="img/ls_wordmark.png" class="img-responsive" alt="Wayne State University Libary System" />-->
            <address class="vcard" id="wsu-copyright"> <a class="url fn org" href="http://wayne.edu/">Wayne State University</a> <span class="adr"> <span class="locality">Detroit</span>, <span class="region">MI</span> <span class="postal-code">48202</span> <span class="country-name">United States</span></span> &copy; 2013 </address>
    <span id="wsu-policy"><a href="http://wayne.edu/policies/" title="View the Privacy and University Policies" rel="license">Privacy and University Policies</a></span>

          </div>

        </div>

      </div>


 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/affix.js"></script>
    <script src="bootstrap/js/alert.js"></script>
    <script src="bootstrap/js/application.js"></script>
    <script src="bootstrap/js/button.js"></script>
    <script src="bootstrap/js/carousel.js"></script>
    <script src="bootstrap/js/collapse.js"></script>
    <script src="bootstrap/js/dropdown.js"></script>
    <script src="bootstrap/js/holder.js"></script>
    <script src="bootstrap/js/html5shiv.js"></script>
    <script src="bootstrap/js/modal.js"></script>
    <script src="bootstrap/js/popover.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <script src="bootstrap/js/respond.src.js"></script>
    <script src="bootstrap/js/scrollspy.js"></script>
    <script src="bootstrap/js/tab.js"></script>
    <script src="bootstrap/js/tooltip.js"></script>
    <script src="bootstrap/js/transition.js"></script>
  </body>
</html>
