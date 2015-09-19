#!/usr/bin/env python3
import sys

import dominate
from dominate.tags import *

sys.path.append("../../")
from PyPages import templates

_html = templates.html_head("CST8238 - Lab 1")
with _html:
    with body():
        h1("Hello World")
        p("My name is Tryton Van Meer (Student Number: 040790151)")
        p("I excpect to to improve on my web programming and design skills")
