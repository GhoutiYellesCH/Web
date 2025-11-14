// greeter.js
function sayHello(name) {
  return `Hello, ${name}! Welcome to the project.`;
}

function sayGoodbye(name) {
  return `Goodbye, ${name}! See you later.`;
}

// Export the functions to make them available to other modules
module.exports = {
  sayHello,
  sayGoodbye,
};
