//character array
# include <stdio.h>
# include <conio.h>
void main()
{
    char s1[20],s2[20];
    clrscr();
    printf("\n enter two string:");
    gets(s1); gets(s2);
    printf("\n entered string are:%s\n and %s\n",s1,s2);
    strcpy(s1,s2);//string s2 copy to string s1
    printf("\n after copied string are:s\n and %s\n",s1,s2);
    strcpy (s1,"M J K C C");
    printf("\n enterd strings are:%s\n and %s\n",s1,s2);
}