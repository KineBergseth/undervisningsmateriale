/*
	Her er flere eksempler med javascript
*/

// A function to display a message
function sayHello() {
    alert("Hei hei!");
}

// Call function on click of the button
document.getElementById("myBtn").onclick = sayHello;




// The following example shows how JavaScript statements look like:
var x = 5;
var y = 10;
var sum = x + y;
document.write(sum); // Prints variable value



// JavaScript is case-sensitive. 
var myVar = "Hello World!";
console.log(myVar);
console.log(MyVar);
console.log(myvar);


/*
Variables are fundamental to all programming languages. Variables are used to store data, like string of text, numbers, etc. 
The data or value stored in the variables can be set, updated, and retrieved whenever needed. 
In general, variables are symbolic names for values.

You can create a variable with the var keyword, whereas the assignment operator (=) is used to assign value to a variable, 
like this: var varName = value;

Tip: Always give meaningful names to your variables. Additionally, for naming the variables that contain multiple words, 
camelCase is commonly used. In this convention all world after the first should have uppercase first letters, e.g. myLongVariableName.
*/
var name = "Peter Parker";
var age = 21;
var isMarried = false;



// In JavaScript, variables can also be declared without having any initial values assigned to them. 
// This is useful for variables which are supposed to hold values like user inputs.
// Declaring Variable
var userName;
 
// Assigning value
userName = "Clark Kent";

// Note: In JavaScript, if a variable has been declared, but has not been assigned a value explicitly, 
// is automatically assigned the value undefined.



// In addition, you can also declare multiple variables and set their initial values in a single statement. 
// Each variable are separated by commas, as demonstrated in the following example:
// Declaring multiple Variables
var name = "Peter Parker", age = 21, isMarried = false;
 
/* Longer declarations can be written to span
multiple lines to improve the readability */
var name = "Peter Parker",
age = 21,
isMarried = false;



//enda et eksempel på en funksjon
function trigger() {

    	/* Lag en pop up som dukker opp når man hover over bilde */
        document.getElementById("bunny_img").addEventListener("mouseover", popup);

        function popup() {

            alert("hallaisen ;)");
        }
    }




/*
//hente data fra element   .value
var numberlist = document.getElementById("input").value; 

// Setter text i et html element  . innerHTML
document.getElementById("demo").innerHTML = "hei";   

For input felter i HTML, skjekk ut <input> taggen ;)

*/