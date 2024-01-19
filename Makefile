# Minimal makefile for Sphinx documentation
#

# You can set these variables from the command line.
SPHINXOPTS    =
SPHINXBUILD   = sphinx-build
SOURCEDIR     = ./sourcebook
BUILDDIR      = ./sourcebook/_build

# Put it first so that "make" without argument is like "make help".
help:
	@$(SPHINXBUILD) -M help ./sourcebook ./sourcebook/_build $(SPHINXOPTS) $(O)

.PHONY: help Makefile vale

# Catch-all target: route all unknown targets to Sphinx using the new
# "make mode" option.  $(O) is meant as a shortcut for $(SPHINXOPTS).
%: Makefile
	@$(SPHINXBUILD) -M $@ ./de/sourcebook ./de/sourcebook/_build $(SPHINXOPTS) $(O)
	@$(SPHINXBUILD) -M $@ ./de/con_abenteuer_1 ./de/con_abenteuer_1/_build $(SPHINXOPTS) $(O)

pdf:
	cd en/sourcebook && latexmk -pdf -pdflatex="pdflatex -interaction=nonstopmode" sourcebook.tex

	# Adventure 1
	# cd en/con_adventure_1 && latexmk -pdf -pdflatex="pdflatex -interaction=nonstopmode" standalone.tex
	# mv en/con_adventure_1/standalone.pdf en/con_adventure_1/adventure_world_destroying_machine.pdf

	# Adventure 2
	# cd en/con_adventure_2_norms && latexmk -pdf -pdflatex="pdflatex -interaction=nonstopmode" standalone.tex
	# mv en/con_adventure_2_norms/standalone.pdf en/con_adventure_2_norms/adventure_mystery_club.pdf

	# Adventure project lifeguard
	# cd en/adventure_project_lifeguard && latexmk -pdf -pdflatex="pdflatex -interaction=nonstopmode" standalone.tex
	# mv en/adventure_project_lifeguard/standalone.pdf en/adventure_project_lifeguard/adventure_project_lifeguard.pdf

	cd ../..

	cp en/sourcebook/sourcebook.pdf downloads/Solarpunk2050_sourcebook_en.pdf
	cp en/con_adventure_1/adventure_world_destroying_machine.pdf downloads
	cp en/adventure_project_lifeguard/adventure_project_lifeguard.pdf downloads

all:
	make pdf
	# make epub

vale:
	vale --config .vale_en.ini en/sourcebook/*.tex

vale_pedantic:
	vale --config .vale_en.ini --minAlertLevel=warning en/sourcebook/*.tex

clean:
	cd  en/sourcebook/ && latexmk -c sourcebook.tex

