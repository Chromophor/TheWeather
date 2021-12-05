#define SPI_CS 10

#include <Wire.h>
#include <DS1307RTC.h>
#include <SPI.h>
#include <SD.h>
#include <Adafruit_Sensor.h>
#include <Adafruit_BME280.h>

float temp;
float feuchte;
float druck;
float hohe;
float sonne = 0;

int sensorPin = A0;
int ledPin = 13;


Adafruit_BME280(bme);

void setup() {
  // put your setup code here, to run once:

Serial.begin(9600);
setSyncProvider(RTC.get);

if (!bme.begin(0x76)) {
  Serial.println("Kein BME280 angeschlossen! Prüfe die Kabel");
  while (1);
  }

Serial.println("SD-Karte initialisieren");

if (!SD.begin(SPI_CS)) {
  Serial.println("SD-Karte nicht lesbar! Überprüfe die SD-Karte!");
  while (1);
  }

Serial.println("Erfolgreich initialisiert");
}


void loop() {
  // put your main code here, to run repeatedly:

temp = bme.readTemperature();
feuchte = bme.readHumidity();
druck = bme.readPressure() / 100.0F;
sonne = analogRead(sensorPin);



String Datensatz =  String(temp) +
                    "," +
                    String(feuchte) +
                    "," +
                    String(druck) +
                    "," +
                    String(sonne) +
                    ",";
          
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
