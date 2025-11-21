#include <stdio.h>

int main() 
{
    int num1, num2;

    printf("Enter first integer: ");
    scanf("%d", &num1);
    printf("Enter second integer: ");
    scanf("%d", &num2);

    printf("Arithmetic Operations:\n");
    printf("%d + %d = %d\n", num1, num2, num1 + num2);
    printf("%d - %d = %d\n", num1, num2, num1 - num2);
    printf("%d * %d = %d\n", num1, num2, num1 * num2);
    printf("%d / %d = %d\n", num1, num2, num1 / num2);

    printf("\nRelational Operations:\n");
    printf("%d > %d is %s\n", num1, num2, num1 > num2 ? "true" : "false");
    printf("%d < %d is %s\n", num1, num2, num1 < num2 ? "true" : "false");
    printf("%d == %d is %s\n", num1, num2, num1 == num2 ? "true" : "false");

    printf("\nLogical Operations:\n");
    printf("NOT %d is %d\n", num1, !num1);
    printf("NOT %d is %d\n", num2, !num2);
    printf("%d AND %d is %d\n", num1, num2, num1 && num2);
    printf("%d OR %d is %d\n", num1, num2, num1 || num2);
}