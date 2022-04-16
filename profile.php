<?php
    include 'header.php';
?>

<link rel="stylesheet" href="css\profile.css" type="text/css">
<title>Profile</title>

<div class="app">
	<header class="app-header">
		<div class="app-header-logo">
			<div class="logo">
				<h1 class="logo-title">
					<span>PROFILE PAGE</span>
				</h1>
			</div>
		</div>
		<div class="app-header-navigation">
			<div class="tabs">
				<a href="profile.php">
					Overview
				</a>
				<a href="#" >
					Current Bookings
				</a>
				<a href="#" >
					Past Bookings
				</a>
				
				<a href="#">
					Payment Methods
				</a>
				<a href="#">
					Reports
				</a>
			</div>
		</div>
		<div class="app-header-actions">
			<button class="user-profile">
			<div class="name">
            <?php
              echo "<p>" .$_SESSION["firstname"]."  ".$_SESSION["lastname"]."</p>";
            ?>    
           </div>
					<img src=""/>
				</span>
			</button>
			<div class="app-header-actions-buttons">
				<button class="icon-button large">
					<i class="fa fa-fw fa-comments-o"></i>
				</button>
				<button class="icon-button large">
					<i class="fa fa-bell"></i>
				</button>
			</div>
		</div>
		<div class="app-header-mobile">
			<button class="icon-button large">
				<i class="fa fa-list"></i>
			</button>
		</div>

	</header>

		<div class="app-body-main-content">
			<section class="service-section">
				<h2>RECOMMENDED FOR YOU:</h2>
				<div class="tiles">
					<article class="tile">
						<div class="tile-header">
							<h3>
								<span>Maasai Mara</span>
								<span>Rift Valley</span>
							</h3>
						</div>
						<a href="valley\maasai-mara.php">
							<span>View</span>
							<span class="icon-button">
								<i class="fa fa-caret-right"></i>
							</span>
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<h3>
								<span>Diani Beach</span>
								<span>Coast</span>
							</h3>
						</div>
						<a href="diani\diani-beach.php">
							<span>View</span>
							<span class="icon-button">
								<i class="fa fa-caret-right"></i>
							</span>
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<h3>
								<span>Tsavo</span>
								<span>Coast</span>
							</h3>
						</div>
						<a href="taita\tsavo-west.php">
							<span>View</span>
							<span class="icon-button">
								<i class="fa fa-caret-right"></i>
							</span>
						</a>
					</article>
				</div>
			</section>
			<section class="transfer-section">
				<div class="transfer-section-header">
					<h2>Latest view history</h2>
				</div>
				<div class="transfers">
					<div class="transfer">
						<div class="transfer-logo">
							<img src="" />
						</div>
						<dl class="transfer-details">
							<div>
								<dt></dt>
								<dd></dd>
							</div>
							<div>
								<dt>28 Oct. 21</dt>
							</div>
						</dl>
					</div>
					<div class="transfer">
						<div class="transfer-logo">
							<img src="" />
						</div>
						<dl class="transfer-details">
							<div>
								<dt></dt>
								<dd></dd>
							</div>
							<div>
								<dt>26 Oct. 21</dt>
							</div>
						</dl>
					</div>
					<div class="transfer">
						<div class="transfer-logo">
							<img src="" />
						</div>
						<dl class="transfer-details">
							<div>
								<dt></dt>
								<dd></dd>
							</div>
							<div>
								<dt>22 Oct. 21</dt>
							</div>
						</dl>
						
					</div>
				</div>
			</section>
		</div>
	</div>
</div>



</body>

</html>