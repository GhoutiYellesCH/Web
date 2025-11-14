# Simple Node.js Modular Project

## Description

This is a basic example of a Node.js project demonstrating how to structure an application into multiple JavaScript files (modules). It includes a main script that utilizes functions from two separate modules: one for greeting messages and one for simple arithmetic calculations.

This project is intended as a starter to understand module interaction in Node.js using CommonJS (`require`/`module.exports`).

## Project Structure

The project consists of the following key files:

- `main.js`: The main entry point of the application. It imports and uses functionalities from `greeter.js` and `calculator.js`.
- `greeter.js`: A module that exports functions for generating greeting and goodbye messages.
- `calculator.js`: A module that exports functions for basic arithmetic operations (add, subtract).
- `package.json`: (Optional for this basic example, but good practice) Contains project metadata and dependencies. Can be generated using `npm init -y`.

## Prerequisites

- [Node.js](https://nodejs.org/) installed on your system (which includes npm).

## Getting Started

1.  **Clone or Download:**
    If this were a repository, you'd clone it. For now, ensure you have the following files in your project directory:

    - `main.js`
    - `greeter.js`
    - `calculator.js`

2.  **Navigate to the Project Directory:**
    Open your terminal or command prompt and change to the directory where you saved these files.

    ```bash
    cd path/to/your/my_node_project
    ```

3.  **(Optional) Initialize npm:**
    If you haven't already, you can create a `package.json` file (this helps manage dependencies if the project grows).
    ```bash
    npm init -y
    ```

## Running the Project

To execute the main script, run the following command in your terminal:

```bash
node main.js
```
