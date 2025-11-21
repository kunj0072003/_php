#include<stdio.h>
#include<string.h>



int reverseString(char str[]) {
    int i;
    int len = strlen(str);
    printf("\n--The string after reversing is: ");
    for(i = len - 1; i >= 0; i--) 
    {
        printf("%c", str[i]);
    }
    printf("\n");
    return 1;
}


int copyString(char str[]) {
    char copy[1000];
    strcpy(copy, str);
    printf("\n--Copied string is: %s\n", copy);
    return 1;
}



int concatStrings(char str[]) {
    char second[500];
    printf("Enter another string to concatenate: ");
    scanf(" %[^\n]s", second);  // Read including spaces
    strcat(str, second);
    printf("\n--Concatenated string is: %s\n", str);
    return 1;
}




int checkPalindrome(char str[]) {
    int i;
    int len = strlen(str);
    int isPalindrome = 1;
    for(i = 0; i < len / 2; i++) 
    {
        if(str[i] != str[len - i - 1]) 
        {
            isPalindrome = 0;
            break;
        }
    }
    if(isPalindrome)
    {
        printf("\n--The string is a Palindrome\n");
    }
    
    else
    {
        printf("\n--The string is NOT a Palindrome\n");
    }
    return 1;
}



int checkEquality(char str[]) {
    char str2[1000];
    printf("Enter another string to compare: ");
    scanf(" %[^\n]s", str2);
    if(strcmp(str, str2) == 0)
        printf("\n--Strings are Equal\n");
    else
        printf("\n--Strings are NOT Equal\n");
    return 1;
}





int charFrequency(char str[]) {
    char ch;
    int i, count = 0;
    printf("Enter the character to find frequency: ");
    scanf(" %c", &ch);
    for(i = 0; str[i] != '\0'; i++) {
        if(str[i] == ch)
            count++;
    }
    printf("\n--Frequency of '%c' is: %d\n", ch, count);
    return 1;
}




int showString(char str[]) {
    printf("\n--The string you entered is: %s\n", str);
    return 1;
}




int main() {
    char str[1000];
    int choice, cont = 1;

    while(cont == 1) {
        printf("\nMain Menu\n");
        printf(" 1. Equality\n");
        printf(" 2. String Copy\n");
        printf(" 3. Concat\n");
        printf(" 4. Show\n");
        printf(" 5. Reverse\n");
        printf(" 6. Palindrome\n");
        printf(" 7. Sub String\n");
        printf(" 8. Exit\n");


        printf("\nPlease Enter your choice: ");
        scanf("%d", &choice);

        if(choice >= 1 && choice <= 7) {
            printf("Please Enter the string: ");
            scanf(" %[^\n]s", str);
        }

        switch(choice) {
            case 1: {
                char str2[1000];
                printf("Enter another string to compare: ");
                scanf(" %[^\n]s", str2);
                if(strcmp(str, str2) == 0)
                    printf("\n--Strings are Equal\n");
                else
                    printf("\n--Strings are NOT Equal\n");
                break;
            }
             case 2: copyString(str); break;
             case 3: concatStrings(str); break;
             case 4: showString(str); break;
             case 5: reverseString(str); break;
             case 6: checkPalindrome(str); break;
             case 7: charFrequency(str); break;
             case 8:
                printf("\nThank you! Exiting the program.\n");
                return 0;
            default:
                printf("\n--Invalid Choice. Please select from the menu.\n");
        }

        printf("\nDo you want to continue? (Press 1 to continue): ");
        scanf("%d", &cont);
    }

    printf("\nExited the program. Have a nice day!\n");
    return 0;
}


