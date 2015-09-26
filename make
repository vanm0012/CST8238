#!/usr/bin/env python3

import shutil
import sys
import os

from PyPages import PyPages
from src import  CST8238_index
from src.Lab1 import lab1_index
from src.Lab2 import lab2_index
from src.Lab3 import lab3_index, lab3_ColRowSpan

menu = """
usage: make [--clean] [--build]
"""

def build():
    print("Buidling website...")
    print("Building homepage index")
    PyPages.build(CST8238_index._html, "index.html")

    print("Building lab 1 index")
    os.mkdir("Lab1")
    PyPages.build(lab1_index._html, "Lab1/index.html")

    print("Building lab 2 index")
    os.mkdir("Lab2")
    PyPages.build(lab2_index._html, "Lab2/index.html")

    print("Buidling lab 3")
    os.mkdir("Lab3")
    print("     Building index")
    PyPages.build(lab3_index._html, "Lab3/index.html")
    print("     Building ColRowSpan")
    PyPages.build(lab3_ColRowSpan._html, "Lab3/ColRowSpan.html")


    print()

def clean():
    print("Cleaning website...")
    shutil.rmtree("Lab1")
    shutil.rmtree("Lab2")
    shutil.rmtree("Lab3")
    os.remove("index.html")

    print()

if __name__ == "__main__":
    if 'clean' in sys.argv:
        clean()
    if 'build' in sys.argv:
        build()
    if len(sys.argv) == 1:
        print(menu)
