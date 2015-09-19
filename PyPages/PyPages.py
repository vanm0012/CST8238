#!/usr/bin/env python3
"""
PyPages - Build static web pages

PyPages uses pages created in python with dominate
and builds them, creating HTML documents that can be
used in static websites such as on Github Pages.
"""

import dominate

class PageNotHTML(Exception):
    pass

def build(page, filename):
    """
    Build the page and output an HTML file

    page - dominate.tags.html object
    filename - name for new file
    """
    #Checks if page is html
    if type(page) == dominate.tags.html:
        #Writes HTML to file
        with open(filename, mode="w", encoding="utf-8") as html_file:
            html_file.write(page.render())
    else:
        raise PageNotHTML()
