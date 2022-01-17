## Setup

Rename '.env.example' to '.env' and fill data where 'XXX' provided

## Build

```bash
    //sutup with test db data
    $ php artisan migrate --seed
    
    //for sutup only tables schema
    $ php artisan migrate
```
## Adding data
You can add data via sql query on db or from 'artisan tinker', because no crm presented.
```bash
    
    //adding new row on category table on db Model via tinker
    $ php artisan tinker
    
    App\Models\Category::create([...some data...]);
    <press enter key>
```

All what you can add is: services, services variations, promotions, certificates and categories.

## Handle promotion or certificate purchase

All purchases going to telegram bot @api_bestmaster_massage_bot which send message to TELEGRAM_ADMIN_ID (write it in .env file). Only admin can see
it messages. Also in web.php routes specified root to handle requests from telegram, but now it handles only '/start', which specified in
```
/app/Http/Commands
```

and all commands in 

```
/config/telegram.php
```
