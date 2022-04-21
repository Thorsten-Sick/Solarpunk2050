Abenteuer
=========

Einstieg
--------

Es ist eine große Solarpunk Party im freien. Die Gemeinde hat sich versammelt. Es läuft selbst gemachte Musik und das übliche LED und Laser Spektakel. Für jeden gibt es ein Schnaps Gläschen mit einem neuen Bier zur Verkostung. Selbst generierte Hefe und ein neues Brau-Verfahren. Sehr lecker. Und leuchtet dank bioluminescens.  Nur leider ist die Menge limitiert: die aktuellen Labors und Brauerei Geräte schaffen nicht mehr. Das soll ausgebaut werden. Und dafür benötigt man Rohstoff Punkte.

Durch Glück wurde in der Nähe ein in einer der vielen Katastrophen verschüttetes Kohlekraftwerk halb freigespült. Man kann dort rein. Und die Solarpunks haben in einem Wettstreit Erstbergungsrecht erhalten.

Die Gruppe erhält 4 (oder Anzahl Spieler-1) von der EU ausgegebene Eigentumsmarker, die sie auf zu bergende Objekte kleben können. Diese sind einmal angebracht nicht mehr ohne schweres Gerät entfernbar. Sollen sie entscheiden, was ihnen am meisten wert ist.

Ansonsten kann man so viel mitnehmen, wie man tragen kann.

Ablauf
------

Evtl. finden sie Spieler alternative Wege durch das Kraftwerk. Aber hier die Etappen in der Standard Reihenfolge und wer dort jeweils Spotlight bekommen sollte.

.. graphviz::
    :name: plot
    :caption: Plot Ablauf
    :alt: Ablauf des Abenteuers
    :align: center

     digraph "sphinx-ext-graphviz" {
         size="6, 4";

         graph [fontname="Verdana", fontsize="12"];
         node [fontname="Verdana", fontsize="12"];
         edge [fontname="Sans", fontsize="9"];

         Kampfplatz [label="Kampfplatz", shape="component", fillcolor=red, style=filled
              ];
         Ausstellung [label="Ausstellung", shape="component", fillcolor=red, style=filled
              ];
         Kohlebunker [label="Kohlebunker", shape="component", fillcolor=red, style=filled
              ];
         Nest [label="Nest", shape="component", fillcolor=red, style=filled
              ];
         Laufstege [label="Laufstege", shape="component", fillcolor=red, style=filled
              ];

        Curly [label="Curly, Akrobaty"]
        Fass [label="Das Fass, Brauery"]
        Disco [label="Disco, Bardy"]
        Spark [label="Spark, Techniky"]
        Primel [label="Primel, Ökology"]

        Kampfplatz -> Ausstellung
        Ausstellung -> Kohlebunker
        Kohlebunker -> Laufstege
        Laufstege -> Nest

        Curly -> Laufstege [label="Spotlight", color=yellow]
        Fass -> Nest [label="Bergungsinteresse", color=green]
        Books -> Ausstellung [label="Bergungsinteresse (Modelle)", color=green]
        Disco -> Ausstellung [label="Bergungsinteresse (Geode)", color=green]
        Fass -> Ausstellung [label="Spotlight, Gespräch", color=yellow]
        Spark -> Kohlebunker [label="Spotlight, Entschärfung", color=yellow]
        Primel -> Laufstege [label="Spotlight, Pilze", color=yellow]
        Primel -> Laufstege [label="Bergungsinteresse, Pilze", color=green]
        Disco -> Kampfplatz [label="Spotlight, Verfolgung des Hamsters", color=yellow]
        Books -> Ausstellung [label="Spotlight, Historisches Wissen", color=yellow]

     }

Allgemein
---------

* Dunkelheit
* Feucht, klamm
* Es scheinen noch manche Prozesse zu laufen. Die Norms haben wild Akkus angeschlossen, in der Hoffnung Dinge zum Leben zu erwecken. Macht sich gut auf Film.
* Alles so archaisch

Kampfplatz
----------

Direkt nach dem Eingang findet man einen simulierten Unfall. Ein Schauspieler liegt unter einem Schaumstoff H-Träger. Ein versteckter Kameramann filmt ih, wie er schreit. Eigentlich sollte jederzeit der Held der Reality-Soap auftauchen. Stattdessen kommen echte Solarpunks zur Hilfe. Beide rofis machen weiter und nehmen die Rettungsaktion auf.

Nach dem das Missverständnis aufgeklärt ist und alle ungeduldig auf den Helden Schauspieler warten hört man etwas den Gang runter Schreie. Schnell nachschauen: Der Held wird gerade von einem riesigen Hamster in ein Rohr gezogen. Diese Rohre scheinen das ganze Kraftwerk zu durchziehen.

Ausstellung
-----------

Der Kameramann und das Opfer führen die Helden schnell zur "Zentrale". Einem ehemaligen Museum (auch Drehort). Dort ist Catering aufgebaut (außerhalb der Kameras).

Hier ist ein altes Museum, in dem damals Schulklassen an sehr schönen Modellen etwas über Kohlekraft lernen konnten. Diese sollten Books interessieren.

Auch interessant ist die Mineralien Sammlung, mit einer riesen Geode, die könnten Disco interessieren.

Beim catering ist ein Food-Designer, der aus Proteinpaste echt aussehende Mehlwürmer für die Solarpunk Essens-Aufnahmen bastelt. Die Paste ist aus Mehlwürmern. Ist denen nur nicht klar....

Nach Aussage des Food Designers sind die anderen tiefer in das Kraftwerk, um es für Dreharbeiten herzurichten. Schon seit einiger Zeit nix mehr von denen gehört. (Info: Die wurden gehamstert)


Jemand mit historischem Wissen (Books) kann herausfinden, dass das schwerste Teil hier wohl der Generator mit Schwungrad ist. Und dass es tiefer rein gehen muss.


Kohlebunker
-----------

Probleme:

* Trockener Kohlestaub (explosiv)
* unten dunkles, schwarzes Wasser, mit Ölfilm
* Die Norms haben da SFX Zeug aufgebaut. Insbesondere Kabel durchs Wasser und vorbereitete Pyrotechnik

Waffenmaterial:

* Kohlestaub (Kartoffelkanone, Rohrbomben)

Laufstege
---------

Man muss über Laufstege und durch große Belüftungs-Lüfter klettern

Die Belüftung läuft und ist spooky von hinten beleuchtet. Die Norms haben da einen Akku angeschlossen....Sieht im Film sicher prima aus.

Unten am Boden wachsen grünlich leuchtende Staubbovisten (mutiert). Jemand mit Öko Kenntnissen wüsste, dass die Sporen psychoaktiv sind. Bei den Pilzen liegt lallend der Regisseur.

Unten ist eine Schminkgelegenheit aufgebaut. Der Dreh hier ist bereits geplant.

Probleme:

* Gebrochene Metall Stege
* Rohrlabyrinthe ( in denen sich Hamster bewegen)
* Mutierte Pilze, der Regisseur muss gerettet werden

Waffenmaterial

* Scharfe Blätter der Belüftung (Schwerter)
* Psychoaktive Pilze

Nest
----

Im Nest findet man alle Arten von organischem Material. Angefangen von alten Kartoffelsäcken bis hin zu toten Tieren (gejagte Hunde und Wildschweine).

Es ist verworren und voller Trümmer der alten Zivilisation.

Der Hamster selbst hat den leblosen Norm auf den Haufen gezerrt und der wird hier sterben.

Als besonderer Schatz ist hier der große Generator mit dem schweren, wuchtigen Schwungrad.












Szenen
------

Beim Eindringen stoßen sie schnell auf einen Eingeklemmten und schwer verletzten Norm. Das ist aber ein Schauspieler einer Serie "Extreme Adventure Group". Das eingeklemmt sein ist nur eine Simulation und eigentlich sollte gleich deren "Held" um die Ecke kommen und die Befreiung einleiten. Ind er Ecke hat sich eine Kameramann versteckt. Die Helden können die Person befreien, aber der Held kommt nicht....

... ein Schrei. Der Held wir einen gang weiter - mit schwerer Kopfwunde - von einem riesigen Hamster in ein Rohr geschleift.

... Das "Opfer" kann halb in Schockstarre zum Catering gebracht werden. Dort wartet ein weiterer Norm

... Kameramann und Spieler sind jetzt auf Bergungsmission, Finden von sich verlaufenden Real-Life-Doku-Drama Schauspielern, Rettungsmission und müssen auch noch den Interview Fragen des Kameramanns Stand halten
