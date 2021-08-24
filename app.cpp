#include <iostream>

using namespace std;

int FindMax(int arr[], int n) {

    int max = arr[ 0 ];

    for(int i = 1; i < n; ++i) {

        if(arr[i] > max) {

          max = arr[i];
        }
    }
    return max;
}

int main(int argc, char const *argv[]) {

  int arr[] = {9,3,3,8,7,6,5,5,4,4,3,2,1},

  n = sizeof(arr) / sizeof(arr[0]);

  int max = FindMax(arr, n);

  int counts[ max + 1 ] = {0};

  for(int i = 0; i < n; ++i) {

     counts[arr[i]]++;
  }

  int pos = 0;

  for(int i = 0; i <= max; ++i) {

      for(int j = 0; j < counts[i]; ++j) {

          arr[ pos++ ] = i;
      }
  }

  for(int i = 0; i < n; ++i) cout<<arr[ i ]<<" ";

  return 0;
}
