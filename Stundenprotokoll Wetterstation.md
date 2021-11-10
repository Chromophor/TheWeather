# --> TheWeather <--
<h1>Wetterstation auf Basis des Arduino</h1>

<h3> Inhalt </h3>
<ul style="list-stlye-type:none">
<li><a href="#kapitell">1. Einleitung</a></h2></li>
<li><a href="#kapitel2">2. Stundenprotokoll</a></h2></li>
<li><a href="#kapitel3">3. Materialien</a></h2></li>
<li><a href="#kapitel4">4. Quellen</a></h2></li>
<br>
<h2 id="kapitell">1. Einleitung</h2>
<p>Für viele Menschen gehört es zu der Morgenroutine, nach dem Aufstehen aus dem Fenster zu gucken und die Temperatur zu schätzen, damit man sich passend anziehen kann. Oftmals verschätzt man sich und es kommt zu ungewolltem und unnötigen Stress am frühen Morgen, da es überraschend doch wärmer oder kälter ist.<br>
Für genau dieses Problem lässt sich einfache Abhilfe schaffen. Eine Wetterstation, die die Temperatur übermittelt, wäre hierfür ideal. Ein kurzer Blick auf das neben dem Bett stehende Display würde genügen, um Gewissheit über die Temperatur zu haben. Zudem könnte sie mit extra Sensoren ausgestattet sein, um für den Interessierten aktuelle Daten über die Wetterlage zu messen. 
Außerdem wäre es eine witzige Begegnung beim Aufstehen, den Vögeln mittels einer Kamera bei deren ausgibigen Körnerfrühstück zuzusehen und sich an der Natur zu erfreuen. Mit einem schönen Design stört das Futterhäuschen mit der Wetterstation und Kamera auch nicht beim Blick aus dem Fenster.
Unsere Wetterstation <b>(Name fehlt)</b> ist eine hervorragende Art das Aufstehen zu erleichtern und überflüssigen Stress zu vermeiden - so steht man gerne auf!<br></p>
<b>contributors:<br>
@Obeliks003<br>
@xxxGernchenxxx<br>
@TheMoonlandingV2<br></b>

<h2 id="kapitel2">2. Stundenprotokoll</a></h2></li>

<details id="Link"><summary>Liste aller protokollierten Stunden mit zusätzlichem Link</summary>
  <li><a href="#Stunde1">Dienstag 03.08.2021</a></li>
  <li><a href="#Stunde2">Mittwoch 04.08.2021</a></li>
  <li><a href="#Stunde3">Dienstag 10.08.2021</a></li>
  <li><a href="#Stunde4">Dienstag 24.08.2021</a></li>
  <li><a href="#Stunde5">Mittwoch 25.08.2021</a></li>
  <li><a href="#Stunde6">Dienstag 31.08.2021</a></li>
  <li><a href="#Stunde7">Mittwoch 01.09.2021</a></li>
  <li><a href="#Stunde8">Dienstag 07.09.2021</a></li>
  <li><a href="#Stunde9">Mittwoch 08.09.2021</a></li>
  <li><a href="#Stunde10">Dienstag 14.09.2021</a></li>
  <li><a href="#Stunde11">Mittwoch 15.09.2021</a></li>
  <li><a href="#Stunde12">Samstag 18.09.2021</a></li>
  <li><a href="#Stunde13">Dienstag 21.09.2021</a></li>
  <li><a href="#Stunde14">Mittwoch 22.09.2021</a></li>
  <li><a href="#Stunde15">Dienstag 28.09.2021</a></li>
  <li><a href="#Stunde16">Mittwoch 29.09.2021</a></li>
  <li><a href="#Stunde17">Samstag 02.10.2021</a></li>
  <li><a href="#Stunde18">Sonntag 03.10.2021</a></li>
  <li><a href="#Stunde19">Samstag 09.10.2021</a></li>
  <li><a href="#Stunde20">Sonntag 10.10.2021</a></li>
  <li><a href="#Stunde21">Montag 11.10.2021</a></li>
  <li><a href="#Stunde22">Dienstag 12.10.2021</a></li>
  <li><a href="#Stunde23">Mittwoch 13.10.2021</a></li>
  <li><a href="#Stunde24">Donnerstag 14.10.2021</a></li>
  <li><a href="#Stunde25">Freitag 15.10.2021</a></li>
  <li><a href="#Stunde26">Samstag 16.10.2021</a></li>
  <li><a href="#Stunde27">Sonntag 17.10.2021</a></li>
  <li><a href="#Stunde28">Dienstag 19.10.2021</a></li>
  <li><a href="#Stunde29">Mittwoch 20.10.2021</a></li>
  <li><a href="#Stunde30">Dienstag 26.10.2021</a></li>
  <li><a href="#Stunde31">Mittwoch 27.10.2021</a></li>
  <li><a href="#Stunde32">Dienstag 02.11.2021</a></li>
  <li><a href="#Stunde33">Mittwoch 03.11.2021</a></li>
  <li><a href="#Stunde34">Mittwoch 04.08.2021</a></li>
  <li><a href="#Stunde35">Mittwoch 04.08.2021</a></li>
  <li><a href="#Stunde36">Mittwoch 04.08.2021</a></li>
  <li><a href="#Stunde37">Mittwoch 04.08.2021</a></li>
  <li><a href="#Stunde38">Mittwoch 04.08.2021</a></li>
  <li><a href="#Stunde39">Mittwoch 04.08.2021</a></li>
  <li><a href="#Stunde40">Mittwoch 04.08.2021</a></li>
  <li><a href="#Stunde41">Mittwoch 04.08.2021</a></li>
</details>

<p id="Stunde1"><b>Dienstag 03.08.2021</b><br>
  Wir haben einen GitHub Account erstellt und eine Projekt-Idee entwickelt. Unsere Ideen reichten von einem einfachen Spiel bis zum Bau einer Wetterstation, für welche wir uns auch entschieden haben. Am Nachmittag haben wir mit dem Arduino erste Experimente mit LEDs durchgeführt, um uns mit der Entwicklungsumgebung des Arduinos und den möglichen Anschlüssen vertraut zu machen. Dabei haben wir z.B. eine grüne LED an digitalen Pin 13 und einen rote LED an den digitalen Pin 4 angeschlossen. Digitale Pins sind nur auf digitale Signale ausgelegt, geben diese entweder aus oder lesen sie ein. Digitale Signale sind z.B. 0 und 1 oder LOW und HIGH oder 0v und 5V (Volt). Das bedeutet, dass wir die zwei LEDs unabhängig von einander blinken lassen konnten. Status HIGH bedeutet LED an und LOW LED aus.<br></p>

<p id="Stunde2"><b>Mittwoch 04.08.2021</b><br>
  In der heutigen Stunde haben wir gemeinsam mit dem Arduino Fortschritte mit der Bedienung der LEDs gemacht. Am Nachmittag haben wir getrennt Experimente z.B. mit Bewegungssensoren  durchgeführt. Diese waren nur zum Teil erfolgreich. Der Bewegungssensor hat zwar Bewegungen erkannt und auch wie programiert bei der angeschlossenen LED den Status auf HIGH (an) gesetzt, manchmal hat der Sensor aber auch ohne eine Bewegung die angeschlossene LED aktiviert. Dies könnte an den schlechten Lichbedingungen liegen, die Abends herrschen.<br></p>
  
<p id="Stunde3"><b>Dienstag 10.08.2021</b><br>
  Heute haben wir eine Liste unserer benötigten Sensoren und deren Funktion in unserer Wetterstation zusammengestellt. Diese sind unten mit der jeweiligen Funktion und zugehöriger Produktbeschreibung zu finden. Anschließend haben wir uns das Design der Wetterstation eingehender überlegt. Eine Konstruktion, die aus einem Gehäuse in Form eines Hauses bestehen soll, wie die <b>unten stehende Skizze </b>verdeutlichen soll. Hier sind die Abmessungen unserer Konstruktion ebenfalls abzulesen.</p>
<p></br><b>Welche Sensoren sollen eingebunden weden?</b><br>
<li>Temperatur -> Thermometer -> Produkt: BME280</li>
<li>Luftfeuchtigkeit -> Hygrometer -> Produkt: BME280</li>
<li>Luftdruck -> Barometer -> Produkt: BME280</li>
<li>Höhe -> Alitmeter -> Produkt: BME280</li>
<li>Sonnenscheindauer/-intensität -> Fotowiederstand -> Produkt: BH 1750 12C (https://www.makershop.de/sensoren/lichtsensor/lichtsensor-bh1750)</li><br>Eine Liste aller Materialien, ist <a href="#kapitel3">hier</a> zu finden.</p>

<p id="Stunde4"><b>Dienstag 24.08.2021</b><br> 
  An diesem Tag haben wir weiter an unserem Design gefeilt und uns Ideen zur Materialauswahl, Größe und Aufstellungsart gemacht. Zudem haben wir uns für die technischen Komponenten im Inneren die Anordnung überlegt, um eine einfache sowie intuitive Bedienung mit freundlichen Wartungsbedingungen zu ermöglichen. Außerdem haben wir unsere GitHub Seite verbessert und mit einer Einleitung versehen. Zuhause haben wir mit den Sensoren schon ein bisschen programmiert. Auch haben wir an einem möglichen Konzept, die von der Wetterstation erfassten meteorologischen Daten in einer Excel-Tabelle auszuwerten, gearbeitet (siehe Screenshot). Dabei wurden mit einem Test-Programm fiktive Werte für Temperatur und Niederschlag generiert und im Seriellen Monitor angezeigt.</p>

<details><summary>Screenshots Dienstag 14.08.2021</summary>

![Screenshot (83)](https://user-images.githubusercontent.com/88386049/132125215-9f88bbf9-85d5-4508-9bcc-aa9dc4ed3b0d.png)
<p>Code für das fiktive Testprogramm</p>

![Screenshot (82)](https://user-images.githubusercontent.com/88386049/132125171-a4d30667-4c50-41a6-80e2-d9d35f5a4e70.png)
<p>Ausgabe im Seriellen-Monitor</p>

![Screenshot (81)](https://user-images.githubusercontent.com/88386049/132124410-a5e63ba7-c7ea-46d3-a904-8019e77caf88.png)
<p>Auswertung der Daten in Excel mit Bildung eines Mittelwertes aus den fiktiven Werten.</p>
  
</details>

<p id="Stunde5"><b>Mittwoch 25.08.2021</b><br>
  Diese Stunde haben wir dazu genutzt, unser Design weiterzuentwickeln. Dabei haben wir unser Design hinsichtlich der Funktion der Sensoren angepasst, dass man möglichst genaue Messwerte erhält, ohne die Sensoren zu beschädigen. Letztendlich haben wir ein Design ausgewählt, das funktional sehr gut zu unserem Projekt passt und zusätlich mobil und in jedem Garten aufstellbar ist. Außerdem haben wir bereits erste Sensoren ausprobiert. Bezüglich der Auswertung hatten wir besonders beim Temperatursensor Erfolg und konnten am Ende der Stunde die Temperatur am Bildschirm ablesen.</p>

<p id="Stunde6"><b>Dienstag 31.08.2021</b><br>
  Diese Stunde bot uns die Möglichkeit, in der Sammlung neue Sensoren für unsere Wetterstation zu suchen. Wir haben der Sammlung ein Datalogging-Shield und den Sensor BME280, den wir ursprünglich bestellen wollten, entnommen. Diese neuen Bestandteile bieten uns unterschiedliche Möglichkeiten. So kann der Sensor BME280 von der Firma Bosch die Temperatur, die Luftfeuchtigkeit und den Luftdruck bestimmen. Mit dem gemessenen Luftdruck kann außerdem die Höhe über dem Meeresspiegel berechnet werden. Mit dem Data Logging-Shield können wir die erhobenen meteoroloischen Daten auf einer SD-Speicherkarte sichern. Als weiterführende Planung hat sich Henrik bereits mit der Idee beschäftigt, wie wir die meteorologischen Daten visualisieren und damit auch auswerten können. Er hatte die Idee, diese Daten auf einer Website darzustellen und versuchte einen I-Frame für eine Tabelle zu verwenden. Thorben hat sich in der Stunde damit beschäftigt, den Code für den BME280 Sensor zu entwickeln. Dies gestaltete sich deshalb umständlich, weil der Sensor stark Erschütterungsabhängig ist. So gab der angeschlossene Sensor nach zwei korrekten Messungen aufgrund minimlaer Bewegung einen falschen Wert (z.B. statt 23,5°C einen falschen Wert von 150°C). Währendessen hat Gernot ein Erdbebenwarnsystem mit einem Erschütterungssensor entwickelt. Dieses gibt bei einer Erschütterung eine Warnung auf den Seriellen Monitor aus, die ständig angepasst werden kann. Das Problem an diesem Sensor ist die aufzuwendende Kraft, um den Sensor überhaupt auszulösen. Deshalb würde dieser Sensor wahrscheinlich eher keine Anwendung in dem Projekt finden.

<p id="Stunde7"><b>Mittwoch 01.09.2021</b><br>
  Nachdem wir in der letzten Doppelstunde bei der Genauigkeit des BME280 Sensors Probleme hatten und leider falsche Werte gemessen haben, mussten wir uns in der heutigen Stunde mit dem Debuggen des Sensors beschäftigen. Zum Ende der Stunde sind wir zu der Erkenntnis gelangt, dass eines der Jumper-Kabel einen Wackelkontakt haben muss oder die Kontaktverbindung des, weshalb teilweise falsche Werte übermittelt wurden. Dieses Problem haben wir behoben, indem wir den BME280 erstmal provisorisch mit Tesa-Film an die Jumperkabel geklebt haben. In der finalen Installation des BME280 an der Wetterstation müssen wir uns überlegen, ob wir den Sensor ebenfalls verkleben oder an die Jumper-Kabel löten. Dieses könnte im Zeifelsfall nötig sein, weil wir sonst im Betrieb falsche Werte mit der Wetterstation erfasen. Wie aber in den unten folgenden Screenshots zu sehen ist, funktionieren die Messungen des BME280 nun bis auf die Höhenangabe genau. Diese scheint noch immer fehlerhaft zu sein. Die Raumtemperatur von ca. 25°C und einer Luftfeuchtigkeit von ca. 50% konnten wir aber mit unser eigenen Wetterstation beweisen. Auch der Luftdruck von 1018hPa entspricht den aktuellen meteorologischen Daten. Nebenbei haben wir uns in der Stunde mit der Implementierung eines Fotowiederstandes beschäftigt und das Projekt mit dem Erschütterungssensor weiter verfolgt. Hier haben wir ein kleines Programm geschrieben, dass bei einer Erschütterung, die der Sensor erkannt hat, eine Warnung auf den seriellen Monitor ausgibt. Dieses Programm funktioniert auch für sich genommen sehr gut, jeodch braucht der Sensor eine sehr starke Erschütterung, um diese wahrzunehmen. Deshalb haben wir uns gegen einen Einbau in das Schutzhäuschen entschieden. Dies war also nur ein Ausflug in die Informatik, um weitere Kentnisse zu gewinnen. </p>
  
<details><summary>Programm für den Erschütterungssensor</summary>

![Erschütterungssensor](https://user-images.githubusercontent.com/88386279/138086523-f408c281-3d7d-4c47-a2a9-d6954413ff31.JPG)
  
</details>


<details><summary>Screenshots Mittwoch 01.09.2021</summary>

![Screenshot (82)](https://user-images.githubusercontent.com/88386049/132136199-e0431856-ff5b-4b89-ae7c-6d0cf2e9d7ed.png)
<p>Code für den Sensor BME280</p>

![Screenshot (81)](https://user-images.githubusercontent.com/88386049/132136200-133b7af6-c8e3-4adb-9e8c-fc44daefaab2.png)
<p>Ausgabe der gemessenen Daten auf dem Seriellen Motitor.</p>
  
</details>

<p id="Stunde8"><b>Dienstag 07.09.2021</b><br>
  In der heutigen Doppelstunde haben wir zuerst an verschiedenen Projekten gearbeitet. Henrik hat an einer Lösung gearbeitet, eine Excel-Datei auf einer Website mit einzubinden, damit wir unsere meteorologischen Messwerte visualisieren können. Währenddessen hat Thorben versucht, auf den Arduino ein Datalogging-Shield zu setzen und Gernot hat an einem LCD-Display gearbeitet, worauf im Finalen Aufbau die Ergebnisse der Sensorenauswertung gezeigt werden sollen. Doch nachdem wir Ihnen unser Problem mit den falschen Messwerten beim BME280 Sensor geschildert hatten, haben wir uns dazu entschlossen, in der restlichen Stunde das Löten von elektronischen Bausteinen zu erlernen. Das Löten ist ein thermisches Verfahren, bei dem elektrisch leitende Verbindungen zwischen Feststoffen stoffschlüssig erschaffen werden. In unserem Fall haben wir eine 6 Pin (männlich auf männlich) Stiftleiste mit den 6 Pins am BME280 Sesor verlötet. Im Vorhinein konnten wir an einem T-Cobbler für den RaspberryPi das Löten ausprobieren. Unsere Verlötung an dem BME280 gelang uns gut und zeigte nach der Überprüfung am PC eine direkte Wirkung: wir konnten gleich richtige Sensordaten trotz einer minimalen Bewegung erheben. Dies ist ein großer Vortschritt im Gegensatz zu der vorherigen misslichen Lage und hat uns sehr gut weitergeholfen.</p>

<details><summary>Bilder zum Lötversuch</summary>
  
![20210907_160715](https://user-images.githubusercontent.com/88386049/132398754-e1a37693-f48c-49d6-839b-0f03852d0f2f.jpg)
<p>Lötveruche am T-Cobbler</p>

![20210907_161527](https://user-images.githubusercontent.com/88386049/132398769-7e5ded13-085c-4e5d-8fdd-622e15cd4064.jpg)
<p>Lötprozess am BME280 Sensor</p>

</details>

<p id="Stunde9"><b>Mittwoch 08.09.2021</b><br>
  Wie abhängig man von der digitalen Ausstattung ist, erkennt man, wenn man in der Informatik-Stunde sitzt und das Internet, sowie die Computer nicht funktionieren. Genau dies war heute der Fall. Die Server von IServ waren nicht betriebsbereit, weshalb wir die Informatik-Stunde "unplugged" gestalten mussten. Wie arbeitet man im Informatikunterricht ohne Computer produktiv? Wir haben die Zeit genutzt und uns erneut dem Design unserer Wetterstation gewidmet und eine Einkaufsliste für die Materialien erstellt, die Gernot am Donnerstag im Baumarkt erwerben wird. Als dann plötzlich das Internet wieder funktionierte haben wir uns die restlichen Minuten mit den jeweils aufgeteilten Projekten beschäftigt. Leider war das Internet währenddessen sehr langsam und erschwerte das Arbeiten. Zum Abschluss der Stunde konnten wir das vorgenommene Arbeitspensum wegen der technischen Schwierigkeiten am Anfang nicht erreichen. In der nächsten Doppelstunde arbeiten wir deshalb an dem letzten Arbeitsstand weiter und versuchen Zuhause, soweit möglich, weiter zu arbeiten.</p>
  
<p id="Stunde10"><b>Dienstag 14.09.2021</b><br> 
  Heute ist der Informatikunterricht leider ausgefallen. Zuhause haben wir uns weiter mit dem Projekt beschäftigt. So hat Thorben weiter an dem Data Logging-Shield gearbeitet und ein Skript geschrieben, das es uns ermöglichen soll, Daten auf einer SD-Karte zu speichern. Das Skript funktioniert auch, jedoch gab es immer wieder die Fehlermeldung, dass die SD-Karte nicht gelesen werden kann (siehe Screenshot). Das kann mehrere Ursachen haben. Zum einen kann die Felhlermeldung an die Größe der SD-Karte gekoppelt sein. Ich habe eine 64GB SD-Karte verwendet und es kann sein, dass das Data Logging-Shield nicht mit derartig großen SD-Karten arbeiten kann. Diese Theorie halte ich aber nicht für sehr wahrscheinlich. Viel mehr denke ich, dass die SD-Karte falsch formatiert ist und deshalb nicht von dem Data Logging-Shield gelesen werden kann. Das Problem dabei war, dass man die 64GB SD-Karte nicht in das benötigte FAT Format umformatieren konnte. Daher haben wir zu Hause nach anderen kleineren und anders formatierten SD-Karten gesucht. Diese haben wir auch gefunden. Genutzt haben wir eine 4GB FAT32 formatierte SD-Karte. Mit dieser lief das Programm korrekt ab und erzeugte eine Excel-Datei mit allen Werten (Temperatur, Luftfeuchtigkeit, Luftdruck und Höhe über NN), die vom BME280 Sensor aufgenommen werden können. Um dies praktisch auch auszuprobieren, haben wir den Arduino im Garten probeweise mit einer externen Stomversorgung über ein USB-Ladegerät über drei Stunden meteorologische Daten sammeln lassen. Die Auswertung ist bei den Screenshots von Dienstag zu sehen. Die 4GB SD-Karte erwies sich in unserem Experiment als durchaus praktikabel einzusetzen, weil die generrierte Excel-Datei lediglich 17kb Speicherlatz einnahm. Daher ist eine Erfassung der Daten über mehrere Tage möglich, ohne, dass der Speicherplatz überfüllt wird.</p>
  
<details><summary>Screenshots Dienstag 14.09.2021</summary>

![Screenshot (91)](https://user-images.githubusercontent.com/88386049/133761889-dd3925f9-6e66-4b34-8bda-93b4fa741d21.png)
<p>Code für die Auswertung des BME280 mit zusätzlicher Speicherung auf einer SD-Karte</p>
  
![Screenshot (89)](https://user-images.githubusercontent.com/88386049/133743885-ba1a569d-7145-471e-a050-2dd52c48c357.png)
<p>Fehlermeldung bei falsch formatierter oder nicht angeschlossener SD-Karte</p>
  
![20210917_143554](https://user-images.githubusercontent.com/88386049/133784631-34149d52-f97a-4632-b41a-eb26e12e3b4a.jpg)

![20210917_143728](https://user-images.githubusercontent.com/88386049/133784824-75480956-7b8b-4147-b06b-2501727c1bd4.jpg)
<p>Aufbau des Arduinos mit Data Logging Shield und angeschlossenem BME280</p>

![Screenshot (93)](https://user-images.githubusercontent.com/88386049/133786763-d042d3a3-c604-4f5e-9645-ac024d3d6e58.png)
  <p>Auswertung der erzeugten Excel-Datei mit einem gebildetem Mittelwert</p>
  
</details>
  
<p id="Stunde11"><b>Mittwoch 15.09.2021</b><br> 
  Heute ist der Informatikunterricht auch ausgefallen. Wir haben aber die Zeit genutzt und unser Repository überarbeitet. Die Struktur gefällt uns so jetzt gut. Wir haben Dropdowns für unsere Screenshots eingefügt, damit unser Stundenprotokoll übersichtlicher ist und uns mit dem Markdown Githubs intensiver beschäftigt. So haben wir auch eine Möglichkeit gefunden, Code als Beispiel mit einzubinden (siehe unten).</p>

```
<detials><summary>Beschreibung</summary>

![Screenshot (91)](https://user-images.githubusercontent.com/88386049/133761889-dd3925f9-6e66-4b34-8bda-93b4fa741d21.png)
<p>Code für die Auswertung des BME280 mit zusätzlicher Speicherung auf einer SD-Karte</p>

<details>
```
<p id="Stunde12"><b>Samstag 18.09.2021</b><br>
  Wir haben am heutigen Tag mehrere experimentelle Messreihen mit dem Data Logging Shield durchgeführt. Alle Messungen verliefen dabei ohne Probleme, was uns sehr erleichertert hat. Eine Messreihe von 08:00 bis 11:00 Uhr morgens fanden wir sehr interessant. Bei den aufgezeichneten Daten sieht man den normalen Temperaturanstieg am Morgen sehr gut, doch fällt einem dann auf, dass die Temperaturen wieder leicht sinken. Die Ursache dafür ist, dass ein Schauer heranzog und dadurch die Temperatur gesunken ist, was man auch an der steigenden Luftfeuchtigkeit sehen kann. Leider konnten wir nicht im Schauer weiter messen, da unser Arduino noch kein wasserdichtes Gehäuse hat und daher bei schlechtem also feuchtem Wetter noch ins Trockene geholt werden muss. Trotzdem zeigt unsere Messreihe, dass wir einen großen Fortschritt gemacht haben.</p>
  
<details><summary>Auswertung der gemessenen Daten in Diagrammen</summary>
  
![Screenshot (9)](https://user-images.githubusercontent.com/88386049/133883662-c5c0b25a-518b-47e8-9439-6b414cb6cd92.png)
![Screenshot (10)](https://user-images.githubusercontent.com/88386049/133883663-dc4d5932-2b08-43bb-90a2-dae74cb3d51b.png)
![Screenshot (11)](https://user-images.githubusercontent.com/88386049/133883665-340b7f9e-6e00-4902-a096-a16b7952265b.png)
  
</details>

<p id="Stunde13"><b>Dienstag 21.09.2021</b><br>
  Heute haben wir unterschiedlich gearbeitet. Henrik und Thorben haben in der Schule weitergeartbeitet und Gernot ist aus gesundheitlichen Gründen zu Hause geblieben. In dieser Zeit haben wir weiter an unserem Projekt gearbeitet und den Rohbau des Häuschens verfeinert. Im nächsten Schritt müssen die einzelnen Sensoren und Platinen eingepasst werden, sodass nach weiterer Anpassung des Gehäuses eine erste Lackierung vorgenommen werden kann. Währenddessen hat Henrik an der Website weiter programmiert und noch verschiedene Sachen geändert. So hat die Website nun ein Hintergrundbild und die Anzeigekästchen haben abgerundete Ecken. Des weiteren sind die Farben einheitlich. Abschließend müssen wir uns nur noch auf eine Art einigen, wie wir die Messwerte genau darstellen wollen. Thorben hat mit dem Data Logging Shield an einer Lösung für eine zeitliche Erfassung der Messwerte gearbeitet. Dabei haben wir die im Data Logging Shield integrierte RTC (Real-Time-Clock) verwendet, um die Uhrzeit anzuzeigen. Dies ist insofern wichtig, als dass bei einer Messdauer von einem Tag bis zu einer Woche die Exceldatei zunehmend unübersichtlich wird, welche Daten wann erhoben wurden, weshalb eine zeitliche Kennzeichnung der Werte notwendig ist. Damit kann man feststellen, ob der Messwert in der Nacht oder während des Mittags gemessen wurde. Dies ist bei der Auswertung besonders von Bedeutung, weil wir so schon optisch feststellen können, welche Messertwerte eventuell falsch sind.</p>
  
<details><summary>Screenshots Dienstag 21.09.2021</summary>
  
![Screenshot (96)](https://user-images.githubusercontent.com/88386049/134226899-d8e6c713-f8c3-4707-b800-20a9c78a408b.png)
<p>Code für die RTC (Real-Time-Clock)</p>
  
![Screenshot (97)](https://user-images.githubusercontent.com/88386049/134226930-8a8a8a3f-27ae-4d32-aef8-c1c503eee333.png)
<p>Auf dem Seriellenmonitor wird die Uhrzeit in Stunde, Minute, Sekunde, sowie der Tag, Monat und das Jahr angegeben</p>

</details>

<p id="Stunde14"><b>Mittwoch 22.09.2021</b><br>
  Gernot konnte heute erfreulicherweise wieder mit uns gemeinsam in der Schule an unserem Projekt arbeiten. Er hat sich in dieser Stunde erneut dem Aufbau der Wetterstation gewidmet. Hier galt es nun eine für den schon fertigen Rohbau des Häuschen für die Wetterstation eine passende Konzeption für den Innnenaufbau zu finden. Der Wunsch wurde laut, dass noch ein Display in die Außenwand integriert werden soll, was natürlich geplant sein muss. Somit wurde dann nach einem geeigeneten Ort für den Arduino, das Display und die die Sensoren gesucht, die teilweise auch Licht brauchen oder zumindest großzügig von Luft umschlossen sein müssen, damit brauchbare Messergebnisse später genommen werden können.  Thorben hat diese Stunde genutzt, um Fehler der RTC aus dem Code von gestern zu beheben. Das Problem der gestrigen Stunde war, dass die im Data Logging Shield eingebaute RTC (Real-Time-Clock) auf eine falsche Uhrzeit eingestellt war.</p>

```
Serial.print(hour() + 15);
digitaleZahl(minute() - 7);
digitaleZahl(second() + 12);
Serial.print("  ");
Serial.print(day() - 7);
Serial.print("  ");
Serial.print(month() + 6);
Serial.print("  ");
Serial.print(year() + 6);
```
<p>Mit diesem Code haben wir für die gestrige Stunde versucht, das Problem der verstellten Uhr kurzfristig und schnell zu beheben. Dass dies keine langfristige Lösung ist, war uns gestern bereits bewusst. Was entstand durch diese Korrektur mit addierten Werten? In der heutigen Stunde gab der Arduino über den Seriellen monitor die Uhrzeit 36 Uhr, 22 Minuten und 73 Sekunden. als Lösung stand hier nur das Reseten der RTc im Raum. Da die Zeit gestern aber fehlte, die RTC des Data Logging Shields zu reseten, haben wir die heutige Stunde dafür genutzt. Die im Code eingesetzten Bibliotheken ermöglichten aber keine Lösung, weshalb wir ein Skript aus dem Internet verwendet haben, um die RTC zu reseten und auf die aktuelle Uhrzeit einzustellen. Dies erwies sich auch als sehr erfolgreich, weil wir die RTC auf die Milisekunde genau auf die richtige Uhrzeit einstellen konnten. Am Wochenende hat Thorben das Prinzip der RTC in das Skript des Data Logging Shields übertragen, damit bei jedem geloggetem Wert die Uhrzeit und das Datum mit abgespiechert werden. Die Arbeitsschritte sind auch in den unten eingefügten Screenshots zu sehen. Dies hat sehr erfolgreich funktioniert. Anschließend haben wir den Arduino über mehrere Stunden Daten sammeln lassen. In der Unterrichtsstunde hat Henrik weiter an der Website gearbeitet. Der Plan ist es die verschiedenen Tage in verschiedenen Kästchen darzustellen. Da eine Woche sieben Tage hat und es deswegen schwierig ist die Tage gleichmäßig auf mehrere Zeilen aufzuteilen, hat Henrik versucht alle sieben Tage in eine Zeile zu bekommen. Das hat auch weitestgehend funktioniert, allerdings war problematisch das Henrik über sein Ipad arbeitet und dort der Bildschirm eine andere Auflösung hat als sein PC-Bildschirm zuhause. Letztendlich hat es trotzdem sehr gut geklappt und wir sind mit dem momentanen aussehen unserer Website sehr zufrieden.</p>

<details><summary>Screenshots Mittwoch 22.09.2021</summary>
  
![Screenshot (102)](https://user-images.githubusercontent.com/88386049/134953056-e08ebdc4-39a9-49be-a7be-9be0cc859e2d.png)

![Screenshot (103)](https://user-images.githubusercontent.com/88386049/134953066-c5f32a5f-9f70-45a1-b63a-68acf7f31331.png)
<p>Code für das zusammengefügte Prinzip der RTC und des Data Logging Shields</p>
  
</details>

<p id="Stunde15"><b>Dienstag 28.09.2021</b><br></p>

 Da die an den vorherigen Tagen erhobenen Daten zwar richtig waren, aber nicht übersichtlich abgespeichert waren, konnten wir sie nicht auswerten und mussten einen neuen Testdurchlauf in der Informatikstunde durchführen.  An dem unten stehenden Code kann man sehen, dass die Zeitangaben der jeweiligen Messung unter der Auflistung der Messwerte abgespeichert wird, da sowohl bei `Zieldatei.println(Datensatz)` als auch bei `Zieldatei.println(Zeit)` ein neuer Absatz erzeugt wird. Der überarbeitete Code ist unter den Screenshots des heutigen Tages zu sehen.

```
if (Zieldatei) {
  Zieldatei.println(Datensatz);
  Zieldatei.println(Zeit);
  Zieldatei.close();
  }
```

<p>Deshalb war heute der Tag der Praxis! Wir haben den Arduino mit einem spezeillen Kabel an eine 9V Blockbatterie angeschlossen und ihn für eine Viertelstunde draußen auf der Fensterbank Werte aufnehmen lassen. Diese hat Thorben mit Excel ausgewertet (siehe Grafiken unten) und Henrik hat diese als erste Werte auf unserer Website eingebunden. Hierbei waren wir mit der momentanen Anzeige der Daten noch nicht ganz zufrieden, da Fotos dirket auf der Hauptseite sehr unordentlich und unübersichtlich sind. Den Rest der Stunde haben wir damit verbracht hierfür eine Lösung zu finden. Ein Screenshot der momentanen Hauptseite und dem zugehörigen Code sind trotzdem als Zwischenstand im Anhang zu finden. Gernot hat währenddessen an dem letzten Sensor gearbeitet, den wir mit einbinden wollen: Dem Fotowiederstand. Dieser misst die Intensität des Lichts bzw. der Sonne in Candela und gibt dann eine Zahl aus. Anhand von dieser Zahl lässt sich bestimmen, ob die vergangene Stunde eine Sonnenstunde oder "Schattenstunde" war. Somit haben wir in unserer Wetterstation eine weitere Möglichkeit, einen noch umfassenderen Wetterbericht zu erstellen. Der Code für diesen Sensor arbeitet mit einer einfachen if-else-Abfrage. Damit sind mit nur einer Variable zwei Ereignisse bzw. Ausgaben auf dem seriellen Monitor möglich. Diese Ausgabe passt sich automatisch an die Lichtverhältnisse an, indem es entweder schattig oder sonnig ist.</p>

<details><summary>Screenshot vom Code für den Lichtintensitätssensor</summary>
![Lichtintensitätssensor](https://user-images.githubusercontent.com/88386279/137928321-5ca34693-b111-4844-904b-75e6d2858713.JPG)

  
</details>

<details><summary>Screenshots Dienstag 28.09.2021</summary>

![Screenshot (106)](https://user-images.githubusercontent.com/88386049/135315427-984623fc-231c-408e-a75c-c118d4837e02.png)
![Screenshot (107)](https://user-images.githubusercontent.com/88386049/135315431-73c484aa-3402-4faa-8483-8b7c13a85136.png)
<p>Korrekter Source-Code für Data Logging Shield mit RTC und korrekter Speicherung</p>


![grafik](https://user-images.githubusercontent.com/88386049/135107034-9e1ce2aa-6d42-42b0-bf35-95f0afc0dbde.png)
![grafik](https://user-images.githubusercontent.com/88386049/135107277-fc11a270-46d5-4cce-8d63-cc4b8a628652.png)
![grafik](https://user-images.githubusercontent.com/88386049/135107589-20b9d957-2b84-4d3b-be64-3f733fd15d73.png)
<p>Auswertung der in der Stunde gemessenen Daten mit korrekter zeitlicher erfassung auf der X-Achse, sowie der Messwert-Größe auf der Y-Achse.</p>
  
![index](https://user-images.githubusercontent.com/88386045/137926648-1a3a3766-7bd3-45fe-b378-c04c0129a365.PNG)
  <p>Stand der momentanen Hauptseite, noch ohne Werte.</p>
  
</details>

```
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>The Weather - Informatikprojekt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <link href="css/style-test.css" rel="stylesheet">
</head>

<body style="background-image:url(kanadaback.JPG)">

    <header>
        <h1 class="headline">The Weather</h1>
    </header>
``` 
<p>Grundeinstellungen für den Html-Code und Überschrift der Hauptseite</p>

```
<section class="tage">
            <section class="wochentag">

                <h2>Montag 06.09.2021</h2>
                <p>Temperatur:</p>
                <p>Niederschlag:</p>
                <p>Graph: <a href="wochen/woche1/tag1">Hier klicken!</a></p>

            </section>
</section>
```
<p>Beispiel Html-code für einen Tag</p>

``` 
*,
*::before,
*::after {
    box-sizing: border-box;
}


body {
    box-sizing: border-box;
}

.headline {
    text-decoration: underline;
    max-width: 1800px;
    margin: 0 auto;
    padding: 10px;
    margin-bottom: 25px;
}

.box {
    display: flex;
    margin: 0 auto;
    max-width: 1800px;
}

.bild {
    width: calc(100% /3);
    padding: 5px;
    margin-right: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
}

.bild img {
    width: 100%;
}

.bild3 {
    width: calc(100% /3);
    padding: 5px;
    padding-right: 0px;
    margin-bottom: 10px;
    margin-top: 10px;
}

.bild3 img {
    width: 100%;
}

.backbox {
    max-width: 1800px;
    margin: 0 auto;
}

.back {
    margin-top: 20px;
    width: 85px;
    height: auto;
}

.back a {
    text-decoration: underline;
    color: black;
    font-size: 25px;
    padding: 5px;
}

``` 
<p>Css-Code für das Styling der Hauptseite</p>

<p id="Stunde16"><b>Mittwoch 29.09.2021</b><br>
  Wir hatten heute keinen Informatikunterricht, weil wir den gesamten Vormittag über die Vorabi-Deutsch-Klausur geschrieben haben. Nachmittags haben wir aber trotzdem die Gelegenheit genutzt und weiter am Repository gearbeitet. So haben wir jeweils einen <a href="#Link">Link zu den Stunden im Stundenprotokoll</a> erstellt.</p>
  
<p id="Stunde17"><b>Samstag 02.10.2021</b><br> 
  Heute haben wir den Arduino weiter draußen mit angeschlossener 9V Blockbaterie meteorologische Daten sammeln lassen. Die Daten wurden auf der SD-Karte gespeichert und wieder in Excel mit Diagrammen ausgewertet und sind unter dem untenstehenden Dropdown zu sehen. Die Durchschnittstemperatur im Messzeitraum ist 16,27°C, die Durchschnittsluftfeuchtigkeit betrug 73,95% und der Luftdruck lag durchschnittlich bei 1003,74 hPa. Gemessen wurde im Zeitraum von 15:20 Uhr bis 20:30 Uhr mit einer Erfassung der Werte in einem 10 Minuten Rythmus.</p>

<details><summary>Auswertung der gemessenen Daten</summary>
  
![grafik](https://user-images.githubusercontent.com/88386049/135761983-f8bf1b0d-1b75-4a45-bb87-33dc5693f5b9.png)
![grafik](https://user-images.githubusercontent.com/88386049/135761991-9d355481-38d5-48be-9a06-895e87d88906.png)
![grafik](https://user-images.githubusercontent.com/88386049/135761995-f1692b72-e085-4fd5-8f9f-b900ae87f867.png)

</details>

<p id="Stunde18"><b>Sonntag 03.10.2021</b><br> 
  Auch heute haben wir den Arduino meteorologsiche Daten sammeln lassen. Leider ist heute nur ein eingeschrenkter Datensatz vorhanden, weil die 9V Blockbatterie nach ca. zwei Stunden unvorhergesehen leer war. Trotzdem wurden Daten vom heute gemessen und gespeichert. Die Durchschnittstemperatur war im Messzeitraum 18,76°C, die Durschnittsluftfeuchtigkeit betrug 71,14% und der Luftdruck betrug durschnittlich 995,16 hPa. Gemessen wurden die Daten in einem zeitraum von 09:36 Uhr bis 11:26 Uhr, welche in einem 10 Minuten Rythmus erhoben wurden. Die Auswertung erfolgte erneut mir Excel und ist unter den unten stehenden Dropdown zu sehen.</p>
 
<details><summary>Auswertung der gemessenen Daten</summary>
  
![grafik](https://user-images.githubusercontent.com/88386049/135762521-b3adb0bf-f618-4141-96cd-d1baa967d065.png)
![grafik](https://user-images.githubusercontent.com/88386049/135762540-d555b5f0-da72-42cc-bd21-da40e09eccee.png)
![grafik](https://user-images.githubusercontent.com/88386049/135762543-3ed3c618-acf1-44e4-80ab-8e3f4a80775a.png)

</details>

<p id="Stunde19"><b>Samstag 09.10.2021</b><br>
  Heute wurden erneut Testweise Daten im Zeitraum von 10:36 Uhr bis 19:06 Uhr erfasst. Dabei war erneut die Baterie das Problem, welche nicht den ganzen Messzeitraum den Arduino mit Strom versorgen konnte, weil die nötige Betriebsspanung von 6-12V nicht erreicht wurde. Daher konnte die Messung nicht wie geplant bis 22:46 Uhr gehen. Die mittlere Temperatur betrug im Messzeitraum 16,65°C, die Luftfeuchtigkeit lag durchschnittlich bei 47,11% und der mittlere Luftdruck betrug 1027,72 hPa. Die Auswertung der erzeugten Daten geschah wie gewohnt bei Excel. Die erstellten Diagramme, sind unten unter dem Dropdown zu sehen.</p>

<details><summary>Auswertung der gemessenen Daten</summary>

![grafik](https://user-images.githubusercontent.com/88386049/136673441-48a20fde-501c-43ca-b72c-26b017ef8889.png)
![grafik](https://user-images.githubusercontent.com/88386049/136673442-ea4f4750-fb8f-43f0-9460-3b5075858efb.png)
![grafik](https://user-images.githubusercontent.com/88386049/136673445-ff37275d-3013-41c9-95cc-cf613741913c.png)

</details>

<p id="Stunde20"><b>Sonntag 10.10.2021</b><br>
  Mit einer neuen 9V Blockbatterie versorgt, wurden heute mit dem Arduino erneut Daten erfasst. Der Messzeitraum war von 08:50 Uhr bis 22:20 Uhr, wo die mittlere Temperatur 12,70°C betrug, die durchschnittliche Luftfeuchtigkeit lag bei 60% und der Luftdruck betrug durchschnittlich über den Zeitraum 1020,85 hPa. Meine Aussage bei den letzten Messversuchen, die Batterie-Leistung betreffend, ist zum Teil abzuändern, als dass auch die Temperatur als leistungsminimirender Faktor hinzukommt. Die Wetterstation hat durschnittlich gegen 19:00 Uhr aufgehört, Daten zu sammeln. Dies liegt zum einen an den schwachen Batterien, aber auch an den Abends herrschenden niedrigen Temperaturen, die die letzten Tage ungefähr in einem Bereich unter 10°C gelegen haben. Dies sorgt dafür, dass bei der Batterie schneller die Ausgangsspannung nachlässt. Heute habe ich versucht dieses Problem zu umgehen, indem ich um den 9V Block einen Handschuh und eine Styropor-Verpackung gelegt habe. Dies erwies sich als erfolgreich, weil ich bis 22:20 Uhr Daten messen konnte. Trotzdem habe ich im Anschluss die Leistung der 9V Blockbatterie gemessen. Zu Beginn der Messung erreichte die Batterie eine Ausgangsspannung von ca. 9V und nach dem Ende der Messungen nur noch ca. 7,2V. Man erkennt also tatsächlich einen nicht gerade geringen Abfall der Ausgangsspannung. Die Auswertung erfolgte erneut bei Excel und die erzeugten Graphen sind unter dem Dropdown zu sehen.</p>

<details><summary>Auswertung der gemessenen Daten</summary>
  
![grafik](https://user-images.githubusercontent.com/88386049/136712842-71a5fb42-dbb8-4623-bbdd-463ed6f7d2eb.png)
![grafik](https://user-images.githubusercontent.com/88386049/136712846-50e0fb9a-c283-4334-8db1-d58353a77db3.png)
![grafik](https://user-images.githubusercontent.com/88386049/136712848-bb75555b-9f5f-4c64-af83-514db3d00bd6.png)

</details>

<p id="Stunde21"><b>Montag 11.10.2021</b><br>
  Heute wurden erneut Daten erhoben. Leider hat die 9V Blockbatterie den Arduino nur in einem Zeitraum von 08:50 Uhr bis 10:25 Uhr mit Strom versorgen können. Da uns das nicht aufgefallen war, konnten wir die Batterie nicht wechseln. Beabsichtigt war eigentlich ein Messzeitraum von 08:50 Uhr bis 23:00 Uhr. Die gemessenen Daten werden trotzdem in ausgewerteter Form in Diagrammen unter dem Dropdown zu sehen. Auch werden die Durchschnitte ab heute, wie unten zu sehen ist, Form einer Tabelle dargestellt.</p>
<table>
  <tr><th></th><th>Werte</th></tr>
  <tr><td>Mittelwert der Temperatur</td><td>12,71°C</td></tr>
  <tr><td>Mittelwert der Luftfeuchtigkeit</td><td>79,76%</td></tr>
  <tr><td>Mittelwert des Luftdrucks</td><td>1017,29hPa</td></tr>
</table>

<details><summary>Auswertung der gemessenen Daten</summary>

![grafik](https://user-images.githubusercontent.com/88386049/137092878-06ef5a21-04d4-4446-a639-7bf22848ff75.png)
![grafik](https://user-images.githubusercontent.com/88386049/137092892-3ba1b287-10bd-446a-9869-30ce3049dbd9.png)
![grafik](https://user-images.githubusercontent.com/88386049/137092908-62ee9a8c-1303-4bbf-857a-e65ba30114e9.png)

</details>

<p id="Stunde22"><b>Dienstag 12.10.2021</b><br>
  Heute haben wir statt der 9V Batterie eine Powerbank als Stromversorgung eingesetzt. Die Hoffnung war, dass die Wetterstation damit verlässlicher Daten aufnehmen kann. Dies war aber nicht verlässlich der Fall. Der Arduino hat nur in einem Zeitraum von 12:24 Uhr bis 18:34 Uhr Daten erfasst und nicht wie geplant in einem Zeitraum von 07:40 Uhr bis 23:00 Uhr. Meine Vermutung ist, dass der Arduino nicht genug Strom verbraucht, um von der Powerbank erkannt zu werden. Trotzdem konnten wir Daten messen und auswerten. Die ausgewerteten Daten sind unter dem Dropdown zu sehen.</p>
<table>
  <tr><th></th><th>Werte</th></tr>
  <tr><td>Mittelwert der Temperatur</td><td>14,09°C</td></tr>
  <tr><td>Mittelwert der Luftfeuchtigkeit</td><td>65,64%</td></tr>
  <tr><td>Mittelwert des Luftdrucks</td><td>1010,78hPa</td></tr>
</table>

<details><summary>Auswertung der gemessenen Daten</summary>
  
![grafik](https://user-images.githubusercontent.com/88386049/137096632-4d13ab00-4f94-4f2f-b840-92bfbab7006e.png)
![grafik](https://user-images.githubusercontent.com/88386049/137096656-c5a2a61d-5d3d-41b8-85a4-cf78a6074eee.png)
![grafik](https://user-images.githubusercontent.com/88386049/137096665-533644dc-d1e3-49f3-ab9f-0cb0e648be86.png)

</details>

<p id="Stunde23"><b>Mittwoch 13.10.2021</b><br>
  Heute wurden der Arduino aus experimentellen Zwecken wieder mit einer 9V Batterie angetrieben. Das Problem war leider, dass der Arduino von 09:27 Uhr an nur bis 11:17 gemessen hat. Ich habe dies auch an der nicht leuchtenden inbuilt-LED gesehen und geprüft, ob die Batterie leer sein. Dies war nicht der Fall, weshalb ich die Batterie wieder an den Arduino angeschlosen habe. Die LED leuchtete darauf hin und ich war mir sicher, dass der Arduino wieder Daten erhebe. Dies war aber anscheinend nicht der Fall. Die inbuilt-LED hat zwar bis 22:00 geleuchtet, der Arduino hat aber keine weiteren Daten im Zeitraum von 11:17 Uhr bis 22:00 Uhr Daten gemessen.</p>
<table>
  <tr><th></th><th>Werte</th></tr>
  <tr><td>Mittelwert der Temperatur</td><td>10,14°C</td></tr>
  <tr><td>Mittelwert der Luftfeuchtigkeit</td><td>77,09%</td></tr>
  <tr><td>Mittelwert des Luftdrucks</td><td>1016,68hPa</td></tr>
</table>

<details><summary>Auswertung der gemessenen Daten</summary>

![grafik](https://user-images.githubusercontent.com/88386049/137264497-dbd9edc7-d8c4-4d11-b277-db078587916d.png)
![grafik](https://user-images.githubusercontent.com/88386049/137264505-5e98d28c-ae83-42d2-925b-53dffbffea65.png)
![grafik](https://user-images.githubusercontent.com/88386049/137264511-0c85575c-3270-4469-be08-df46db7b8ecd.png)

</details>

<p id="Stunde24"><b>Donnerstag 14.10.2021</b><br>
  Der Arduino wurde heute wieder mit einer 9V Batterie mit Strom versorgt. Erfreulicherweise hat die Batterie einen Messzeitraum von 08:04 Uhr bis 18:14 Uhr durchgehalten. Die ausgewerteten Daten, sind in der Tabelle und unter dem Dropdown zu sehen.</p>
<table>
  <tr><th></th><th>Werte</th></tr>
  <tr><td>Mittelwert der Temperatur</td><td>14,29°C</td></tr>
  <tr><td>Mittelwert der Luftfeuchtigkeit</td><td>80,34%</td></tr>
  <tr><td>Mittelwert des Luftdrucks</td><td>1013,60hPa</td></tr>
</table>

<details><summary>Auswertung der gemessenen Daten</summary>
  
![grafik](https://user-images.githubusercontent.com/88386049/137454816-4799dde3-6692-4c7a-995d-8d5a319b4c0d.png)
![grafik](https://user-images.githubusercontent.com/88386049/137454831-9fcab582-e5e0-41c6-a0b9-e5abc68b7f18.png)
![grafik](https://user-images.githubusercontent.com/88386049/137454843-aa8d2d0a-90a8-4715-95a0-f3671b2117d7.png)

</details>

<p id="Stunde25"><b>Freitag 15.10.2021</b><br>
  Die Stromversorgung haben wir heute erneut über eine 9V Batterie gewährleistet. Gemessen hat der Arduino Daten in einem Zeitraum von 11:04 bis 18:24 Uhr. Die mit Excel ausgewerteten Daten, sind unter dem Dropdown un in der Tabelle zu sehen. Seltsamerweise hat die inbuilt-LED des Arduinos wieder auch über den Messzeitraum hinweg geleuchtet, weshalb ich dachte, dass der Arduino weiter Daten aufnimmt. Dies war aber nicht der Fall, weil die gemessenen Daten bis zu einer Uhrzeit von 18:24:17 Uhr gemessen und gespeichert wurden. Dieses Problem werden wir gemeinsam im nächsten Informatik-Unterricht besprechen müssen.</p>
<table>
  <tr><th></th><th>Werte</th></tr>
  <tr><td>Mittelwert der Temperatur</td><td>14,07°C</td></tr>
  <tr><td>Mittelwert der Luftfeuchtigkeit</td><td>70,12%</td></tr>
  <tr><td>Mittelwert des Luftdrucks</td><td>1008,51hPa</td></tr>
</table>

<details><summary>Auswertung der gemessenen Daten</summary>

![grafik](https://user-images.githubusercontent.com/88386049/137576823-703c4b56-d8b2-4722-b3f8-0b67428255ce.png)
![grafik](https://user-images.githubusercontent.com/88386049/137576824-1d5be2b1-0009-4278-93a9-3fb32318492f.png)
![grafik](https://user-images.githubusercontent.com/88386049/137576831-a4f1e681-af2b-4587-b1a4-d18e89351b23.png)

</details>

<p id="Stunde26"><b>Samstag 16.10.2021</b><br>
  Heute haben wir weiter an dem Gehäuse für den Arduino und die Sensoren gearbeitet. Nachdem verschiedene Wände und Leisten abgelängt wurden, wurden sie mit wasserfestem Holzleim und Heißklebe richtig aufgeklebt. Im nächsten Schritt wird nun alles Lackiert und dann ein erster, vorläufiger Einbau der Technik vorgenommen (Bilder unten unter dem Dropdown). Auch Daten wurden heute mit dem Arduino von 08:50 Uhr bis 17:30 erfasst. Wir hatten aber erneut das <a href="#Stunde25">oben beschriebene Problem</a> mit der inbuilt-LED. Die LED hat (zwar mit verringerter Helligkeit) bis morgens um 09:20 geleuchtet, aber entgegen der Hoffnung, dass auch Datn erhoben wurden, wurden keine Daten gespeichert. Die Batterie hatte zu Beginn der Messungen eine Ausgangsspannung von ca. 9V und am nächsten Tag um 09:20 ca. eine Ausgangsspannung von 6,3V. Dies liegt eigentlich noch innerhalb der Parameter des Stromanschlusses, weshalb der Arduino eigentlich weiter Daten messen sollte und diese im Anschluss auch speichern. Trotzdem hat der Arduino in dem oben genannten Zeitraum (vom 08:50 Uhr bis 17:30) Daten gespeichert, die mit Excel ausgewertet wurden (siehe Dropdown).</p>
<table>
  <tr><th></th><th>Werte</th></tr>
  <tr><td>Mittelwert der Temperatur</td><td>12,05°C</td></tr>
  <tr><td>Mittelwert der Luftfeuchtigkeit</td><td>68,64%</td></tr>
  <tr><td>Mittelwert des Luftdrucks</td><td>1015,69hPa</td></tr>
</table>

<details><summary>Auswertung der gemessenen Daten</summary>

![grafik](https://user-images.githubusercontent.com/88386049/137616016-9f5dcc3c-f5c0-4723-904f-99dd6ff03494.png)
![grafik](https://user-images.githubusercontent.com/88386049/137616021-f473151f-669c-4eb4-a3aa-f2c3d746f7bc.png)
![grafik](https://user-images.githubusercontent.com/88386049/137616024-70965aa1-70da-40ea-b709-4f7ef98aa226.png)

</details>

<details><summary>Bilder von dem Aufbau des Gehäuses der Wetterstation</summary>

//hier deine Bilder Gernot ;)
  
</details>

<p id="Stunde27"><b>Sonntag 17.10.2021</b><br>
  Heute haben wir an der Website weiterprogrammiert und für die jeweiligen Tage untergeordnete Seiten erstellt, auf denen die Diagramme angezeigt werden die der Arduino gesammelt hat. Dies sorgt für mehr Ordnung und man kann sich gezielt die Informationen raussuchen, die man braucht. Damit haben wir auch das Problem mit den Fotos auf der Hauptseite gelöst. Diese untergeordneten Seiten können über einen Link bei dem jeweiligen Wochentag erreicht werden und beinhalten die Diagramme zu Temperatur, Luftfeuchtigkeit und Luftdruck. Außerdem verfügen die Seiten über einen Link zurück zur Hauptseite. Außerdem haben wir die Hauptseite überarbeitet, so dass nun eine ganze Woche in eine Reihe passt und die Datumangaben in der gleichen Zeile stehen wie die Wochentage, ohne dass etwas abgeschnitten ist. Ein Screenshot von einer untergeordneten Seite und der der zugehörige Code sind als Anhang angefügt. Der Arduino hat heute auch Daten in einem Zeitraum von 06:33 Uhr bis 18:43 Uhr erfasst. Dies schien heute als durchaus erfolgreich, weil der Arduino länger als 10 Stunden messen konnte, genau genommen konnten wir 12 Stunden und 10 Minuten Daten erheben. Die ausgewerteten Daten sind in der Tabelle und unter dem Dropdown zu sehen. Das <a href="#Stunde25">Problem mit der inbuilt-LED</a> tauchte heute erneut auf. Ich kann mir dies bisher nur so erklären, dass der Arduino zwar noch mit Strom versorgt wird, die Spannung aber nicht ausreicht, um Daten zu speichern. Dieses Problem müssen wir auf jeden Fall im Unterricht weiter diskutieren.</p>
<table>
  <tr><th></th><th>Werte</th></tr>
  <tr><td>Mittelwert der Temperatur</td><td>13,05°C</td></tr>
  <tr><td>Mittelwert der Luftfeuchtigkeit</td><td>67,05%</td></tr>
  <tr><td>Mittelwert des Luftdrucks</td><td>1017,31hPa</td></tr>
</table>

<details><summary>Auswertung der gemessenen Daten</summary>
 
![grafik](https://user-images.githubusercontent.com/88386049/137786830-abda6ad1-fd22-44a9-ae7b-24a0d8801990.png)
![grafik](https://user-images.githubusercontent.com/88386049/137786844-71d04945-9324-4b01-b531-2baff3430fbf.png)
![grafik](https://user-images.githubusercontent.com/88386049/137786855-4410a4c5-212e-45d4-bb51-26a0e088f8b0.png)

</details>

<p id="Stunde28"><b>Dienstag 19.10.2021</b><br>
In dieser Doppelstunde am Nachmittag haben wir damit begonnen, den Skript für den Lichtintensitätssensor mit dem Skript für die anderen Sensoren zu verbinden und damit ein einziges, funktionales Programm für den Arduino zu erstellen. Schwierigkeiten sind dabei die Strings nicht zu zerstören und somit alle Sensoren zu der vorgegebenen Zeit messen. Davor stellte sich noch die Frage, ob die Anschlüsse des Arduinos für manche Sensoren doppelt belegt werden müssen, was jedoch glücklicherweise nicht der Fall war. Weiter muss nun darauf geachtet werden, dass der Speicher des Arduinos für das gewünschte Programm ausreicht, da hiermit immerhin eine Realtimeclock, zwei Sensoren mit zusammen 5 Funktionen und die SD-Karte, die die Daten der Sensoren abspeichert, gesteuert werden. Außerdem haben wir an der Webseite weitergearbeitet und uns auf eine Anzeigeeinstellung geeinigt. Zu guter letzt haben wir auch am Repository weitergemacht, sodass es nun wieder auf dem aktuellsten Stand, mit vielen Bildern und Screenshots versehen, ist.</p> 

<p id="Stunde29"><b>Mittwoch 20.10.2021</b><br>
Heute haben wir uns weiter an der Vereinigung der beiden Programme vom Lichtintensitätssensor und dem der anderen Sensoren versucht und an der Webseite weitergearbeitet. In der Freistunde haben wir ebenfalls das Dach des Häuschens schon mit einem mattbraunem, wasserfestem Lack versehen, damit es auch bei Regenwetter die elektronischen Bauteile schützt.  


<details><summary>Der Anstrich wird vorbereitet</summary>

![20211020_113616](https://user-images.githubusercontent.com/88386279/138085538-5ab51bda-1e53-4ef8-b0a9-50cd8dc8930a.jpg)
  
</details>

<p id="Stunde30"><b>Dienstag 26.10.2021</b><br>
Heute haben wir getrennt gearbeitet, da Thorben gesundheitlich leider zu Hause bleiben musste. In der Schule haben Henrik und Gernot gearbeitet. Thorben hat von Zuhause aus gearbeitet. Wir haben an unserer Internetseite weitergarbeitet und einige Fehler behoben. Währenddessen haben wir weiter an der Vereinung der beiden Programme gesessen und das Repoitory um eine weitere Kategorie <a href="#werkzeuge">"Werkzeuge"</a> ergänzt.</p>

<p id="Stunde31"><b>Mittwoch 27.10.2021</b><br>
Heute haben wir uns mit den selben Dingen wie gestern weiterbeschäftigt. Leider konnten wir auch heute nicht an einem Platz arbeiten, aber mit etwas Geschick war ein Arbeiten über Distanz auch gut möglich. Viel Absprache half uns dabei wirklich weiter. Wir haben zusätzlich eine Liste mit eingesetzten <a href="Bibliotheken">Bibliotheken</a> bei den Materialien ergänzt.</p>

<p id="Stunde32"><b>Dienstag 02.11.2021</b></p>

  Am Wochenende hat Henrik eine neue Idee entwickelt, mit der wir die erhobenen Daten automatisiert in unsere Website aufnehmen können. <b>HIER GERNE DEIN BERICHT ÜBER DIE FUNKTION DES CODES + CODE</b> Dafür hat Thorben heute die Formatierung der gespeicherten Daten geändert. Die Informationen wurde zuvor um die Übersichtlichkeit zu unterstützen beispielsweise ``#Temperatur: 24°C`` gekennzeichnet. Diese Formatierung habe ich aufgehoben und wie unten stehend zu sehen ist, abgeändert. Bei dieser Arbeit entstand ein neues Problem: Die RTC <a href="#Stunde14">(Real-Time-Clock)</a> musste zuerst neu gestellt werden, da am vergangenen Wochenende die Zeit von der Sommerzeit auf Winterzeit umgestellt wurde. Dies ließ sich leicht beheben. Doch als wir die Daten in unsere Datenbank hochgeladen haben, ist uns aufgefallemn, dass die RTC die Sekunden nicht immer zweistellig ausgibt. So wurde die Uhrzeit ``16:23:01`` als ``16:23:1`` ausgegeben. Dieses Problem habe ich versucht, mit einer neu geschriebenen Funktion zu beheben, dies war aber nicht möglich, da die ``void loop()`` Funktion die Ausgaben der geschriebenen Funktion nicht akzeptiert hat. Gernot hat währenddessen an unserer Projektseite gearbeitet und bereits Texte verfasst.
  
<p id="Stunde33"><b>Mittwoch 03.11.2021</b></p>

  Gestern trat ein <a href="#Stunde32">Problem</a> auf, das gestern nicht mehr gelöst werden konnte, weil keine zeit mehr blieb. Daher hat Thorben sich heute erneut um die Speicherung der Daten gekümmert. Im Laufe der Stunde ist uns eine Idee gekommen. Die Datenbank nimmt die werte der CSV-Datei an und speichert diese unter einer bestimmten Kategorie ab. Für das Datum gilt in unserer Datenbank bespielsweise die Kategorie ``date`` und daher sind wir auf die Idee gekommen, dass wir vielleicht für die Uhrzeit eine Kategorie ``time`` finden können. Dies war auch unter den Möglichkeiten, weshalb von nun an die Daten, obwohl sie als ``16:23:3`` gespeichert werden, in die Datenbank als ``16:23:03`` aufnehmen werden, was es uns ermöglicht, Diagramme und Tabellen korrekt zu erstellen. Da dieses Problem gelöst war, hat sich Thorben dem letzten Sensor gewidmet, der noch eingebunden werden soll: dem Lichtwiderstand. Dies hat zum Ende der Stunde auch funktioniert und es war uns möglich, alle gemessenen Daten inklusive der Lichtstärke in der CSV-Datei zu speichern. Das fertig überarbeitete Script ist unten unter dem Dorpdown zu sehen. Gernot hat weiter an unserer Projektseite gearbeitet udn eine Anpassung beim Aufbau unseres Repository vorgenommen. So findet man nun zuerst ein ``README.md`` File, wo man anschließend auf unseren Stundenblog und unsere Projektseite verwiesen wird.

<details><summary>Fertig überarbeiter Code</summary>
  
![Screenshot (110)](https://user-images.githubusercontent.com/88386049/140605899-0aea5848-f1aa-47c9-941e-08ea2d9ebd31.png)
![Screenshot (111)](https://user-images.githubusercontent.com/88386049/140605900-0cf442e6-46c9-42d4-95b3-9e60a2fda43f.png)

</details>

<h2 id="kapitel3">3. Materialien</a></h2>


<p>Hier ist eine Liste mit allen Materialien, die wir für unsere Wetterstation brauchen. Alle eingesetzten Materialien sind mit einem Haken gekennzeichnet:
<b>Produktbeschreibung jeweils hinzufügen!!!</b></p>

<p><b>Experimentelle Bausteine:</b></p>

- [ ] Bewegungssensor -> LK-PIR (www.linkerkit.de)
- [ ] Rote, grüne, weiße und gelbe LED-Dioden von unterschiedlichen Herstellern
- [ ] Piezo-Summer -> PKM22EPP-40 
- [ ] Potentiometer 10K
- [ ] Erschütterungssensor -> BN 2134050 MakerFactory

<p><br><b>Eingesetzte Sensoren:</b></p>

- [x] Temperatur -> Thermometer -> Produkt: BME280
- [x] Luftfeuchtigkeit -> Hygrometer -> Produkt: BME280
- [x] Luftdruck -> Barometer -> Produkt: BME280
- [x] Höhe -> Alitmeter -> Produkt: BME280
- [] Sonnenscheindauer/-intensität -> Fotowiederstand -> Produkt: BH 1750 12C (Ursprünglich geplant, dann aber verworfen und ersetzt)
- [x] Lichtempfindlichkeitssensor -> BN 2134129 von MakerFactory

<p id="Bibliotheken"><br><b>Eingesetzte Bibliotheken</b></p>

- [x] Wire.h
- [x] DS1307RTC.h
- [x] SPI.h
- [x] SD.h
- [x] Adafruit_Sensor.h
- [x] Adafruit_BME280.h



<p><br><b>Weitere technische Bauteile:</b></p>

- [x] Arduino UNO R3
- [x] Breadboard
- [x] LCD Display
- [x] Data Logging-Shield mit RTC-> XD-204 Data Logging Shield 
- [x] 4GB SD-Karte
- [x] Stromversorgung für den Arduino im Haus (Batterie oder Akkumulator) -> 9V Blockbaterie mit Power-Jack
- [x] Stromversorgung auch möglich über 5000mAh Powerbank
- [x] Jumper Kabel <b>Anzahl hier!!</b>


<p><br><b>Bauteile für das Gehäuse der Wetterstation:</b></p>

- [x] Holz in verschiedenen Formen und Arten: Pappel, Buche, Leisten, Bretter
- [x] Beschläge, Winkel und Schrauben
- [x] Farben 
- [x] Acrylglas
- [x] Holzleim, Allzweckkleber, Silikon

<p id="werkzeuge"><br><b>Benuzte Werkzeuge:</b></p>

- [x] Elektrische Laubsäge von Proxxon
- [x] ELektrische Kreissäge von Proxxon
- [x] Schraubzwingen
- [x] Handsäge
- [x] Bohrmaschine mit verschiedenen Bohrnadeln
- [x] Akkuschrauber mit verschiednen Bits (Spax, Torx)
- [x] Schleifpapier, Feilen
- [x] Stahllinial, Geodreieck, rechter Winkel

<h2 id="kapitel4">4. Quellen</a></h2>
<li>file:///G:/Klasse%2012bc/Informatik/DE_SolderComic_L%C3%B6ten_loeten.pdf</li>
<li>Arduino Kompendium, Danny Schreiter, {BMU VERLAG}</li>
<li>https://guides.github.com/features/mastering-markdown/</li>
<li>https://docs.github.com/en</li>


