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
- User dashboard displaying user information

## User Dashboard

After logging in, users can access their dashboard, which displays the following information in a table format:

- Unique User ID
- Name
- Email
- Registration Date
- Last Update Date

The dashboard provides a clear overview of the user's account information, enhancing the user experience and making it easy for users to verify their details.

## Technologies Used

- Laravel 10
- MySQL
- Bootstrap
- JavaScript

## Customization

You can customize the appearance of the user dashboard by modifying the `resources/views/dashboard.blade.php` file and the associated CSS styles in `resources/css/custom.css`.

## Security

This implementation ensures that sensitive information like passwords is never displayed on the dashboard. Only non-sensitive user information is shown to enhance security.

## Contributing

If you'd like to contribute to this project, please fork the repository and create a pull request, or open an issue for discussion.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).