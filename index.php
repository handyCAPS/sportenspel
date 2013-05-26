<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php'; // load logic.php

?><!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->

<head>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/foundation.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.css" type="text/css" />
 
  <!--[if lte IE 8]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <?php if ($pie==1) : ?>
      <style> 
        {behavior:url(<?php echo $tpath; ?>/js/PIE.htc);}
      </style>
    <?php endif; ?>
  <![endif]-->
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('page')).' '.$active->alias.' '.$pageclass; ?>">
       <div class="row">
      <div class="large-3 columns">
        <h1><img src="http://placehold.it/400x100&text=Logo" /></h1>
      </div>
      <jdoc:include type="modules" name="logo" />
      <jdoc:include type="modules" name="main-menu" title="Main Menu" />
      <div class="large-9 columns">
          <ul class="right button-group">
            <li><a href="#" class="button">Link 1</a></li>
            <li><a href="#" class="button">Link 2</a></li>
            <li><a href="#" class="button">Link 3</a></li>
            <li><a href="#" class="button">Link 4</a></li>
          </ul>
      </div>
    </div>
    <!-- End Header and Nav -->
     
    <!-- First Band (Slider) -->
     
    <div class="row">
      <div class="large-12 columns">
        <div id="slider">
        <img src="http://placehold.it/1000x400&text=[ img 1 ]" />
        </div>
      <hr />
      </div>
    </div>
    <!-- Three-up Content Blocks -->
     
    <div class="row">
      <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]" />
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      </div>
      <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]" />
        <h4>This is a content section.</h4>
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
      </div>
      <div class="large-4 columns">
        <img src="http://placehold.it/400x300&text=[img]" />
        <h4>This is a content section.</h4>
        <p><jdoc:include type="modules" name="login" /></p>
      </div>
    </div>
    <!-- Call to Action Panel -->
    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h4>Get in touch!</h4>
            <div class="row">
              <div class="large-9 columns">
                <p>We'd love to hear from you, you attractive person you.</p>
                <jdoc:include type="component" />
              </div>
            <div class="large-3 columns">
              <a href="#" class="radius button right">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
     
    <!-- Footer -->
    <footer class="row">
      <div class="large-12 columns">
      <hr />
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright no one at all. Go to town.</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  <!-- 
    YOUR CODE HERE
  -->
  <jdoc:include type="modules" name="debug" />
</body>

</html>

