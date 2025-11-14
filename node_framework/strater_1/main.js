// main.js

// Import the modules using require
const greeter = require("./greeter.js");
const calculator = require("./calculator.js");

console.log("Starting the main script...");

// Use functions from the greeter module
const userName = "Alice";
const greetingMessage = greeter.sayHello(userName);
console.log(greetingMessage);

// Use functions from the calculator module
const num1 = 10;
const num2 = 5;

const sum = calculator.add(num1, num2);
console.log(`The sum of ${num1} and ${num2} is: ${sum}`);

const difference = calculator.subtract(num1, num2);
console.log(`The difference between ${num1} and ${num2} is: ${difference}`);

const goodbyeMessage = greeter.sayGoodbye(userName);
console.log(goodbyeMessage);

console.log("Main script finished.");
