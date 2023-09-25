<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

<style>
	#wpcontent {padding-left: 0}
	.cv-admin-settings h3 {
		font-size: 1.6em;
	}
	.cv-admin-settings {
		margin: 30px auto;
		padding: 0 30px;
		max-width: 90%;
	}
	.cv-admin-header {
		align-items: center;
		display: flex;		
		font-size: 23px;
	}
	.cv-admin-logo {
		max-width: 30px;
		margin-right: 20px;
	}
	.cv-admin-version {
		margin-left: auto;
		font-size: 16px;
	}
	.cv-admin-content {
		display: grid;
		gap: 30px;
		grid-template-columns: repeat(3,1fr);
		margin-bottom: 30px;
	}
	.cv-admin-grid-2 {grid-column: span 2;}
	.cv-admin-grid-1 {grid-column: span 1;}

	.cv-admin-section {
		background: #fff;
		border-radius: 5px;
		box-shadow: 0 0 15px #ededed;
		padding: 20px 30px;
		margin: 10px auto;
	}
	.cv-admin-settings ul {
		margin-left: 20px;
		margin-top: 20px;
		list-style-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTMiIGhlaWdodD0iMTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTExLjMuM0w0LjUgNy4xIDEuNyA0LjMuMyA1LjdsNC4yIDQuMiA4LjItOC4yIiBmaWxsPSIjZmY1YTVmIi8+PC9zdmc+Cg==);
	}
	.cv-admin-settings li {
		margin-bottom: 10px;
	}
	.cv-admin-settings a {
		font-size: 1.3em;
		font-weight: 600;
		margin-top: 10px;
		display: inline-block;
		color: #ff5a5f;
	}
	.cv-admin-video {
		width: 100%;
		height: 399px;
	}
</style>

<div class="cv-admin-settings">
	<div class="cv-admin-header cv-admin-section">
		<img src='<?php echo plugins_url( 'admin/assets/images/icon.png', PT_CV_FILE ) ?>' class="cv-admin-logo"/>
		<div>Welcome To Content Views</div>
		<div class="cv-admin-version"> Version <?php echo esc_html( PT_CV_Functions::plugin_info( PT_CV_FILE, 'Version' ) ); ?> </div>
	</div>


	<div class="cv-admin-content">
		<div class="cv-admin-grid-2">
			<div class="cv-admin-section" id="block-intro-video">
				<h3>Blocks Introduction</h3>
				<p>We added 15+ advanced post blocks to help you display posts, pages, custom post types stunningly with endless customization options.</p>
				<div class="cv-admin-video">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/bptDnUq9DI0?controls=1&modestbranding=1&rel=0&cc_load_policy=1&start=15" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
			<div class="cv-admin-section">
				<h3>View Shortcode Introduction</h3>
				<p>We built a dedicated powerful tool to help you display content using shortcode with the Classic editor easily.</p>
				<div class="cv-admin-video">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/2vVqoBJA9K8?controls=1&modestbranding=1&rel=0&cc_load_policy=1" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="cv-admin-grid-1">
			<div class="cv-admin-section">
				<h3>Top Features</h3>
				<p>
				<ul>
					<li>Many Stunning Layouts: Grid, List, Pinterest, Carousel, Timeline, Glossary, and more</li>
					<li>Advanced Front-End Filter</li>
					<li>WooCommerce Integration</li>
					<li>Redesign Posts Layout On The Blog & Archive Pages</li>
					<li>Custom Field Support</li>
					<li>Superior Ready-To-Use Patterns</li>
				</ul>
				</p>
				<a href="https://www.contentviewspro.com/?utm_source=setting-page&utm_medium=dashboard" target="_blank">Learn More</a>
			</div>
			<div class="cv-admin-section">
				<h3>Demo</h3>
				<p>Check out the demo pages to learn about our super powerful post blocks & shortcode.</p>
				<a href="https://contentviewspro.com/demo/?utm_source=setting-page&utm_medium=dashboard" target="_blank">See Demos</a>
			</div>
			<div class="cv-admin-section">
				<h3>Documentation</h3>
				<p>Go through the easy documentation to get familiar with Content Views.</p>
				<a href="https://contentviewspro.com/documentation/?utm_source=setting-page&utm_medium=dashboard" target="_blank">Read Documentation</a>
			</div>
			<div class="cv-admin-section">
				<h3>Need Helps</h3>
				<p>Get in touch with our dedicated support team whenever you encounter an issue.</p>
				<a href="https://www.contentviewspro.com/contact/?utm_source=setting-page&utm_medium=dashboard" target="_blank">Contact Us</a>
			</div>
		</div>
	</div>
</div>