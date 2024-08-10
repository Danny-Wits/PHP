#include <iostream>
#include<vector>
using namespace std;

int sum (vector<int> list){
  int sum=0;
  for (int i: list)
  {
  sum+=i;
  }
 
  return sum;
}
vector<int> factors(int number)
{
   vector<int>factors_list;
   for (int i = 1; i < number; i++)
   {
      if (number%i==0)
      {
         factors_list.push_back(i);
      }
      
   }
   return factors_list;
}
int perfection(int number)
{ if(sum(factors(number))==number){
   return true;
}return false;
}
int main()
{
for (int i = 1; i < 10000; i++)
{ 
if (perfection(i)==true)
{
   cout<<i<<" | PREFECT";
   cout<<endl; 
}
}
   return 0;
}
