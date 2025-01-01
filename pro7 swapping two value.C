//swapping two value
# include <stdio.h>
void main ()
{
  int a,b,c;
  printf("\n enter value:");
  scanf("%d",&a);
  printf("\n enter value:");
  scanf("%d",&b);
  printf("\n before swapping...%d and %d",a,b);
  c=b;
  b=a;
  b=c;
  printf("\n after swapping...%d and %d",a,b);
}