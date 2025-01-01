//result sheet
# include <stdio.h>
void main()
{
  int m1,m2,m3,m4,total;
  float per;
  char grade;
  printf("\n enter marks of four subject");
  scanf("%d",&m1);
  scanf("%d",&m2);
  scanf("%d",&m3);
  scanf("%d",&m4);
  if(m1>39&&m2>39&&m3>39&&m4>39)
  {
   total=m1+m2+m3+m4;
   per=total/4.0;
   if(per>=90)
   grade='A';
   else
   if(per>=80)
   grade='B';
   else if (per>=70)
   grade='C';
   else if(per>=60)
   grade='D';
   else grade='E';
   printf("\n marks of all subject");
   printf("\n %d,%d,%d,%d",m1,m2,m3,m4);
   prntf("Result:PASS total=%f,grade:%c",per,grade);
  }
  else
  printf("\n Result: FAIL");
}