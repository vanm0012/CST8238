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


song1 = "https://ia801505.us.archive.org/22/items/IfItWasntForThisBassIbizaA.M.BounceMix/If%20it%20wasn't%20for%20this%20Bass%20(Ibiza%20A.M.%20Bounce%20Mix).mp3"
song2 = "http://www.alexanderblu.com/Music192/Alexander%20Blu%20-%20After%20all.mp3"
song3 = "https://ia801808.us.archive.org/21/items/JOHANNSTRAUSSTheBlueDanube-Waltz-NEWTRANSFERJOHANNSTRAUSSTheBlueDanubeWaltz/JOHANN%20STRAUSS-%20The%20Blue%20Danube%20-%20Waltz.ogg"


_html = templates.html_head("CST8238 - Lab 4")
with _html:
    with body():
        link(rel="stylesheet", type="text/css", href="StyleSheet.css")

        br()
        with div(id="header"):
            h1("Lab 4 | Web Programming | CST8238")

        with div(id="menu"):
            with ul(id="menu"):
                li(a("Index", href="index.html"))
                li(a("Multimedia", href="Multimedia.html"))

        br()
        with div(id="content"):
            img(src="https://upload.wikimedia.org/wikipedia/commons/c/c5/Big_buck_bunny_poster_big.jpg", alt="Big Buck Bunny Poster", width="750", height="1061")
            p("Poster for Big Buck Bunny")
            br()
            with audio(controls=""):
                source(src=song1, type="audio/mp3")
            p("IF IT WASN'T FOR THIS BASS (IBIZA A.M. BOUNCE MIX)")
            br()
            p(a("Alexander Blu - After All", href=song2))
            br()
            with p():
                a("JOHANN STRAUSS: The Blue Danube - Waltz", href=song3)
                a("| [Source]", href="https://archive.org/details/JOHANNSTRAUSSTheBlueDanube-Waltz-NEWTRANSFERJOHANNSTRAUSSTheBlueDanubeWaltz")
            br()
            with video(controls="", name="media", width="1280", height="720"):
                source(src="http://distribution.bbb3d.renderfarming.net/video/mp4/bbb_sunflower_2160p_60fps_normal.mp4", type="video/mp4")
            with p("Big Buck Bunny (3840x2160@60fps)"):
                a("[http://bbb3d.renderfarming.net/download.html]", href="http://bbb3d.renderfarming.net/download.html")
            br()


        with div(id="footer"):
            p("040790151 | Tryton Van Meer | vanm0012@algonquinlive.com")
