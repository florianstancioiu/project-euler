#include <iostream>
using namespace std;

// this is uncomputable too,
// supposedly, ackermann(4,4) is a bigger number than the entirety of the universe
// the problem can still be solved with some chinese technique and euler theorem
// but at that point, the problem is not about the problem any more and the program becomes huge
// fucking assholes 
int ackermann(int m, int n) {
    if (m == 0) {
        return n+1;
    }

    if (m > 0) {
        if (n == 0) {
            return ackermann(m-1, 1);
        }

        if (n > 0) {
            return ackermann(m-1, ackermann(m, n-1));
        }
    }
}

int main(void) {
    int sum = 0, i = 0, n = 3;

    for (i=0; i<=n; i++) {
        sum += ackermann(n, n);
    }

    cout<<sum<<"\n";

    return 0;
}
