
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
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <link rel="stylesheet" href="fontello/css/animation.css"><!--[if IE 7]>
    <link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->

    <!-- Le fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="bootstrap/ico/favicon.png">

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

    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(["trackPageView"]);
      _paq.push(["enableLinkTracking"]);

      (function() {
        var u=(("https:" == document.location.protocol) ? "https" : "http") + "://cgi.lib.wayne.edu/stats/piwik/";
        _paq.push(["setTrackerUrl", u+"piwik.php"]);
        _paq.push(["setSiteId", "20"]);
        var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
        g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Piwik Code -->

  </head>

  <body>

      <!-- header (nav and jumbotron) -->

      <div id="header">
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
      
      <hr class="container"/>

      <!-- /services -->

      <!-- service highlights -->

      <div id="highlights">
        <div class="container">
          <div class="row featured">
            <div class="col-sm-4 col-lg-4 space">
              <h4><i class="icon-inform icons"></i> Inform</h4>
              <p class="about">SC provides programs, workshops and discussions on topics relating to your scholarly publishing activities, crafted for a range of audiences.</p>
              <div class="deets">
                <i class="icon-checkbox"></i>
                <h3>Scholarly Communications</h3>
                <p>The state of scholarly communication today&#8212;what’s working, what’s not, where do we go from here?</p>
              </div>
              <div class="deets">
                <i class="icon-checkbox"></i>
                <h3>Open Access</h3>
                <p>What open access is, how it benefits scholars, how you can participate without sacrificing impact?</p>
              </div>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Digital Commons@Wayne State</h3>
                <p>Our institutional repository and what it means to faculty at Wayne State University.</p>
              </div>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Copyright</h3>
                <p>How does copyright impact your publication and use of scholarship?</p>
              </div>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Authors Rights</h3>
                <p>What rights can you retain when you publish, and what rights can you regain over already published material?</p>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4 space">
              <h4><i class="icon-consult icons"></i> Consult</h4>
              <p class="consult about">SC gives individual consults on a range of topics relating to publishing, teaching and scholarship.</p>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>CV Review</h3>
                <p>See which of your citations can already be made open access; link your CV to your publications.</p>
              </div>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Copyright Issues</h3>
                <p>Answer specific questions and apply copyright best practices to your publication and teaching.</p>
              </div>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Course design</h3>
                <p>Learn how to incorporate sustainable and copyright-compliant materials in your courses.</p>
              </div>   
              <div class="deets">
                <i class="icon-checkbox"></i>
                <h3>Becoming Open Access</h3>
                <p>Include open access in your publishing workflow, making your citations more findable and more likely to be cited.</p>
              </div>
            </div>
            <div class="col-sm-4 col-lg-4">
              <h4><i class="icon-publish icons"></i> Publish</h4>
              <p class="about publish">SC offers a number of publishing support services to help you disseminate your scholarship more broadly and effectively.</p>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Journal Publication</h3>
                <p>Preparation, hosting, and online peer-review management services for open access journals in any discipline.</p>
              </div>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Digitization</h3>
                <p>Convert print publications and make them available and searchable online.</p>
              </div>
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Self- or Mediated Archiving</h3>
                <p>Gather your materials together online, or let us do it for you.</p>
              </div>       
              <div class="deets">
                <i class="icon-checkbox"></i> 
                <h3>Post-print formatting</h3>
                <p>Make your peer-reviewed final accepted manuscripts print quality before archiving; tie use to the final published citation.</p>
              </div>
            </div>
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
                  echo   '<p>'.$description.'
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
          <div class="col-12 col-sm-6 col-lg-6 pull-left contact-padding-top">
            <form method="post" action="contactengine.php">
              <fieldset>
                <div class="form-group">
                  <label for="Name" class="pull-left">Name</label>
                  <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <label for="Email" class="pull-left">Email</label>
                  <input type="email" class="form-control" name="Email" id="Email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                  <label for="Tel" class="pull-left">Phone</label>
                  <input type="tel" class="form-control" name="Tel" id="Tel" placeholder="Enter your phone number">
                </div>
                <input id="Website" name="Website" type="text" value=""  />            
          </div>  
          <div class="col-12 col-sm-6 col-lg-6 pull-right contact-padding-bottom">
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
            <div class="col-12 col-sm-6 col-lg-6 rightborder otherservices">
              <h5><a href="http://digitalcommons.wayne.edu" target="_blank">DigitalCommons@WayneState</a></h5>
              <p><a href="http://digitalcommons.wayne.edu" target="_blank">digitalcommons.wayne.edu</a></p>
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
            <address class="vcard" id="wsu-copyright"> <a class="url fn org" href="http://wayne.edu/">Wayne State University</a> <span class="adr"> <span class="locality">Detroit</span>, <span class="region">MI</span> <span class="postal-code">48202</span> <span class="country-name">United States</span></span></address>
            <span id="wsu-policy"> &copy; 2013 <a href="http://wayne.edu/policies/" title="View the Privacy and University Policies" rel="license">Privacy and University Policies</a></span>
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
