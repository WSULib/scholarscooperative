<?php
  // get quizNum
  if (isset($_REQUEST['quiz'])){
    $quizNum = $_REQUEST['quiz'];
  }
  else {
    $quizNum = 1;
  }


  // count quiz items
  // integer starts at 0 before counting
    $fileCount = 0; 
    $dir = 'img/items/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $fileCount++;
        }
    }    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Journal Quiz - Scholars Cooperative</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->    
    <link href="../sc_style.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">    
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../fontello/css/fontello.css">
    <link rel="stylesheet" href="../fontello/css/animation.css"><!--[if IE 7]>
    <link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
    <link href="css/journal_quiz_style.css" rel="stylesheet">

    <!-- Quiz Logic -->
    <script src="js/journal_quiz.js"></script>

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
    <div id="overlay">

      <!-- header (nav and jumbotron) -->

      <div id="header" class="journal_quiz_header">

          <!-- Static navbar -->
          <div class="navbar navbar-static-top">
            <div class="navbar-inner">
            <div class="container">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand brand" href="http://www.lib.wayne.edu/" target="_blank"><img src="../img/ls_logo.png" alt="Wayne State University Library System" /><!--scholars<strong>cooperative</strong>--> WSU Library System</a>
              <a class="navbar-brand brand" href="http://scholarscooperative.wayne.edu/" target="_blank"><img height="26px" src="img/sc_inverted_logo.png" alt="Wayne State Scholar's Cooperative" /></a>
  
            </div>
            </div>
          </div>          

      </div>

      <div id="quiz" class="container">
        <div class="query_headings top">
          <h1>WHICH COSTS <span style="color:rgba(255,212,120,1);">MORE</span>?</h1>
          <h3>A one year subscription to the journal on the left, or the item on the right?</h3>
        </div>

        <div id="left_pane" class="guess" onclick="correctAnswer();"></div>
        <div id="right_pane" class="guess" onclick="wrongAnswer();"></div>

        <div id="correctResults" class="results">
          <h4>That is correct!</h4>          
        </div>
        <div id="wrongResults" class="results">
          <h4>Believe it or not, a one-year subscription to the journal costs more!</h4>
        </div>

        <div class="query_headings bottom">
          <a style="color:#333333" href="http://digitalcommons.wayne.edu/oa/2013/"><h1>OPEN ACCESS WEEK <span style="color:rgba(255,212,120,1);">@WAYNE STATE</span></h1></a>
        </div>
        
      </div>


     

      

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
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/affix.js"></script>
    <script src="../bootstrap/js/alert.js"></script>
    <!--<script src="../bootstrap/js/application.js"></script>-->
    <script src="../bootstrap/js/button.js"></script>
    <script src="../bootstrap/js/carousel.js"></script>
    <script src="../bootstrap/js/collapse.js"></script>
    <script src="../bootstrap/js/dropdown.js"></script>
    <script src="../bootstrap/js/holder.js"></script>
    <!--<script src="../bootstrap/js/html5shiv.js"></script>-->
    <script src="../bootstrap/js/modal.js"></script>
    <script src="../bootstrap/js/popover.js"></script>
    <script src="../bootstrap/js/respond.min.js"></script>
    <script src="../bootstrap/js/respond.src.js"></script>
    <script src="../bootstrap/js/scrollspy.js"></script>
    <script src="../bootstrap/js/tab.js"></script>
    <script src="../bootstrap/js/tooltip.js"></script>
    <script src="../bootstrap/js/transition.js"></script>
  </div> <!--overlay-->


  <script type="text/javascript">
    // load quiz based on hash
    $(document).ready(function(){
      loadQuiz(<?php echo $quizNum.",".$fileCount;?>);
    });    
  </script>

  </body>
</html>
