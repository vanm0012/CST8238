#!/usr/bin/env python3
# -*- coding: utf-8 -*-

"""
Util module for Assignment 1 (Web Programming)
"""

import dominate
from dominate.tags import *

class main(dominate.tags.html_tag):
    pass

def links():
    link(rel="stylesheet", type="text/css", href="css/Stylesheet.css") #CSS Stylesheet
    link(rel="stylesheet", type="text/css", href="https://fonts.googleapis.com/css?family=Roboto") #Roboto Font
    link(rel="stylesheet", type="text/css", href="css/octicons.css") #Octicon Icons

def menu():
    with div(cls="menu"):
        with ul(cls="white-text"):
            li(a("Home", href="index.html"), cls="orange")
            li(a("Biography", href="Biography.html"), cls="orange")
            li(a("Social", href="Social.html"), cls="orange")
            li(a("Image Gallery", href="ImageGallery.html"), cls="orange")
            li(a("Resume", href="Resume.html"), cls="orange")
            li(a("Bonus Page", href="bonus.html"), cls="orange")

def footer():
    with div(cls="footer blue white-text valign-wrapper center"):
        span("Student Number: 040790151 • Name: Tryton Van Meer • Email: vanm0012@algonquinlive.com")
        with a(href="https://github.com/vanm0012/CST8238", cls="right"):
            span(cls="octicon octicon-mark-github black-text")
