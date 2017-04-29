#include <iostream>
#include <fstream>
#include <sstream>
#include <string>

using namespace std;

string floatToStringConverter(float);

int main()
{
	ofstream file;
	file.open("site.html");
	ifstream base;
	base.open("baseSite.html");
	string data;

	while (!base.eof())
	{
		getline(base, data);
		file<<data<<endl;
		if (data == "//temperature")
		{
			for (int i = 0; i < 60; i++)
			{
				data = "";
				data += "\t";
				data += "t[";
				data += floatToStringConverter(float(i));
				data += "] = ";
				data += floatToStringConverter(float(60 - i));
				file<<data<<endl;
			}
		}
	}

	cout<<"done"<<endl;
	int i;
	cin>>i;
	
}

string floatToStringConverter(float num)
{
	ostringstream ss;
	ss<<num;

	return string(ss.str());
}
