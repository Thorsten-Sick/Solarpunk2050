Abenteuer
=========

Zusammenfassung
---------------

* Spieler lernen auf einer Solarpunk Party Solarpunk kennen
* Aufgabe: Weltzerstörungsmaschine (=Kohlekraftwerk) durchsuchen und Rohstoffe bergen um Brauerei bauen zu können
* Spieler lernen Verlorene kennen
* Spieler treffen in Weltzerstörungsmaschine auf Norms. Gefahr: Mutierter Riesenhamster
* Durchsuchen die Weltzerstörungsmaschine, lösen einige Probleme, bauen Waffen (wie im Film Predator), stellen den Hamster
* Abschlussfest beim Bau der Brauerei

Einstieg
--------

Es ist eine große Solarpunk Party im freien. Die Gemeinde hat sich versammelt. Es läuft selbst gemachte Musik und das übliche LED und Laser Spektakel. Für jeden gibt es ein Schnaps Gläschen mit einem neuen Bier zur Verkostung. Selbst generierte Hefe und ein neues Brau-Verfahren. Sehr lecker. Und leuchtet dank Biolumineszenz.  Nur leider ist die Menge limitiert: die aktuellen Labors und Brauerei Geräte schaffen nicht mehr. Das soll ausgebaut werden. Und dafür benötigt man Rohstoff Punkte.

Durch Glück wurde in der Nähe ein in einer der vielen Katastrophen verschüttete "Weltzerstörungsmaschine" (ein Kohlekraftwerk) halb freigespült. Man kann dort rein. Und die Solarpunks haben in einem Wettstreit Erstbergungsrecht erhalten.

Die Gruppe erhält 4 (oder Anzahl Spieler-1) von der EU ausgegebene Bergungstags, die sie auf zu bergende Objekte kleben können. Diese sind einmal angebracht nicht mehr ohne schweres Gerät entfernbar. Sollen sie entscheiden, was ihnen am meisten wert ist.

Ansonsten kann man so viel mitnehmen, wie man tragen kann.

Bergungstags:

Aufkleber mit kleiner Energiequelle und Computer und Funksender. Sie werden unlösbar mit einem Objekt verbunden und identifizieren es als Bergungsgut. Nach dem Abenteuer werden Spezialisten (NSCs) mit schwerem Gerät kommen, die Objekte zerschneiden, abtransportieren und recyclen.

Ablauf
------

Evtl. finden sie Spieler alternative Wege durch die Weltzerstörungsmaschine. Aber hier die Etappen in der Standard Reihenfolge und wer dort jeweils Spotlight bekommen sollte.

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

Party 1
-------

Ziel der Szene: Charaktere lernen sich kennen. Spieler testen Regeln. Und besonders: Solarpunk-Feeling schnuppern

Bei den Solarpunks ist abendliche Party draußen auf dem Community Festplatz. Diesmal wird etwas großes angekündigt. Um sich die Zeit zu vertreiben (und die Regeln kennen zu lernen) können sie bei einer der zahlreichen Aktionen teilnehmen.
Alle ist mit bunten Lichtern geschmückt. Tücher und Wimpel hängen überall. Leute stehen in Grüppchen herum oder tanzen. In der Mitte steht eine große Säule, deren unterer Bereich aktuell Grün beleuchtet ist.

Durchsage der Ältesten:
"Heute haben wir einige Neuigkeiten. Die Erste: Dorothea hat Nachwuchs ! (Einblendung eines Video Screens mit Live Schalte zu einem Nest mit Küken im Wald). <Frenetischer Jubel>. Bitte Leiser ! Wir haben jetzt in der Brut Saison die Lautstärke Säule wieder aufgestellt. Sie überwacht die im Wald verteilten Mikrofone. Wie immer: Wenn die Rot wir, bitte die Lautstärke dämpfen. Die Musik-Anlagen machen das automatisch.
Dieses Jahr hat das 5. Drohnen Geschwader der Kinder geschworen, die Gelege zu schützen, indem sie in einem großen Perimeter darum Katzen, Marder und andere Raubtiere fernhalten. (Beleuchtete Quadrocopter fliegen in Formation über das Fest, schnell schert eine der Drohnen aus der Formation aus, dippt elegant in die Bowle und schließt sich gleich wieder der Formation an) <Kinder jubeln>.

Die zweite Ankündigung kommt in einer Stunde.
"


* Jonglier Workshop:
    * Teilnahme
* Drohnen Rennen der Kinder im Umkreis durch die Bäume. Kaputte Drohnen reparieren die Piloten selbst:
    * Teilnahme
    * Beim reparieren helfen
    * Drohnen aus den Bäumen bergen
* E-Motor wickel Wette: Jeder trinkt einen Schnaps. Danach wird der Draht um den E-Motor Kern gewickelt:
    * Teilnahme (der Verlierer trinkt einen Schnaps)
    * Verarzten bei Unfall oder zu viel Alkohol
* Party orga: Im Wechsel übernimmt jeder interessierte Musik und Beleuchtung:
    * Musik oder Beleuchtung wuppen


Zur Ankündigung am Abend erhält jeder einen Schnapsbecher lokal gebrautes Bier.
Die Älteste: "Das ist unsere eigene Hefe Züchtung. Das Team um 'Das Fass' haben es möglich gemacht (Jubel). Wie ihr seht leuchtet das Bier im dunklen und schmeckt großartig. Aber ohne großes Biolabor mit Brauerei kann man aber nicht mehr herstellen...und dafür fehlen uns die Ressource Punkte. Aber wir haben Bergungsrechte auf eine  Weltzerstörungsmaschine der Alten. Das wurde gerade freigespült. War seit einer Katastrophe verschüttet. Lasst uns schwere Maschinen und seltene Metalle bergen und uns Rohstoffpunkte durch Recycling sichern ! Damit bekommen wir dann unser Brauerei-Labor!"

Das Fass darf dann während dem Fest die wichtigsten Fragen der Leute beantworten: "Leuchtet man, wenn man das getrunken hat ?" (Nein), "Leuchtet das Pipi ?" (Ja), "Wie lange leuchtet das Pipi ?" (einige Tage), "Kann man auch leuchtende Limo für Kinder brauen ?" (Ja)

Danach Aufbruch, zuerst mit dem Zug (E-Bikes und Quads sind im Güterwaggon). Dann fahrt in ein relativ neues Waldstück, dass auf vor 20 Jahren überschwemmten Land wächst.

Verlorene
---------

Ziel der Szene:

* Man lernt die Fraktion der Verlorenen kennen
* Man hat die erste Begegnung mit einem mutierten Riesen Hamster
* Man kann Waffen erwerben (stehlen, kaufen)
* Man könnte die Verlorenen um Unterstützung bitten

Man befindet sich in einem Wald. Die Verlorenen campen vor dem Eingang in der Maschine. Schwere Diesel Autos stehen mit laufendem Motor. In Ölwannen brennt Öl. Darüber: Ein riesiger Hamster auf einem Drehspieß. Genug, damit alle 10 Verlorene satt werden. Jemand macht gerade Kartoffelsalat und richtet die Picknick Bänke. Musik dröhnt. Die Lautsprecher sind falsch eingestellt und es ist nur ein einziger Radau. Das stört hier aber niemanden.
Im Hintergrund ballert jemand mit Schrotgewehren auf Bier Dosen.
Die Verlorenen haben selbst in der Auktion 10 Bergungstags bekommen. Das sind mehr als die Solarpunks haben. Dafür sind sie als zweite dran. Die Tags sind noch nicht aktiv. Werden aber in 12 Stunden aktiviert und dann können sie mit dem Bergen beginnen.
Bis die Tags aktiv sind, wollen die Verlorenen hier im Wald Party machen. Die Verlorenen sind also bei halbwegs zügigem Vorgehen der Spieler keine Konkurrenz.

Verhalten: Sie pöbeln gegen die Solarpunks und drohen ihnen bloß keine "Dieseltanks, Generatoren oder so" mitzunehmen, die gehören den Verlorenen.

Nachdem das fertig ist, aktivieren sich die Bergungstags der Solarpunks und sie dürfen beginnen, durch den neu gefunden Zugang in die Weltzerstörungsmaschine hinabzusteigen

.. admonition:: NSC: Caligula

    Der Anführer der Verlorenen ist ein vernarbter, alter Kämpfer.

    Konzept: Kämpfer mit Narben innen und außen

    * Kämpfen: 4
    * Stärke: 3
    * Schießen: 3
    * Wahrnehmung: 2


Kampfplatz
----------

Ziel der Szene:

* Man trifft zum ersten Mal die Norms. Wird in ein Abenteuer gezogen.
* Die Weltzerstörungsmaschine ist absurd engineered. Fast schon öde und langweilig
* Erkenntnis: Man braucht Waffen

Die Charaktere dringen durch eine schief hängende Luke in einen Gang ein. Die Wände sind weiß - aber inzwischen modrig. Der Boden ist Linoleum. Weiße Plastikschränke ohne jede Persönlichkeit stehen in den Gängen. Viele Türen (Weiß, Plastik in Holzoptik) zweigen rechts und links ab. An ihnen Schilder mit Namen der Leute, deren Büro das mal war. Hinter den Türen: Schutt und Schlamm.

Bald findet man einen simulierten Unfall. Ein Norm Schauspieler liegt unter einem Schaumstoff H-Träger. Ein versteckter Kameramann filmt ihn, wie er schreit. Eigentlich sollte jederzeit der Held der Reality-Soap auftauchen. Stattdessen kommen echte Solarpunks zur Hilfe. Beide Profis machen weiter und nehmen die Rettungsaktion auf.

Nach dem das Missverständnis aufgeklärt ist und alle ungeduldig auf den Helden Schauspieler * Theophil Tierlieb* warten hört man etwas den Gang runter Schreie. Schnell nachschauen: Der erwartete Held, Schauspieler in der Rolle des "Theophil Tierlieb" wird gerade von einem riesigen Hamster in ein Rohr gezogen. Diese Rohre scheinen das ganze Weltzerstörungsmaschine zu durchziehen.

Leider ist das Rohr kaum von einem Menschen zu durchkrabbeln (bewusstlos von einem Monster durchgezogen zu werden scheint weniger Platz zu brauchen). Irgendwann bricht auch das Rohr durch die Beanspruchung. Drohnen würden gehen. Allgemein hat man ein Problem, dem Monster und dem Opfer schnell zu folgen und die Rohre enden in Wänden. Man braucht einen Lageplan.

Die Charaktere sollten feststellen, dass sie keine Waffen haben. Aber egal. Als Solarpunk improvisiert man unterwegs.

Mit sozialen Fertigkeiten könnten sie die Waffen sicher auch von den Verlorenen leihen ! Aber nicht zu viel, denn die wollen in ein paar Stunden nachkommen und dann nicht unbewaffnet sein.

Am Ende des Gangs finden die Protagonisten eine große Halle, mit Marmor ausgekleidet. Das war das Museum der Weltzerstörungsmaschine.

.. admonition:: NSC: Kewin

    Kewin ist der Kamera Mann der Produktion. Redet gerne und will immer die besten Szenen im Kasten. Wenn nicht aufgehalten, wird er die Spieler begleiten.

    "Ich weiß, dass ich Kamera Mann werden will, seit mich die KI mit 10 für den Job empfohlen hat."

    Konzept: Kameramann, der alles für eine gute Szene gibt

    Aspekt: Redet gerne

    * Wahrnehmung: 4
    * Handwerk (Film): 3
    * Charisma: 3
    * Heimlichkeit: 2


.. admonition:: NSC: Delta Awesome

    Delta Awesome ist der Rollen-Name des Schauspielers unter dem simulierten Schutt.
    Seine Rolle ist die eines fähigen Solarpunk Experten. Dieser wird er aber keinesfalls gerecht. Da er aber auf Method Acting besteht, und in Rolle bleiben muss (sonst braucht es wieder 2h bis er rein kommt) wird es erst mal anstrengend. Bei Buffet lässt er sich aber gut abstellen.

    Ausgestattet ist Delta Awesome mit nutzlosen Werkzeug Requisiten. Die aber im Film immer genau die sind, die er braucht. Hilft halt in der Realität nichts.

    Konzept: Delta Awesome, Solarpunk und Held

    Aspekt: Immer in der Rolle bleiben

    * Handwerk (Schauspiel): 4
    * Kontakte: 3
    * Charisma: 3
    * Täuschung: 2



Ausstellung
-----------

Ziele der Szene:

* Erste klare Hinweise auf Kohlekraft (wenn man die Ausstellung durchforscht)
* Soziales mit den Norms
* Herausfinden, wo die Rohre hin gehen (In Modellen und Plänen)
* Man kann viele Kilogramm Proteinpaste hier finden. Die kann den Hamster anlocken oder in Fressnarkose versetzen. Besser wirkt es noch mit Betäubungsmittelzusatz. Den gibt es hier aber nicht.

Der Kameramann und Delta Awesome führen die Protagonisten schnell zur "Zentrale". Einem ehemaligen Museum (auch Drehort). Dort ist Catering aufgebaut (außerhalb der Kameras).
Plan der Norms ist es, dort nach den Dreharbeiten 500 Fans der Serie unterzubringen. Mit 10 Plätzen für VIPs. Darum wird das gerade hergerichtet.

Hier ist ein altes Museum, in dem damals Schulklassen an sehr schönen Modellen etwas über Kohlekraft lernen konnten. Alles ist nett gemacht. Gut verkauft. Mit Maskottchen.
Auch interessant ist die Mineralien Sammlung, mit einer riesen Geode, die könnten Disco interessieren.

Hier ist die Norm-Zentrale. Sie bauen für eine VIP Party gerade auf. Einige Zuschauer haben einen Backstage Pass gewonnen und werden morgen eintreffen (also nach den Protagonisten).

Beim Catering ist ein Food-Designerin (Scherie), die aus Proteinpaste echt aussehende Mehlwürmer für die Solarpunk Essens-Aufnahmen bastelt. Damit die VIPs sich wie Solarpunks fühlen können aber keine Mehlwürmer essen müssen. Die Paste ist aus Mehlwürmern. Ist denen nur nicht klar - steht aber auf der Verpackung.

Nach Aussage des Food Designerin sind die anderen tiefer in die Weltzerstörungsmaschine, um es für Dreharbeiten herzurichten. Schon seit einiger Zeit nix mehr von denen gehört. (Info: Die wurden gehamstert). Der Zugang ist eine Stahltüre. Abgeschlossen.

Jemand mit historischem Wissen (Books) kann herausfinden, dass das schwerste Teil hier wohl der Generator des Kohlekraftwerks mit Schwungrad ist. Und dass es tiefer rein gehen muss.

Klaut man den Schlüssel des Food Designerin (oder überredet sie), knackt das Schloss oder schweißt die Türe auf, kann man tiefer in die Anlage eindringen.

.. admonition:: NSC: Scherie

    Macht Catering und simuliert eine Solarpunk Welt für Zuschauer und die Gäste. Also auch Requisite und Maskenbildner

    Konzept: Ich baue die Simulation als Maskenbildner

    * Handwerk (Maske und Requisite): 4
    * Charisma: 3
    * Täuschung: 2

Kohlebunker
-----------

Ziele der Szene:

* Technisch Probleme überwinden
* Waffen bauen können
* Schmutzigkeit der Weltzerstörungsmaschine zeigen

Probleme:

* Trockener Kohlestaub (explosiv)
* unten dunkles, schwarzes Wasser, mit Ölfilm
* Die Norms haben da SFX Zeug aufgebaut. Insbesondere Kabel durchs Wasser und vorbereitete Pyrotechnik
* Es scheinen noch manche der  alten Prozesse zu laufen. Die Norms haben wild Akkus und Motoren angeschlossen, in der Hoffnung Dinge zum Leben zu erwecken. Macht sich gut auf Film.

Waffenmaterial:

* Kohlestaub (Kartoffelkanone, Rohrbomben)

Man einem schmutzigen Gang kommen die Protagonisten in eine riesige Halle. Auf Schienen wurden Güterwagen voller Kohle hier angeliefert. Auf Qualität geprüft, gemahlen, weiter transportiert. Vieles davon ist hier noch zu sehen. Massiv verrostet. Der Kohlestaub hängt in der Luft (explosiv). Auf dem Boden sind schwarze Pfützen.

Es ist wenigstens klar, wohin die Norms gegangen sind. Sie haben Akkus, Lichter und Pyro Technik hinterlassen und die Spur läuft diagonal durch das Areal. Aber in dem Gelände ist die Technik massiv fahrlässig. Könnte jederzeit in die Luft gehen.

Nächster Raum ist der, in den das Förderband führt.

Laufstege
---------

Ziele der Szene:

* Hindernisse überwinden
* Trostlosigkeit und Größe der Weltzerstörungsmaschine zeigen
* Waffen bauen können

Man muss über Laufstege und durch große Belüftungs-Lüfter klettern

Die Belüftung läuft und ist spooky von hinten beleuchtet. Die Norms haben da einen Akku angeschlossen....Sieht im Film sicher prima aus.

Unten am Boden wachsen grünlich leuchtende Staubbovisten (mutiert). Jemand mit Öko Kenntnissen wüsste, dass die Sporen psychoaktiv sind. Bei den Pilzen liegt lallend der Regisseur .

Unten ist eine Schminkgelegenheit aufgebaut. Der Dreh hier ist bereits geplant.

Probleme:

* Gebrochene Metall Stege
* Rohrlabyrinthe ( in denen sich Hamster bewegen)
* Mutierte Pilze, der Regisseur muss gerettet werden

Waffenmaterial

* Scharfe Blätter der Belüftung (Schwerter)
+ Rohrstücke (Speere, Rohrbombe, Kartoffelkanone)
* Psychoaktive Pilze

Das Förderband führt zur Brennkammer (Nicht zugänglich). Nebenan ist der Generatoren Raum. Dort ist das Nest. Hier kann man schon Rohre sehen, die dahin führen.

.. admonition:: NSC: Tscharli, Regiseur

    Regisseur in Not

    Konzept: Regisseur eine Endlosserie

    * Handwerk (Regie): 4
    * Kontakte: 3
    * Ressourcen: 3

Nest
----

Ziele der Szene:

* Endkampf

Im Nest findet man alle Arten von organischem Material. Angefangen von alten Kartoffelsäcken bis hin zu toten Tieren (gejagte Hunde und Wildschweine).

Es ist verworren und voller Trümmer der alten Zivilisation.

Der Hamster selbst hat den leblosen Norm auf den Haufen gezerrt und der wird hier sterben.

Als besonderer Schatz ist hier der große Generator mit dem schweren, wuchtigen Schwungrad.

Lösungsideen:

* Man könnte den Hamster übrigens mit einem Kübel Protein Brei so überfressen lassen, dass er weg pennt (Bio Kenntnisse)
* Oder mit den Psychoaktiven Pilzen benebeln (Bio Kenntnisse, Waffentechnik)
* Oder töten (Kampf)
* Oder die Verlorenen holen (Soziale Interaktion)
* Sich anschleichen und die Verletzten retten, die Bergungstags heimlich anbringen

.. admonition:: NSC: Hamster

    Konzept: Flauschige Killermaschine auf CCS Mission

    Dilemma: Durch die Gene verdammt

    Aspekt: Immer hungrig auf Proteine

    Der Hamster ist darauf programmiert, Protein Brocken nach unten unter die Erde - in sein Nest -  zu ziehen. Das tut er. Auch wenn sich die Brocken wehren. Kohle selbst interessiert ihn nicht.

    * Athletik: 3
    * Charisma: 2
    * Kraft: 4
    * Kampf: 3
    * Wahrnehmung: 2

    Stress, Körperlich: 6

    Stress, Geistig: 3


.. admonition:: NSC: Theophil Tierlieb

    Schauspieler in Rolle.

    Konzept: Schauspieler in der Rolle des "Theophil Tierlieb"

    Aspekt: Freund aller Tiere (also die Rolle).

    Aspekt: Gerade schwerverletztes Hamsterfutter

    * Handwerk (Schauspiel): 4
    * Kontakte: 3
    * Charisma: 3
    * Täuschung: 2

Sieges Party
------------

Aufgabe:

* Dient dem Abschluss und um nochmal richtig zu feiern. Das Abenteuer Revue passieren zu lassen und nochmal Solarpunk feeling zu schnuppern.

Einige Tage später. Die Ressourcen punkte wurden gegen Rohstoffe eingetauscht.

Die Party findet statt, als die bestellten Rohstoffe kommen und es wird zu Musik und Essen/Trinken gemeinsam das neue Bier-Zentrum gebaut.


Glossar
=======

* Solarpunks: progressive technophile Öko Hippies. "Zwanghafte Weltverbesserer"
* Verlorene: Mürrische ewiggestrige, die an der neuen Welt verzweifeln. "Militaristische revisionisten ins Jahr 1990"
* Norms: Die Mehrheit. Sie leben in einer strukturierten KI gesteuerten Gesellschaft die sich um ein ökologisches Leben mit hoher Lebensqualität kümmert. Sind sehr spezialisiert und außerhalb ihres Fachgebietes eher hilflos. "Ameisenstaat"
