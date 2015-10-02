#!/usr/bin/env python3
# -*- coding: utf-8 -*-

"""
Web Programming - Lab 4
Implement a Header, Footer, Menu using DIVS or Tables
Add Images, Audio and Video to a web page

1. Common Look and Feel
2. Create an EXTERNAL CSS file
3. Create Index.html
4. Create Multimedia.html


Task 1
-------------------------
Using the knowledge gained in these materials create a ‘Common Look and Feel’ to be used on every page of your website.

Each page in your web site should have at least the following identical common elements: Header, Footer and Menu
Header
Lab Number, Course Name, Course Number
Menu
Links to both Index.html and Multimedia.html
Footer
Student Number, First Name, Last Name, Email Address

The Content Area in each page will be different depending on the purpose of the page (described in Task 3 and Task 4).

Task 2
-------------------------
Create a file called StyleSheet.css that will modify your site in the following ways:

Set the font of your website to Verdana
Set the size of your font 12px
Set the background color of your web pages to a light gray color
Make all the content of your web page align to the center
Modify the body tag
Remove the margin and padding from the body
Modify the header1 tag
Set the color of every h1 tag to pink
Modify the paragraph tag
Set the padding of the paragraph tag to 20px
Create an ID called ‘header’
Create CSS to style the header section of your webpage
Create an ID called ‘footer’
Create CSS to style the footer section of your webpage
Create an ID called ‘menu’
Create CSS to style the menu section of your webpage
Create an ID called ‘content’
Create CSS to style the content section of your webpage

Task 3
-------------------------
Create a new web page named ‘index.html’ that implements the ‘Common Look and Feel’ you choose in Task 1.
This web page will contain the ‘Hello World’ content you created in ‘Lab 1 – Preparation and Hello World’.
Provide an external link to the CSS file ‘StyleSheet.css’ to use the theme you created in Task 2.

Task 4
-------------------------
Create a page named ‘Multimedia.html’ that implements the ‘Common Look and Feel’ you choose in Task 1.

This page needs to contain:
At least one image
At least one embedded audio file
At least one hyperlink to an audio file
At least one embedded video file
At least one hyperlink to an audio file

Provide an external link to the CSS file ‘StyleSheet.css’ to use the theme you created in Task 2.

Task 5
-------------------------
Upload your website to a webserver.
Once you connect to the webserver using an FTP client, create a directory called ‘/Lab4’ under ‘/public_html/CST8238’ directory.

Task 7
Once you have confirmed that you webpage is available online, you are ready to hand in your lab.

In the Submission text box write out the following Information:
Student Number
First Name
Last Name
Algonquin Username
The URL, or hyperlink, prepared in Task 6
"""

import sys

import dominate
from dominate.tags import *

sys.path.append("../../")
from PyPages import templates


_html = templates.html_head("CST8238 - Lab 4")
with _html:
    with body(style="text-align:center;"):
        style(rel="stylesheet", type="text/css", href="StyleSheet.css")
        h1("Lab 4 - Index")
