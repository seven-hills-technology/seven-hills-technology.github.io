<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sevenhillstechnology
 */

?>

	</section><!-- #content -->
	<div class="sh-band-flair light-top"></div>
    <section class="sh-get-in-touch">
        <h2><?php the_field('footer_cta'); ?></h2>
        <!-- <div class="git-text">
                Interested in a quick conversation? We're here to help.
            </div> -->
        <a class="git-button" href="https://app.hubspot.com/meetings/bradgardner/1-hour-consultation" rel="noreferrer"
            target="_blank">Schedule
            Now</a>
    </section>
    <div class="last-light-blue">
        <div class="sh-band-flair light-bottom" id='#gitFlair'></div>
    </div>
	<footer class="sh-footer">
        <div class="sh-contact-info">
            <div class="sh-contact-section sh-find-us">
                <h3>Find Us</h3>
                <a href="https://www.google.com/maps/dir/Seven+Hills+Technology+4700+Ashwood+Dr,+Blue+Ash,+OH+45241//@39.2695923,-84.3749387,15z"
                    rel="noopener" target="_blank">4050 Executive Park Dr STE 330, Cincinnati, OH 45241</a>
            </div>
            <div class="sh-contact-section sh-call-us">
                <h3>Call Us</h3>
                <a href="tel:+15138184650">513.818.4650</a>
            </div>
            <div class="sh-contact-section sh-email-us">
                <h3>Email Us</h3>
                <a href="mailto:info@sevenhillstechnology.com">info@sevenhillstechnology.com</a>
            </div>
        </div>
        <div class="sh-bottom-navigation">
            <div class="sh-social-links">
                <a href="https://goo.gl/maps/WPw5bgXBk4x" target="_blank" rel="noopener"><img class="lozad"
                        data-src="/wp-content/themes/sevenhillstechnology/images/google.svg" alt="google" /></a>
                <a href="https://www.facebook.com/sevenhillstechnologyus/" rel="noopener" target="_blank"><img
                        class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/facebook.svg" alt="facebook" /></a>
                <a href="https://www.linkedin.com/company/seven-hills-technology/" rel="noopener" target="_blank"><img
                        class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/linkedin.svg" alt="linkedin" /></a>
            </div>
            <div class="sh-bottom-navigation-links">
                <a href="/">Home</a>
                <a href="#">Services</a>
                <a href="/partnerships">Partnerships</a>
                <a href="/about">About Us</a>
                <a href="/blog">Blog</a>
                <a href="/contact-us">Contact Us</a>
            </div>
        </div>
    </footer>

    <!-- Do we need these? -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="//s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin.min.js"></script>
    <script type="text/javascript">
        const observer = lozad();
        observer.observe();


        let drawTriggered = false;
        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(elem).height();
            return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) && (elemBottom <= docViewBottom) && (elemTop >= docViewTop));

        }
        function updateSlider() {

        }

        window.onscroll = () => {
            const cityOutline = document.getElementById("sh-city-outline");
            const missionTitle = document.getElementById("mission-title");

            const shapes = $("rect, circle, ellipse, polyline, polygon, path");

            if (isScrolledIntoView(missionTitle) && !drawTriggered) {
                drawTriggered = true;

                const shapes = $("rect, circle, ellipse, polyline, polygon, path");
                const tl = new TimelineMax({ onUpdate: updateSlider, repeat: 0, yoyo: false });

                tl.staggerFromTo(shapes, 1, { opacity: 0 }, { opacity: 100 }, 0.005);

                cityOutline.style.opacity = 1;

                $(".sh-dark-band .sh-fade-in").css('opacity', '1');
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Seven Hills Technology",
            "image": "https://sevenhillstechnology.com",
            "url": "https://sevenhillstechnology.com",
            "telephone": "+15138184650",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "4700 Ashwood Drive, STE 120",
                "addressLocality": "Cincinnati",
                "addressRegion": "Ohio",
                "postalCode": "45241",
                "addressCountry": "US"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "39.2721468",
                "longitude": "-84.3766958"
            },
            "openingHours": [
                "Mo-Fr 08:00-17:00"
            ]
        }
        </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Seven Hills Technology",
            "url": "https://sevenhillstechnology.com",
            "logo": "https://sevenhillstechnology.com/images/logo.svg",
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "+15138184650",
                    "contactType": "sales",
                    "email": "info@sevenhillstechnology.com",
                    "areaServed": [
                        "US"
                    ],
                    "availableLanguage": [
                        "English"
                    ]
                }
            ]
        }
        </script>
    <script type="application/ld+json">
            [{
                "@context" : "http://schema.org",
                "@type" : "EventSeries",
                "@id" : "https://www.meetup.com/Cincinnati-Elastic-Fantastics/",
                "name" : "Cincinnati Elastic Meetup",
                "hasPart" : "https://www.meetup.com/Cincinnati-Elastic-Fantastics/events/255857731/",
                "description" : "Meet with technology professionals to discuss the Elastic stack, data visualization, and analytics",
                "location" : {
                    "@type" : "Place",
                    "name" : "Catapult Staffing - Longworth Hall",
                    "address" : "700 W Pete Rose Way #148, Cincinnati, OH 45203"
                },
                "startDate" : "2018-11-29"
            },
            {
                "@context" : "http://schema.org",
                "@type" : "Event",
                "@id" : "https://www.meetup.com/Cincinnati-Elastic-Fantastics/events/255857731/",
                "name" : "Cincinnati Elastic Meetup Nov 29th",
                "startDate" : "2018-11-29",
                "endDate" : "2018-11-29",
                "description" : "Meet with technology professionals to discuss the Elastic stack, data visualization, and analytics",
                "url" : "https://www.meetup.com/Cincinnati-Elastic-Fantastics/events/255857731/",
                "location" : {
                    "@type" : "Place",
                    "name" : "Catapult Staffing - Longworth Hall",
                    "address" : "700 W Pete Rose Way #148, Cincinnati, OH 45203"
                }
            }]
        </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9HVWVZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
