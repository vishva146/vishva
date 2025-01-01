//find vovels of the entered string...
# include <stdio.h>
void main()
{
   char ch;
   int a,e,i,o,u,sp,nv;
   a=e=i=o=u=sp=nv=0;
   printf("\n enter string (enter for terminate)");
   first:
   scanf("%c",&ch);
   switch (ch)
   {
    case 'a':	case 'A':
    a++;	goto first;
    case 'e':    case 'E':
    e++;	goto first;
    case 'i':   case 'I':
    i++;	goto first;
    case 'o':	case 'O':
    o++;	goto first;
    case 'u':	case 'U':
    u++;	goto first;
    case 10:	break;
    case' ':
    sp++;	goto first;
    default:
    nv++;	goto first;
   }
   printf("\n total vovels from string is \n a=%d,e=%d,i=%d,o=%d,u=%d",a,e,i,o,u);
}