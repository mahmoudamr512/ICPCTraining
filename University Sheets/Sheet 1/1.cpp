#include <iostream>

using namespace std;

// You can input it as a string and just reverse it using algorithm! 

// However, let's code it as integer!

int main() {

   int integer, reverseNumber;

   cin >> integer;

   if (integer == 0) {
       cout << integer;
   } else { 

        while (integer != 0) {

            reverseNumber = integer % 10;

            cout << reverseNumber;

            integer /= 10;
            
        }

   }


    

    return 0;
}