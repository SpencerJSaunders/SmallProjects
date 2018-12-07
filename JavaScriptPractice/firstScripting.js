/*var userName = prompt("What is your name?");
alert("Nice to meet you, " + userName);
console.log(userName);

var number = Math.floor(Math.random() * 10) + 0;

var guess = prompt("Guess number: ");

while(Number(guess) !== Number(number))
{
    if(Number(guess) > Number(number))
    {
        alert("Too high!");
    }
    else if(Number(guess) < Number(number))
    {
        alert("Too low!");
    }

    else if(guess === "Exit" || guess === "exit")
    {
        break;
    }

    guess = prompt("Guess number: ");
}

if(Number(guess) === Number(number))
{
alert("Correct! The number is " + number);
}



var count = 6;
count = Number(count);

while(Number(count) <= 333)
{
    if(Number(count) % 2 !== 0)
    {
        document.write(count + "\n");
    }

    count++;
} 

while(count < 50)
{
    if((count % 5 === 0) && (count % 3 === 0))
    {
        document.write(count + "\n")
    }

    count++;
}


function factorial(num)
{
    count = num; 
    sum = 1;
    while(count > 0)
    {
        sum = sum*count;
        count = count-1;
    }

    return sum;
}

function kebabToSnake(kebab)
{
    var initial = kebab;
    var transform = "";

    for(var i = 0; i < initial.length; i++)
    {
        if(initial.charAt(i) === "-")
        {
             transform += "_";
        }
        else
        {
            transform += initial.charAt(i);
        }
    }

    return transform;
}


var fact = [10, 20, 30, 40, 50, 60, 70];
var fact2 = fact.slice(2, fact.length-1);
document.write(fact2);

var input = prompt("Enter new, list, remove, or quit");
var todo = [];

while(input !== "quit")
{

if(input === "new")
{
    var value = prompt("Enter a value: ");
    todo.push(value);
    console.log(value + " added to list!");

}
else if(input === "list")
{
    listTodos();
}

else if(input === "remove")
{
    var removeItem = prompt("Type the name of the item you want to remove: ");
    var index = todo.indexOf(removeItem);
    if(index !== -1)
    {
    todo.splice(index, 1);
    console.log(todo + " after the removal of the element");
    }
    else
    {
        console.log("Item doesn't exist in the list!");
    }
}

 input = prompt("Enter another command (new, list, or quit)\n");


}

function listTodos()
{
    for(var i = 0; i < todo.length; i++)
    {
        console.log(todo[i] + " is the " + (i+1) + "th element in the array");
    }
}


var a1 = ["b", "b", "b", 3];
var a2 = [1, 1, 1, 1, 2];

var maxArray = [1, 5, 2, 54, 23, 55, 43, 1023, 24];


function isUniform(array)
{
    if(array.length === 0)
    {
        return false;
    }
    
    var compareValue = array[0];

    for(var i = 0; i < array.length; i++)
    {
        if(compareValue !== array[i])
        {
            return false;
        }
    }

    return true;
}

function max(array)
{
    var maxVal = array[0];

    for(var i = 0; i < array.length; i++)
    {
        if(array[i] > maxVal)
        {
            maxVal = array[i];
        }
    }

    return maxVal;
}

console.log(max(maxArray));


var movieDB = [{title: "In Bruges", rating: 5, seen: false},
{title: "Mad Max", rating: 1, seen: true},{title: "Halloween", rating: 4.5, seen: false}];

movieDB.forEach(function(movie){
    console.log(createMovieString(movie));
})

function createMovieString(movie)
{
    var result = "";

    if(movie.seen)
    {
        result += "Watched: ";
    }
    else
    {
        result += "Not Watched: ";
    }

    result += " Title: " + movie.title;
    result += " Rating: " + movie.rating;


    return result;
}

*/




var obj =
{
    name: "Bob",
    num1: 10,
    num2: 9,
    multiply: function(x,y)
    {
        return x*y;
    },
    num3: 8
}


console.log(obj.multiply(obj.num1, obj.num3));
