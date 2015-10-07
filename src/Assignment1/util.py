#!/usr/bin/env python3
# -*- coding: utf-8 -*-

"""
Util module for Assignment 1 (Web Programming)
"""

import dominate
from dominate.tags import *

def links():
    link(rel="stylesheet", type="text/css", href="Stylesheet.css") #CSS Stylesheet
    link(rel="stylesheet", type="text/css", href="https://fonts.googleapis.com/css?family=Roboto") #Roboto Font

def menu():
    with div(cls="menu"):
        with ul(cls="white-text"):
            li(a("Home", href="index.html"), cls="orange")
            li(a("Biography", href="Biography.html"), cls="orange")
            li(a("Social", href="Social.html"), cls="orange")
            li(a("Image Gallery", href="ImageGallery.html"), cls="orange")
            li(a("Resume", href="Resume.html"), cls="orange")
