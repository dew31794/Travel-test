# Travel test
Test

## Requirement version

<pre>
PHP 8.1+
MariaDB 10.4
Laravel 10+
</pre>

## Installation

1. Clone this repository
2. `composer install`
3. `cp .env.example .env`  There is no need to modify the database settings.
4. `php artisan key:generate`
5. Execute the project `php artisan serve`.

## Usage API
Please use "POSTMAN" software for API testing.
### 【GET】 Exchange currency. 
```
http://127.0.0.1:8000/api/v1/currency/exchange?source=USD&target=JPY&amount=$1,525
```

![image](https://github.com/dew31794/Travel-test/blob/main/resources/images/result.jpg)