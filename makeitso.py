#!/usr/bin/env python3
"""Build the documents."""

import os
import subprocess
import argparse

def compile(texdir, texfile, largs):
    """Compile the book."""

    if largs.strict:
        interaction = ""
    else:
        interaction = "--interaction=nonstopmode"

    pdffilename = os.path.splitext(texfile)[0] + ".pdf"
    command = f"pdflatex {interaction} {texfile}"
    for _ in range(0,4):
        subprocess.run(command, cwd=texdir, shell=True, check=False, capture_output=False)
    # if os.path.isfile(pdffilename):
        #     shutil.copy2()
    print(f"Done {texdir}  {texfile}")

def func_compile(largs):
    """Dispatch the compile calls."""

    if largs.sourcebook or largs.all:
        texdir = "en/sourcebook"
        texfile = "sourcebook.tex"
        compile(texdir, texfile, largs)

    if largs.flohmarkt or largs.all:
        texdir = "en/adventure_sammlung_de"
        texfile = "standalone_flohmarkt_de.tex"
        compile(texdir, texfile, largs)

    if largs.fleamarket or largs.all:
        texdir = "en/adventure_sammlung_de"
        texfile = "standalone_flohmarkt_en.tex"
        compile(texdir, texfile, largs)

    if largs.world_destroying_machine or largs.all:
        texdir = "en/con_adventure_1"
        texfile = "standalone.tex"
        compile(texdir, texfile, largs)

    if largs.pyramid or largs.all:
        texdir = "en/adventure_pyramids"
        texfile = "standalone.tex"
        compile(texdir, texfile, largs)


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
    parser_run.add_argument("--strict", action="store_true", help="compile strict, do not ignore warnings")

    return lparser


if __name__ == "__main__":

    parser = create_parser()
    # argcomplete.autocomplete(parser)
    arguments = parser.parse_args()
    arguments.func(arguments)
