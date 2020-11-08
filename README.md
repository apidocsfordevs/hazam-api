# hazam-api
Dummy API used as an exercise for the [API Documentation for Developers](https://apidocsfordevs.com) course.

The API is meant to be Shazam-like.

## Setup
- Copy `.env.example` to a `.env` file and run `php artisan key:generate`.
- Create a `database.sqlite` file in the database/ folder and run `php artisan migrate`.
- Run `php artisan serve` to start the app on http://localhost:8000

## API Documentation
There's no documentation for the Hazam API. That's up to you.🙃

A few pointers for making sense of the codebase (especially if you're not familiar with Laravel):
- The `routes/api.php` contains the endpoints.