<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2020-03-17 10:17:20
 * @package air-light
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

namespace Air_Light;

get_header(); ?>

<div class="content-area">
	<main role="main" id="main" class="site-main">

			<section class="error-404 not-found">
        <div class="container">
          <div class="content">

				    <header class="entry-header">
              <h1 id="content" class="entry-title">404<span class="screen-reader-text">Page not found.</span></h1>
			  	  </header>

	  				<p>Page not found.</p>
          </div>
        </div>
			</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php wp_footer();
