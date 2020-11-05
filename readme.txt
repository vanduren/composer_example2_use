video met local package:
https://www.youtube.com/watch?v=Gc2cVCAOPK0&t=1323s&ab_channel=NovicaVukobratovic


De "minimum-stability": "dev"
werkt als volgt:
wanneer je een tag aanmaakt met bijv de naam v1.0.0-dev en checkout
dan zal die ook meegenomen worden bij "composer install" anders wordt alles met dev of beta etc overgeslagen.
Let op de versie moet dan een range aangeven:
bijv ~1.0.0: alles groter of gelijk aan 1.0.0 en kleiner dan 2.0.0