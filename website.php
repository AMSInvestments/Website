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
		<link type="text/css" rel="stylesheet" href="Resources/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>AMS Consumer Investments - <?php echo $page; ?></title>
	</head>
	<body>
		<div id="body">
			<div id="header">
				<div id="headerBlock">
					<menu>
						<div class="headerContent_ignore" onClick="window.location.href='?page=Home'">
							<img src="Resources/logo.png" alt="AMS Logo">
						</div>
						<div class="headerContent" onClick="window.location.href='?page=Home'">Home</div>
						<div class="headerContent" onClick="window.location.href='?page=About'">About</div>
						<div class="headerContent" onClick="window.location.href='?page=Ventures'">Ventures</div>
						<div class="headerContent" onClick=	"window.location.href='portal.php'">Invest</div>
					</menu>
					<dropDown>
						<img src="Resources/logo.png" alt="AMS Logo"><br>
						You're viewing our <?php echo $page;?> page<br>
						<select> 
							<option value="" selected="selected">Navigate To...</option> 
							<option value="?page=Home">Home</option> 
							<option value="?page=About">About</option> 
							<option value="?page=Ventures">Ventures</option> 
							<option value="portal.php">Invest</option>
						</select>
					</dropDown>
				</div>
			</div>
			<div class="spacerRed"></div>
			<div id="content">
		<?php
		if($page == "Home")
		{
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
					<span class="article">
						<p>AMS Consumer Investments is a start-up company based in Edenvale, Gauteng, dedicated to providing investment opportunities to all members of the public, regardless of income bracket, by making use of innovative systems and technology in a hedge-fund like approach to provide possible returns.</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnBlack" onClick="window.location.href='?page=About'">Hungry for More?</div>
						<div class="buttonOnBlack" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
				<div id="ventures" class="pageContentRed">
					<h1>Our Ventures</h1>
					<!--THE FOLLOWING SECTION WILL BE REPLACED BY A SCRIPT ON THE PACKEND
					<span class="article">
						<h2>***ventureName***</h2>
						<p>***ventureDescription***</p>
					</span>
					!-->
					<span class="article">
						<p><b>Nothing to diplay here...... Yet!</b> But, keep your eyes on this this page, or follow our social media pages to be the first to jump onto the opportuniites we have to offer.</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnRed" onClick="window.location.href='?page=About'">Hungry for More?</div>
						<div class="buttonOnRed" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
			<?php
		}
		elseif($page == "About")
		{
			?>
				<div id="summary" class="pageContentRed">
					<h1>What does AMS do?</h1>
					<span class="article">
						<p>AMS Consumer Investments is a start-up company based in Edenvale, Gauteng, dedicated to providing investment opportunities to all members of the public, regardless of income bracket, by making use of innovative systems and technology in a hedge-fund like approach to provide possible returns.</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnRed" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
				<div id="howItWorks" class="pageContentBlack">
					<h1>How Does AMS Make It Work?</h1>
					<span class="article">
						<p>AMS Consumer Investments collects capital from members of the public (people like you) in order to launch a business entity (we call these ventures).
						Each venture is run as a separate company and at the end of each financial year (end of June) the profits are returned proportionately to the investors at an incredible return rate.</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnBlack" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
				<div id="return" class="pageContentRed">
					<h1>What Is The Return On My Investment?</h1>
					<span class="article">
						<p>Because AMS Consumer Investments allows you to invest in a venture, Return on investment is entirely based on the profitability of that Venture, however, AMS Constmer Investments tries to maintain a minimum of double your original investment, each year.
						But there's more great news! You will receive returns from the venture as long as it is operational, and can choose to re-invest your returns into another venture, so you can exponentially grow your return.</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnRed" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
				<div id="howItWorks" class="pageContentBlack">
					<h1>What If The Venture Does Not Perform?</h1>
					<span class="article">
						<p>AMS Consumer Investments uses a powerful system with exceptional analytics to help keep us on target each month, but we know that business, and the economy, is temperamental and there is always a chance of failure.
						To combat this, should a venture need to close, AMS Consumer Investments will ensure that all the venture assets are sold for the highest possible price, and will pay out all proceeds from this process proportionately to it's investors.</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnBlack" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
				<div id="tooGood" class="pageContentRed">
					<h1>This Sounds Too Good To Be True. Seriously, What's The Catch?</h1>
					<span class="article">
						<p>There is absolutely no catch. The directors of AMS Consumer Investments got tired of working intense jobs with unreasonable hours, only to be struggling to make ends meet month after month with no change, so we came up with an easy way to invest in companies, with the small amount of capital that would be affordable on our salaries.</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnRed" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
				<div id="ventures" class="pageContentBlack">
					<h1>Does AMS have any success stories?</h1>
					<span class="article">
						<p>Yes, we do check out our <a href="?page=Ventures">Ventures</a> page for more information.</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnBlack" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
				<div id="directors" class="pageContentRed">
					<h1>I'm Still Not Sure. Who Can I Contact?</h1>
					<span class="article">
						<p>We thought you'd still be concerned, after all it's your money at stake. Feel free to contract our directors and chat to us, We'll be happy to answer any further questions you may have.</p>
					</span>
					<span id="ourDirectors">
						<director>
							<img class="directorPhoto" alt="Alan Whitehurst" src="Resources/alan.jpg" ><br>
							<u><b>Alan Whitehurst</b></u><br>
							&#9742; 076 873 7090<br>
							&#9993; <a style="text-decoration:none; color:black;" href="mailto:alanw@amsinvestments.co.za" target="_blank">alanw@amsinvestments.co.za</a>
						</director>
						<director>
							<img class="directorPhoto" alt="Matthew Mc Allister" src="Resources/matthew.jpg" ><br>
							<u><b>Matthew Mc Allister</b></u><br>
							&#9742; 071 158 3596<br>
							&#9993; <a style="text-decoration:none; color:black;" href="mailto:matthewm@amsinvestments.co.za" target="_blank">matthewm@amsinvestments.co.za</a>
						</director>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnRed" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
			<?php
		}
		elseif($page == "Ventures")
		{
			?>
				<div id="summary" class="pageContentRed">
					<h1>Nothing to display here...... Yet!</h1>
					<span class="article">
						<p>We're still working out a couple of kinks, but we will have info for you shortly</p>
					</span>
					<div class="launcherButtons">
						<div class="buttonOnRed" onClick="window.location.href='portal.php'">Count Me In!</div>
					</div>
				</div>
			<?php
		}
			?>
			</div>
			<script>
				$("dropDown select").change(function() {
				  window.location = $(this).find("option:selected").val();
				});
			</script>
		</div>
		<div id="footer">
		<h2 id="footerHeading">The Boring Stuff</h2>
		<ul>
			<li><a href="Resources/tos.html">Terms of Service</a></li>
			<li><a href="Resources/privacyPolicy.html">Privacy Policy</a></li>
		</ul>
		<span>&copy AMS Consumer investments (PTY) LTD 2017 - <?php echo date("Y"); ?><br>website designed by Bushie's Web Design, a division of AMS Consumer Investments (PTY) LTD</span>
	</div>
	</body>
</html>
<?php
