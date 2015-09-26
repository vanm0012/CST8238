#!/usr/bin/env python3
# -*- coding: utf-8 -*-

"""
Web Programming - Lab 3

4x5 Table:
    ✓Entire width of web browser
    ✓Contain a header
    ✓Each column in your table must be a different color and width
    ✓Each row in the table must be a different height
    ✓At the top of the page provide a link to ‘ColRowSpan.html’
"""

import sys

import dominate
from dominate.tags import *

sys.path.append("../../")
from PyPages import templates

lab3_css = """
td
{
    text-align:center;
}
"""

_html = templates.html_head("CST8238 - Lab 3")
with _html:
    with body(style="text-align:center;"):
        style(lab3_css)
        h1("Lab 3 - Index")
        with h4():
            a("link to ColRowSpan", href="ColRowSpan.html")
        br()
        br()
        br()
        #Start Tab
        with table(border="1", style="width:100%;"):
            with tr(style="font-weight:bold; height:110px;"):
                th("Element", style="color:#f44336;width:40%;")
                th("Atomic Mass [Atomic Mass Unit]", style="color:#e91e63;width:10%;")
                th("Melting Point [Kelvin]", style="color:#9c27b0;width:30%;")
                th("Boiling Point [Kelvin]", style="color:#2196f3;width:20%;")
            with tr(style="height:90px;"):
                td("Hydrogen", style="color:#f44336;width:40%;")
                td("1", style="color:#e91e63;width:10%;")
                td("14.01", style="color:#9c27b0;width:30%;")
                td("20.28", style="color:#2196f3;width:20%;")
            with tr(style="height:70px;"):
                td("Helium", style="color:#f44336;width:40%;")
                td("4", style="color:#e91e63;width:10%;")
                td("1.15", style="color:#9c27b0;width:30%;")
                td("4.55", style="color:#2196f3;width:20%;")
            with tr(style="height:50px;"):
                td("Carbon", style="color:#f44336;width:40%;")
                td("12", style="color:#e91e63;width:10%;")
                td("3773.15", style="color:9c27b0;width:30%;")
                td("5100.15", style="color:#2196f3;width:20%;")
            with tr(style="height:30px;"):
                td("Oxygen", style="color:#f44336;width:40%;")
                td("16", style="color:#e91e63;width:10%;")
                td("54.75", style="color:#9c27b0;width:30%;")
                td("90.15", style="color:#2196f3;width:20%;")
            with tr(style="height:10px;"):
                td("Germanium", style="color:#f44336;width:40%;")
                td("73", style="color:#e91e63;width:10%;")
                td("1210.55", style="color:#9c27b0;width:30%;")
                td("3103.15", style="color:#2196f3;width:20%;")
        #End Table
