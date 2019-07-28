#include <iostream>
#include <ctime>

void PrintIntroduction(int Difficulty)
{
std::cout << std::endl << "you are a secret agent trying to break into a level " << Difficulty;
    std::cout << "\n server room.you need to enter the correct combination of numbers to gain access!\n";
    std::cout <<std::endl;
};
bool PlayGame(int Difficulty) 
{
    PrintIntroduction(Difficulty);
    int CodeA = rand() % Difficulty + Difficulty;
    int CodeB = rand() % Difficulty + Difficulty;
    int CodeC = rand() % Difficulty + Difficulty;
    int CodeSum= CodeA + CodeB + CodeC;
    int CodeProduct = CodeA * CodeB * CodeC;


    std::cout << "+There are 3 numbers in the code.\n"; 
    std::cout << "+The 3 digits add-up to:";
    std::cout << CodeSum;
    std::cout << std::endl;
    std::cout << "+The product of the 3 numbers is:";
    std::cout << CodeProduct << std::endl;

    int GuessA;
    int GuessB;
    int GuessC;
    std::cin >> GuessA;
    std::cin >> GuessB;
    std::cin >> GuessC;
    
    int GuessSum= GuessA + GuessB + GuessC;
    int GuessProduct= GuessA * GuessB * GuessC; 

    if (GuessSum == CodeSum && GuessProduct == CodeProduct)
    {
    std::cout << "***Correct! now try breaking into a more secure server room!***\n";
    return true;
    }
    else
    {
    std::cout << "***Wrong answer try again!***\n";
    return false;
    }
}

int main()
{
srand(time(NULL));
int LevelDifficulty = 1;
int const MaxLevel = 5;
while (LevelDifficulty <= MaxLevel) 
{
bool bLevelComplete=PlayGame(LevelDifficulty);
std::cin.clear();
std::cin.ignore();

if (bLevelComplete)
{
++LevelDifficulty;
}   
}
std::cout << "congratulations! you have beaten the game!"; 
return 0;
}