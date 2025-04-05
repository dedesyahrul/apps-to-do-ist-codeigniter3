# Todo List Application

A simple Todo List application built with CodeIgniter 3.

## Features

- View all todos
- Add new todos
- Edit existing todos
- Mark todos as completed
- Delete todos
- Responsive design with Bootstrap 5

## Requirements

- PHP 7.4 or higher
- MySQL 5.6 or higher
- CodeIgniter 3

## Installation

1. Clone the repository to your local machine:
   ```
   git clone https://github.com/yourusername/todo-app.git
   ```

2. Create a MySQL database named `db_todo` (or update the database configuration in `application/config/database.php`).

3. Import the SQL file to create the todos table:
   ```
   mysql -u root -p db_todo < application/sql/todos.sql
   ```

4. Configure your web server to point to the project directory.

5. Access the application through your web browser:
   ```
   http://localhost/todo
   ```

## Usage

### Viewing Todos

- Navigate to the home page to see all your todos.
- Todos are displayed in a list with their title, description, and creation date.
- Completed todos are marked with a strikethrough.

### Adding a Todo

1. Click the "Add New Todo" button.
2. Fill in the title and description.
3. Click "Add Todo" to save.

### Editing a Todo

1. Click the edit icon (pencil) next to the todo you want to edit.
2. Update the title, description, or status.
3. Click "Update Todo" to save changes.

### Marking a Todo as Completed

- Click the check icon next to a todo to mark it as completed.
- Click the undo icon to mark it as pending again.

### Deleting a Todo

- Click the trash icon next to a todo to delete it.
- Confirm the deletion when prompted.

## License

This project is licensed under the MIT License - see the LICENSE file for details. 
