<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ali Amin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }
    </style>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>


  <body>
    <div class="container">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner" style="background-color:white;">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="http://www.ali-amin.com"><i class="icon-home icon-white"></i> HOME </a></li>
              <li><a href="http://www.ali-amin.com/resume/"><i class="icon-folder-open icon-white"></i> RESUME</a></li>
              <li><a href="http://www.ali-amin.com/blog/"><i class="icon-bold icon-white"></i> BLOG</a></li>
              <li><a href="http://www.ali-amin.com/contact/"><i class="icon-envelope icon-white"></i> CONTACT</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" style="border:5px; background-color:white; border-style:solid;border-color:#1B1B1B;">




      <div class="row-fluid"> 
        <div class="span8">
              <h1>Get in touch!</h1>
              <br>
              <form method="POST" action="contact-form-submission.php">
              <fieldset>

              <div class="control-group">    
                  <label class="control-label" for="input1"><i class="icon-user"></i> Full Name</label>
                  <div class="controls"><input class="span12" type="text" name="contact_name" id="input1" placeholder="Jane Doe"></div>
              </div>

              <div class="control-group">    
                  <label class="control-label" for="input2"><i class="icon-envelope"></i> Email </label>
                  <div class="controls"><input class="span12" type="text" name="contact_email" id="input2" placeholder="janedoe@example.com"></div>
              </div>

              <div class="control-group">    
                  <label class="control-label" for="input3"><i class="icon-pencil"></i> Message</label>
                  <div class="controls"><textarea class="span12" rows="8" type="text" name="contact_message" id="input3" placeholder="What's on your mind?"></textarea></div>
              </div>

<?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
  
?>  
                <input type="hidden" name="save" value="contact">  
                <button type="submit" class="btn btn-primary">Submit</button>  

              </fieldset>
              </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="span3 offset1">
          <div class="row">
            <a href="https://www.facebook.com/ali.amin1992"><img class="contactIcon" src="img/facebook.png"></a>
            <a href="mailto:aliamin@outlook.com?Subject=Hi%20Ali"><img class="contactIcon" src="img/email.png"></a>
          </div>
          <div class="row">
            <a href="http://www.linkedin.com/in/amamin"><img class="contactIcon" src="img/linkedin.png"></a>
            <a href="https://plus.google.com/110838744880801234696/posts"><img class="contactIcon" src="img/googleplus-revised.png"></a>
          </div>
        </div>



    </div><!-- /row -->

    </div><!-- /hero-unit -->
      <hr>

      <footer>
        <p>&copy; Ali Amin 2013</p>
      </footer>

    </div> <!-- /container -->
  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>




