#include <iostream>
#include <string>
#include <fstream>

using namespace std;

// declare our database
  string UserOne = "Bob";
  int PinOne = 1100;
  string UserTwo = "Jack";
  int PinTwo = 3321;
  string UserTh = "Kira";
  int PinTh = 0001;
  //global variables
  string User;
  int Pin;


bool Auth(string User ,int Pin)
{

  // check if the User&Pin are matching
  if (User == UserOne && Pin == PinOne || User == UserTwo && Pin == PinTwo || User == UserTh && Pin == PinTh)
 {  
    cout << "Logged in successfully\n";
     return true;
 }
 else
 {  cout << "Wrong User and/or Pin\n"; 
    return false;
 }
 
 
}
bool Start(string User ,int Pin)
{
 if (Auth(User ,  Pin) == true)
 {
     ifstream inFile;
    // open the file stream
    inFile.open("C:\\Users\\armin\\Desktop\\web\\text.txt" , ios::in);
    // check if opening the file failed
    if (inFile.fail()) {
        cerr << "Error opening the text file" << endl;
        inFile.close();
        exit(1);
    }
    string line;
    while (getline(inFile, line))
    {
        cout << line << endl;
    }
    // close the file stream
    inFile.close();
 }
 
}

int main()
{
 //take user and pin
 cout << "Please enter your username:\n";
 cout << "!!! THE FIRST LETTER OF THE USERNAME MUST BE CAPITAL !!!\n";
 cin >> User;
 cout << "Please enter your password:\n";
 cin >> Pin;
 Start(User , Pin);
 return 0;
}



