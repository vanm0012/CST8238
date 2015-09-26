#!/usr/bin/env python3
# -*- coding: utf-8 -*-

"""
9x9 table:
    ✓50 percent the width of the entire page
    This table must show 2 examples of colspan
    ✓This table must show 2 examples of rowspan
    ✓At the top of the page provide a link to ’index.html’
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
        h1("Lab 3 - ColRowSpan")
        with h4():
            a("link to index", href="index.html")
        br()
        br()
        br()
        #Start table
        with table(border="1", align="center", style="width:50%;"):
            #Header Row
            with tr(style="font-weight:bold;"):
                th("Cat Breed")
                th("Origin")
                th("Average Lifespan (Years)")
                th("Average Mass (kg) [Male] [Female]", colspan="2")
                th("Alternative Names")
                th("Temperament")
                th("Coat Length")
                th("Tail")
            #Row 1
            with tr():
                td("Norwegian Forest Cat")
                td("Norway")
                td("14-16")
                td("5.44-7.26")
                td("4.1-5.4")
                td("Norsk Skoigkatt")
                td("Active, Curious, Intelligent, Loving, Playful, Social")
                td("Long Hair", rowspan="2")
                td("Long and bushy; broader at base")
            #Row 2
            with tr():
                td("Himalayan Cat")
                td("United States/united Kingdom")
                td("8-11")
                td("5.4")
                td("3.6-5.4")
                td("Himalayan Persian, Colourpoint Persian")
                td("Dependent, Gentle, Intelligent, Quiet, Social")
                td("Short tail")
            #Row 3
            with tr():
                td("Persian Cat")
                td("Iran (Persia)")
                td("12-17")
                td("3.5-5.5")
                td("5.5")
                td("Longhair,Persian Longhair,Shiraz,Shirazi")
                td("Gentle, Sensitive, Quiet")
                td("Long hair")
                td("Medium Tail")
            #Row 4
            with tr():
                td("Siamese Cat")
                td("Ayutthaya, Thailand")
                td("14.2")
                td("4.0-5.5", colspan="2")
                td("Meezer")
                td("Lively, Active, Amart, Clever, Agile, Elegant")
                td("Short Hair")
                td("Thin Tail")
            #Row 5
            with tr():
                td("Bengal Cat")
                td("United States")
                td("12-16")
                td("4.5-6.8")
                td("3.6-4.5")
                td("-", rowspan="3")
                td("Active, Agile, Family, Inquisitive, Lively")
                td("Medium Hair")
                td("Thick, tapered at end with rounded tip")
            #Row 6
            with tr():
                td("Sphynx Cat")
                td("Ontario, Canada")
                td("9-15")
                td("4-5")
                td("3-4")
                td("Gentle, Quiet, Friendly")
                td("Hairless")
                td("Thin Tail")
            #Row 7
            with tr():
                td("British Shorthair")
                td("Great Britain")
                td("14-20")
                td("4.1–7.7")
                td("3.2–5.4")
                td("Affectionate, Easy Going, Family, Loyal, Patient, Poised, Relaxed, Shy")
                td("Short Hair")
                td("Medium Tail")
            #Row 8
            with tr():
                td("Manx Cat")
                td("Isle of Man")
                td("8-14")
                td("4.5-5.4")
                td("3.6-4.5")
                td("Manks")
                td("Easy Going, Intelligent, Loyal, Playful, Social")
                td("Medium Hair")
                td("No Tail.")
            #Row 9
            with tr():
                td("Maine Coon")
                td("Maine, United States")
                td("12.5")
                td("9.5 to 15.9")
                td("6.8 to 13.2")
                td("Coon cat, Maine Cat, American Longhair")
                td("Gentle, Intelligent, Independent")
                td("Long hair")
                td("Thick Tail")
        #End Table
