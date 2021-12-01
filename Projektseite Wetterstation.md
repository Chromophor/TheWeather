# --> TheWeather <--
<h1>Wetterstation auf Basis des Arduino -- Projektseite</h1>

<h2> Inhalt </h2>
<ul style="list-stlye-type:none">
<li><a href="#kapitell">1. Einleitung</a></li>
<li><a href="#kapitel2">2. Arduino und Sketch</a></li>
<li><a href="#kapitel3">3. Projektentwicklung</a></li>
<li><a href="#kapitel4">4. Vorstellung des Projekts</a></li>
<li><a href="#kapitel5">5. Der Code</a></li>
<li><a href="#Sketch"> 5.1. Der Sketch</a></li>
<li><a href="#Code"> 5.2. Der Code der Website</a></li>
<li><a href="#kapitel6">6. Die Sensoren</a></li>
<li><a href="#kapitel7">7. Kritik</a></li>
<li><a href="#kapitel8">8. Fazit</a></li>
<li><a href="#kapitel9">9. Quellen</a></li>
<li><a href="#kapitel10">10. Eigenständigkeitserklärung</a></li>
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
<p>Grobe Skizze des Arduinogehäuses:</p>

![image](https://user-images.githubusercontent.com/88386279/142203090-0f47e3cf-efc7-468d-abcc-3b197753cab8.jpeg)  

  

<h2 id="kapitel4">4. Vorstellung des Projekts</h2>
<p>Im fertigen Zustand ist kaum noch etwas vom Arduino zu sehen. Das Gehäuse verdeckt alle Elektronik und lässt auf den ersten Blick die Vermutung zu, dass es sich um ein normales Vogelhäuschen handelt. Nimmt man das Dach und den Zwischenboden ab, sieht man die Technik. Diese besteht aus dem Arduino, der mit einer Stromquelle verbunden ist, dem Data-Logging-Shield, wo die Mikro-SD-Karte die Daten speichert, dem Breadboard mit den Sensoren und einem Liquid-Crytal-Display (Näheres dazu in den technischen Abschnitten). Die Stromquelle ist eine Powerbank für Smartphones, die für den Arduino und seine Anwendungen für ungefähr 24 Stunden den Strom liefert. Danach kann über das abnehmbare Dach und den Zwischenboden die Powerbank und die SD-Karte ausgetauscht werden. Nun messen die Sensoren auf Befehl des Arduinos alle 10 Minuten Daten und werden wieder auf der SD-Karte gespeicher bis 24 Stunden danach wieder der Akku leer ist und wieder ausgetauscht werden muss. In der Zwischenzeit kann die SD-Karte an einen Computer angeschlossen werden und die Daten in eine Datenbank übertragen werden, sodass diese dann auf der <a href="https://henrik.stormarnschueler.de/">Webseite</a> automatisch in den dazugehörigen Diagrammen angezeigt werden. Diese Diagramme erreicht man über den weiteren Button "Details", der auf dem spezifischen Tag immer zu sehen ist. HIer werden dann die Tagesverläufe von Temperatur, Luftdruck, Luftfeuchtigkeit und Licht angezeigt. </p>
  
<p>Bauplan des Arduinogehäuses:</p>
  
![image](https://user-images.githubusercontent.com/88386279/143065426-348fc24d-6b4b-4d36-9cef-06faa7419625.jpeg)

  
<h2 id="kapitel5">5. Der Code</h2>
<p>Unsere Wetterstation</p>
  
<h3 id="Sketch">5.1. Der Sketch</h3>

<table>
  <tr><th>Code</th><th>Erklärung</th></tr>
  <tr><td>
    
```    
#define SPI_CS 10
#define NNLUFTDRUCK_HPA (1013.25)

#include <Wire.h>
#include <DS1307RTC.h>
#include <SPI.h>
#include <SD.h>
#include <Adafruit_Sensor.h>
#include <Adafruit_BME280.h>
```
  </td><td>Zu Beginn des Sketches werden einige Dinge festgelegt. So wird definiert, dass der Luftdruck über Normal-Null (NN - Meeresspiegel) 1013,25hPa beträgt. Außerdem werden Bibliotheken importiert, wie z.B. die Bibliotheken für den Sensor BME280 und die Real-Time-Clock (DS1307RTC). Benötigt werden aber auch die Bibliotheken für das Data-Logging-Shield (SD.h), um mit der SD-Karte komunizieren zu können. Alle eingesetzten Bibliotheken sind mit 
    
```#include <Bibliothek.h>``` gekennzeichnet.</td></tr>
  <tr><td>

```
float temp;
float feuchte;
float druck;
float hohe;
float sonne = 0;

int sensorPin = A0;
int ledPin = 13;


Adafruit_BME280(bme);
```
  </td><td>
 
Anschließend werden die Variablen ```temp``` für Temperatur, ```feuchte``` für Luftfeuchtigkeit, ```druck``` für Luftdruck und ```hohe``` für Höhe über NN als float hintelegt. Ein float (englisch für Gleitkommazahl), ist ein Datentyp zum Speichern von Kommazahlen. Wir speichern die Variablen als float (Gleitkommazahl), da wir genauere Wetter Daten speichern möchten. Die Alternative zum float ist der Datentyp int (Integer), bei dem nur ganzzahlige Werte speichert. Ganzzahlige Werte werden in der Genauigkeit von floats übertroffen, da diese mit zwei Nachkommastellen die Realität genauer abbilden. Den definierten Variablen wird hier noch kein Wert zugewiesen, bzw. der Wert der Variablen beträgt Null. Die Variable ```sonne``` wird auch als float gespeichert und erhält von Anfang an den Wert 0.
  <tr><td>

```
void setup() {
  // put your setup code here, to run once:

Serial.begin(9600);
setSyncProvider(RTC.get);

if (!bme.begin(0x76)) {
  Serial.println("Kein BME280 angeschlossen! Prüfe die Kabel");
  while (1);
  }

Serial.println("SD-Karte intialisieren");

if (!SD.begin(SPI_CS)) {
  Serial.println("SD-Karte nicht lesbar! Überprüfe die SD-Karte!");
  while (1);
  }

Serial.println("Erfolgreich intialisiert");
}
```
</td><td>

In ```void setup``` werden immer wiederkehrende Elemente hinterlegt. Die ```void setup``` Funktion wird jedes mal beim Aufrufen des Sketches ein einziges Mal gestartet. Mit ```Serial.begin(9600)``` wird die serielle Schnittstelle geöffnet und die Datenrate auf 9600 Bit/s eingestellt. Über diese Schnittstelle lassen sich Daten in der Arduino IDE auf dem seriellen Monitor anzeigen. Mit der Funktion ```setSyncProvider(RTC.get)``` wird die Uhrzeit-Abfrage der Real-Time-Clock intialisiert.
    
Anschließend wird mit einer If-Abfrage geprüft, ob der BME280 angeschlossen ist.</td></tr>
<td>
    
```
    void loop() {
  // put your main code here, to run repeatedly:

temp = bme.readTemperature();
feuchte = bme.readHumidity();
druck = bme.readPressure() / 100.0F;
sonne = analogRead(sensorPin);
```    
</td><td>Erklärung</td></tr>
<td>
    
```
String Datensatz =  String(temp) +
                    "," +
                    String(feuchte) +
                    "," +
                    String(druck) +
                    "," +
                    String(sonne) +
                    ",";
```
</td>
<td>Erklärung</td></tr>
<td>
 
```
String Zeit = String(hour()) +
              ":" +
              String(minute()) +
              ":" +
              String(second()) +
              "," +
              String(year()) +
              "-" +
              String(month()) +
              "-" +
              String(day());
```
</td><td>Erklärung</td></tr>
<tr><td>

```
Serial.println(Datensatz);
Serial.println(Zeit);
//sonnenschein();

File Zieldatei = SD.open("temp_log.csv", FILE_WRITE);

if (Zieldatei) {
  Zieldatei.print(Datensatz);
  Zieldatei.println(Zeit);
  Zieldatei.close();
  } else {
  Serial.println("Datensatz konnte nicht geschrieben werden");  
  }

delay(6000);
}
```
</td><td>Erklärung</td></tr>
</table>  

<h3 id="Code">5.2. Der Code der Website</h3>

<h2 id="kapitel6">6. Die Sensoren</h2>
<h3><b>Schaltplan</b><br></h3>

Die Sensoren sind das Herzstück unserer Wetterstation. Final kommen in unserer Wetterstation zwei Sensoren zum Einsatz. Der Sensor ``BME280``, der Luftfeuchtigkeit, Luftdruck und Temperatur misst und der Sensor ``BN2134129``, der die Lichtintensität misst. In der unten stehenden Abbildung kann man den Aufbau unserer Wetterstation sehen. Auf dem digitalen Schaltplan kann man die Kabelverbindungen sehen, die durch Striche dargestellt sind.<br>
  
Mit ``VCC`` werden in unserem Schaltplan positive Leitungen für die Versorgungsspannung bezeichnet, ``GND`` ist die Abkürzung für Erdung (engl. ground), ``SCL`` (englisch für "serial clock") ist eine I2C Datenschnittstelle und bedeutet so viel wie "Inter-Integrated Circuit", im Deutschen gesprochen als I-Quadrat-C. Die Bezeichnung ``OUT`` steht für einen analogen PIN und die Abkürzung ``SDA`` (englisch für "serial data") steht erneut für eine I2C Datenschnittstelle.

<b>Erläuterung der farbigen Kabel:</b>
  
<table>
  <tr><th>Farbige Jumper-Kabel</th><th>Bedeutung</th><th>PIN Arduino</th></tr>
  <tr><td>Rote Jumper-Kabel</td><td>Stromversorgung</td><td>VCC</td></tr>
  <tr><td>Schwarze Jumper-Kabel</td><td>GND</td><td>GND</td></tr>
  <tr><td>Grüne Jumper-Kabel</td><td>SCL</td><td>A5</td></tr>
  <tr><td>Gelbe Jumper-Kabel</td><td>OUT</td><td>A0</td></tr>
  <tr><td>Blaue Jumper-Kabel</td><td>SDA</td><td>A4</td></tr>
</table><br>
  
<img width="970" alt="Schaltplan(1)" src="https://user-images.githubusercontent.com/88386049/143048234-15350976-d0bd-4aa9-958d-9c9b0821ca42.png">
 
<h3><b>PIN Beschreibung Lichtsensor BN2134129</b></h3>

<table>
  <tr><th>PIN Sensor</th><th>PIN Arduino</th></tr>
  <tr><td>OUT</td><td>Analoger Ausgang für Echtzeit-Spannungssignal, angeschlossen an A0</td></tr>
  <tr><td>VCC</td><td>Stromversorgung, angeschlossen an 5V</td></tr>
  <tr><td>GND</td><td>GND</td></tr>
</table>

<p><b>Funktionsweise</b><br>
Ein Lichtsensor oder auch Lichtwiderstand genannt, besteht aus einer mit einem fotosensitiven Halbleiter beschichteten Keramik. Der fotosensitive Halbleiter besteht meistens aus Cadmiumsulfid- (CdS) oder Cadmiumselenid-Schicht (CdSe), die eine ähnliche Lichtempfindlichkeit wie ein Photofilm zeigen. Je mehr Licht auf den Lichtwiderstand fällt, desto kleiner wird der elektrische Widerstand. Je kleiner der Widerstand ist, desto mehr Strom fließt durch den Sensor und desto höher ist der ausgegebene Messwert in LUX. Der Lichtwiderstand wird an den analogen Ausgang A0 angeschlossen. Der Sensor wird durch das Licht angeregt und gibt die Lichtstärke in der Einheit LUX aus. Selbst bei geringer Lichteinstrahlung wie etwa während der Dämmerung, können geringe Messungen von wenigen LUX erfasst werden. Erst bei absoluter Dunkelheit wird der Sensor nicht mehr angeregt und der Arduino speichert 0 LUX.</p>

<h3><b>PIN Beschreibung Sensor BME280</b></h3>

<table>
  <tr><th>PIN Sensor</th><th>PIN Arduino</th></tr>
  <tr><td>VCC</td><td>Stromversorgung, angeschlossen an 3,3V</td></tr>
  <tr><td>GND</td><td>GND</td></tr>
  <tr><td>SCL</td><td>Datenschnittstelle I2C</td></tr>
  <tr><td>SDA</td><td>Datenschnittstelle I2C</td></tr>
</table>

<p><b>Funktionsweise</b><br>
Der Sensor BME280 vereint Temperatur-, Luftfeuchtigkeits- und Luftdruckmessungen. Der Sensor enthält ein Thermometer, ein Hygrometer und ein Barometer, sowie ein Altimeter. Luftfeuchtigkeit kann der BME280 mit ±3% Genauigkeit erfassen. Temperaturmessungen gelingen mit einer Genauigkeit von ±1.0°C und Messwerte für den Luftdruck gibt der Sensor mit ±1 hPa absoluter Genauigkeit aus. Dabei gibt es für jede Messgröße ein Sensor mit einer vorgeschalteten Front-End Einheit und einer nachgeschalteten Logikeinheit.
</p>

![BME280](https://user-images.githubusercontent.com/88386049/142200318-961c198e-c867-455e-bdb4-e2c9809cdd84.PNG)


<h2 id="kapitel7">7. Kritik</h2>
<p>Als alles fertig war, war die Erleichterung in der Gruppe groß. Nicht immer sah es so aus, dass wir am Ende am Ziel ankommen. Besonders war die Passage der Zusammenführung der beiden Sketches für zwwei Sensoren herausfordernd. Als es dann am Ende langsam auf die Zielgerade ging, mussten nur noch die letzten Dinge an der Webseite programmiert und die Projektseite erstellt werden. Zusammenfassend können wir mit unserer Arbeitsweise sehr zufrieden sein. Durch die Gruppengröße von 3 Mitgliedern konnten schnell Fortschritte erzielt werden. Wir lagen dementsprechend immer in unserem selbstgesteckten Zeitplan und hatten am Anfang auch Zeit einige neue Sketche und Sensoren auszuprobieren, die am Ende keine Anwendung gefunden haben.  </p>  
  
<h2 id="kapitel8">8. Fazit</h2>
<p>Die Wetterstation auf der Basis eines Arduinos ist ein schönes Projekt gewesen. Es war anspruchsvoll und hat alle Beteiligten in der Gruppe ein Höchstmaß an Kontzentration abverlangt und war zudem für alle sehr lehrreich. Trotz der am Anfang leichten Findungsschwierigkeiten hinsichtlich eines Projektes haben wir mit unserem Resultat eine interessante und für den Alltag zweckmäßige Umsetzung gefunden. Über das Projekt hinaus haben wir große Programmierkenntnisse gewonnen, die nicht immer im fertigen Projekt angewandt wurden, aber dennoch einen Lernprozess bescheinigen.
Insofern sind wir stolz auf unsere Wetterstation, deren Wetterdaten sogar auf jedem internetfähigen Computer der Welt abrufbar sind und die dazugehörige Webseite gegen Spamupload sogar passwortgeschützt ist. </p>

<h2 id="kapitel9">9. Quellen</h2>
<p><b><u>Textquellen</u></b></p>
<li>file:///G:/Klasse%2012bc/Informatik/DE_SolderComic_L%C3%B6ten_loeten.pdf</li>
<li>Arduino Kompendium, Danny Schreiter, {BMU VERLAG}</li>
<li>https://guides.github.com/features/mastering-markdown/</li>
<li>https://docs.github.com/en</li>
<li>https://www.arduino.cc/en/reference/board</li>
<li>https://asset.conrad.com/media10/add/160267/c1/-/GL/002134129ML00/002134129ML00-GL.pdf</li>
<li>https://www.elektronik-kompendium.de/sites/bau/0110301.htm</li>
<li>https://www.cosmos-indirekt.de/Physik-Schule/Photoelektrischer_Effekt</li>
<li>https://www.bosch-sensortec.com/products/environmental-sensors/humidity-sensors-bme280/</li>
<li>https://learn.adafruit.com/adafruit-data-logger-shield</li>
<li>https://www.tinkercad.com/</li>
<li>https://de.wikipedia.org/wiki/Spannungsbezeichnung</li>
<li>https://i2c.info/</li>
<li>https://www.elektronikpraxis.vogel.de/so-funktioniert-das-serial-peripheral-interface-a-1006985/</li>

<br><p><b><u>Bildquellen</u></b></p>
<li>https://www.arduino.cc/en/reference/board</li>
  
  
<h2 id="kapitel10">10. Eigenständigkeitserklärung</h2>
  
<p><b>Eigenständigkeitserklärung</b><br>
  Wir erklären, dass wir die vorliegende Arbeit selbstständig und ohne Benutzung anderer als den 
angegebenen Hilfsmittel angefertigt und alle Stellen, die wörtlich oder sinngemäß aus 
veröffentlichten oder unveröffentlichten Schriften entnommen wurden, als solche kenntlich 
gemacht habe.<br>
Diese Arbeit wurde nicht, auch nicht auszugsweise, bereits für eine andere Prüfung angefertigt.</p>
