---
layout: default
title: Blog
---

<style type="text/css" rel="stylesheet" href="/css/tabby.min.css"/>
<script type="text/javascript" src="/js/tabby.min.js"></script>

<section class="sh-intro">
    <div class="sh-tagline">
        <h2 class="sh-header-lines"><span>Blog</span></h2>
    </div>
    <div class="sh-description">
        Read about our findings, musings, and client success stories.
    </div>
    <div class="sh-blog">
        <div id="postContainer">
            {% assign categories_list = site.categories %}
            <div id="postFilters">
                <div>
                    <a data-toggle="collapse" 
                       href="#featured"  
                       role="button" 
                       aria-expanded="false" 
                       aria-controls="featuredPosts">
                        Featured
                    </a>
                </div>
                {% if categories_list.first[0] == null %}
                    {% for category in categories_list %}
                        <div>
                            <a data-toggle="collapse" 
                               href="#{{ category }}" 
                               role="button" 
                               aria-expanded="false" 
                               aria-controls="{{ category }}">
                                {{ category | capitalize }} ({{ site.tags[category].size }})
                            </a>
                        </div>
                    {% endfor %}
                {% else %}
                    {% for category in categories_list %}
                        <div>
                            <a data-toggle="collapse" 
                               href="#{{ category[0] | downcase }}" 
                               role="button" 
                               aria-expanded="false" 
                               aria-controls="{{ category[0] }}">
                                {{ category[0] | capitalize }} ({{ category[1].size }})
                            </a>
                        </div>
                        WORK WITH TABBY
                    {% endfor %}
                {% endif %}
            </div>
            <div id="featuredPosts" class="collapse">
                Featured
            </div>
            {% for category in categories_list %}
                {{ category[0] }}
            {% endfor %}
            {% assign categories_list = nil %}
        </div>
        {% for post in site.posts %}
        {{post.title}}
        {% endfor %}
    </div>
</section>