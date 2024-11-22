# 4Ue_ITL12_CalRechnerMario
Übung ITL
# Primzahlen-loga-Bezeingabe
Primzahlen/loga/Bezeingabe
-----



## Mario

## Aufgabenbeschreibung


### 1.	Aufgabenstellung
**Kalorienrechner:**
1.	Aufgabenstellung
Erstelle mit PHP eine Applikation, die folgende Werte einliest:
1.	Geschlecht, Alter, Gewicht und Größe
2.	tägliche Bewegung 
a)	Danach soll ein Kalorienbedarf berechnet werden:
Frauen: 655,1 + (9,6 x Körpergewicht in kg) + (1,8 x Körpergröße in cm) – (4,7 x Alter in Jahren)
Männer: 66,47 + (13,7 x Körpergewicht in kg) + (5 x Körpergröße in cm) – (6,8 x Alter in Jahren)
b)	dieser wird über den sogenannte PAL Faktor auf den Tag angepasst (in nachfolgender Tab)

Der Benutzer soll dabei angeben wieviel Zeit er auf die jeweilige Tätigkeit verwendet (in Stunden). Ein Formular mit allen Werten (ausser schlafen) wird angezeigt und überall kann eine Zeit eingegeben werden. Danach wird ein durchschnittlicher PAL Faktor berechnet und damit der oben berechnete Kalorienbedarf multipliziert.
Bsp: 4 h sitzend, 6 h Büro, 2 h stehend/gehend = 12 h Gesamt dh. 12 h Schlaf bleiben übrig. Berechnung: 4*1,2 + 6*1,45+2*1,85+12*0,95 / 24 = 1,19 (Durchschnitt)

Das Ergebnis wird als täglicher Kalorienbedarf welche notwendig ist, um sein Gewicht zu halten, angegeben.
Um abzunehmen sollten ca. 400 Kalorien weniger konsumiert werden. Beim Zunehmen entsprechend deutlich mehr.


2. Übung:
Benutzerinteraktion:

Der Benutzer sieht ein Formular mit Fragen zu Geschlecht, Alter, Gewicht und Größe sowie Aktivitäten.
Dateneingabe:

Der Benutzer gibt die notwendigen Daten ein und klickt auf **„Berechnen“.**
Datenverarbeitung (PHP):

Der Server verarbeitet die eingegebenen Daten.
Es wird der Kalorienbedarf basierend auf dem Geschlecht, Alter, Gewicht und Größe berechnet.
Ein Activity Level Factor (PAL) wird berechnet, um den täglichen Aktivitätsniveau berücksichtigt zu werden.
Ergebnis Berechnung:

**Der tägliche Kalorienbedarf basierend auf der PAL wird errechnet.**
Ausgabe des Ergebnisses:

Das Ergebnis wird dem Benutzer angezeigt, wie viele Kalorien pro Tag er verbrauchen sollte
-----------------------------------------------


### Screenshot Angaben-zur-Person
-![Ausgabe Code übung 4]()
### berechnung-durchführen
-![Ausgabe Code übung 4]()
### Screenshot Tägliche Bewegung
-![Ausgabe Code übung 4]()

## Lizenz
Dieses Projekt ist für Bildungszwecke im Rahmen des ITL-Unterrichts an der Landesberufsschule Eibiswald gedacht.