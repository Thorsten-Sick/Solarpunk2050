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

         Party1 [label="Erste Party", shape="component", fillcolor=red, style=filled]
         Verlorene [label="Verlorene", shape="component", fillcolor=red, style=filled]
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
         Party2 [label="Sieges Party", shape="component", fillcolor=red, style=filled]

        Curly [label="Curly, Akrobaty"]
        Fass [label="Das Fass, Brauery"]
        Disco [label="Disco, Bardy"]
        Spark [label="Spark, Techniky"]
        Primel [label="Primel, Ökology"]

        Party1 -> Verlorene
        Verlorene -> Kampfplatz
        Kampfplatz -> Ausstellung
        Ausstellung -> Kohlebunker
        Kohlebunker -> Laufstege
        Laufstege -> Nest
        Nest -> Party2

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

Party 1
-------

Aufgabe: Charaktere lernen sich kennen. Spieler testen Regeln. Und besonders: Solarpunk feeling schnuppern

Bei den Solarpunks ist abendliche Party draußen auf dem Community Festplatz. Diesmal wird etwas großes angekündigt. Um sich die Zeit zu vertreiben (und die Regeln kennen zu lernen) können sie bei einer der zahlreichen Aktionen teilnehmen.

* Jonglier Workshop. Mögliche Spieleraktionen:
    * Teilnahme
* Drohnen Rennen der Kinder im Umkreis durch die Bäume. Kaputte Drohnen reparieren die Piloten selbst. Mögliche Spieleraktionen:
    * Teilnahme
    * Beim reparieren helfen
    * Drohnen aus den Bäumen bergen
* E-Motor wickel Wette: Jeder trinkt einen Schnaps. Danach wird der Draht um den E-Motor Kern gewickelt. Es geht auf Zeit und um Qualität. Der Verlierer trinkt wieder einen Schnaps. Mögliche Spieleraktionen:
    * Teilnahme
    * Verarzten bei Unfall oder zu viel Alkohol
* Diskussion:
* Party orga: Im Wechsel übernimmt jeder interessierte Musik und Beleuchtung.  Mögliche Spieleraktionen:
    * Musik oder Beleuchtung wuppen


Zur Ankündigung am Abend erhält jeder einen Schnapsbecher lokal gebrautes Bier.  Eigene Hefe Züchtung. Das Bier leuchtet im dunklen und schmeckt großartig. Ohne Biolabor / Brauerei kann man aber nicht mehr herstellen.
Die Ankündigung des Ältesten:Man hat Bergungsrechte auf ein Kohlekraftwerk der Alten. Das wurde gerade freigespült. War seit einer Katastrophe verschüttet.

Verlorene
---------

Aufgabe: Man lernt die Fraktion der Verlorenen kennen. Aber besonders: Man hat die erste Begegnung mit einem mutierten Riesen Hamster. Die Verlorenen sind in der Geschichte nicht mehr wichtig. Aber der Hamster

Die Verlorenen campen vor dem Eingang in das Kraftwerk. Schwere Diesel Autos stehen mit laufendem Motor. In Ölwannen brennt Öl. Darüber: Ein riesiger Hamster auf einem Drehspieß. Genug, damit alle 10 Verlorene satt werden. Jemand macht gerade Kartoffelsalat und richtet die Picknick Bänke.
Musik dröhnt. Die Lautsprecher sind falsch eingestellt und es ist nur ein einziger Radau. Das stört hier aber niemanden.
Im Hintergrund ballert jemand mit Schrotgewehren auf Dosen.
Die Verlorenen haben selbst in der Auktion 10 Bergungsmarken bekommen. Sind aber als zweite dran. Die Marken sind noch nicht aktiv. Werden aber in 12 Stunden aktiviert und dann sind sie dran.

Kampfplatz
----------

Aufgabe: Man trifft zum ersten Mal die Norms. Wird in ein Abenteuer gezogen.

Direkt nach dem Eingang findet man einen simulierten Unfall. Ein Norm Schauspieler liegt unter einem Schaumstoff H-Träger. Ein versteckter Kameramann filmt ih, wie er schreit. Eigentlich sollte jederzeit der Held der Reality-Soap auftauchen. Stattdessen kommen echte Solarpunks zur Hilfe. Beide rofis machen weiter und nehmen die Rettungsaktion auf.

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


Sieges Party
------------

Aufgabe: Dient dem Abschluss und um nochmal richtig zu feiern. Das Abenteuer Revure passieren zu lassen und nochmal Solarpunk feeling zu schnuppern









Szenen
------

Beim Eindringen stoßen sie schnell auf einen Eingeklemmten und schwer verletzten Norm. Das ist aber ein Schauspieler einer Serie "Extreme Adventure Group". Das eingeklemmt sein ist nur eine Simulation und eigentlich sollte gleich deren "Held" um die Ecke kommen und die Befreiung einleiten. Ind er Ecke hat sich eine Kameramann versteckt. Die Helden können die Person befreien, aber der Held kommt nicht....

... ein Schrei. Der Held wir einen gang weiter - mit schwerer Kopfwunde - von einem riesigen Hamster in ein Rohr geschleift.

... Das "Opfer" kann halb in Schockstarre zum Catering gebracht werden. Dort wartet ein weiterer Norm

... Kameramann und Spieler sind jetzt auf Bergungsmission, Finden von sich verlaufenden Real-Life-Doku-Drama Schauspielern, Rettungsmission und müssen auch noch den Interview Fragen des Kameramanns Stand halten
