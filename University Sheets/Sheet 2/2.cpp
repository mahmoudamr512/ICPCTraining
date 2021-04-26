#include <iostream>

using namespace std;

char char1;

int arr1[25];
int arr2[25];


int main() {



    do {
        bool same = true;

    cout << "Hey, enter your first 5 numbers: ";

    for (int i = 0; i < 5; i++) {
        cin >> arr1[i];
    }

    cout << "Hey, enter your second 5 numbers: ";

    for (int i = 0; i < 5; i++) {
        cin >> arr2[i];
        if (arr2[i] != arr1[i]) {
            same = false;
        }
    }
    
    (same) ? cout << "There is a match between them!" : cout << "No match found!";

    cout << endl << "Would you like to continue? Enter Y to continue! ";
    
    cin >> char1;
    
    } while(char1 == 'Y' || char1 == 'y');

    
    return 0;
}