#include <iostream>

using namespace std;

int main() {

    int N; 

    cout << "How many numbers would you like to enter? ";

    cin >> N;

    cout << "OKAY! FAST, ENTER THE NUMBERS!!!!" << endl;

    int number;
    
    long long max = -1000000000, min = 99999999999;

    for (int i = 0; i < N; i++) {

        cin >> number;

        if (number > max) {
            max = number;
        } else if (number < min) {
            min = number;
        }

    }   

    cout << "Maximum is: " << max << endl << "Minimum is: " << min << endl;


    return 0;
}