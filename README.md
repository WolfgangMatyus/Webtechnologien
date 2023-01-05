# Webtechnologien
FH Technikum Wien Projekt

https://wolfgangmatyus.github.io/Webtechnologien/


Struktur:

Alle für den User sichtbaren Pages werden im Hauptverzeichnis 'Webtechnologien' geführt, 
alle funktionalen (für den User nicht sichbaren) Pages welche daten verarbeiten oder Funktionen aufrufen sollen befinden sich im 'included' Ordner.
Diese werden zur besseren übersicht immer mit name.inc.php bezeichnet um auf einen Blick zu sehen das es sich um ein inkludiertes file handelt.
Die Übergabe der Parameter aus den Html Forms wird immer über POST an eines dieser inc.php files zur weiteren Verarbeitung übergeben.

Die Stylesheets befinden sich im 'css' Verzeichnis für selbst definierte Styles und im 'bscss' Verzeichnis für Bootstrap Stylesheets.
Im 'bsjs' Verzeichniss befinden sich die für Bootstrap erforderlichen JavaScript files.

Weiters werden die Datenbanken bzw Tabellen im 'DB' Verzeichnis gespeichert.
Diese Datenbanken müssen bei Bedarf vor Verwendung der Webpage in phpMyAdmin importiert werden.

Datenbank:
Das "dbaccess.inc.php" file mit den Zugangsdaten zur Datenbank befindet sich ebenfalls im 'included' Vereichnis
Der aktuelle Datenbankname lautet: "phpproject01"


