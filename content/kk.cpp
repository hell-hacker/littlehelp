/******************************************************************************

                              Online C++ Compiler.
               Code, Compile, Run and Debug C++ program online.
Write your code in this editor and press "Run" button to compile and execute it.

*******************************************************************************/

#include <iostream>

using namespace std;

int main()
{
    int t;
    cin>>t;
    while(t--)
    {
        int n,k,p=0,sum=0;
        cin>>n>>k;
        int A[n];
        for(int a=1;a<=n;a++)
        {
            if(a>k)
            {
                A[p]=a;
                p++;
            }
            else{
                if(a>k/2&&a<k)
                {
                    A[p]=a;
                    p++;
                }
                if(k%2==0&&a==k/2)
                {
                    A[p]=a;
                    p++;
                }
                
            }
        }
        cout<<p<<'\n';
        for(int a=0;a<p;a++)
        cout<<A[a]<<" ";
        cout<<'\n';
    }
}