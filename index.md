---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: home
title: Seven Hills Technology in Cincinnati Ohio
---

<section class="sh-landing-intro landing-big-background home">
    <h1>Web and Mobile Apps that Actually Help You</h1>
    <p>
        We're an innovation company in Cincinnati, OH with one goal: <strong>to make your organization better through custom technology.</strong>
    </p>
    <div class="cta-button-wrapper"> 
        <a class="cta-button" href="https://app.hubspot.com/meetings/bradgardner/1-hour-consultation"
            rel="noreferrer" target="_blank">Schedule Your Free Strategy Session</a>
    </div>
</section>

<div class="sh-band-flair light-top"></div>
<section class="sh-light-band">
    <h2><a href="/development" alt="Custom Software Development">Custom Software Development</a></h2>
    <div style="max-width: 100%; display: flex; flex-direction: row; justify-content: center;padding-bottom: 60px;">
        <video poster="/videos/poster.png" controls preload id="homeVideo" >
            <source src="/videos/intro-video.mp4" media="only screen and (min-device-width: 568px)"></source>
            <source src="/videos/intro-video.mobile.mp4" media="only screen and (max-device-width: 568px)"></source>
            <source src="/videos/intro-video.webm"></source>
        </video>
    </div>
    <div class="sh-services">
        <div class="sh-service">
            <img class="lozad" data-src="/images/cloud-blue.svg" alt="Web Apps" />
            <h3 class="small-header">Web Applications</h3>
            <p>Customize your web applications with our design-centered development and user-tested solutions.</p>
        </div>
        <div class="sh-service">
            <img class="lozad" data-src="/images/mobile-blue.svg" alt="Mobile Apps" />
            <h3 class="small-header">Mobile Apps</h3>
            <p>Get more information to the right people at the right time with Native iOS and Android apps.</p>
        </div>
        <div class="sh-service">
            <img class="lozad" data-src="/images/integration-blue.svg" alt="Integrations" />
            <h3 class="small-header">Integrations</h3>
            <p>Improve efficiencies on web and mobile by aligning your existing platforms so they can directly talk to each other.</p>
        </div>
        <div class="sh-service">
            <img class="lozad" data-src="/images/iot-blue.svg" alt="Internet of Things" />
            <h3 class="small-header">Internet of Things</h3>
            <p>Take advantage of a connected world by controlling and collecting data from devices like building sensors or everyday household items.</p>
        </div>
    </div>
    <div class="cta-button-wrapper"> 
        <a class="cta-button" href="/development">Learn About Custom Software</a>
    </div>
</section>
<div class="sh-band-flair light-bottom"></div>

<section class="sh-white-band">
    <div class="sh-product-list">
        <div class="sh-product-wrapper">
            <div class="small-image-wrapper">
                <div class="icon small-icon d-block d-md-none">
                    <img class="lozad" data-src="/images/consulting-color.svg" alt="Technology Consulting Icon" height="150">
                </div>
            </div>
            <div class="sh-product">
                <div class="text">
                    <h2><a href="/consulting" alt="Technology Consulting">Technology Consulting</a></h2>
                    <div>
                        Great partnerships require great transparency, and we’re here to help you open the ‘black box’ of technology. We offer strategic planning services to help you put structure around your technology needs, both in short-term and long-term perspectives. This clarity of where you are today and where you’re heading in the future ensures you make the right investments at the right time in solutions that will support your goals.
                    </div>
                    <div class="small-link">
                        <a href="/consulting" alt="Technology Consulting">More about Technology Consulting <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="icon pull-right d-none d-md-block">
                    <img class="lozad" data-src="/images/consulting-color.svg" alt="Technology Consulting Icon" height="200">
                </div>
            </div>
        </div>
        <div class="sh-product-wrapper">
            <div class="small-image-wrapper">
                <div class="icon small-icon d-block d-md-none">
                    <img class="lozad" data-src="/images/government.svg" alt="Government and Public Sector Icon" height="150">
                </div>
            </div>
            <div class="sh-product">
                <div class="text">
                    <h2><a href="/public-sector" alt="Government and Public Sector">Government and Public Sector</a></h2>
                    <div>
                        Governments and public entities rely on software 24/7 to keep the public safe and informed. We are revolutionizing public software to be beautiful and efficient, much like software created by and for private companies. Great software paves the way for greater transparency and a happier population.
                    </div>
                    <div class="small-link">
                        <a href="/public-sector" alt="Government and Public">More about Public Sector <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="icon pull-right d-none d-md-block">
                    <img class="lozad" data-src="/images/government.svg" alt="Government and Public Sector Icon" height="200">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="sh-band-flair dark-top"></div>
<section class="sh-dark-band">
    <h2 id="mission-title" class="sh-fade-in">Technical Expertise Meets Creativity</h2>
    <div class="sh-city-outline">
        {% include city.html %}
    </div>
    <!-- <img src="images/city.svg" alt="City outline" /> -->
    <p class="sh-fade-in large-text">At Seven Hills Technology, our approach is built on a foundation of technical expertise, but we know that the real value and understanding begins when you see the way a mobile app or technology solution actually works and can impact your business. Meet the team of experts at Seven Hills ready to help you accelerate to the next level.</p>
</section>
<div class="sh-band-flair dark-bottom"></div>
<section class="sh-white-band">
    <h2>Read Our Blog</h2>
    <p>Read our recent blog posts</p>
    <div class="sh-blog">
        {% for post in site.posts limit: 3 %}
        <div class="post">
            <a href="{{post.url}}" alt="{{post.title}}">
                <img src="{{ post.feature_image_url }}" alt="{{post.feature_image_alt}}">
                <div>
                    <h4>{{post.title}}</h4>
                </div>
            </a>
        </div>
        {% endfor %}
    </div>
    <div class="default-button-wrapper"> 
        <a class="default-button" href="/blog">View Our Blog</a>
    </div>
</section>
<!-- <section class="sh-clients">Clients</section> -->