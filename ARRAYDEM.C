//Definition,declaration,sum,average,max and min value of an array
# include <stdio.h>
int main()
{
   int array[10],i,sum=0,max,min;
   float average;
   for(i=0; i<10; i++)
   {
   printf("enter value:");
   scanf("%d",&array[i]);
   }
   for(i=0; i<10; i++)
   {
   printf("value at index %d and value:%d",i,array[i]);
   sum=sum+array[i];
   }
   printf("sum of value:%d",sum);
   average=sum/10.0;
   max=min=array[0];
   for(i=1;1<10;i++)
   {
     if(max<array[i])max=array[i];
     if(min>array[i])min=array[i];
   }
   printf("\n array=%f",average);
   printf("\n max=%d",average);
   printf("\n min=%d",average);
   return 0;
}