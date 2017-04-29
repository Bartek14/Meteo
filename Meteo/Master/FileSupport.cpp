#include "FileSupport.h"

FileSupport::FileSupport(const int& chipSelect)
{
	while (!SD.begin(chipSelect))
	{
		digitalWrite(13, HIGH);
		delay(1000);
		digitalWrite(13, LOW);
		delay(1000);
	}


}

void FileSupport::AddDataLine(LINEDATA* line)
{
	File dataFile = SD.open("data.dat", FILE_WRITE);

	dataFile.write(reinterpret_cast<char*>(&line->Size), sizeof(size_t));
	dataFile.write(reinterpret_cast<char*>(&line->Time), sizeof(TIMEDATA));
	dataFile.write(reinterpret_cast<char*>(&line->InnerDataCount), sizeof(unsigned int));
	dataFile.write(reinterpret_cast<char*>(&line->OuterDataCount), sizeof(unsigned int));
	for (int i = 0; i < line->InnerDataCount; ++i)
		dataFile.write(reinterpret_cast<char*>(&line->InnerDataArray[i]), sizeof(INNERDATA));
	for (int i = 0; i < line->OuterDataCount; ++i)
		dataFile.write(reinterpret_cast<char*>(&line->OuterDataArray[i]), sizeof(OUTERDATA));
}

LINEDATA FileSupport::ReadDataLine(const unsigned int& id)
{
	LINEDATA line;
	File dataFile = SD.open("data.dat", FILE_READ);

	for (int i = 0; i < id; i++)
	{
		dataFile.read(&line.Size, sizeof(size_t));

	}
}
