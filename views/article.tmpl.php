<?php include('includes/header.php'); ?>
<body> 

  <div data-role="page" data-add-back-btn="true">

    <header data-role="header"  data-position="fixed">
      <h1><?php echo ucWords($siteName); ?> </h1>
    </header><!-- /header -->

    <div data-role="content">	
      <h1> <?php echo $feed->title; ?> </h1>
      
      <?php 
         if (isset ($feed->enclosure)) {
      ?>
      <h2>Listen <audio controls='controls'>
          <source src="<?php echo $feed->enclosure->url ?>" type="audio/mp3" />
          Opps... Your browser does not support the audio tag... maybe, it's time for Android/iOS device?
        </audio>
      </h2>
      <?php
         }
      ?>
    
      <div> <?php echo $feed->description; ?> </div>
    </div><!-- /content -->

    <footer data-role="footer" data-position="fixed" class="javaposse">
      <h2><a href="index.php" data-icon="home" data-role="button">Home</a> <a href="<?php echo $feed->link; ?>" class="ui-btn-right" data-icon="forward" data-role="button">
          Read on <?php echo ucWords($siteName); ?></a></h2>
    </footer>
  </div><!-- /page -->


  <script>
    $('img, embed, object').removeAttr('height').removeAttr('width');
  </script>

</body>
</html>


