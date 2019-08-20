---
layout: post
title: Observability of Systems
date: 2019-08-19 00:00 -0400
tagline: Solve your next production issue with less headache and better insight.
categories: development
tags: [monitoring, software development, applications, support]
excerpt: Solve your next production issue with less headache and better insight.
sticky: true
author: Brad Gardner
description: System observability increases your insight into deployed systems and helps your monitoring and support procedures.
feature_image_url: /images/blog-posts/observability.png
feature_image_alt: 
---

![](/images/blog-posts/observability.png){:class="img-center"}

## The case for observability

As developers, we like to build things. We build complex systems that fill a variety of business and consumer needs on phones, computers, and more. When things are going according to plan, software is useful, clients are happy, customers are productive, and life is good. However, when things deviate from our plans, we find the importance of observability in our systems. Unfortunately, many developers learn about the importance of observability when they first find a complex bug that can’t be solved without it. It’s becoming increasingly difficult to replicate error states from production in a controlled environment for analysis due to the ever increasing complexity of software. Because of this, we rely on the observability of our system to help us diagnose and solve problems in real time as problems occur.

## What makes a system observable?

Observability comprises three pillars: **Logging, Metrics, and Tracing.**

We like to think of an observable system as one that allows us to ask targeted questions. We might ask the system questions like “Are we out of disk space?” or “Are we having transactions failing to process?”. We expect to get answers to these questions from the running system without having to debug or reproduce every error.

## Pillars of observability

### Logging

![](/images/blog-posts/undraw_programming_2svr.png){:class="img-center"}
Logging answers the question “What’s happening in the application right now?”. Good logging will allow you to see a live view of what the system is doing, which helps to research problems that are impacting users. 

#### Logging strategy and tools

The first thing to consider around logging is your overall strategy and the tools you will use. Most languages have logging frameworks available to assist with your logging strategy. These frameworks are great for logging to files, remote APIs, syslog, or other potential targets. Logging to standard output is also common. The most important thing we’ve found is choosing a strategy up front and being consistent throughout the application. Some things to consider are: what tools will you use, how much detail should you log, and what log levels are supported by your environment. Include as much contextual information as possible in a log message. This will allow the correlation and searching on valid data points later on during analysis. Be careful to keep privacy in mind while developing your logging strategy, to avoid situations of [logging passwords or other sensitive information](https://krebsonsecurity.com/2019/03/facebook-stored-hundreds-of-millions-of-user-passwords-in-plain-text-for-years/) in plain text.

#### Log format

The format of log messages plays a significant role in observability. Structured logs are written in an easily parsable format, such as JSON. Unstructured logs are typically written as single lines of text. Unstructured logs can be easy to read, but hard to process. If you will be logging from multiple parts of a system, it’s important to enforce consistency and guidelines for log formats. Making this decision early will save you time and effort later on when your system is in production.

#### Log storage

 If you’re logging to files, you must be conscious of storage. Rolling log files based on size or date is a common practice to avoid single files growing beyond their usefulness. However, even with rolling log files that are kept to a manageable size, considerations need to be made for the disk space on the server where the logs are stored. Log files should be offloaded to long-term storage after 30 days or some other defined period.

#### Aggregation

When you have multiple systems writing logs, you’ve inadvertently created a new problem. If you want a complete picture of what is happening in the system, you will need to look at multiple logs in different locations. Log aggregation is employed to alleviate this problem. Aggregation strategies allow you to collect logs from distributed systems into one location. Keep a consistent logging format as discussed previously and this will dramatically reduce the time required to answer questions about the current state of the system.

#### Querying

Most tools and platforms for log aggregation add features allowing you to query the logs that you’ve collected using user friendly querying languages, often in some form of JSON or SQL. The ability to query logs from all systems in a central location is one of the key benefits of logging and log aggregation.

### Metrics

![](/images/blog-posts/undraw_all_the_data_h4ki.png){:class="img-center"}
The primary question to ask of your metrics is: “Is the system healthy?” To answer this question we collect information such as CPU load, number of concurrent users, memory load, disk utilization, and network throughput. Having this information and being able to correlate it to logs allows you to make informed decisions regarding your system. These metrics become relevant when looking at scaling a system up or out, or pinpointing activities that cause unusual resource spikes that would indicate application level problems.

 Metrics tie in closely to alerting mechanisms so the correct people can be notified when a system is not in a healthy state. Aggregation of metrics can be a key benefit, allowing a common place to visualize the entire system’s health and proactively keep things working. Being proactive to avoid stability problems before they occur will improve the lives of your team by reducing emergency issues during off hours.

### Tracing

![](/images/blog-posts/undraw_destinations_fpv7.png){:class="img-center"}
Tracing gives you a microscope to look in more detail about something specific of interest. Tracing answers the question: “How are these components working together in a specific context?” In a typical application you will have a series of workflows that happen as the result of a specific event. The event may be a user clicking a button, which results in one or more functions being called. These functions may query data from a database, another API, or perform some sort of time-intensive process.

 In addition to providing a window into how your application components are functioning together, tracing is often discussed and implemented in terms of distributed tracing. With distributed tracing, you gain visibility into how distributed application components interact. In this model, we could trace the entire context of an event from a button click in a web browser, through multiple micro-service API calls, to database calls, and back to the browser. The ability to link together a single event across systems provides latency and performance information that can be incredibly difficult to piece together by hand.


## Where to go from here

 We’ve discussed what an observable system is, and taken a deeper look at some of the qualities of an observable system. Keeping these concepts in mind as you build out your next project or look to improve a current one, is a great step towards reducing the effort required to support production applications when they are behaving poorly. We’ll follow this post up with a look at our typical setup for building observable software.

 If you’d like to discuss observability in your organization, click the 'Schedule Now' button below or [contact us](/contact-us) for a free consultation on how you can improve your observability.

**Check back soon for part 2!**

