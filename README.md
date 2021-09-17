# TheWeather
<h1>Wetterstation auf Basis des Arduino</h1>

<h3> Inhalt </h3>
<ul style="list-stlye-type:none">
<li><a href="#kapitell">1. Einleitung</a></h2></li>
<li><a href="#kapitel2">2. Stundenprotokoll</a></h2></li>
<li><a href="#kapitel3">3. Materialien</a></h2></li>
<li><a href="#kapitel4">4. Quellen</a></h2></li>
<br>
<h2 id="kapitell">1. Einleitung</h2>
<p>Für viele Menschen gehört es zu der Morgenroutine nach dem Aufstehen aus dem Fenster zu gucken und die Temperatur zu schätzen, damit man sich passend anziehen kann. Oftmals verschätzt man sich und es kommt zu ungewolltem und unnötigen Stress am frühen Morgen, da es überraschend doch wärmer oder kälter ist.<br>
Für genau dieses Problem lässt sich einfache Abhilfe schaffen. Eine Wetterstation, die die Temperatur übermittelt, wäre hierfür ideal. Ein kurzer Blick auf das neben dem Bett stehende Display würde genügen, um Gewissheit über die Temperatur zu haben. Zudem könnte sie mit extra Sensoren ausgestattet sein, um für den Interessierten aktuelle Daten über die Wetterlage zu messen. 
Außerdem wäre es eine witzige Begegnung beim Aufstehen, den Vögeln mittels einer Kamera bei deren ausgibigen Körnerfrühstück zuzusehen und sich an der Natur zu erfreuen. Mit einem schönen Design stört das Futterhäuschen mit der Wetterstation und Kamera auch nicht beim Blick aus dem Fenster.
Unsere Wetterstation <b>(Name fehlt)</b> ist eine hervorragende Art das Aufstehen zu erleichtern und überflüssigen Stress zu vermeiden - so steht man gerne auf!<br></p>

<h2 id="kapitel2">2. Stundenprotokoll</a></h2></li>

<p><b>Dienstag 03.08.2021</b><br>
  Wir haben einen GitHub Account erstellt und eine Projekt-Idee entwickelt. Unsere Ideen reichten von einem einfachen Spiel bis zum Bau einer Wetterstation, für welche wir uns auch entschieden haben. Am Nachmittag haben wir mit dem Arduino erste Experimente mit LEDs durchgeführt, um uns mit der Entwicklungsumgebung des Arduinos und den möglichen Anschlüssen vertraut zu machen. Dabei haben wir z.B. eine grüne LED an digitalen Pin 13 und einen rote LED an den digitalen Pin 4 angeschlossen. Digitale Pins sind nur auf digitale Signale ausgelegt, geben diese entweder aus oder lesen sie ein. Digitale Signale sind z. b. 0 und 1 oder LOW und HIGH oder 0v und 5V (Volt). Das bedeutet, dass wir die zwei LEDs unabhängig von einander blinken lassen konnten. Status HIGH bedeutet LED an und LOW LED aus.<br>

  <b>Mittwoch 04.08.2021</b><br>
  In der heutigen Stunde haben wir gemeinsam mit dem Arduino Fortschritte mit der Bedienung der LEDs gemacht. Am Nachmittag haben wir getrennt Experimente z.B. mit Bewegungssensoren  durchgeführt. Diese waren nur zum Teil erfolgreich. Der Bewegungssensor hat zwar Bewegungen erkannt und auch wie programiert bei der angeschlossenen LED den Status auf HIGH (an) gesetzt, manchmal hat der Sensor aber auch ohne eine Bewegung die angeschlossene LED aktiviert. Dies könnte an den schlechten Lichbedingungen liegen, die Abends herrschen.<br>
  
<b>Dienstag 10.08.2021</b><br>
  Heute haben wir eine Liste unserer benötigten Sensoren und deren Funktion in unserer Wetterstation zusammengestellt. Diese sind unten mit der jeweiligen Funktion und zugehöriger Produktbeschreibung zu finden. Anschließend haben wir uns das Design der Wetterstation eingehender überlegt. Eine Konstruktion, die aus einem Gehäuse in Form eines Hauses bestehen soll, wie die <b>unten stehende Skizze </b>verdeutlichen soll. Hier sind die Abmessungen unserer Konstruktion ebenfalls abzulesen.</p>
<p></br><b>Welche Sensoren sollen eingebunden weden?</b><br>
<li>Temperatur -> Thermometer -> Produkt: BME280</li><br>
<li>Luftfeuchtigkeit -> Hygrometer -> Produkt: BME280</li><br>
<li>Luftdruck -> Barometer -> Produkt: BME280</li><br>
<li>Höhe -> Alitmeter -> Produkt: BME280</li><br>
<li>Sonnenscheindauer/-intensität -> Fotowiederstand -> Produkt: BH 1750 12C (https://www.makershop.de/sensoren/lichtsensor/lichtsensor-bh1750)</li><br>Eine Liste aller Materialien ist <a href="#kapitel4">hier</a> zu finden.</p>

<p><b>Dienstag 24.08.2021</b><br> 
  An diesem Tag haben wir weiter an unserem Design gefeilt und uns Ideen zur Materialauswahl, Größe und Aufstellungsart gemacht. Zudem haben wir uns für die technischen Komponenten im Inneren die Anordnung überlegt, um eine einfache sowie intuitive Bedienung mit freundlichen Wartungsbedingungen zu ermöglichen. Außerdem haben wir unsere GitHub Seite verbessert und mit einer Einleitung versehen. Zuhause haben wir mit den Sensoren schon ein bisschen programmiert. Auch haben wir an einem möglichen Konzept, die von der Wetterstation erfassten meteorologischen Daten in einer Excel-Tabelle auszuwerten, gearbeitet (siehe Screenshot). Dabei wurden mit einem Test-Programm fiktive Werte für Temperatur und Niederschlag generiert und im Seriellen Monitor angezeigt.</p>

![Screenshot (83)](https://user-images.githubusercontent.com/88386049/132125215-9f88bbf9-85d5-4508-9bcc-aa9dc4ed3b0d.png)
<p>Code für das fiktive Testprogramm</p>

![Screenshot (82)](https://user-images.githubusercontent.com/88386049/132125171-a4d30667-4c50-41a6-80e2-d9d35f5a4e70.png)
<p>Ausgabe im Seriellen-Monitor</p>

![Screenshot (81)](https://user-images.githubusercontent.com/88386049/132124410-a5e63ba7-c7ea-46d3-a904-8019e77caf88.png)
<p>Auswertung der Daten in Excel mit Bildung eines Mittelwertes aus den fiktiven Werten.</p>

<p><b>Mittwoch 25.08.2021</b><br>
  Diese Stunde haben wir dazu genutzt, unser Design weiterzuentwickeln. Dabei haben wir unser Design hinsichtlich der Funktion der Sensoren angepasst, dass man möglichst genaue Messwerte erhält, ohne die Sensoren zu beschädigen. Letztendlich haben wir ein Design ausgewählt, das funktional sehr gut zu unserem Projekt passt und zusätlich mobil und in jedem Garten ausstellbar ist. Außerdem haben wir bereits erste Sensoren ausprobiert. Bezüglich der Auswertung hatten wir besonders beim Temperatursensor Erfolg und konnten am Ende der Stunde die Temperatur am Bildschirm ablesen.</p>

<p><b>Dienstag 31.08.2021</b><br>
  Diese Stunde bot uns die Möglichkeit, in der Sammlung neue Sensoren für unsere Wetterstation zu suchen. Wir haben der Sammlung ein Datalogging-Shield und den Sensor BME280, den wir ursprünglich bestellen wollten, entnommen. Diese neuen Bestandteile bieten uns unterschiedliche Möglichkeiten. So kann der Sensor BME280 von der Firma Bosch die Temperatur, die Luftfeuchtigkeit, den Luftdruck bestimmen. Mit dem gemessenen Luftdruck kann außerdem die Höhe über dem Meeresspiegel berechnet werden. Mit dem Datalogging-Shield können wir die erhobenen meteoroloischen Daten auf einer SD-Speicherkarte sichern. Als weiterführende Planung hat sich Henrik bereits mit der Idee beschäftigt, wie wir die meteorologischen Daten visualisieren und damit auch auswerten können. Er hatte die Idee, diese Daten auf einer Website darzustellen und versuchte einen I-Frame für eine Tabelle zu verwenden. Thorben hat sich in der Stunde damit beschäftigt, den Code für den BME280 Sensor zu entwickeln. Dies gestaltete sich deshalb umständlich, weil der Sensor stark Erschütterungsabhängig ist. So gab der angeschlossene Sensor nach zwei korrekten Messungen aufgrund minimlaer Bewegung einen falschen Wert (z.B. statt 23,5°C einen falschen Wert von 150°C). Währendessen hat Gernot ein Erdbebenwarnsystem mit einem Erschütterungssensor entwickelt. GERNOT BITTE DEINE BEOBACHTUNG</p>

<p><b>Mittwoch 01.09.2021</b><br>
  Nachdem wir in der letzten Doppelstunde bei der Genauigkeit des BME280 Sensors Probleme hatten und leider falsche Werte gemessen haben, mussten wir uns in der heutigen Stunde mit dem Debuggen des Sensors beschäftigen. Zum Ende der Stunde sind wir zu der Erkenntnis gelangt, dass eines der Jumper-Kabel einen Wackelkontakt haben muss oder die Kontaktverbindung des, weshalb teilweise falsche Werte übermittelt wurden. Dieses Problem haben wir behoben, indem wir den BME280 erstmal provisorisch mit Tesa-Film an die Jumperkabel geklebt haben. In der finalen Installation des BME280 an der Wetterstation müssen wir uns überlegen, ob wir den Senosor ebenfalls verkleben oder an die Jumpüer-Kabel löten. Dieses könnte im Zeifelsfall nötig sein, weil wir sonst im Betrieb falsche Werte mit der Wetterstation erfasen. Wie aber in den unten folgenden Screenshots zu sehen ist, funktionieren die Messungen des BME280 nun bis auf die Höhenangabe genau. Diese scheint noch immer fehlerhaft zu sein. Die Raumtemperatur von ca. 25°C und einer Luftfeuchtigkeit von ca. 50% konnten wir aber mit unser eigenen Wetterstation beweisen. Auch der Luftdruck von 1018hPa entspricht den aktuellen meteorologischen Daten. Nebenbei haben wir uns in der Stunde mit der Implementierung eines Fotowiederstandes beschäftigt und das Projekt mit dem Erschütterungssensor weiter verfolgt.</p><br>

![Screenshot (82)](https://user-images.githubusercontent.com/88386049/132136199-e0431856-ff5b-4b89-ae7c-6d0cf2e9d7ed.png)
<p>Code für den Sensor BME280</p>

![Screenshot (81)](https://user-images.githubusercontent.com/88386049/132136200-133b7af6-c8e3-4adb-9e8c-fc44daefaab2.png)
<p>Ausgabe der gemessenen Daten auf dem Seriellen Motitor.</p>

<p><b>Dienstag 07.09.2021</b><br>
  In der heutigen Doppelstunde haben wir zuerst an verschiedenen Projekten gearbeitet. Henrik hat an einer Lösung gearbeitet, eine Excel-Datei auf einer Website mit einzubinden, damit wir unsere meteorologischen Messwerte visualisieren können. Währenddessen hat Thorben versucht, auf den Arduino ein Datalogging-Shield zu setzen und Gernot hat an einem LCD-Display gearbeitet, worauf im Finalen Aufbau die Ergebnisse der Sensorenauswertung gezeigt werden sollen. Doch nachdem wir Ihnen unser Problem mit den falschen Messwerten beim BME280 Sensor geschildert hatten, haben wir uns dazu entschlossen, in der restlichen Stunde das Löten von elektronischen Bausteinen zu erlernen. Das Löten ist ein thermisches Verfahren, bei dem elektrisch leitende Verbindungen zwischen Feststoffen stoffschlüssig erschaffen werden. In unserem Fall haben wir eine 6 Pin (männlich auf männlich) Stiftleiste mit den 6 Pins am BME280 Sesor verlötet. Im Vorhinein konnten wir an einem T-Cobbler für den RaspberryPi das Löten ausprobieren. Unsere Verlötung an dem BME280 gelasng uns gut und zeigte nach der Überprüfung am PC eine direkte Wirkung: wir konnten gleich richtige Sensordaten trotz einer minimalen Bewegung erheben. Dies ist ein großer Vortschritt im Gegensatz zu der vorherigen misslichen Lage und hat uns sehr gut weitergeholfen.</p>

<details><summary>Screenshots zum Lötversuch</summary>
  
![20210907_160715](https://user-images.githubusercontent.com/88386049/132398754-e1a37693-f48c-49d6-839b-0f03852d0f2f.jpg)
<p>Lötveruche am T-Cobbler</p>

![20210907_161527](https://user-images.githubusercontent.com/88386049/132398769-7e5ded13-085c-4e5d-8fdd-622e15cd4064.jpg)
<p>Lötprozess am BME280 Sensor</p>

</details>

<p><b>Mittwoch 08.09.2021</b><br>
  Wie abhängig man von der digitalen Ausstattung ist, erkennt man, wenn man in der Informatik-Stunde sitzt und das Internet, sowie die Computer nicht funktionieren. Genau dies war heute der Fall. Die Server von IServ waren nicht betriebsbereit, weshalb wir die Informatik-Stunde unplugged gestalten mussten. Wie arbeitet man im Informatikunterricht ohne Computer produktiv? Wir haben die Zeit genutzt und uns erneut dem Design unserer Wetterstation gewidmet und eine Einkaufsliste für die Materialien erstellt, die Gernot am Donnerstag im Baumarkt erwerben wird. Als dann plötzlich das Internet wieder funktionierte haben wir uns die restlichen Minuten mit den jeweils aufgeteilten Projekten beschäftigt. Leider war das Internet währenddessen sehr langsam und erschwerte das Arbeiten. Zum Abschluss der Stunde konnten wir das vorgenommene Arbeitspensum wegen der technischen schwierigkeiten am Anfang nicht erreichen. In der nächsten Doppelstunde arbeiten wir deshalb an dem letzten Arbeitsstand weiter und versuchen Zuhause, soweit möglich, weiter zu arbeiten.</p>
  
<p><b>Dienstag 14.09.2021</b><br> 
  Heute ist der Informatikunterricht leider ausgefallen. Zuhause haben wir uns weiter mit dem Projekt beschäftigt. So hat Thorben weiter an dem Datalogging-Shield gearbeitet und ein Skript geschrieben, das es uns ermöglichen soll, Daten auf einer SD-Karte zu speichern. Das Skript funktioniert auch, jedoch gab es immer wieder die Fehlermeldung, dass die SD-Karte nicht gelesen werden kann (siehe Screenshot). Das kann mehrere Ursachen haben. Zum einen kann die Felhlermeldung an die Größe der SD-Karte gekoppelt sein. Ich habe eine 64GB SD-Karte verwendet und es kann sein, dass das Datalogging-Shield nicht mit derartig großen SD-Karten arbeitet kann. Diese Theorie halte ich aber nicht für sehr wahrscheinlich. Viel mehr denke ich, dass die SD-Karte falsch formatiert ist und deshalb nicht von dem Datalogging-Shield gelesen werden kann. Das Problem dabei war, dass man die 64GB SD-Karte nicht in das benötigte FAT Format umformatieren konnte. Daher haben wir zu Hause nach anderen kleineren und anders formatierten SD-Karten gesucht.</p>
  
<p><b>Mittwoch 15.09.2021</b><br> 
  Heute ist der Informatikunterricht auch ausgefallen. Wir haben aber die Zeit genutzt und unser Repository überarbeitet. Die Struktur gefällt uns so jetzt gut.

  
<h2 id="kapitel3">3. Materialien</a></h2>


<p>Hier ist eine Liste mit allen Materialien, die wir für unsere Wetterstation brauchen. Alle eingesetzten Materialien sind mit einem Haken gekennzeichnet:
<b>Produktbeschreibung jeweils hinzufügen!!!</b></p>

<p><b>Sensoren:</b></p>

- [x] Temperatur -> Thermometer -> Produkt: BME280
- [x] Luftfeuchtigkeit -> Hygrometer -> Produkt: BME280
- [x] Luftdruck -> Barometer -> Produkt: BME280
- [x] Höhe -> Alitmeter -> Produkt: BME280
- [ ] Sonnenscheindauer/-intensität -> Fotowiederstand -> Produkt: BH 1750 12C

<p><br><b>Weitere technische Bauteile:</b></p>

- [x] Arduino UNO R3
- [x] Breadboard
- [x] LCD Display
- [x] Datalogging-Shield 

<p><br><b>Bauteile für das Gehäuse der Wetterstation:</b></p>

- [x] Hier kannst du deine Materialliste eintragen Gernot...

<h2 id="kapitel4">4. Quellen</a></h2>
<li>file:///G:/Klasse%2012bc/Informatik/DE_SolderComic_L%C3%B6ten_loeten.pdf</li>
