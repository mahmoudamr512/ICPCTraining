#include <iostream>

using namespace std;

int main() {

    int integer;    
    
    cout << "Enter numbers (less than 0 to end): ";

    int max1, max2;
    int counter = 0;

    while (1) {

        cin >> integer;

        if (integer < 0) {
            break;
        }

        if (counter == 0) {
            max1 = integer;
        } else if(counter == 1) {
            max2 = integer;
        }

        if (integer > max1) {
            max1 = integer;
        } else if (integer > max2) {
            max2 = integer;
        }

        counter++;
    }

    cout << endl << "The two max numbers are: " << max1 << " " << max2;

    return 0;
}