# Ignite Life Bowen Therapy Backend

This is the backend for Ignite Life Bowen Therapy, developed with Laravel. This backend provides a robust API for the frontend to interact with, ensuring secure and efficient handling of data and user interactions.

### Frontend Repository

The frontend code is available at: [Ignite Life Frontend](https://github.com/callan321/ignite-life-frontend)

## Getting Started

First, clone the repository and navigate to the project directory:

git clone https://github.com/callan321/ignite-life-backend.git
cd ignite-life-backend

Install the dependencies:

composer install

Create a copy of the `.env` file:

cp .env.example .env

Generate an application key:

php artisan key:generate

Run the migrations to set up the database:

php artisan migrate

Start the local development server:

php artisan serve

## Requirements

## User

### User Table

- [ ] Add phone number


### API Endpoints
- [ ] `GET /api/users`: Retrieve a list of users
- [ ] `POST /api/users`: Create a new user
- [ ] `GET /api/users/{id}`: Retrieve a single user's details
- [ ] `PUT /api/users/{id}`: Update a user's information
- [ ] `DELETE /api/users/{id}`: Delete a user



