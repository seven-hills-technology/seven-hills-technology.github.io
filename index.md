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