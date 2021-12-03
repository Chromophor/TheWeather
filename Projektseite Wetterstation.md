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
  
<p>Im Folgenden sind Bilder vom fertigen Projekt zu sehen. Im Schornstein ist der Lichtsensor untergebracht und im Inneren des Gehäuses alle anderen Sensoren und der Arduino.</p>   
  
![IMG_8038](https://user-images.githubusercontent.com/88386279/144604790-0b6ab7f5-7f52-423a-8f80-b7fb04ed5511.jpg)
  
![Dach mit Schornstein](https://user-images.githubusercontent.com/88386279/144604075-855366d7-119e-4c51-8f44-8f82537c08f0.jpg)  

![Öffnung](https://user-images.githubusercontent.com/88386279/144604460-33797cac-b2a4-40fe-bbb6-6be188294cb4.jpg)

![Innenaufnahme](https://user-images.githubusercontent.com/88386279/144604540-68ffaf7a-aea4-48fd-8eca-30c999fdc8a5.jpg)

  
<h2 id="kapitel5">5. Der Code</h2>
<p>Unsere Wetterstation</p>
  
<h3 id="Sketch">5.1. Der Sketch</h3>

<table>
  <tr><th>Code</th><th>Erklärung</th></tr>
  <tr><td>
    
```    
#define SPI_CS 10

#include <Wire.h>
#include <DS1307RTC.h>
#include <SPI.h>
#include <SD.h>
#include <Adafruit_Sensor.h>
#include <Adafruit_BME280.h>
```
  </td><td>
<b>Part 1</b>
    
    
Zu Beginn des Sketches werden einige Dinge festgelegt. So wird definiert, dass die Variable SPI_CS den Wert 10 erhält. Außerdem werden Bibliotheken importiert, wie z.B. die Bibliotheken für den Sensor BME280 (``<Adafruit_BME280.h>``) und die Real-Time-Clock (``<DS1307RTC.h>``). Benötigt werden aber auch die Bibliotheken für das Data-Logging-Shield (``<SD.h>``), um mit der SD-Karte kommunizieren zu können. Alle eingesetzten Bibliotheken sind mit ```#include <Bibliothek.h>``` gekennzeichnet.</td></tr>
  <tr><td>

```
float temp;
float feuchte;
float druck;
float sonne = 0;

int sensorPin = A0;
int ledPin = 13;


Adafruit_BME280(bme);
```
  </td><td>
<b>Part 2</b>
    
    
Anschließend werden die Variablen ```temp``` für Temperatur, ```feuchte``` für Luftfeuchtigkeit und ```druck``` für Luftdruck als float hintelegt. Ein float (englisch für Gleitkommazahl), ist ein Datentyp zum Speichern von Dezimalzahlen. Wir speichern die Variablen als float (Gleitkommazahl), da wir genauere Wetter Daten speichern möchten. Die Alternative zum float ist der Datentyp ``int`` (Integer), der nur ganzzahlige Werte speichert. Ganzzahlige Werte werden in der Genauigkeit von floats übertroffen, da diese mit zwei Nachkommastellen die Realität genauer abbilden. Den definierten Variablen wird hier noch kein Wert zugewiesen, bzw. der Wert der Variablen beträgt Null. Die Variable ```sonne``` wird auch als float gespeichert und erhält ebenfalls von Anfang an den Wert 0.
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
<b>Part 3</b>
    
    
In ```void setup()``` werden immer wiederkehrende Elemente hinterlegt. Die ```void setup()``` Funktion wird jedes mal beim Aufrufen des Sketches ein einziges Mal gestartet. Mit ```Serial.begin(9600)``` wird die serielle Schnittstelle geöffnet und die Datenrate auf 9600 Bit/s eingestellt. Über diese Schnittstelle lassen sich Daten in der Arduino IDE auf dem seriellen Monitor anzeigen, womit wir am Anfang einer Messreihe überprüfen, ob die Kabel korrekt angeschlossen sind. Mit der Funktion ```setSyncProvider(RTC.get)``` wird die Uhrzeit-Abfrage der Real-Time-Clock intialisiert.
    
Anschließend wird mit einer If-Abfrage geprüft, ob der BME280 angeschlossen ist. Sofern die Funktion ```bme.begin(0x76)``` einen falschen Wert zurück gibt, wird auf dem seriellen Monitor "Kein BME280 angeschlossen! Prüfe die Kabel" angezeigt, damit man die Anschlüsse überprüfen kann. Wenn kein BME280 angeschlossen ist,  wird die Funktion nicht beendet, weil eine ```while(1)``` Schleife eingefügt ist. Nachdem man die Anschlüsse überprüft hat, muss man den Sketch neu starten.
Wenn der Sensor angeschlossen ist, wird auf dem Seriellen Monitor "SD-Karte intialisieren" angezeigt. Es wird in der folgenden Funktion eine If-Abfrage gestartet, wo geprüft wird, ob die SD-Karte lesbar und beschreibbar ist. Wenn die Funktion ```SD.begin(SPI_CS)``` einen ungültigen Wert zurückgibt, wird auf dem Seriellen Monitor "SD-Karte nicht lesbar! Überprüfe die SD-Karte!" angezeigt. Falls die SD-Karte richtig eingelegt ist, wird die If-Abfrage verlassen und duf dem Seriellen Monitor wird "Erfolgreich intialisiert" angezeigt.
</td></tr>
<td>
    
```
    void loop() {
  // put your main code here, to run repeatedly:

temp = bme.readTemperature();
feuchte = bme.readHumidity();
druck = bme.readPressure() / 100.0F;
sonne = analogRead(sensorPin);
```    
</td><td>
<b>Part 4</b>

    
Der Inhalt der ```void loop()``` Funktion wird ständig wiederholt, nachdem die Funktion ```void setup()``` durchschritten wurden. Zu Beginn wird den in Part 2 bereits beschriebenen Variablen der Wert eine Funktion zugewiesen. So entspricht die Variable ```temp``` nun der Funktion ```bme.readTemperature()```. Dabei ist ```bme``` die Sensorbezeichnung und ```readTemperature()``` die aufgerufene Funktion. Wie in diesem Beispiel wird auch den Variablen ```feuchte```, ```druck``` und ```sonne``` ebenfalls der Wert einer Funktion zugewiesen.</td></tr>
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
<td>
<b>Part 5</b>
  
In diesem Abschnitt wird ein String erstellt. Ein String ist ein Datentyp und besteht aus einer Zeichenkette, wobei die Reihenfolge der Zeichen definiert ist. In unserem Beispiel erzeugen wir einen String mit dem Namen ```Datensatz```, der acht Elemente enthält. Die Zeichen werden in der Reihenfolge von oben nach unten gespeichert, wobei man einen Inhalt, sofern es keine Funktion ist, mit Anführungszeichen also z.B. "Inhalt" kennzeichnet. Der Inhalt wird dabei im String Datensatz gespeichert. Da wir in unserem Datensatz Zahlen (z.B. Werte für ```temp```) speichern möchten und für alle Variablen den Datentyp ```float``` (einer Gleitkommazahl) definiert hatten, müssen wir, um die Daten in den String aufnehmen zu können, den ```float``` mit der Funktion ```String(temp)``` zu einem String (einer Zeichenkette) umwandeln, da ein String nur Zeichenketten aufnehmen kann. Dieses Vorgehen haben wir bei ```temp```, ```feuchte```, ```druck``` und ```sonne```. Zwischen den Werten wird ein Komma eingesetzt, um die Werte zu trennen, was später noch für die erzeugte CSV-Datei wichtig ist. Man fügt einem String eine neue Zeichenketten hinzu, indem man diese mit einem Plus ergänzt.
    
</td></tr>
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
</td><td>
<b>Part 6</b>
    
Nachdem der String mit den Messdaten unter ```Datensatz``` in Part 5 gespeichert wurde, wird hier ein neuer String unter der Bezeichnung ```Zeit``` angelegt. Die Zeitangaben können mit unterschiedlichen Funktionen abgerufen werden. So wird die Stundenangabe mit der Funktion ```hour()``` abgefragt. Da diese Funktion eine Zahl darstellt, muss sie erneut mit der ```String()``` Funktion zu einem String umgewandelt werden. Dieses Vorgehen wird auch bei der Minutenangabe und Sekundenangabe angewandt. Diese Zahlen werden durch ein ":" getrennt und zu der folgenden Jahreszahl wird ein Komma gesetzt. Zwischen Jahreszahl, dem Monat und dem Tag sind "-" zur Abtrennung eingefügt. Diese From der Trennung der einzellnen Bestandteile ist erneut in der CSV-Datei von Bedeutung.
</td></tr>
<tr><td>

```
Serial.println(Datensatz);
Serial.println(Zeit);

File Zieldatei = SD.open("temp_log.csv", FILE_WRITE);

if (Zieldatei) {
  Zieldatei.print(Datensatz);
  Zieldatei.println(Zeit);
  Zieldatei.close();
  } else {
  Serial.println("Datensatz konnte nicht geschrieben werden");  
  }

delay(600000);
}
```
</td><td>
<b>Part 7</b>
  
Nachdem sowohl der String ``Datensatz`` als auch der String ``Zeit`` erstellt wurde, werden beide in unterschiedlichen Zeilen auf dem Seriellen Monitor angezeigt. Mit dem Befehl ``File Zieldatei = SD.open("temp_log.csv", FILE_WRITE)`` wird die Variable Zieldatei angelegt, die den Wert der Funktion ``SD.open("temp_log.csv", FILE_WRITE)`` erhält. Diese Funktion öffnet die SD-Karte, erstellt eine Datei mit der Bezeichnung "temp_log.csv" und erhält den Befehl ``FILE_WRITE``, was bedeutet, dass diese Datei zu schreiben bzw. in diese Datei zu schreiben ist.

Es folgt eine If-Abfrage mit dem Ziel, festzustellen, ob die Datei ``Zieldatei`` existiert. Sofern die Datei vorhanden ist, werden mit ``Zieldatei.print(Datensatz)`` und ``Zieldatei.println(Zeit)`` beide vorher definierten Strings in die Datei ``temp_log.csv`` geschrieben, wonach die Zieldatei anschließend geschlossen wird, damit keine Daten verloren gehen oder beschädigt werden.
  
Falls die Datei Zieldatei noch nicht existiert, wird auf dem Seriellen-Monitor "Datensatz konnte nicht geschrieben werden" angezeigt. Abschließend folgt eine Verzögerung von 10 Minuten (umgerechnet in Milisekunden = 600000, da die Delay-Funktion nur Milisekunden als Argument annimmt) mit der ``delay()`` Funktion, da alle 10 Minuten Werte von der Wetterstation auf der SD-Karte gespeichert werden sollen.</td></tr>
</table>  

<h3 id="Code">5.2. Der Code der Website</h3>

<p><b>Erklärung des Quellcodes für die Hauptwebsite</b></p>
    
<table>
  <tr><th>Code</th><th>Erklärung</th></tr>
  <tr><td>
        
![image](https://user-images.githubusercontent.com/88386045/144592915-75c908fc-3876-45ae-9415-c21f30f8d06e.png)

  </td><td>
  <b>Part 1</b>

Am Anfang des Codes für die Hauptseite wird ein Zugang<br>
zur Datenbank hergestellt, damit die Daten angezeigt<br>
werden können. Als nächstes wird der Zeichensatz <br>
definiert, mit dem der Code ausgelesen wird. Außerdem<br>
werden noch verschiedene strukturelle Dinge definiert,<br>
wie der Titel der Website, die Anzeige auf verschiedenen<br>
Geräten, die Verlinkung zum Stylesheet und das <br>
Hintergrundbild der Website. Dieser Code ist auf allen<br>
unterschiedlichen Websites, die auf der Hauptwebsite<br>
verlinkt sind, ähnlich.
    
  </td></tr>
  <tr><td>
    
 ![image](https://user-images.githubusercontent.com/88386045/144595449-0568097d-ac1a-4631-8415-a25efffab7de.png)
    
  </td><td>
  <b>Part 2</b>
    
    
An dieser Stelle wird die Überschrift der Website und<br>
der Link zum hochladen neuer Messdaten hinzugefügt.<br>
Diese sind in einer übergeordneten ``<section>`` <br>
angeordnet, damit sie am Ende nebeneinander angezeigt<br>
werden können.<br>
    
  </tr>
  <tr><td>
    
 ![image](https://user-images.githubusercontent.com/88386045/144597680-f67f9b82-6f54-4584-9bf9-7f999dd51492.png)

  </td><td>
  <b>Part 3</b>
    
In diesem Teil des Codes werden als erstes alle Messdaten<br>
aus der Datenbank importiert. Außerdem wurde eine<br>
Funktion eingebunden, die aus dem Datum den richtigen<br>
Wochentag berechnet und in einer Variable speichert.<br>
Dieser Wochentag wird dann zusammen mit dem<br>
jeweiligen Datum ausgegeben. Damit nicht jedes Datum<br>
so oft erscheint, wie es in der Datenbank vorhanden<br>
ist, wurden die Messdaten nach Datum gruppiert, so<br>
dass jedes Datum ein einziges Mal erscheint.<br>
Außerdem wird unter jedem Wochentag ein Link erstellt,<br>
der zur Unterseite mit den Graphen weiterleitet. Damit<br>
die Graphen aus den Messdaten des ausgewählten Tages<br>
bestehen, wird beim Klick auf dem Link auch das Datum<br>
des Tages mitgegeben. Da die Erstellung eines Tages<br>
über eine Schleife läuft sind am Ende alle Tage vorhanden.
   
    
  </td></tr>
</table><br>
  
<table>
  <tr><th>Code</th><th>Erklärung</th></tr>
  <tr><td>
    
 ![image](https://user-images.githubusercontent.com/88386045/144601500-a5d2b008-3ea3-4213-85e9-f645d5105f17.png)

  </td><td>
  <b>Part 1</b>
    
    Der Anfang dieser Website ist, wie bereits erwähnt, ähnlich
    zu dem der ersten Website. Die einzige Änderung ist nur, dass
    die Funktion für das Datum bereits hier definiert werden und
    zwei Dateien zur  richtigen Erstellung der Diagramme eingebunden
    werden. Außerdem wird das mit dem Link mitgegebene Datum in 
    einer diesbezüglichen Variable.
    
  </td></tr>
  <tr><td>
    
  ![image](https://user-images.githubusercontent.com/88386045/144599700-e94b41c9-0d02-4f83-af63-aa806a016235.png)
    
  </td><td>
  <b>Part 2</b>
    
    Nachdem die Struktur der Unterseite definiert wurde, werden
    jetzt alle Daten für das Datum importiert, das beim klicken
    auf den Link mitgegeben wurde. Als nächstes werden für die 
    verschiedenen Messwerte Listen erstellt und diese Listen im
    nächsten Schritt mit den jeweiligen Messwerten gefüllt. 
    Diese Listen werden am Ende zur richtigen Erstellung der
    Diagramme benötigt. Außerdem wird erneut das Datum des 
    Tages mit dem zugehörigen Datum ausgegeben. Anschließend
    wird noch ein Link erstellt, der einen wieder zur 
    Hauptwebsite leitet.
    
  </td></tr>
  <tr><td>
    
 ![image](https://user-images.githubusercontent.com/88386045/144601746-c7a0067a-b605-41ce-b50c-2221db0f6e24.png)

  </td><td>
  <b>Part 3</b>
    
  Als letztes werden noch die Diagramme erstellt. Hierfür
  werden für die Achsen die einzelnen Listen mit der Zeit
  für die x-Achse und den Messwerten für die y-Achse 
  übergeben. In dem gezeigten Beispiel links sieht man
  das Diagramm für die Temperatur. Außerdem werden noch
  die Farbe der ausgefüllten Fläche und des Graphens 
  festgelegt. Abschließend wird noch die Größe des Diagramms
  definiert und das fertige Diagramm ausgegeben. Um jeweils
  zwei Graphen am Ende nebeneinander anzeigen zu können,
  wurden wieder mehrere ``<section>`` genutzt.
    
  </td></tr>
</table><br>  
  
<table>
 <tr><th>Code</th><th>Erklärung</th></tr> 
 <tr><td>
    
 ![image](https://user-images.githubusercontent.com/88386045/144604250-642762af-6f4c-4ea5-ba7d-c7dc0f24de2d.png)

 </td><td>
 <b>Part 1</b>
    
    
    In diesem Code wird ein Formular zum hochladen der Daten erstellt. Als Methode zum schicken an das verarbeitende Programm wird die ``$_POST`` Funktion von Php genutzt. Weather.php ist das Programm, an das die Datei geschickt wird. Als nächstes werden drei verschiedene Felder generiert. In das erste Feld wird die CSV-Datei verschoben, die man hochladen möchte. Das zweite Feld ist ein Button, mit dem man das Hochladen abschließt. Das dritte und letzte Feld ist für das Passwort da, dass man vor dem Bestätigen eingeben muss, da sonst die Messdaten nicht importiert werden.
    
  </td></tr>
</table><br>  


<table>
  <tr><th>Code</th><th>Erklärung</th></tr>
  <tr><td>
    
 ![image](https://user-images.githubusercontent.com/88386045/144607353-e283a63f-ea79-4b30-925a-6349ebeaea23.png)

  </td><td>
  <b>Part 1</b>
    
    
    Das Programm ist das, an das die hochgeladene CSV-Datei geschickt wird. Am Anfang wird das Passwort, das eingegeben wurde in einer hierfür erstellten Variable gespeichert. Anschließend wird eine if-Schleife erstellt, die nur gestartet wird, wenn das eingegebene Passwort gleich dem vergebenen Passwort ist. Wenn dies der Fall ist wird in der if-Schleife ein Zugang zur Datenbank hergestellt, in die die Messwerte aus der Tabelle am Ende importiert werden sollen.
    
  
  <tr><td>
    
 ![image](https://user-images.githubusercontent.com/88386045/144608107-2800d088-349c-43d8-bfc4-b3c5b5ff7101.png)

  </td><td>
  <b>Part 2</b>
    
  </td><tr>
  <tr><td></td><td>
  <b>Part 3</b>
    
  </td><tr>
</table><br>  
  
  
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
<p>Als alles fertig war, war die Erleichterung in der Gruppe groß. Nicht immer sah es so aus, dass wir am Ende am Ziel ankommen. Besonders war die Passage der Zusammenführung der beiden Sketches für zwwei Sensoren herausfordernd. Als es dann am Ende langsam auf die Zielgerade ging, mussten nur noch die letzten Dinge an der Webseite programmiert und die Projektseite erstellt werden. Zusammenfassend können wir mit unserer Arbeitsweise sehr zufrieden sein. Durch die Gruppengröße von 3 Mitgliedern konnten schnell Fortschritte erzielt werden. Wir lagen dementsprechend immer in unserem selbstgesteckten Zeitplan und hatten am Anfang auch Zeit einige neue Sketche und Sensoren auszuprobieren, die am Ende dann doch keine Anwendung gefunden haben. Trotzdem haben sie uns beim Gesamtziel vorangebracht, da wie so viel lernen konnten. Falls ein weiteres Mal eine Gruppengröße von drei zur Debatte steht, würden wir nicht sagen können "es hat nicht funktioniert".   </p>  
  
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
<li>https://www.inf.hs-flensburg.de/lang/prog/string.html</li>

<br><p><b><u>Bildquellen</u></b></p>
<li>https://www.arduino.cc/en/reference/board</li>
<li>https://www.bosch-sensortec.com/products/environmental-sensors/humidity-sensors-bme280/</li>
  
  
<h2 id="kapitel10">10. Eigenständigkeitserklärung</h2>
  
<p><b>Eigenständigkeitserklärung</b><br>
  Wir erklären, dass wir die vorliegende Arbeit selbstständig und ohne Benutzung anderer als den 
angegebenen Hilfsmittel angefertigt und alle Stellen, die wörtlich oder sinngemäß aus 
veröffentlichten oder unveröffentlichten Schriften entnommen wurden, als solche kenntlich 
gemacht habe.<br>
Diese Arbeit wurde nicht, auch nicht auszugsweise, bereits für eine andere Prüfung angefertigt.</p>
