# Library Management System

This is a simple Library Management System developed using PHP and MySQL.  
The project is designed to manage basic library operations such as adding books, authors, categories, registering users, and issuing books.

---

## Project Structure

author_form.php – form to add authors  
author_reg_db.php – handles author data storage  

book_form.php – form to add books  
book_reg_db.php – handles book data storage  
book_issue_db.php – issues books to users  
book_loan_form.php – book loan form  

category_form.php – form to add categories  
category_reg_db.php – stores category data  

user_registration.php – user registration page  
user_reg_db.php – stores user information  

query1.php – sample database query  

---

## Features

- Register users
- Add and manage books
- Add authors and categories
- Issue books to users
- Store all data in a MySQL database

---

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- Apache (XAMPP/WAMP/LAMP)

---

## How to Run the Project

1. Clone the repository:
git clone https://github.com/lennisa/library-management

2. Move the project folder to the server root directory  
(e.g. `htdocs` if using XAMPP).

3. Create a MySQL database (for example, `library_db`).

4. Create the required tables for users, books, authors, categories, and loans.

5. Update the database connection details inside the PHP files.

6. Open the project in your browser:
http://localhost/library-management/



---

## Notes

This project is intended for learning purposes and can be extended with features such as login authentication, book returns, fines, and search functionality.

---

## License

No license specified.

                          
