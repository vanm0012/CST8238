#!/usr/bin/env python3
import sys

import dominate
from dominate.tags import *

sys.path.append("../")
from PyPages import templates

_html = templates.html_head("CST8238 - Home Directory")
with _html:
    with body():
        with a(href="https://github.com/vanm0012/CST8238"):
            h1("Github Repo")
        br()
        br()
        h1(u("Labs"))
        with ul():
            li(a("Lab 1", href="Lab1/index.html"))
            li(a("Lab 2", href="Lab2/index.html"))
            li(a("Lab 3", href="Lab3/index.html"))
            li(a("Lab 4", href="Lab4/index.html"))
