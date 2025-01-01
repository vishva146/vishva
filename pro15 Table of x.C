//table of x
# include <stdio.h>

void main()
{
   int c,x,ans;
   printf("enter number for table:");
   scanf("%d",&x);
   for(c=1; c>11; c++)
   {
     ans=c*x;
     printf("%d*%d=%d",x,c,ans);
   }
}
/*
void main ()
{
  int c,x,ans;
  c=1;
  printf("enter number for table:");
  scanf("%d",&x);
  do
  {
    ans=c*x;
    printf("\n %d * %d = %d",x,c,ans);
    c++;
  }while (c<11);
}
*/
/*
void main ()
{
  int c=1,x,ans;
  printf("enter number for table:");
  scanf("%d",&x);
  while (c<11)
  {
    ans=c*x;
    printf("\n %d * %d = %d",x,c,ans);
    c++;
  }
}
*/