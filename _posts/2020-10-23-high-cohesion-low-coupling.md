---
layout: post
title: High Cohesion, Low Coupling
date: 2020-10-19 00:00 -0400
tagline: How to structure your information to reduce coupling
categories: programming
tags: [programming, software development]
exceprt: How to structure your information to reduce coupling.
sticky: true
author: Edgar Endo
description: How to structure your information to reduce coupling.
feature_image_url: /images/blog-posts/hclc-final.png
feature_image_alt: 
---

In this short article I would like to show you one example of High Cohesion and Low Coupling regarding Software Development. Imagine that you have a REST API that have to manage Users, Posts and Private Message between users.

One way of doing it would be like the following example:

![](/images/blog-posts/hclc-1.png){:class="img-center"}

As you can see, the RestApplication class is managing the REST API requests correctly, but the issue here is that it also depends on all the other classes and it is managing the logic behind every single action (for example, the logic behind banning an user, reporting a message, sending a message, etc...). This is a clear example of **low cohesion and high coupling** because it depends heavily on internal classes of other modules. One bad thing about this is: what if some of the internal classes of the other modules changes? Then you will have to change the Application class to make this work.

This RestApplication class is basically a [God object](https://en.wikipedia.org/wiki/God_object).

Instead of that you could use the following example:


![](/images/blog-posts/hclc-2.png){:class="img-center"}

The routes are still there in the RestApplication class but instead of it taking care of the logic of every single action, you have delegated it to Service classes in each module. This makes your code **more cohesive and less tightly coupled** because if some internal class (some DAO class for example) changes other than the service classes themselves, the RestApplication class doesn't have to care as it isn't its responsibility to handle the their specific logic any more.

It is known as the [Facade pattern](https://en.wikipedia.org/wiki/Facade_pattern) and it is a good tool for making your code more cohesive and less tight coupled in your modules.

In summary:

**Low Cohesion (BLUE), High Coupling (RED) - BAD**
![](/images/blog-posts/hclc-bad.png){:class="img-center"}

**High Cohesion (BLUE), Low Coupling (RED) - BETTER**
![](/images/blog-posts/hclc-final.png){:class="img-center"}