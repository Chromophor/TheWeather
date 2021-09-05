# TheWeather
<h1>Wetterstation auf Basis des Arduino</h1>

<h3> Inhalt </h3>
<ul style="list-stlye-type:none">
<li><a href="#kapitell">1. Einleitung</a></h2></li>
<li><a href="#kapitel2">2. Stundenprotokoll</a></h2></li>
<br>
<h2 id="kapitell">1. Einleitung</h2>
<p>Für viele Menschen gehört es zu der Morgenroutine nach dem Aufstehen aus dem Fenster zu gucken und die Temperatur zu schätzen, damit man sich passend anziehen kann. Oftmals verschätzt man sich und es kommt zu ungewolltem und unnötigen Stress am frühen Morgen, da es überraschend doch wärmer oder kälter ist.<br>
Für genau dieses Problem lässt sich einfache Abhilfe schaffen. Eine Wetterstation, die die Temperatur übermittelt, wäre hierfür ideal. Ein kurzer Blick auf das neben dem Bett stehende Display würde genügen, um Gewissheit über die Temperatur zu haben. Zudem könnte sie mit extra Sensoren ausgestattet sein, um für den Interessierten aktuelle Daten über die Wetterlage zu messen. 
Außerdem wäre es eine witzige Begegnung beim Aufstehen, den Vögeln mittels einer Kamera bei deren ausgibigen Körnerfrühstück zuzusehen und sich an der Natur zu erfreuen. Mit einem schönen Design stört das Futterhäuschen mit der Wetterstation und Kamera auch nicht beim Blick aus dem Fenster.
Unsere Wetterstation (Name fehlt) ist eine hervorragende Art das Aufstehen zu erleichtern und überflüssigen Stress zu vermeiden - so steht man gerne auf!<br></p>

<h2 id="kapitel2">2. Stundenprotokoll</a></h2></li>

<p><b>Dienstag 03.08.2021</b><br>
  Wir haben einen GitHub Account erstellt und eine Projekt-Idee entwickelt. Am Nachmittag haben wir mit dem Arduino erste Experimente mit LEDs durchgeführt.<br><br>

  <b>Mittwoch 04.08.2021</b><br>
  In der heutigen Stunde haben wir gemeinsam mit dem Arduino Fortschritte mit der Bedienung der LEDs gemacht. Am Nachmittag haben wir getrennt Experimente z.B. mit Bewegungssensoren  durchgeführt.<br><br>
  
<b>Dienstag 10.08.2021</b><br>
  Heute haben wir eine Liste unserer benötigten Sensoren und deren Funktion in unserer Wetterstation zusammengestellt. Diese sind unten mit der jeweiligen Funktion und zugehöriger Produktbeschreibung zu finden. Anschließend haben wir uns das Design der Wetterstation eingehender überlegt. Eine Konstruktion, die aus einem Gehäuse in Form eines Hauses bestehen soll, wie die unsen stehende Skizze verdeutlichen soll. Hier sind die Abmessungen unserer Konstruktion ebenfalls abzulesen.</p>
<p></br><b>Welche Sensoren sollen eingebunden weden?</b><br>
<li>Temperatur -> Thermometer -> Produkt: BME280</li><br>
<li>Luftfeuchtigkeit -> Hygrometer -> Produkt: BME280</li><br>
<li>Luftdruck -> Barometer -> Produkt: BME280</li><br>
<li>Höhe -> Alitmeter -> Produkt: BME280</li><br>
<li>Sonnenscheindauer/-intensität -> Fotowiederstand -> Produkt: BH 1750 12C (https://www.makershop.de/sensoren/lichtsensor/lichtsensor-bh1750)</li></p>

<p><b>Dienstag 24.08.2021</b><br> An diesem Tag haben wir weiter an unserem Design gefeilt und uns Ideen zur Materialauswahl, Größe und Aufstellungsart gemacht. Zudem haben wir uns für die technischen Komponenten im Inneren die Anordnung überlegt, um eine einfache sowie intuitive Bedienung mit freundlichen Wartungsbedingungen zu ermöglichen. Außerdem haben wir unsere GitHub Seite verbessert und mit einer Einleitung versehen. Zuhause haben wir mit den Sensoren schon ein bisschen programmiert. Auch haben wir an einem möglichen Konzept, die von der Wetterstation erfassten meteorologischen Daten in einer Excel-Tabelle auszuwerten, gearbeitet (siehe Screen-Shot). Dabei wurden mit einem Test-Programm fiktive Werte für Temperatur und Niederschlag generiert und im Seriellen Monitor angezeigt.</p><br>

![Screenshot (83)](https://user-images.githubusercontent.com/88386049/132125215-9f88bbf9-85d5-4508-9bcc-aa9dc4ed3b0d.png)
![Screenshot (82)](https://user-images.githubusercontent.com/88386049/132125171-a4d30667-4c50-41a6-80e2-d9d35f5a4e70.png)
![Screenshot (81)](https://user-images.githubusercontent.com/88386049/132124410-a5e63ba7-c7ea-46d3-a904-8019e77caf88.png)

<p><b>Mittwoch 25.08.2021</b><br> Diese Stunde haben wir dazu genutzt, unser Design weiterzuentwickeln. Dabei haben wir unser Design hinsichtlich der Funktion der Sensoren angepasst, dass man möglichst genaue Messwerte erhält, ohne die Sensoren zu beschädigen. Letztendlich haben wir ein Design ausgewählt, das funktional sehr gut zu unserem Projekt passt und zusätlich mobil und in jedem Garten ausstellbar ist. Außerdem haben wir bereits erste Sensoren ausprobiert. Bezüglich der Auswertung hatten wir besonders beim Temperatursensor Erfolg und konnten am Ende der Stunde die Temperatur am Bildschirm ablesen.</p>

<p><b>Dienstag 31.08.2021</b><br>Diese Stunde bot uns die Möglichkeit, in der Sammlung neue Sensoren für unsere Wetterstation zu suchen. Wir haben der Sammlung ein Datalogging-Shield und den Sensor BME280, den wir ursprünglich bestellen wollten, entnommen. Diese neuen Bestandteile bieten uns unterschiedliche Möglichkeiten. So kann der Sensor BME280 von der Firma Bosch die Temperatur, die Luftfeuchtigkeit, den Luftdruck bestimmen. Mit dem gemessenen Luftdruck kann außerdem die Höhe über dem Meeresspiegel berechnet werden. Mit dem Datalogging-Shield können wir die erhobenen meteoroloischen Daten auf einer SD-Speicherkarte sichern. Als weiterführende Planung hat sich Henrik bereits mit der Idee beschäftigt, wie wir die meteorologischen Daten visualisieren und damit auch auswerten können. Er hatte die Idee, diese Daten auf einer Website darzustellen und versuchte einen I-Frame für eine Tabelle zu verwenden. Thorben hat sich in der Stunde damit beschäftigt, den Code für den BME280 Sensor zu entwickeln. Dies gestaltete sich deshalb umständlich, weil der Sensor stark Erschütterungsabhängig ist. So gab der angeschlossene Sensor nach zwei korrekten Messungen aufgrund minimlaer Bewegung einen falschen Wert (z.B. statt 23,5°C einen falschen Wert von 150°C). Währendessen hat Gernot ein Erdbebenwarnsystem mit einem Erschütterungssensor entwickelt.
