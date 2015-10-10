#!/usr/bin/env python3

import shutil
import sys
import os

from PyPages import PyPages
from src import  CST8238_index
from src.Lab1 import lab1_index
from src.Lab2 import lab2_index
from src.Lab3 import lab3_index, lab3_ColRowSpan
from src.Lab4 import lab4_index, lab4_multimedia
from src.Assignment1 import assignment1_biography, assignment1_index, assignment1_image_gallery, assignment1_resume, assignment1_social

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
    print("     Building Multimedia")
    PyPages.build(lab4_multimedia._html, "build/Lab4/Multimedia.html")
    print("     Copying Stylesheet")
    shutil.copyfile("src/Lab4/StyleSheet.css", "build/Lab4/StyleSheet.css")

    print("Building Assignment 1")
    os.mkdir("build/Assignment1")
    print("     Buidling index")
    PyPages.build(assignment1_index._html, "build/Assignment1/index.html")
    print("     Buidling Biography")
    PyPages.build(assignment1_biography._html, "build/Assignment1/Biography.html")
    print("     Buidling Image Gallery")
    PyPages.build(assignment1_image_gallery._html, "build/Assignment1/ImageGallery.html")
    print("     Buidling Social")
    PyPages.build(assignment1_social._html, "build/Assignment1/Social.html")
    print("     Buidling Resume")
    PyPages.build(assignment1_resume._html, "build/Assignment1/Resume.html")
    shutil.copyfile("src/Assignment1/resume.md", "build/Assignment1/resume.md")
    print("     Copying CSS")
    shutil.copytree("src/Assignment1/css", "build/Assignment1/css")
    print("     Copying Images")
    shutil.copytree("src/Assignment1/images", "build/Assignment1/images")

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
