<?php
  $page = $_GET["page"];
  $pages=array("Home" => true,"About" => true, "Ventures" => true);
  if(!$pages[$page])
  {
    $page = "Home";
  }
?>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="Stylesheet/" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMS Consumer Investments - <?php echo $page; ?></title>
  </head>
<body>
  <div id="header">
    <div id="headerBlock">
      <div class="headerContent_ignore" onClick="window.location.href='/?page=Home'">
        LOGO HERE
      </div>
      <div class="headerContent" onClick="window.location.href='/?page=Home'">
        Home
      </div>
      <div class="headerContent" onClick="window.location.href='/?page=About'">        About
      </div>
      <div class="headerContent" onClick="window.location.href='/?page=Ventures'">
        Ventures
      </div>
      <div class="headerContent" onClick="window.location.href='portal.php'">
        Invest
      </div>
    </div>
  </div>
  <div class="spacerRed"></div>
  <div id="content">
    <?php
      if($page == "Home")      {
        ?>
  <div id="news" class="pageContentRed">
    <h1>Latest News</h1>
    <span class="article">
      <h2>AMS Consumer Investments is Making Life Happen</h2>
      <h3>1st November 2017</h3>
      <p><b>AMS Consumer Investments is taking off</b> - That's Right! We have launched an all-new strategy to make it possible for you to make life happen.<br>
        Keep your eyes on this this page, or follow our social media pages to be the first to jump onto the opportuniites we have to offer.</p>
    </span>
  </div>
    <div id="summary" class="pageContentBlack">
      <h1>In A Nutshell...</h1>
      <span class="article">        AMS Consumer Investments is a start-up company based in Edenvale, Gauteng, dedicated to providing investment opportunities to all members of the public, regard$
      </span>
      <div class="launcherButtons">
        <div class="buttonOnBlack" onClick="window.location.href='/?page=About'">Hungry for More?</div>
        <div class="buttonOnBlack" onClick="window.location.href='portal.php'">Count Me In!</div>
      </div>
    </div>
        <?php
      }
    ?>
  </div>
  </body>
</html>
<?php
