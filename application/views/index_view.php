<body>
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please
			a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
		</p>
	<![endif]-->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=base_url();?>home">
					<img src="<?=base_url()?>assets/img/logo.png" alt="tLaunchR logo" />
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="home-link text-center link-name">
						<a href="<?=base_url();?>home">
							<span class="glyphicon glyphicon-home"></span><br /><span>home</span>
						</a>
					</li>
					<li class="db-link text-center link-name">
						<a href="<?=base_url();?>dashboard">
							<span class="glyphicon glyphicon-dashboard"></span><br /><span>dashboard</span>
						</a>
					</li>
					<li class="signup-link text-center link-name">
						<a href="<?=base_url();?>signup">
							<span class="glyphicon glyphicon-user"></span><br /><span>sign up</span>
						</a>
					</li>
					<li class="signin-link text-center link-name">
						<a href="<?=base_url();?>signin">
							<span class="glyphicon glyphicon-log-in"></span><br /><span>sign in</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- .navbar-collapse -->
		</div>
	</div>
</body>