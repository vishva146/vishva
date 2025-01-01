//write a programe to evaluate given number is odd or even
# include <stdio.h>
void main()
{
  int number,remainder;
  number=34;
  remainder=number%2;
  if(remainder==1)
  printf("number %d is odd value",number);
  else
  printf("number is even value", number);
}