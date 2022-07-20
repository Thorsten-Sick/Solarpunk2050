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

.PHONY: help Makefile

# Catch-all target: route all unknown targets to Sphinx using the new
# "make mode" option.  $(O) is meant as a shortcut for $(SPHINXOPTS).
%: Makefile
	@$(SPHINXBUILD) -M $@ ./de/sourcebook ./de/sourcebook/_build $(SPHINXOPTS) $(O)
	@$(SPHINXBUILD) -M $@ ./de/con_abenteuer_1 ./de/con_abenteuer_1/_build $(SPHINXOPTS) $(O)

pdf:
	@$(SPHINXBUILD) -M latexpdf ./de/sourcebook ./de/sourcebook/_build $(SPHINXOPTS) $(O)
	@$(SPHINXBUILD) -M latexpdf ./de/con_abenteuer_1 ./de/con_abenteuer_1/_build $(SPHINXOPTS) $(O)
	cp ./de/sourcebook/_build/latex/Solarpunk2050.pdf downloads
	cp ./de/con_abenteuer_1/_build/latex/Solarpunk2050_Con_Abenteuer_1.pdf downloads

epub:
	@$(SPHINXBUILD) -M epub ./de/sourcebook ./de/sourcebook/_build $(SPHINXOPTS) $(O)
	@$(SPHINXBUILD) -M epub ./de/con_abenteuer_1 ./de/con_abenteuer_1/_build $(SPHINXOPTS) $(O)
	cp ./de/sourcebook/_build/epub/Solarpunk2050.epub downloads
	cp ./de/con_abenteuer_1/_build/epub/Solarpunk2050_Con_Abenteuer_1.epub downloads

all:
	make pdf
	make epub