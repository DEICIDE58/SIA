BOOKS API

A simple RESTful API built with Laravel that allows users to manage books. This API is designed for learning purposes and demonstrates CRUD operations, authentication, and API best practices.

Features

Create, Read, Update, and Delete (CRUD) books

Retrieve all books or a specific book by ID

Search/filter books by title 

JSON responses for easy integration

🛠️ Installation & Setup

 1. Clone the repository

git clone https://github.com/DEICIDE58/SIA.git
cd BOOKS-API


2. Install dependencies

composer install
Copy .env file
cp .env.example .env


3. Generate application key

php artisan key:generate

4. Set up database

Update your .env to book_db remove all # (in the database connection)

5. Run migrations:

php artisan migrate

6. Run the server

php artisan serve

API will be available at: http://127.0.0.1:8000


Method	Endpoint	    Description
GET	    /api/books	    Get all books
GET	    /api/books/1	Get book by ID
POST	/api/books	    Create a new book
PUT	    /api/books/1	  Update book by ID
DELETE	/api/books/1	Delete book by ID

Additional:
Download
Xammp for php and database.
composer for downloading laravel
Postman to test the api

Contributors:
Abendan, Princess Dianne
Agost, Vincent
Estan, James A.
Limbaga, Daniela Mae
Maquiling, Prince Edwin



