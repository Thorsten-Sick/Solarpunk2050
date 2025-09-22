#!/usr/bin/env python3
"""Build the documents."""

import os
import subprocess


def compile(texdir, texfile):
    pdffilename = os.path.splitext(texfile)[0] + ".pdf"
    command = f"pdflatex --interaction=nonstopmode {texfile}"
    for _ in range(0,4):
        subprocess.run(command, cwd=texdir, shell=True, check=False, capture_output=False)
    # if os.path.isfile(pdffilename):
    #     shutil.copy2()


if __name__ == "__main__":
    # compile("en/adventure_sammlung_de", "standalone_flohmarkt_de.tex")
    compile("en/adventure_sammlung_de", "standalone_flohmarkt_en.tex")

    compile("en/adventure_sammlung_de", "standalone_flohmarkt_de.tex")