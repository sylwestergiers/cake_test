# cake_test

run server:

```bash
bin/cake server
```

run docker containers for local development:

```bash
docker-compose up
```

copy .env.example to .env and set variables

after successful db connection run migrations:

```bash
bin/cake migrations migrate
```

To have working mailhog please add to config:

```php
  'host' => '127.0.0.1',
  'port' => 1025,
  'username' => null,
  'password' => null,
  'client' => null,
  'className' => 'Smtp',
  'tls' => false,
```

In default database config, you need to add
```php
  'className' => 'Cake\Database\Connection',
  'driver' => 'Cake\Database\Driver\Mysql',
```
In case of problem with database connection, please try to replace 'localhost' with '127.0.0.1'
