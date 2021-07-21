# Laravel accept only Json response
If you need in [Laravel PHP Framework](https://github.com/laravel/laravel) to serve only Json requests, this package is the solution.

## Installation
```
$ composer require malvik-lab/laravel-accept-only-json-response
```

## Use on your routes
```php
Route::middleware(['malviklab-laravel-accept-only-json-response'])->group(function () {
    // your routes here
});
```

## Output (if the request is incorrect)
Http status code: 400 Bad Request
```json
{
    "error": "Use the \"Accept: application/json\" HTTP Header"
}
```
