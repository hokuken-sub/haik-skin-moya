<head prefix="#{$head_prefix}">
	#{$meta_content_type}
	<title>#{$page_title}</title>
	#{$viewport}
	<meta name="keywords" content="#{$keywords}">
	<meta name="description" content="#{$description}">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="#{$rss_link}">

	#{$bootstrap_css}
	#{$style_css}
	
	#{$head_tag}
	#{$plugin_head}
	#{$user_head}
	
	#{$tracking_script}

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">
#{$body_first}
#{$sr_link}

<header>

	<!-- Navbar
	================================================== -->
	<div id="orgm_navbar" class="navbar navbar-default">
		<div class="container">
			<div id="logo" class="pull-left">#{$logo}</div>
			<div class="navbar-header navbar-right">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<nav class="navbar-collapse collapse">
				#{$site_navigator}
			</nav>
		</div>
	</div>
	
	<!-- EyeCatch
	================================================== -->
	<div id="orgm_eyecatch">
		#{$eyecatch}
	</div>

</header>

<!-- Body
================================================== -->
<div id="contents" class="container">
	<div class="row">
		<div class="col-sm-12 marketing" role="main">
			#{$body}
		</div>
	</div>
</div>


<aside>
	#{$summary}
</aside>

<!-- Footer
================================================== -->
<footer class="footer">
	<div class="container">
		<div class="row">
			#{$site_footer}
		</div>
	</div>
	<div id="license" class="container">
		#{$license_tag}
	</div>
</footer>

#{$admin_nav}
#{$body_last}

<!-- Script
================================================== -->
#{$jquery_script}
#{$bootstrap_script}
#{$common_script}
#{$admin_script}

#{$plugin_script}
#{$user_script}

</body>
</html>