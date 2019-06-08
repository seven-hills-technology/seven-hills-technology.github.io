---
layout: default
title: Blog
description: A place to share knowledge on software development and other technology or small business topics.
---

<link rel="stylesheet" href="/css/tabby.min.css"/>

<section class="sh-intro">
    <div class="sh-tagline">
        <h1 class="sh-header-lines"><span>Blog</span></h1>
    </div>
    <div class="sh-blog">
        {% for post in site.posts %}
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
</section>


<script type="text/javascript" src="/js/tabby.min.js"></script>
<script type="text/javascript">
    tabby.init();
</script>