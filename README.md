
## Project execution

To run the project it is necessary to have php and composer installed, when you download it you must set the environment variables in the .env file, the only ones that will be added will be those of the database, in this case we use mysql.

After doing this you must run the following commands:

```bash
  php artisan db:seed
```

This command will help us to place fake data in our database.

After that we can run the application with the command:

```bash
  composer run dev
```

The resulting route will look something like this:
http://127.0.0.1:8000/products