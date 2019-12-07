<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sevenhillstechnology
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
    <link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
    <meta name="google-site-verification" content="89nE0GErYQicj2KxZYLfHJInjJux4ewxLNEsBVuklf8" />

	<!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M9HVWVZ');</script>
	<!-- End Google Tag Manager -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Seven Hills Technology is a software design and development company in Cincinnati, OH innovating businesses through mobile apps, web apps, and integrations.">
    <meta charset="utf-8" />
    <meta name="Seven Hills Technology, LLC" />

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@sevenhillstech">
    <meta name="twitter:title" content="{{page.title}}">
	<meta name="twitter:description" content="{{page.description}}">
	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900|Open+Sans:300,400,600,800&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/sevenhillstechnology/images/favicon.ico?">
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '161430064803305');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=161430064803305&ev=PageView&noscript=1" alt="" /></noscript>
    <!-- End Facebook Pixel Code -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2280641.js"></script>
    <!-- End of HubSpot Embed Code -->
    <script src="https://kit.fontawesome.com/480a6c995f.js"></script>

    <script type="text/javascript" src="https://secure.hiss3lark.com/js/180881.js" ></script>
	<noscript><img alt="" src="https://secure.hiss3lark.com/180881.png" style="display:none;" /></noscript>

	<?php wp_head(); ?>

	<link rel="stylesheet" href="/wp-content/themes/sevenhillstechnology/main.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sevenhillstechnology' ); ?></a>

	<header class="sh-header">
		<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img class="sh-logo" src="/wp-content/themes/sevenhillstechnology/images/logo.svg" alt="Seven Hills Technology Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'shtdefault',
				'container_id'        => 'navbarNav',
				'container_class' => 'collapse navbar-collapse mb-auto',
				'menu_class' => 'nav navbar-nav ml-auto',
				'depth' => 2,
				'fallback_cb' => "WP_Bootstrap_Navwalker::fallback",
				'walker' => new WP_Bootstrap_Navwalker()
			) );
			?>
		</nav>
	</header>

	<section class="sh-content">

