#include <stdio.h>
#include <conio.h>

void printBoard();
int checkWin();
void system();

char board[]={'0','1','2','3','4','5','6','7','8','9'};

void main(){
    int player=1,input,status=-1;
    printBoard();
   

    while (status==-1)
    {
        player=(player%2==0) ? 2 : 1;
        char mark=(player==1) ? 'X' :'O';
        printf("\n\nPlease enter Number For Player %d\n",player);
        scanf("%d",&input);
    if(input<1 || input>9)
    {
        printf("invalid input");
    }

    board[input]=mark;
    printBoard();

    int result=checkWin();

    if(result==1){
        printf("\nPlayer %d is the Winner",player);
        return;
    }else if(result==0){
        printf("\ndraw");
        return;
    }

    player++;
    }
    
    
}

void printBoard(){
    system("cls");
    printf("\n\n");
    printf("\t\t\t\t***=== TIC TAC TOE ===***\n\n");
    /*printf("     |     |     \n");
    printf("  %c  |  %c  |  %c  \n",board[1],board[2],board[3]);
    printf("__|_|__\n");
    printf("     |     |     \n");
    printf("  %c  |  %c  |  %c  \n",board[4],board[5],board[6]);
    printf("__|_|__\n");
    printf("     |     |     \n");
    printf("  %c  |  %c  |  %c  \n",board[7],board[8],board[9]);
    printf("     |     |     \n");
    printf("\n\n");*/
    printf("\n\t\t\t\t     |     |     ");
	printf("\n\t\t\t\t  %c  |  %c  |  %c  ",board[1],board[2],board[3]);
	printf("\n\t\t\t\t_____|_____|_____");
	printf("\n\t\t\t\t     |     |     ");
	printf("\n\t\t\t\t  %c  |  %c  |  %c  ",board[4],board[5],board[6]);
	printf("\n\t\t\t\t_____|_____|_____");
	printf("\n\t\t\t\t     |     |     ");
	printf("\n\t\t\t\t  %c  |  %c  |  %c  ",board[7],board[8],board[9]);	
	printf("\n\t\t\t\t     |     |     ");
}


int checkWin(){

    if(board[1]==board[2] && board[2]==board[3]){
        return 1;
    }
    if(board[1]==board[4] && board[4]==board[7]){
        return 1;
    }
    if(board[7]==board[8] && board[8]==board[9]){
        return 1;
    }
    if(board[3]==board[6] && board[6]==board[9]){
        return 1;
    }
    if(board[1]==board[5] && board[5]==board[9]){
        return 1;
    }
    if(board[3]==board[5] && board[5]==board[7]){
        return 1;
    }
    if(board[2]==board[5] && board[5]==board[8]){
        return 1;
    }
    if(board[4]==board[5] && board[5]==board[6]){
        return 1;
    }

    int i,count=0;
    for (i = 1; i <=9; i++)
    {
        if(board[i]=='X' || board[i]=='O'){
            count++;
        }
    }
    
    if(count==9){
        return 0;
    }
    return -1;
}
