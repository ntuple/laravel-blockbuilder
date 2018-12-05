# Laravel Block Builder

> Laravel Block Builder, Easy way to create a static block from SQL !

Laravel Block Builder. Got inspired from CrudBooster's StaticBlock Feature. 

## Features 
- Easy to Use Shortcode
- Use of SQL Query to Create Blocks
- Many more...

## Install
Via Composer
```
composer require ntuple/laravel-blockbuilder:0.1.0
```

#### Publish the Configuration
Publish assets
```php
php artisan vendor:publish --provider=Ntuple\Ntuple\BlockBuilder\Ntuple\BlockBuilderServiceProvider
```

## Usages

#### Enable ShortCode

```php
return view('view')->withShortcodes();
```

#### Add to Layout Blade
Add following to HEAD section of your Layout Blade
```
@include('blockbuilder::includes.pagkages')
```

#### ShortCode for Blocks
```
[block type='table']
    {
        "label": ["name", "email"],
        "sql": "select * from users;"
    }
[/block]
```

## Credits
1. Laravel Shortcode [webwizo](hhttps://github.com/webwizo/laravel-shortcodes)
3. Laravel Framework by [Taylor Otwell](https://github.com/laravel/laravel)
