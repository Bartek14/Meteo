#pragma once

#if defined(ARDUINO) && ARDUINO >= 100
	#include "arduino.h"
#else
	#include "WProgram.h"
#endif

#include <SD.h>

struct TIMEDATA
{
	uint8_t Second; 
	uint8_t Minute; 
	uint8_t Hour; 
	uint8_t Wday;   // day of week, sunday is day 1
	uint8_t Day;
	uint8_t Month; 
	uint8_t Year;   // offset from 1970; 
};

struct INNERDATA
{
	unsigned int ID;				// 
	unsigned int Humidity;			// 0.0 ; 100.0 %
	unsigned int Temperature;		// -40.0 ; 80.0 C
	unsigned int Illumination;		// 1 ; 65535 lux
};

struct OUTERDATA
{
	unsigned int ID;				// 
	unsigned int Humidity;			// 0.0 ; 100.0 %
	unsigned int Temperature;		// -40.0 ; 80.0 C
	unsigned int Illumination;		// 1 ; 65535 lux
	unsigned int Pressure;			// 300 ; 1100 hPa
	unsigned int WindDirection;		// 0.00 ; 2.00 * PI rad
	unsigned int WindSpeed;			// 0.0 ; 100.0 m/s
	unsigned int BatteryLevel;		// 0.0 ; 100.0 %
};

struct LINEDATA
{
	size_t Size;
	TIMEDATA Time;
	unsigned int InnerDataCount;
	unsigned int OuterDataCount;
	INNERDATA* InnerDataArray;
	OUTERDATA* OuterDataArray;
};

class FileSupport
{
public:
	FileSupport(const int& = 10);

	void AddDataLine(LINEDATA*);
	LINEDATA ReadDataLine(const unsigned int&);

private:
};