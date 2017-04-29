/*
 Name:		Master.ino
 Created:	4/26/2017 5:45:28 AM
 Author:	mpiot
*/

#include "FileSupport.h"
#include "WirelessSupport.h"

void setup() 
{
	pinMode(13, OUTPUT);
	pinMode(12, OUTPUT);
	pinMode(11, OUTPUT);

	digitalWrite(13, HIGH);
	digitalWrite(12, LOW);
	digitalWrite(13, HIGH);

	Serial.begin(9600);
	Serial.println(sizeof(TIMEDATA));
}

void loop() 
{
	
}
