<?php include('includes/header.php'); ?> 
<body>
  <div data-role="page">
    <header data-role="header" data-position="fixed">
      <h1>
        <img src="img/main-logo.png" alt="main logo" />
      </h1>
    </header>

    <div data-role="content">
      <ul data-role="listview" data-theme="c" data-dividertheme="d" data-counttheme="e">
        <li>

          <a href="site.php?siteName=javaposse"><img src="img/javaposse-logo.jpg" alt="javaposse" class="ui-li-icon" />
            JavaPosse - The #1 Java Technology Podcast</a>
        </li>
        <li>

          <a href="site.php?siteName=37"> <img src="img/logo_37.png" alt="37 signals" class="ui-li-icon" />
            37 Signals - Design, Biz And Development </a>
        </li>
        <li>

          <a href="site.php?siteName=twit"> <img src="img/twit-logo.png" alt="twit" class="ui-li-icon" />
            TWIT - Tech Podcast</a>
        </li>


        <li>
          <a href="site.php?siteName=nettuts"> <img src="img/net-tuts.png" alt="nettuts+" class="ui-li-icon" />
            Nettuts - Web Development</a>
        </li>
        <li>
          <a href="site.php?siteName=se">
            <img src="img/radio25.png" alt="se" class="ui-li-icon" />
            Se Radio - Software Engineering </a>
        </li>

        <li>
          <a href="site.php?siteName=reversim">
            <img src="img/rev.png" alt="se" class="ui-li-icon" />
            Reversim - Tech & Software (Hebrew)</a>
        </li>
      </ul>


    </div>

    <footer data-role="footer" data-position="fixed">
      <h4> Comments? Please use<a href="http://greenido.wordpress.com/" target="_blank" data-role="button">@greenido</a> </h4>
    </footer>

  </div>
  <!-- /page -->
  <?php include('includes/footer.php'); ?> 
</body>
</html>

