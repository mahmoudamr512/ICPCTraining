#include <iostream>

using namespace std;

int arr1[25];

int main() {

    cout << "Hey, enter your 20 numbers: ";

    for (int i = 0; i < 20; i++) {
        cin >> arr1[i];
    }

    cout << "The numbers you entered are: ";

    for (int i = 19; i >= 0; i--) {
        cout << arr1[i] << " ";
    }

    return 0;
}