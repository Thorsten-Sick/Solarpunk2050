Playing cards. Original template from https://tex.stackexchange.com/questions/47924/creating-playing-cards-using-tikz

Hope you enjoy my template. Feel free to use it for whatever you want. Thanks to the others who answered above and helped out with some code snippets and stuff! My template is your legacy. ;-)

For the cards' elements (like title box, price box etc.) I made new commands for simplifying usage. This is what to do for generating each card:

\begin{tikzpicture}
    \cardbackground{img/illustration.jpg}
    \cardtypeItem
    \cardtitle{the card's title}
    \cardcontent{fictitious quote for card character}{the card's effect, description or whatever comes to your mind}
    \cardprice{5}
    \cardborder
\end{tikzpicture}

## Tikz

https://www.overleaf.com/learn/latex/TikZ_package

sudo apt-get install texlive-pictures

## Latex Symbols

https://sites.math.washington.edu/~reu/docs/latex_symbols.pdf