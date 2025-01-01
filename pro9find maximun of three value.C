//Find maximum out of three value
# include <stdio.h>
void main ()
{
  int a,b,c;
  printf("\n enter three integer value");
  scanf("%d",&a);
  scanf("%d",&b);
  scanf("%d",&c);
  if(a>b)
  {
  if(a>c)
  printf("\n A is maximum");
  else
  printf("\n C is maximum");
  }
  else
  {
   if (b>c)
   printf("\n B is maximum");
   else
   printf("\n C is maximum");
  }
}