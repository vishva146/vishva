//shorting of an array
# include <stdio.h>
# include <conio.h>
int main()
{
   int array[4],i,j,tmp;
   clrscr();
   for(i=0; i<4; i++)
   {
    printf("enter value:");
    scanf("%d",&array);
   }
   {
   printf("\n before shorting...");
   for(j=0;j<4;j++)
   printf("%d",array[i]);
   }
   return 0;
}