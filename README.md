# Laravel Authentication System

This project implements a basic authentication system using Laravel framework, including user registration with unique ID generation, login, and logout functionality.

## Setup Instructions

1. Clone the repository:
2. Install dependencies:
3. Create a copy of the `.env.example` file and rename it to `.env`. Update the database credentials in the `.env` file.

4. Generate an application key:
5. Run database migrations:

6. Compile assets:
7. Start the development server:

8. Visit `http://localhost:8000` in your browser to access the application.

## Unique User ID Generation

The system automatically generates a unique alphanumeric user ID for each registered user. The ID is 8 characters long and is created using a combination of MD5 hashing and random number generation. The uniqueness of the ID is ensured by checking against existing IDs in the database before assignment.

## Features

- User registration with automatic unique ID generation
- Secure login and logout functionality
- Email validation
- Basic frontend with Bootstrap CSS
- JavaScript form validation
- Display of unique user ID in the profile section (read-only)

## Viewing Unique User ID

After logging in, users can view their unique User ID in two places:
1. On the dashboard
2. In the profile section as a read-only field

To access the profile section:
1. Log in to the application
2. Click on the user menu (usually in the top-right corner)
3. Select "Profile"
4. The unique User ID will be displayed as a read-only field in the profile information form

## Technologies Used

- Laravel 10
- MySQL
- Bootstrap
- JavaScript