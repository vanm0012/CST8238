#!/usr/bin/env python3

"""
PyPages Templates

Snippets and dominate objects for reusable stuff
"""
import dominate
from dominate.tags import *


def html_head(html_title):
    """
    Create a simple skeleton to start from

    title -  for HTML document
    """
    _html = html()
    with _html:
        with head():
            meta(charset="UTF-8")
            title(html_title)

    return _html
