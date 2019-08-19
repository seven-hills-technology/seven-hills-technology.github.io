---
layout: default
title: Contact Us
description: Contact Seven Hills Technology in Cincinnati Ohio to get started with your software development or technology project today.
---
<script async defer id="mapScript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6xMX3ed5ioFtxeQju5wddbWkcDfTeyug&callback=initMap"></script>
<section class="sh-intro">
    <div class="sh-tagline">
        <h1 class="sh-header-lines"><span>Contact Us</span></h1>
    </div>
    <div class="sh-description"></div>
    <div class="sh-contact-us">
        <div>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
            <script tyle='text/javascript'>
                hbspt.forms.create({
                    portalId: "2280641",
                    formId: "63598159-13e3-4c66-992a-acfe9f4afc3f"
                });
            </script>
        </div>
        <div>
            <div class="map"></div>
            <div class="contact-info">
                <div class="sh-contact-section sh-find-us">
                    <h3>Find Us</h3>
                    <a href="https://www.google.com/maps/dir/Seven+Hills+Technology+4700+Ashwood+Dr,+Blue+Ash,+OH+45241//@39.2695923,-84.3749387,15z"
                        rel="noopener" target="_blank">4700 Ashwood Drive STE 120, Blue Ash, OH 45241</a>
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
        </div>
    </div>
</section>
<script type="text/javascript">
    function initMap() {
        // The location of Sevenhills
        var sevenhills = { lat: 39.2718967, lng: -84.3743106 };
        // The map, centered at Sevenhills
        var elements = document.getElementsByClassName("map");
        for (var i = 0; i < elements.length; i++) {
            var element = elements[i];
            var map = new google.maps.Map(
                element, {
                    zoom: 14,
                    center: sevenhills,
                    styles: [
                        {
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#eeeeee"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e5e5e5"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dadada"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#5bdaff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.line",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e5e5e5"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#eeeeee"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#c9c9c9"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#baebfe"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        }
                    ]
                });
            // The marker, positioned at Sevenhills
            var marker = new google.maps.Marker({ position: sevenhills, map: map });
        }
    }
</script>