//multipal choice with switch-case statement
# include <stdio.h>
# include <conio.h>
void main()
{
   int choice;
   clrscr();
   printf("\n1,menu\n2,open\n3,save\n4,save as\n5,print\n0,exit");
   printf("\n enter your choice:");
   scanf("%d",&choice);
   switch (choice)
   {
   case 1:
	printf("\n creating new file...");
	break;
   case 2:
	printf("\n opening a file...");
	break;
   case 3:
	printf("\n saving a file...");
	break;
   case 4:
	printf("\n save as another name...");
	break;
   case 5:
	printf("\n printing a file...");
	break;
   case 0:
	printf("\n exit program...");
	break;
   default:
	printf("\n wrong choice...");
   }
   printf("\n after switch-case statements...");
}