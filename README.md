<p align="center"><img src="https://i.ibb.co/fvXXhcn/algolia.png" width="150" height="150"></p>

## About Laravel And Algolia

Laravel is accessible, powerful, and provides tools required for large, robust applications.

Algolia package provide a live search APIs function using this you can search full text search in model or query. In this repo we are show you one example how to built full text search and how to integrate laravel scout and algolia.

## Installation

`composer install`

Then we have required create one algolia account and get ALGOLIA_APP_ID and ALGOLIA_SECRET. you can create algolia account on click from here Algolia.com

After get both of keys then open your .env file and set into it like that.
```
ALGOLIA_APP_ID=algolia_app_id
ALGOLIA_SECRET=algolia_app_secret	
```

Add some dummy records in users table run by following command.

```
php artisan tinker
>>> factory(App\User::class, 50)->create();
```

After add some records and changes in app/User.php file run following command in your terminal for index that records.

```
php artisan scout:import "App\User"
```

After run this command then open your algolia dashboard and show ther your all users table records indexed.

Now we are ready to run our example so run bellow command ro quick run:

```
php artisan serve
```

Now you can open bellow URL on your browser:

```
http://localhost:8000/user-lists
```

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to Devat Karetha via [devat.karetha@viitor.cloud](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Issues

If you have any issue with project then please create a [issue](https://github.com/dekts/laravel-algolia-search/issues) and also suggest for advance version of this project in future.

Thanks.
