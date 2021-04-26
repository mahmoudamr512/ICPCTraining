#include <iostream>

using namespace std;

int main() {

    for (int i = 0; i <= 19; i++) {
        if (i%4 != 0) {
            cout << i << endl;
        } else {
            continue;
        }
    }

    return 0;
}