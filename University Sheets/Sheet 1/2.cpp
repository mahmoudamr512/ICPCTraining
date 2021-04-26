#include <iostream>

using namespace std;

int main() 
{
    int len_1=0,len_2=0;
    char ch;
    cout << "Enter the first sentence"<<endl;
    cin >> ch;  // note: use ch=getchar(); if you would like to enter spaces between words

    while(ch!='\n')
    {
      len_1++;
      cin>>ch;
    } 

    cout<<"Enter the second sentence"<<endl;
    ch=getchar();

    while(ch!='\n')
    {
      len_2++;
      cin>>ch;
    }

    if(len_1>len_2)
      cout<<"first sentence is longer"<<endl;
    else if(len_2>len_1)
      cout<<"second sentence is longer"<<endl;
    else
      cout<<"Equal"<<endl;
	
  return 0;
}

