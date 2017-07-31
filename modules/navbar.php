<div class="header-blue">
<nav class="navbar navbar-default navigation-clean-search">
    <div class="container">
        <div class="navbar-header"><a class="navbar-brand navbar-link" href="http://localhost/ojtest/index.php">MIU OJ</a>
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost/ojtest/index.php">Home</a></li>
			    <li><a href="http://localhost/ojtest/modules/contest.php">Contest</a></li>
			    <li><a href="http://localhost/ojtest/modules/problems.php">Problems</a></li>
			    <li><a href="http://localhost/ojtest/modules/ranks.php">Ranks</a></li>
			    <?php 
				    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
					{
					  	echo '<li><a href="http://localhost/ojtest/modules/info.php">Info</a></li>';
					  	if ($_SESSION['privilage'] == 3) {
					  		echo '<li><a href="http://localhost/ojtest/modules/admin.php">Admin</a></li>';
					  	}
					}
				?>
            </ul>
            
            <?php 
			    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
				{
				  	echo '<p class="navbar-text navbar-right"><a class="btn btn-default action-button" role="button" href="http://localhost/ojtest/modules/logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp Log out</a></p>';
				}
				else
				{
					echo '<p class="navbar-text navbar-right"><a class="navbar-link login" href="http://localhost/ojtest/modules/login.php">Log In</a> <a class="btn btn-default action-button" role="button" href="http://localhost/ojtest/modules/register.php">Register</a></p>';
				}
			?>
            
        </div>
    </div>
</nav>

