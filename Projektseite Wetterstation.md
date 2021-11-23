# --> TheWeather <--
<h1>Wetterstation auf Basis des Arduino -- Projektseite</h1>

<h3> Inhalt </h3>
<ul style="list-stlye-type:none">
<li><a href="#kapitell">1. Einleitung</a></h2></li>
<li><a href="#kapitel2">2. Arduino und Sketch</a></h2></li>
<li><a href="#kapitel3">3. Projektentwicklung</a></h2></li>
<li><a href="#kapitel4">4. Vorstellung des Projekts</a></h2></li>
<li><a href="#kapitel5">5. Der Sketch</a></h2></li>
<li><a href="#kapitel6">6. Die Sensoren</a></h2></li>
<li><a href="#kapitel7">7. Kritik</a></h2></li>
<li><a href="#kapitel8">8. Fazit</a></h2></li>
<li><a href="#kapitel9">9. Quellen</a></h2></li>
<br>
<h2 id="kapitell">1. Einleitung</h2>
<p>Für viele Menschen gehört es zu der Morgenroutine, nach dem Aufstehen aus dem Fenster zu gucken und die Temperatur zu schätzen, damit man sich passend anziehen kann. Oftmals verschätzt man sich und es kommt zu ungewolltem und unnötigen Stress am frühen Morgen, da es überraschend doch wärmer oder kälter ist.<br>
Für genau dieses Problem lässt sich einfache Abhilfe schaffen. Eine Wetterstation, die die Temperatur übermittelt, wäre hierfür ideal. Ein kurzer Blick auf das neben dem Bett stehende Display würde genügen, um Gewissheit über die Temperatur zu haben. Zudem könnte sie mit extra Sensoren ausgestattet sein, um für den Interessierten aktuelle Daten über die Wetterlage zu messen. 
Außerdem wäre es eine witzige Begegnung beim Aufstehen, den Vögeln mittels einer Kamera bei deren ausgibigen Körnerfrühstück zuzusehen und sich an der Natur zu erfreuen. Mit einem schönen Design stört das Futterhäuschen mit der Wetterstation und Kamera auch nicht beim Blick aus dem Fenster.
Unsere Wetterstation <b>(Name fehlt)</b> ist eine hervorragende Art das Aufstehen zu erleichtern und überflüssigen Stress zu vermeiden - so steht man gerne auf!<br><br>
Das Projekt haben wir in unserem <a href="Stundenprotokoll Wetterstation.md">Stundenprotokoll</a> dokumentiert. Hier ist jede Unterrichtsstunde mit einem Beitrag und einer dazugehörigen Erläuterung aufgeführt.<br><br>Zur besseren Übersicht gelangt man hier zum <a href="README.md">README.md</a>, wo alle Projektbeiträge zentral verknüpft sind.</p>

<h2 id="kapitel2">2. Arduino und Sketch</h2>

Der Arduino ist eine Physical-Computing-Platform, die aus Hardware- und Software besteht. Der eigentliche  Arduino besteht aus einer Platine mit Mikrocontroller, digitalen und analogen Ein- und Ausgängen. Um auf den Mikrocontroller ein Programm hochzuladen, benötigt es die Arduino-Software auf einem Computer. In diesem Programm lassen sich mit den Programmiersprachen C- und C++, die deutlich vereinfacht wurden, eigene Programme, sogenannte „Sketches“, erstellen, die dann via USB auf den Mikrocontroller hochgeladen werden können. Über diese Verbindung erhält der Arduino auch den Strom. Über diverse Ein- und Ausgänge lassen sich mit Hilfe eines Breadboards LEDs, Motoren, Sensoren und vieles mehr anschließen, mit Strom versorgen und steuern. Mit dem eingebauten Speicher lassen sich die Programme auch auf dem Mikrocontroller speichern, was damit  die Stromversorgung über einen Akku oder eine Batterie möglich macht und die Anwendungsmöglichkeiten des Arduino vervielfacht und somit den Gebrauch auch draußen ohne direkte Verbindung zum Computer ermöglicht. Für den Arduino gibt es weiteres Zubehör. Dazu zählen Sensoren aller Art, Motoren, Displays, Ethernet-Shields und Kameras. 
Von der Marke Arduino gibt es viele verschiedene Modelle des gleichnamigen Mikrocontrollers. 
In dem Projekt wurde ein Arduino UNO verwendet, der mit 7 bis 12 Volt arbeitet und 32 Kilobyte Speicherplatz hat. Zudem hat er 13 digitale Pins und 5 analoge Pins, die im Sketch sowohl als Eingang als auch als Ausgang belegt werden können. Mit verschiedenen Ground-Pins (GND) bzw. Minuspolen und den Pluspolen (5 Volt / 3,5 Volt) können Motoren, Sensoren und sonstiges auf einem Breadboard angeschlossen und mit Strom versorgt werden. Über die digitalen und analogen Pins werden diese Module ebenfalls verbunden, damit der Mikrocontroller mit diesen interagieren kann und den Sketch ausführen kann. Mit bestimmten Befehlen, zum Beispiel ``Serial.print()``, im Sketch lassen sich die Daten auf einem seriellen Monitor anzeigen, der im Prinzip der Monitor für den Arduino darstellt.<br>

![arduino_board](https://user-images.githubusercontent.com/88386049/142012270-dbef8268-d0e6-42b1-b32e-20c0180adf51.png)


<h2 id="kapitel3">3. Projektentwicklung</h2>
<p>Aller Anfang ist schwer - auch hier ist das Sprichwort uneingeschränkt anwendbar. In den ersten Stunden galt es ein passendes Projekt mit passendem Umfang zu finden. Es durfte nicht zu groß werden, da auch nur einen bestimmter Zeitraum für die Erarbeitung vorgesehen war, aber musste auch die persönlichen Kenntnissstände in der Gruppe berücksichtigen. Über Ideen von einem Roboter, selbstfahrende Autos bis hin zu einer Wetterstation kamen verschiedene Vorschläge auf. Viele dieser Ideen entpuppten sich dann allerdings doch als zu schwierig, da nicht alle Gruppenmitglieder mit dem Arduino vertraut waren und mit den Grundlagen begonnen werden musste. Deshalb fiel schnell die Entscheidung zu einer Wetterstation mit verschiedenen Sensoren, da dieses Projekt verschiedene Arbeitsmethoden und Kenntnisse zulässt. So musste zum Beispiel eine Website und der Sketch progammiert und ein Gehäuse für den Arduino gebastelt werden.<br></p>


<details><summary>Grobe Skizze des Arduinogehäuses:</summary>
  
![image](https://user-images.githubusercontent.com/88386279/142203090-0f47e3cf-efc7-468d-abcc-3b197753cab8.jpeg)  
  
</details>
  

<h2 id="kapitel4">4. Vorstellung des Projekts</h2>
<p>Im fertigen Zustand ist kaum noch etwas vom Arduino zu sehen. Das Gehäuse verdeckt alle Elektronik und lässt auf den ersten Blick die Vermutung zu, dass es sich um ein normales Vogelhäuschen handelt. Nimmt man das Dach und den Zwischenboden ab, sieht man die Technik.</p>
  
<h2 id="kapitel5">5. Der Sketch</h2>

<h2 id="kapitel6">6. Die Sensoren</h2>
<p><b>Schaltplan</b><br>
  In der unten stehenden Abbildung kann man den Aufbau unserer Wetterstation sehen</p>
<p><b>PIN Beschreibung Lichtsensor BN2134129</b></p>

<table>
  <tr><th>PIN Sensor</th><th>PIN Arduino</th></tr>
  <tr><td>OUT</td><td>Analoger Ausgang für Echtzeit-Spannungssignal, angeschlossen an A0</td></tr>
  <tr><td>VCC</td><td>Stromversorgung, angeschlossen an 5V</td></tr>
  <tr><td>GND</td><td>GND</td></tr>
</table>

<p><b>Funktionsweise</b><br>
Ein Lichtsensor oder auch Lichtwiderstand genannt, besteht aus einer mit einem fotosensitiven Halbleiter beschichteten Keramik. Der fotosensitive Halbleiter besteht meistens aus Cadmiumsulfid- (CdS) oder Cadmiumselenid-Schicht (CdSe), die eine ähnliche Lichtempfindlichkeit wie ein Photofilm zeigen. Je mehr Licht auf den Lichtwiderstand fällt, desto kleiner wird der elektrische Widerstand. Je kleiner der Widerstand ist, desto mehr Strom fließt durch den Sensor und desto höher ist der ausgegebene Messwert in LUX. Der Lichtwiderstand wird an den analogen Ausgang A0 angeschlossen. Der Sensor wird durch das Licht angeregt und gibt die Lichtstärke in der Einheit LUX aus. Selbst bei geringer Lichteinstrahlung wie etwa während der Dämmerung, können geringe Messungen von wenigen LUX erfasst werden. Erst bei absoluter Dunkelheit wird der Sensor nicht mehr angeregt und der Arduino speichert 0 LUX.</p>

<p><b>Pin Beschreibung Sensor BME280</b></p>

<table>
  <tr><th>PIN Sensor</th><th>PIN Arduino</th></tr>
  <tr><td>VCC</td><td>Stromversorgung, angeschlossen an 3,3V</td></tr>
  <tr><td>GND</td><td>GND</td></tr>
  <tr><td>SCL</td><td>Datenschnittstelle I2C</td></tr>
  <tr><td>SDA</td><td>Datenschnittstelle I2C</td></tr>
</table>

<p><b>Funktionsweise</b><br>

</p>

![BME280](https://user-images.githubusercontent.com/88386049/142200318-961c198e-c867-455e-bdb4-e2c9809cdd84.PNG)


<h2 id="kapitel7">7. Kritik</h2>
<p>Als alles fertig war, war die Erleichterung in der Gruppe groß. Nicht immer sah es so aus, dass wir am Ende am Ziel ankommen. Besonders war die Passage der Zusammenführung der beiden Sketches für zwwei Sensoren herausfordernd. Als es dann am Ende langsam auf die Zielgerade ging, mussten nur noch die letzten Dinge an der Webseite programmiert und die Projektseite erstellt werden.</p>  
  
<h2 id="kapitel8">8. Fazit</h2>


<h2 id="kapitel9">9. Quellen</h2>
<p><b><u>Textquellen</u></b></p>
<li>https://www.arduino.cc/en/reference/board</li>
<li>https://asset.conrad.com/media10/add/160267/c1/-/GL/002134129ML00/002134129ML00-GL.pdf</li>
<li>https://www.elektronik-kompendium.de/sites/bau/0110301.htm</li>
<li>https://www.cosmos-indirekt.de/Physik-Schule/Photoelektrischer_Effekt</li>
<li>https://www.bosch-sensortec.com/products/environmental-sensors/humidity-sensors-bme280/</li>

<br><p><b><u>Bildquellen</u></b></p>
<li>https://www.arduino.cc/en/reference/board</li>
