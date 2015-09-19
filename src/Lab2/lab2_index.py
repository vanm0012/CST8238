#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import sys

import dominate
from dominate.tags import *

from . import coffee

sys.path.append("../../")
from PyPages import templates

lab2_css = """
.center
{
text-align: center;
}
.right
{
text-align: right;
float: right;
}
.left
{
text-align: left;
float: left;
}

/* Text colours */
.green-text
{
color: #00C853;
}
.purple-text
{
color: #AA00FF;
}
.cyan-text
{
color: #00b8d4;
}
.orange-text
{
color: #ff6d00;
}

/* HTML elements */
html
{
width: 100%;
position: relative;
min-height: 100%;
}
body
{
margin: 40px auto;
max-width: 800px;
font-size: 20px;
vertical-align: middle;
bottom: 100px;
}
footer
{
position: absolute;
right: 10%;
bottom: 0;
left: 5%;
width: 90%
}
hr
{
border-color: #ffeb3b;
width: 100%;
}
blockquote
{
font-weight: bold;
}
ul
{
list-style-type: square;
}

/* Collapsible list items */
.collapse
{
display: block;
}
.collapse + input
{
display: none;
}
.collapse + input + *
{
display: none;
}
.collapse + input:checked + *
{
display:block;
}
"""

dank_quote = [
"Born too late to explore the earth",
"Born too early to explore space",
"Born just in time to explore dank memes"
]


_html = templates.html_head("CST8238 - Lab 2")
with _html:
    with head():
        style(lab2_css)
    with body(bgcolor="#F44336"):
        with div(cls="center"):
            a( name="top")
            h1("LAB 2", cls="green-text")
            hr()
            with blockquote(cls="green-text", cite="http://knowyourmeme.com/memes/dank-memes"):
                p(dank_quote[0])
                p(dank_quote[1])
                p(dank_quote[2])
            hr()
            with a(href="https://www.quora.com/What-are-all-the-different-types-of-coffee-drinks", style="text-decoration: none;"):
                h3("Different types of coffee", cls="green-text")
            j = 0
            j_id = "_" + str(j)
            with ul(cls="cyan-text"):
                for i in coffee.coffees:
                    with li():
                        label(i, cls="collapse", fr=j_id)
                        input(id=j_id, type="checkbox")
                        with b():
                            div(coffee.coffees[i], cls="orange-text")
                    j += 1
                    j_id = "_" + str(j)

            hr()
            h3("Some other information", cls="green-text")
            a("Contact Email", href="mailto:contact@email-server.com?Subject=Hello%20World", target="_top")
            br()
            a("Contact Number", href="tel:555-555-555")
            br()
            br()



    with footer():
        hr()
        a("Lab 1", href="../Lab1/index.html", cls="purple-text left")
        a("Go back to top", href="#top", cls="purple-text right")
