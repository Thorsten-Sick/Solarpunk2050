# Solarpunk 2050

Ein FATE Setting - Es ist das Jahr 2050. Die Solarpunks haben die Menschheit gerettet. Und obwohl jetzt alles gut sein könnte ... ist es das nicht.

Die *Solarpunks* leben ihre hyper progressive Technik Utopie während die *Normalen* meinen, dass man mit der Rettung der Welt doch schon genug erreicht hat und man jetzt endlich mal die neuesten Serien fertig schauen könnte - die KI hat sie immerhin als persönliche Empfehlung markiert. Und die *Verlorenen* wollen zurück in das 1990 wie es nie existierte. Gerne auch mit Gewalt.

Die Arbeit der Solarpunks ist also noch nicht beendet. Und da sind sie froh darüber.

Lötkolben auspacken. Wir brauchen eine neue autonome Solarfarm für die Erweiterung der Community. Wer sichert diesmal den Perimeter ? Haben wir genügend Drohnen ?

[Solarpunk 2050 PDF](https://github.com/Thorsten-Sick/Solarpunk2050/releases)

## Status

Das System ist spielbar aber in der Entwicklung. Der richtige Zeitpunkt für alle mit Solarpunk spirit um einzusteigen und mitzuwirken.

Lasst uns diese neue Welt gemeinsam entdecken und gestalten.

## Beitragen

### Charaktere

Baue Spielercharaktere und NSCs. Unterstützt dich das Material ? Wenn du etwas sehr gelungen findest, können wir es auch direkt ins Szenario aufnehmen.

### Abenteuer

Baue ein Abenteuer in dieser Welt. Spiele mit deinen Freunden. Was im Szenario ist noch unklar ? Fandest du Lücken ? Auch hier wäre es großartig, deine besten Ergebnisse ins Szenario zu übernehmen

### Communities und Städte

Baue originelle Communities und Städte. Nimm am besten etwas aus deiner Region. Das Szenario freut sich über mehr Städte !

### Am Setting

Wenn du das ganz dicke Brett bohren willst: Trage am Setting bei. Starte ein Issue, fange dort an, deine Idee zu diskutieren und erstelle danach ein Pull Request mit deinen Text Änderungen

### Solarpunk international

Wie gestaltet sich die Solarpunk Veränderung in anderen Ländern ?

### Bilder

Dieses Setting braucht dringend stimmige Bilder. Wenn du malen kannst, wäre ich über deine Hilfe sehr dankbar.

Ich bin künstlerisch absolut unbegabt und alle hier gelisteten Vorschläge sind dementsprechend zu bewerten. Leg einfach los !

* Studio Ghibli Style Bilder der Solarpunk Communities
* Portraits
* Städte der Norms
* Werbung der Norms für die Produkte der Zukunft
* Brauchbare Pläne für Geräte, mit technischen Details, wie sie die Solarpunks nutzen
* Eher kindliche Zeichnungen der neuesten Pläne der Verlorenen "Hir stopfst du die Birdose in das Rohrund dann drückst du den Bumm Knopf"
* Karten

Speziell wären auch direkt für die Spiele nutzbare Bilder hilfreich. Speziell wenn die in Online Portalen (Token für Roll20 u.ä.) nutzbar sind. Die kommen dann zu den Abenteuern oder in eine eigene ZIP Datei als Zusatz.

Mullana ist zum Projekt dazu gestoßen. Sie mal großartig und hat Solarpunk verinnerlicht

### Soundtracks

Welche Soundtracks unterstützen am ehesten das Lebensgefühl der Fraktionen ?

### Regeln

Aktuell habe ich mich mit spezialisierten Regeln noch nicht groß beschäftigt. Aber angepasste Stressbalken, Extras für Cyberware und ähnliches und eine Mechanik um die eigene Community zu erweitern wären wohl sehr nützlich... was denkst du ?

### Testen und Feedback

Teste das Szenario mit deinen Freunden, gib auf Issues dein Feedback. Was fehlt ?

## Tools

Spell checking mittels:

aspell --lang=DE_DE --word-list-path=./aspell -c abenteuer.rst

## Quellen

https://jerryjenkins.com/worldbuilding/
https://www.masterclass.com/articles/how-to-write-a-believable-world#4-examples-of-successful-worldbuilding

Zu beantworten:

* Geschichte (grobe Timeline), Trauma, Power shifts
* Welche Katatrophen, welche Auswirkungen
* Grenzen (klarstellen, es spielt in D)

## Logos

Powered by Fate logo von hier herunter geladen und integriert. Lizenz erlaubt das: https://faterpg.de/fate-lizenz/


## Schreib tips

Vermeiden:

* Floskeln
* Füllwörter
* Wiederholungen (Thesaurus nutzen !)
* passiv
* Wiederholte Wortanfänge
* Schachtelsätze

Nutzen:
* Verben
* Sätze so 10-20 Worte lang

## Tool Tips

I am using VSCode and the extensions:

* LaTeX Workshop

## Icons

https://pictogrammers.com/library/mdi


## Design with Latex

https://media.ccc.de/v/37c3-lightningtalks-58031-for-lazy-designers-the-pagelayout-latex-class
Links: [GitHub](https://github.com/friedemannbartels/latex-pagelayout), [CTAN](https://www.ctan.org/pkg/pagelayout)

@dotpax@hachyderm.io


## Compiling

### LatexMK

Um Latex zu bauen nutzt man das spezielle LatexMk Kommando.

latexmk -f  -pdf -pdflatex="pdflatex -interaction=nonstopmode" sourcebook.tex
latexmk -c sourcebook.tex

parameters:
-cd First move into the directory of the source file
-lualatex (use lualatex)
-WError: Error bei undefinierten citations or references

example:
% latexmk ‐pvc ‐ps thesis# run latex enough times to resolve
                           cross‐references, make a postscript
                           file, start a previewer.  Then
                           watch for changes in the source
                           file thesis.tex and any files it
                           uses.  After any changes rerun latex
                           the appropriate number of times and
                           remake the postscript file.  If latex
                           encounters an error, latexmk will
                           keep running, watching for
                           source file changes.

### PDFLatex

parameters:
‐halt‐on‐error Exit with an error code when an error is encountered during processing.
‐interaction mode Sets  the  interaction  mode.   The mode can be either batchmode, nonstopmode, scrollmode, and errorstopmode.  The meaning of these modes is the same as that of the corresponding \commands.
‐output‐directory directory Write output files in directory instead of the current directory.  Look up input files in directory first, the along the normal search path.


### EPub