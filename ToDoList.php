<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        #todo-container {
            max-width: 350px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: calc(100% - 25px);
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #acc;
            border-radius: 5px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            margin-bottom: 5px;
            background-color: #fff;
            border: 1px groove #ccc;
            border-radius: 5px;
        }
        button {
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .button-group {
            display: flex;
            align-items: center;
        }
        .button-group button:first-child {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div id="todo-container">
        <h2>Todo List</h2>
        <div>
            <input type="text" id="taskInput" placeholder="Enter a task">
            <button onclick="addTask()">Add Task</button>
        </div>
        <ul id="tasks"></ul>
    </div>
    <script>
        function addTask() {
            var input = document.getElementById("taskInput");
            var task = input.value.trim();
            if (task === "") {
                alert("Please enter a task.");
                return;
            }
            var listItem = document.createElement("li");
            listItem.innerHTML = `
                <span>${task}</span>
                <div class="button-group">
                    <button onclick="updateTask(this)">Update</button>
                    <button onclick="deleteTask(this)">Delete</button>
                </div>
            `;
            document.getElementById("tasks").appendChild(listItem);
            input.value = "";
        }

        function updateTask(button) {
            var listItem = button.parentElement.parentElement;
            var taskSpan = listItem.querySelector("span");
            var newTask = prompt("Enter the updated task:", taskSpan.textContent);
            if (newTask !== null && newTask.trim() !== "") {
                taskSpan.textContent = newTask.trim();
            }
        }

        function deleteTask(button) {
            var listItem = button.parentElement.parentElement;
            listItem.remove();
        }
    </script>
</body>
</html>
