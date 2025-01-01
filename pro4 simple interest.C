//calculate simple interest
# include <stdio.h>
void main()
{
  const int year=2;
  int pamt=1000;
  float rate=10600;
  float interest;
  interest=pamt+rate+year/100;//calculate si
  printf("principle amount %d,number of year %d,and /n",pamt,year);
  printf("rate of interest %f",rate);
  printf("\n simple interest is %f",interest);
}