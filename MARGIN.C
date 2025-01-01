//MARGIN of two array
# include <stdio.h>
#define size1 5
#define size2 7
void main()
{
   int a1[size1],a2[size2],a3[size1+size2],i,j;
   for(i=0;i<size1;i++)
   {
    printf("enter value:");
    scanf("%d",&a1[i]);
   }
    for(i=0;i<size2;i++)
   {
    printf("enter value:");
    scanf("%d",&a2[i]);
   }
   for(i=0;i<size1;i++)
   {
     a3[i]=a1[i];
   }
   for(j=0;j<size1;j++)
   {
     a3[i]=a2[j];
     i=i+1;
   }
     for(i=0;i<size2;i++)
   {
     a3[i]=a2[i];
   }
   for(j=0;j<size2;j++)
   {
     a3[i]=a2[j];
     i=i+1;
   }
}
