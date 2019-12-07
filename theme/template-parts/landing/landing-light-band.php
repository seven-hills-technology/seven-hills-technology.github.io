<?php

$post = get_post();

?>

<div class="sh-band-flair light-top"></div>
<section class="sh-light-band">
    <h2><a href="/development" alt="<?php the_field('csd_header'); ?>"><?php the_field('csd_header'); ?></a></h2>
    <div style="max-width: 100%; display: flex; flex-direction: row; justify-content: center;padding-bottom: 60px;">
        <video poster="/wp-content/themes/sevenhillstechnology/videos/poster.png" controls preload id="homeVideo" >
            <source src="/wp-content/themes/sevenhillstechnology/videos/intro-video.mp4" media="only screen and (min-device-width: 568px)"></source>
            <source src="/wp-content/themes/sevenhillstechnology/videos/intro-video.mobile.mp4" media="only screen and (max-device-width: 568px)"></source>
            <source src="/wp-content/themes/sevenhillstechnology/videos/intro-video.webm"></source>
        </video>
    </div>
    <div class="sh-services">
        <div class="sh-service">
            <img class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/cloud-blue.svg" alt="Web Apps" />
            <h3 class="small-header">Web Applications</h3>
            <p>Customize your web applications with our design-centered development and user-tested solutions.</p>
        </div>
        <div class="sh-service">
            <img class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/mobile-blue.svg" alt="Mobile Apps" />
            <h3 class="small-header">Mobile Apps</h3>
            <p>Get more information to the right people at the right time with Native iOS and Android apps.</p>
        </div>
        <div class="sh-service">
            <img class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/integration-blue.svg" alt="Integrations" />
            <h3 class="small-header">Integrations</h3>
            <p>Improve efficiencies on web and mobile by aligning your existing platforms so they can directly talk to each other.</p>
        </div>
        <div class="sh-service">
            <img class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/iot-blue.svg" alt="Internet of Things" />
            <h3 class="small-header">Internet of Things</h3>
            <p>Take advantage of a connected world by controlling and collecting data from devices like building sensors or everyday household items.</p>
        </div>
    </div>
    <div class="cta-button-wrapper"> 
        <a class="cta-button" href="/development"><?php the_field('csd_cta'); ?></a>
    </div>
</section>
<div class="sh-band-flair light-bottom"></div>