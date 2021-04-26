#include <iostream>

using namespace std;

int main() {

    cout << "Please Enter The Numbers you want \n PS: You can Enter a negative number to exit the program: \n";

    int integer, even = 0, odd = 0;

    while (1) {

        cin >> integer;

        cout << endl;

        if(integer < 0) {
            break;
        }

        (integer%2 == 0) ? even++ : odd++;

    } 

    cout << "Odd Numbers: " << odd << endl << "Even Numbers: " << even << endl;

    

    return 0;
}