# hazam-api
Dummy API used as an exercise for the [API Documentation for Developers](https://apidocsfordevs.com) course.

## Setup
Requirements: PHP 7.3+

- Copy `.env.example` to a `.env` file and run `php artisan key:generate`.
- Create a `database.sqlite` file in the database/ folder and run `php artisan migrate --seed` to set up the db and fill it with some dummy data.
- Run `php artisan serve` to start the app on http://localhost:8000

## API Documentation
There's no documentation for the Hazam API. That's up to you.🙃

A few pointers for making sense of the codebase (especially if you're not familiar with Laravel):
- The API is meant to be Shazam-like. Upload an audio sample and get a match, plus get some statistics about tracks and artistes.
- The `routes/api.php` contains the  definition of the endpoints. (Note: all these routes are under an `/api` prefix)
- Rate limiting (via the `throttle` middleware) is defined in the RouteServiceProvider class.
- Authentication is via a Bearer token *Authorization header). You get a token when you create a user or use the /authenticate endpoint.