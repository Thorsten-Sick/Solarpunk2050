Layout playground
=================

Ich nutze das, um mit Layout features zu experimentieren. Nicht im Buch integrieren !

https://www.sphinx-doc.org/en/master/usage/restructuredtext/basics.html

Überschriften
-------------

    # with overline, for parts

    * with overline, for chapters

    =, for sections

    -, for subsections

    ^, for subsubsections

    ", for paragraphs

Links
-----

`Das ist ein link <https://www.solarpunk2050.de>`_

Images
------

.. image:: _static/Powered_by_Fate_Final_Light_BG.png


Footnotes
---------

This is a footnote [#f1]_ Which is different from this one [#1]_

Some text

.. rubric::

.. [#1] Second footnote text

.. [#f1] First footnote text


And after footnotes

..  This is a comment

Topics/Sidebars
---------------

.. topic:: Topic titel

    Das ist das Topic
    So direkt geschrieben


.. sidebar:: Das ist eine Sidebar. Der Titel
    :subtitle: Der Subtitle der Sidebar

    Und eine Liste von viel Text. Wenn er mir einfällt

    Mehr Text

Admonitions
-----------

https://docutils.sourceforge.io/docs/ref/rst/directives.html

.. attention::

    Wet floor

.. hint::

    Das ist ein
    Hint


.. tip::
    Das ist ein Tip

.. danger::

    Das ist danger

.. note:: Note admonition

    Das ist ein Note

    * Mit
    * Bullet
    * Points

.. admonition:: Generic überschrift

    Das ist Generic

Graphviz
--------

.. graphviz::
    :name: sphinx.ext.graphviz
    :caption: Sphinx and GraphViz Data Flow
    :alt: How Sphinx and GraphViz Render the Final Document
    :align: center

     digraph "sphinx-ext-graphviz" {
         size="6,4";
         rankdir="LR";
         graph [fontname="Verdana", fontsize="12"];
         node [fontname="Verdana", fontsize="12"];
         edge [fontname="Sans", fontsize="9"];

         sphinx [label="Sphinx", shape="component",
                   href="https://www.sphinx-doc.org/",
                   target="_blank"];
         dot [label="GraphViz", shape="component",
              href="https://www.graphviz.org/",
              target="_blank"];
         docs [label="Docs (.rst)", shape="folder",
               fillcolor=green, style=filled];
         svg_file [label="SVG Image", shape="note", fontcolor=white,
                 fillcolor="#3333ff", style=filled];
         html_files [label="HTML Files", shape="folder",
              fillcolor=yellow, style=filled];

         docs -> sphinx [label=" parse "];
         sphinx -> dot [label=" call ", style=dashed, arrowhead=none];
         dot -> svg_file [label=" draw "];
         sphinx -> html_files [label=" render "];
         svg_file -> html_files [style=dashed];
     }


.. graphviz::
    :name: bodensee
    :caption: Bodensee Verlinkung
    :alt: Wie der Bodensee so tickt
    :align: center

     digraph "sphinx-ext-graphviz" {
         size="6, 4";

         graph [fontname="Verdana", fontsize="12"];
         node [fontname="Verdana", fontsize="12"];
         edge [fontname="Sans", fontsize="9"];

         pirat1 [label="Pirat 1", shape="component",
                   fillcolor=red, style=filled];
         pirat2 [label="Pirat 2", shape="component", fillcolor=red, style=filled
              ];
         piratensöldner [label="Piratensöldner", shape="component", fillcolor=red, style=filled
              ];
         romeo [label="Romeo", shape="component", fillcolor=red, style=filled
              ];
         julia [label="Julia", shape="component", fillcolor=green, style=filled
              ];
         vogelmann [label="Vogelmann", shape="component", fillcolor=green, style=filled
              ];
         überlingen [label="Überlingen KI", shape="component", fillcolor=lightblue, style=filled
              ];
         esotante[label="Esotante", shape="component", fillcolor=lightblue, style=filled
              ];
         friedrichshafen[label="Friedrichshafen KI", shape="component", fillcolor=yellow, style=filled
              ];
         anführer[label="Anführer", shape="component", fillcolor=yellow, style=filled
              ];
         planen_experte [label="Planen Experte", shape="component", fillcolor=green, style=filled
              ];

         pirat1 -> pirat2 [label=" konkurrenz ", color=red, arrowhead=none];
         romeo -> pirat1 [label = "sohn", color=green]
         julia -> romeo [label="liebt", color=green, arrowhead=none]
         vogelmann -> überlingen [label="Liefert heimlich Vögel", color=green]
         vogelmann -> pirat1 [label="Liefert heimlich Papagei", color=green]
         überlingen -> esotante [label="Manipuliert mit Vögeln", color=red]
         planen_experte -> friedrichshafen [label="Berät beim Zeppelin", color=green]
         piratensöldner -> pirat2 [label="dienen", color=green]
         piratensöldner -> friedrichshafen [label="könnte gekauft werden", color=orange, style=dashed]
         pirat1 -> überlingen [label = "will beeindrucken"]
         pirat2 -> friedrichshafen [label = "will einschüchtern"]
         planen_experte -> pirat1 [label="Hart gegen Piraten", color=red]
         julia -> planen_experte [label="Tochter", color=green]
         vogelmann -> planen_experte [label="ein Paar", color=green, arrowhead=none]
         friedrichshafen -> anführer [label="Jeder angriff auf FN stärkt", color=green]

     }