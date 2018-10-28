---
layout: default
title: Blog
---

<section class="sh-blog">
    <div class="sh-product-list">
    {% for post in site.posts %}
        <a href="{{ post.url }}">
            <div class="sh-product">
                <h3>{{ post.title }}</h3>
                <p>{{ post.excerpt }}</p>
                <button class="sh-button">Read More</button>
            </div>
        </a>
    {% endfor %}
    </div>
</section>