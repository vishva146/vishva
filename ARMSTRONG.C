//find armstrong number
# include <stdio.h>
void main ()
{
  int c,num,sum=0,digit;
  printf("\n enter an integer number:");
  scanf("%d",&c);
  num=c;
  while(c>0)
  {
    digit=c%10;
    sum=sum+digit*digit*digit;
    c=c/10;
  }
  if(num==sum)
  printf("\number %d is armstrong",num);
  else
  printf("number %d is not armstrong",num);
}