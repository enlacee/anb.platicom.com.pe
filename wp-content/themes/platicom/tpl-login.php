<?php
/*Template Name: Login Template */
get_header();

	$tpl_default_settings = get_post_meta( $post->ID, '_tpl_default_settings', TRUE );
	$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

	$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
	$show_sidebar = $show_left_sidebar = $show_right_sidebar =  false;
	$sidebar_class = "";

	switch ( $page_layout ) {
		case 'with-left-sidebar':
			$page_layout = "page-with-sidebar with-left-sidebar";
			$show_sidebar = $show_left_sidebar = true;
			$sidebar_class = "secondary-has-left-sidebar";
		break;

		case 'with-right-sidebar':
			$page_layout = "page-with-sidebar with-right-sidebar";
			$show_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-right-sidebar";
		break;

		case 'both-sidebar':
			$page_layout = "page-with-sidebar page-with-both-sidebar";
			$show_sidebar = $show_right_sidebar	= $show_left_sidebar = true;
			$sidebar_class = "secondary-has-both-sidebar";
		break;

		case 'content-full-width':
		default:
			$page_layout = "content-full-width";
		break;
	}

	if ( $show_sidebar ):
		if ( $show_left_sidebar ): ?>
			<!-- Secondary Left -->
			<section id="secondary-left" class="secondary-sidebar <?php echo $sidebar_class;?>"><?php get_sidebar( 'left' );?></section><?php
		endif;
	endif;
	
	?>

	<!-- ** Primary Section ** -->
	<section id="primary" class="<?php echo $page_layout;?>">
		<!-- Login Module -->
		<?php if( is_user_logged_in() ) {
				$link = dttheme_get_page_permalink_by_its_template('tpl-welcome.php');
				if ( !empty( $link )) {
					return wp_redirect( $link );
				}
			} else { ?>

				<!-- Login Form -->
				<div class="column dt-sc-one-half first">

					<div class="dt-sc-border-title"> <h2><span><?php _e('Formulario de Acceso','dt_themes');?></span> </h2></div>

					<p> <strong><?php _e('Ya eres miembro? Entra aqu&iacute;.','dt_themes');?></strong> </p>
					<form name="loginform" id="loginform" action="<?php echo home_url();?>/wp-login.php" method="post">

						<p>
							<label><?php _e('Usuario','dt_themes');?><span class="required"> * </span></label>
							<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" required="required" />
						</p>

						<p>
							<label><?php _e('Contrase&ntilde;a','dt_themes');?><span class="required"> * </span> </label>
							<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" required="required" />
						</p>

						<p class="forgetmenot">
							<label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> <?php _e('Recuerdame','dt_themes');?></label>
						</p>

						<p class="submit alignleft">
							<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="<?php _e('Entrar','dt_themes');?>" tabindex="100" />
						</p>

						<?php $link = dttheme_get_page_permalink_by_its_template('tpl-welcome.php');
							  $link = !empty( $link ) ? $link : home_url();	?>
							  <input type="hidden" name="redirect_to" value="<?php echo $link;?>" />
					</form>

					
				</div><!-- Login Form End -->

				
				<div class="clear"></div>
		<?php }?>

		<!-- Login Module End-->

		<?php
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				get_template_part( 'framework/loops/content', 'page' );
			endwhile;
		endif;?>
	</section><!-- ** Primary Section End ** --><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<section id="secondary-right" class="secondary-sidebar <?php echo $sidebar_class;?>"><?php get_sidebar( 'right' );?></section><?php
		endif;
	endif;?>
    
<?php get_footer(); ?>