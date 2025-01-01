//short int
# include <stdio.h>
# include <conio.h>
void main()
{
  char ch=0;
  clrscr();
  first:
	printf("\n number %d=character%d",ch,ch);
	ch++;
	if(ch<=126)goto first;
}