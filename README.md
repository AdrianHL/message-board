## Message Board


PHP application using Laravel Framework that works like a simple message board. This app exposes a REST interface that allows an anonymous user to submit messages and to retrieve a list of the submitted messages.

*Time Box* - 1 hour

### Installation


Clone Repository

```
git clone https://github.com/AdrianHL/message-board.git
```

Access Project path

```
cd message-board
```

Install Dependencies

```
composer install
```

Copy `.env` file

```
cp .env.example .env
```

Create a sqlite (empty) file for storing the database (other driver requires additional set up); by default it has to be create in the following relative path `database\database.sqlite`.

Then run migrations

```
php artisan migrate
```

Then serve the project

```
php artisan serve
```

Which output a URL as follows

```
Starting Laravel development server: http://127.0.0.1:8000
[Fri Oct 23 21:00:07 2020] PHP 7.4.11 Development Server (http://127.0.0.1:8000) started
```

### API

* Get Messages: `GET` request tp `/api/messages`.
* Create Message:  `POST` request to `/api/message` including `message` data in the payload, for example:
```
{'message': 'this is an example'}
```

### Tests

Run the following command in order to run the tests

```
php artisan test
```

### Trade Offs

Taking into account the time box here are some trade offs

* The messages board response is not paginated but it could with some more time; see [Resource Collection](https://laravel.com/docs/8.x/eloquent-resources#resource-collections).
* There is no extra features in the project such as reply to, delete, vote or anything that could be expected in a messages board.
* There is no CI/CD setup.
* Security has not been evaluated.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
