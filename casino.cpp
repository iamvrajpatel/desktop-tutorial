#include <iostream>
#include <string>  // Needed to use strings
#include <cstdlib> // Needed to use random numbers
#include <ctime>
using namespace std;
void rules();
int main()
{
    string playerName;
    int Amount; // stores player's Amount
    int bettingAmount;
    int Predict;
    int Random; // stores the random number
    char choice;
    srand(time(0)); // "Seed" the random generator
    cout << "\n\t\t========WELCOME TO CASINO WORLD=======\n\n";
    cout << "\n\nWhat's your Name : ";
    getline(cin, playerName);
    cout << "\n\nEnter the starting Amount to play game : $";
    cin >> Amount;
    do
    {
        system("cls");
        rules();
        cout << "\n\nYour current Amount is $ " << Amount << "\n";
        // Get player's betting Amount
        do
        {
            cout << "Hey, " << playerName << ", enter amount to bet : $";
            cin >> bettingAmount;
            if (bettingAmount > Amount)
                cout << "Betting Amount can't be more than current Amount!\n"
                     << "\nRe-enter Amount\n ";
        } while (bettingAmount > Amount);
        // Get player's numbers
        do
        {
            cout << "Predict any betting number between 1 & 10 :";
            cin >> Predict;
            if (Predict <= 0 || Predict > 10)
                cout << "\nNumber should be between 1 to 10\n"
                     << "Re-enter number:\n ";
        } while (Predict <= 0 || Predict > 10);
        Random = rand() % 10 + 1;
        if (Random == Predict)
        {
            cout << "\n\nYou are in luck!! You have won Rs." << bettingAmount * 10;
            Amount = Amount + bettingAmount * 10;
        }
        else
        {
            cout << "Oops, better luck next time !! You lost $ " << bettingAmount << "\n";
            Amount = Amount - bettingAmount;
        }
        cout << "\nThe winning number was : " << Random << "\n";
        cout << "\n"
             << playerName << ", You have Amount of $ " << Amount << "\n";
        if (Amount == 0)
        {
            cout << "You have no money to play ";
            break;
        }
        cout << "\n\n-->Do you want to play again (y/n)? ";
        cin >> choice;
    } while (choice == 'Y' || choice == 'y');
    cout << "\n\n\n";
    cout << "\n\nThanks for playing the game. Your Amount is $ " << Amount << "\n\n";
    return 0;
}
void rules()
{
    system("cls");
    cout << "\t\t======CASINO NUMBER PredictING RULES!======\n";
    cout << "\t1. Choose a number between 1 to 10\n";
    cout << "\t2. Winner gets 10 times of the money bet\n";
    cout << "\t3. Wrong bet, and you lose the amount you bet\n\n";
}