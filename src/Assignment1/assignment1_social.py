#!/usr/bin/env python3
# -*- coding: utf-8 -*-

"""
Assignment 1 - Social
-------------------------------
Develop your content. Be sure to create the following content before producing your web pages.

An paragraph explaining what the user is going to see when they come to your site
Create a banner (images, css, etc) for your website
Your personal resume in Word Document format
Write a simple 2-3 page biography
Find at least 5 images of yourself, friends or family to be used in a photo gallery.

Please note that you do not have to post personal details about yourself online. Please feel free to provide dummy information if you wish.

Your website must contain the following elements:

Index.html
A webpage that introduces your website. Explain to the user what they are going to see by coming here.
Biography.html
A webpage that tells the world a little about yourself. (2-3 paragraphs or so). This section can be completely made up – you don’t need to post personal details online if you do not want to.
Social.html
A webpage that tells the world how to contact you. Include elements like your facebook page, twitter account, email address, phone number. Use the anchor tag to provide links to all your content. This section can be completely made up – you do not need to post personal details online if you do not want to.
ImageGallery.html
A webpage that hosts at least 5 images of you/your family and friends, etc. NOTE: be sure that the photos you are using are not copyrighted or owned by another individual. Copyright and Trademark laws exist for a reason!
Resume.html
A webpage that replicates your resume. Use tables and/or divs to lay out the content on your page. Provide a link that will allow visitors to download a Word Document version of your resume.
One additional page
After you have created your pages create one additional page with any content you desire.

Your web pages elements must include:

Common banner
Common layout
Common menu and,
Common footer
"""

import sys

import dominate
from dominate.tags import *

sys.path.append("../../")
from PyPages import templates

from . import util

_html = templates.html_head("CST8238 - Assignment 1")
with _html:
    with head():
        util.links()
    with body():
        with nav(cls="blue darken-2 white-text"):
            h1("Social", cls="center")
            util.menu()

    #FOOTER
    with div(cls="footer blue white-text valign-wrapper center"):
        span("Student Number: 040790151 • Name: Tryton Van Meer • Email: vanm0012@algonquinlive.com")
