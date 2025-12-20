#!/usr/bin/env python3
"""Build the documents."""

import os
import shutil
import subprocess
import argparse

destdir = "downloads"

def compile(texdir, texfile, destname, largs):
    """Compile the book."""

    if largs.lazy:
        interaction = "--interaction=nonstopmode"
    else:
        interaction = ""

    pdffilename = os.path.splitext(texfile)[0] + ".pdf"
    command = f"pdflatex {interaction} {texfile}"
    for _ in range(0,4):
        subprocess.run(command, cwd=texdir, shell=True, check=False, capture_output=False)
    srcname = os.path.join(texdir, pdffilename)
    dstname = os.path.join(destdir, destname)
    if os.path.isfile(srcname):
        shutil.copy2(srcname, dstname)
    print(f"Done {texdir}  {texfile}")

def func_compile(largs):
    """Dispatch the compile calls."""

    if largs.sourcebook or largs.all:  # sniff test ok
        texdir = "en/sourcebook"
        texfile = "sourcebook.tex"
        destname = "Solarpunk_2050_sourcebook.pdf"
        compile(texdir, texfile, destname, largs)

    if largs.flohmarkt or largs.all:  # sniff test ok
        texdir = "en/adventure_sammlung_de"
        texfile = "standalone_flohmarkt_de.tex"
        destname = "Solarpunk2050_Lost_Flohmarkt.pdf"
        compile(texdir, texfile, destname, largs)

    if largs.fleamarket or largs.all:  # sniff test ok
        texdir = "en/adventure_sammlung_de"
        texfile = "standalone_flohmarkt_en.tex"
        destname = "Solarpunk2050_Lost_flea_market.pdf"
        compile(texdir, texfile, destname, largs)

    if largs.world_destroying_machine or largs.all:  # !!! sniff test: missing cover
        texdir = "en/con_adventure_1"
        texfile = "standalone.tex"
        destname = "quickstart_world_destroying_machine.pdf"
        compile(texdir, texfile, destname, largs)

    if largs.pyramid or largs.all:  # sniff test: ok
        texdir = "en/adventure_pyramids"
        texfile = "standalone.tex"
        destname = "solarpunk_2050_the_berlin_pyramid.pdf"
        compile(texdir, texfile, destname, largs)

    if largs.lifeguard or largs.all:  # sniff test: Can not be published standalone yet !
        texdir = "en/adventure_project_lifeguard"
        texfile = "standalone.tex"
        destname = "adventure_project_lifeguard.pdf"
        compile(texdir, texfile, destname, largs)


def create_parser():
    """ Creates the parser for the command line arguments"""
    lparser = argparse.ArgumentParser("Compile and manage Solarpunk book creation")
    subparsers = lparser.add_subparsers(help="sub-commands")

    lparser.set_defaults(func=None)
    lparser.add_argument('--verbose', '-v', action='count', default=0, help="Verbosity level")

    # Sub parser for compilation
    parser_run = subparsers.add_parser("compile", help="Compile solarpunk books")
    parser_run.set_defaults(func=func_compile)
    parser_run.add_argument("-s", "--sourcebook", action="store_true", help="compile the sourcebook")
    parser_run.add_argument("-a", "--all", action="store_true", help="compile all books")
    parser_run.add_argument("-f", "--flohmarkt", action="store_true", help="compile the flohmarkt (DE)")
    parser_run.add_argument("-F", "--fleamarket", action="store_true", help="compile the fleamarket (EN)")
    parser_run.add_argument("-w", "--world_destroying_machine", action="store_true", help="compile the world destroying machine")
    parser_run.add_argument("-p", "--pyramid", action="store_true", help="compile the berlin pyramid")
    parser_run.add_argument("-l", "--lifeguard", action="store_true", help="compile the project lifeguard")
    parser_run.add_argument("--lazy", action="store_true", help="compile lazy, ignore LaTeX warnings")

    return lparser


if __name__ == "__main__":

    parser = create_parser()
    # argcomplete.autocomplete(parser)
    arguments = parser.parse_args()
    arguments.func(arguments)

# TODO:

# project lifeguard

# Lisbon express - not written yet
# Friedrichshafen - not written yet
# adventure sammlung DE - not written yet
# con adventure 2 - standalone - not written yet
