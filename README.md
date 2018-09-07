## Laravel 5 Get current time

### Install

Require this package with composer using the following command:

```bash
"require": {
  ...
  "obpdemo/datetime": "dev-master"
  }
```
Update your composer,
```
composer update
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
obpdemo\datetime\DatetimeServiceProvider::class,
```
