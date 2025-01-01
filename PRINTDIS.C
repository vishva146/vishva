//print display table of x
# include <stdio.h>
# include <conio.h>

void main()
{
  int counter,x,ans;
  counter=1;
  clrscr();
  printf("\n enter number for table:");
  scanf("%d",&x);
  top:
	ans=x*counter;
	printf("%d x%d=%d",x,counter,ans);
	counter=counter+1;
	if(counter<11)goto top;
}
/*
void main()
{
   int counter,x;
   counter=1;
   clrscr();
   printf("\n enter number for table:");
   scanf("%d",&x);
   do{
   printf("%d x%d=%d\n",x,counter++,x*counter);
   } while (counter<11);
}
*/