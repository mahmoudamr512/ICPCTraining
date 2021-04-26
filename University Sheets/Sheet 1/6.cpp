#include <iostream>

using namespace std;

int main() {

    cout << "Please Enter The Numbers you want \n PS: You can Enter a negative number to exit the program: \n";

    int integer, product = 1;

    while (1) {

        cin >> integer;

        cout << endl;

        if(integer < 0) {
            break;
        }

        product *= integer;

    } 

    cout << "The product of all your positive numbers is " << product; 
    

    return 0;
}