# Test currency

### 1. Prepare project
1. clone sources into your local machine
2. put .env and .env.testing files into the root folder
3. run containers with `docker-compose up -d`
4. enter into php container with `docker exec -it test-app-php-fpm bash` and run inside
    * `composer install`
    * `php artisan migrate`
    * `php artisan db:seed`
    * `php artisan storage:link`
    * `chmod -R 777 storage`
    * `php artisan config:cache`
    * `php artisan optimize`

5. enter into node container with `docker-compose exec node bash` and run inside `yarn install`

### 2. Run project
1. inside node container execute
    * `yarn run dev`
2.  after running this command your build will be ready. You can access project on http://localhost:8080/currency