## Laravel 5 Get current time

### Install

Require this package with composer using the following command:

### Step 1:
```bash
"require": {
  ...
  "obpdemo/datetime": "dev-master"
  }
```

### Step 2:
Update your composer,
```
composer update
```


### Step 3:
After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
obpdemo\datetime\DatetimeServiceProvider::class,
```

### Step 4:
That’s it – load URL in the browser!

[http://localhost/<project_name>/public/hello](http://localhost/<project_name>/public/hello)

[http://localhost/<project_name>/public/timezones/utc](http://localhost/<project_name>/public/timezones/utc)


## Thank you
