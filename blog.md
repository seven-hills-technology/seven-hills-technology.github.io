---
layout: default
title: Blog
description: A place to share knowledge on software development and other technology or small business topics.
---

<link rel="stylesheet" href="/css/tabby.min.css"/>

<section class="sh-intro">
    <div class="sh-tagline">
        <h2 class="sh-header-lines"><span>Blog</span></h2>
    </div>
    <div class="sh-description">
        Read about our findings, musings, and client success stories.
    </div>
    <div class="sh-blog">
        <div id="categoryContainer">
            {% assign categories_list = site.categories %}
            <div id="postFilters" class="tabs" data-tabs>
                <div>
                    <a href="#featuredPosts"
                       aria-controls="featuredPosts"
                       data-tab>
                        Featured
                    </a>
                </div>
                {% for category in categories_list %}
                    <div>
                        <a href="#{{ category | first | remove: " "}}" 
                            aria-controls="{{ category | first }}"
                            data-tab>
                            {% assign words = category | first | split: ' ' %}
                            {% for word in words %}
                                {{ word | capitalize }}
                            {% endfor %}
                        </a>
                    </div>
                {% endfor %}
            </div>
            {% assign categories_list = nil %}
        </div>
        <div id="contentContainer" data-tabs-content>
            <div id="featuredPosts" data-tabs-pane class="tabs-pane active post-list" style="margin-bottom: 1rem">
                {% assign featuredPosts = site.posts | where: "sticky", "true" %}
                <h3>Featured</h3>  
                {% for post in featuredPosts %}
                    {% if post.title != null %}
                        {% if group == null or group == post.group %}
                        <li>
                            <div class="sh-post">
                                <a href="{{ site.url }}{{ post.url }}" class="post-title">{{ post.title }}</a>
                                <div class="post-excerpt">
                                    {{ post.excerpt }}
                                </div>
                                <div class="read-more-button">
                                    <a href="{{ site.url }}{{ post.url }}">Read More...</a>
                                </div>
                                <div class="author">
                                    Written by {{post.author}} on {{post.date | date_to_long_string}}
                                </div>
                            </div>
                        </li>
                        {% endif %}
                    {% endif %}
                {% endfor %}
                {% assign pages_list = nil %}
                {% assign group = nil %}
            </div>
            {% for tag in site.categories %} 
            <div data-tabs-pane class="tabs-pane" id="{{ tag | first | remove: " " }}">
                <ul class="post-list">
                    {% assign pages_list = tag[1] %}  
                    {% for post in pages_list %}
                        {% if post.title != null %}
                            {% if group == null or group == post.group %}
                            <li>
                                <div class="sh-post">
                                    <a href="{{ site.url }}{{ post.url }}" class="post-title">{{ post.title }}</a>
                                    <div class="post-excerpt">
                                        {{ post.excerpt }}
                                    </div>
                                    <div class="read-more-button">
                                        <a href="{{ site.url }}{{ post.url }}">Read More...</a>
                                    </div>
                                    <div class="author">
                                        Written by {{post.author}} on {{post.date | date_to_long_string}}
                                    </div>
                                </div>
                            </li>
                            {% endif %}
                        {% endif %}
                    {% endfor %}
                    {% assign pages_list = nil %}
                    {% assign group = nil %}
                </ul>
            </div>
            {% endfor %}
        </div>
    </div>
</section>


<script type="text/javascript" src="/js/tabby.min.js"></script>
<script type="text/javascript">
    tabby.init();
</script>