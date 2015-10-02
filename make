#!/usr/bin/env python3

import shutil
import sys
import os

from PyPages import PyPages
from src import  CST8238_index
from src.Lab1 import lab1_index
from src.Lab2 import lab2_index
from src.Lab3 import lab3_index, lab3_ColRowSpan
from src.Lab4 import lab4_index

menu = """
usage: make [clean] [build]
"""

def build():
    print("Buidling website...")
    os.mkdir("build")

    print("Building homepage index")
    PyPages.build(CST8238_index._html, "build/index.html")

    print("Building lab 1 index")
    os.mkdir("build/Lab1")
    PyPages.build(lab1_index._html, "build/Lab1/index.html")

    print("Building lab 2 index")
    os.mkdir("build/Lab2")
    PyPages.build(lab2_index._html, "build/Lab2/index.html")

    print("Buidling lab 3")
    os.mkdir("build/Lab3")
    print("     Building index")
    PyPages.build(lab3_index._html, "build/Lab3/index.html")
    print("     Building ColRowSpan")
    PyPages.build(lab3_ColRowSpan._html, "build/Lab3/ColRowSpan.html")


    print("Builing lab 4")
    os.mkdir("build/Lab4")
    print("     Building index")
    PyPages.build(lab4_index._html, "build/Lab4/index.html")
    print("     Copying Stylesheet")
    shutil.copyfile("src/Lab4/StyleSheet.css", "build/Lab4/StyleSheet.css")

    print()

def clean():
    try:
        print("Cleaning website...")
        shutil.rmtree("build/")
    except FileNotFoundError:
        print("Nothing to clean")

    print()

if __name__ == "__main__":
    if 'clean' in sys.argv:
        clean()
    if 'build' in sys.argv:
        build()
    if len(sys.argv) == 1:
        print(menu)
