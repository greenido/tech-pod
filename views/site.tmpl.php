<?php include('includes/header.php'); ?>
<body> 

<div data-role="page">
  
   <div data-role="header" data-add-back-btn="true" class="<?php echo $siteName; ?>">
      <h1> <?php echo ucwords($siteName); ?></h1>
   </div><!-- /header -->

   <div data-role="content">	
      <ul data-role="listview" data-theme="e" data-dividertheme="d" >
      <?php
            foreach($feed->query->results->item as $item) { 
            ?>
            <li>
                  <a href="article.php?curSite=<?php echo $curSite;?>&origLink=<?php echo urlencode($item->link);?>&siteName=<?php echo $siteName; ?>">
                 <?php echo $item->title; ?>
                 </a>
                 
                 
                 <a href="<?php echo ($item->enclosure->url); //urlencode?>" rel="external" >Listen</a>
           </li>

      <?php  } ?>
      </ul>
   </div><!-- /content -->

   <footer data-role="footer" class="<?php echo $siteName; ?>">
     <h2><a href="index.php" data-icon="home" data-role="button">Home</a> </h2>
   </footer>
</div><!-- /page -->

</body>
</html>


