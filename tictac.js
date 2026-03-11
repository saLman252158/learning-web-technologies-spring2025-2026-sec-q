var cells = document.getElementsByClassName("cell");
var statusText = document.getElementById("status");

var currentPlayer = "X";
var gameOver = false;

var board = ["","","","","","","","",""];

for(var i=0;i<cells.length;i++)
{
cells[i].addEventListener("click", cellClick);
}

function cellClick(){

if(gameOver == true)
{
return;
}

var index = this.id[1];

if(board[index] != "")
{
return;
}

this.innerHTML = currentPlayer;
board[index] = currentPlayer;

checkWinner();

if(gameOver == false)
{
if(currentPlayer == "X")
{
currentPlayer = "O";
}
else
{
currentPlayer = "X";
}

statusText.innerHTML = "Player " + currentPlayer + " Turn";
}

}

function checkWinner(){

var win = false;

if(board[0]==board[1] && board[1]==board[2] && board[0]!="")
{
cells[0].classList.add("win");
cells[1].classList.add("win");
cells[2].classList.add("win");
win = true;
}

if(board[3]==board[4] && board[4]==board[5] && board[3]!="")
{
cells[3].classList.add("win");
cells[4].classList.add("win");
cells[5].classList.add("win");
win = true;
}

if(board[6]==board[7] && board[7]==board[8] && board[6]!="")
{
cells[6].classList.add("win");
cells[7].classList.add("win");
cells[8].classList.add("win");
win = true;
}

if(board[0]==board[3] && board[3]==board[6] && board[0]!="")
{
cells[0].classList.add("win");
cells[3].classList.add("win");
cells[6].classList.add("win");
win = true;
}

if(board[1]==board[4] && board[4]==board[7] && board[1]!="")
{
cells[1].classList.add("win");
cells[4].classList.add("win");
cells[7].classList.add("win");
win = true;
}

if(board[2]==board[5] && board[5]==board[8] && board[2]!="")
{
cells[2].classList.add("win");
cells[5].classList.add("win");
cells[8].classList.add("win");
win = true;
}

if(board[0]==board[4] && board[4]==board[8] && board[0]!="")
{
cells[0].classList.add("win");
cells[4].classList.add("win");
cells[8].classList.add("win");
win = true;
}

if(board[2]==board[4] && board[4]==board[6] && board[2]!="")
{
cells[2].classList.add("win");
cells[4].classList.add("win");
cells[6].classList.add("win");
win = true;
}

if(win == true)
{
statusText.innerHTML = "Player " + currentPlayer + " Wins!";
gameOver = true;
return;
}

var draw = true;

for(var i=0;i<9;i++)
{
if(board[i] == "")
{
draw = false;
}
}

if(draw == true)
{
statusText.innerHTML = "Draw Game!";
gameOver = true;
}

}

function resetGame(){

board = ["","","","","","","","",""];
gameOver = false;
currentPlayer = "X";

statusText.innerHTML = "Player X Turn";

for(var i=0;i<cells.length;i++)
{
cells[i].innerHTML = "";
cells[i].classList.remove("win");
}

}