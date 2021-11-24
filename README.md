# Requirements
- docker (for Windows and MacOS https://www.docker.com/products/docker-desktop)

# Installation
1. Generate vendor files
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs

```

2. Setup environment
```
./vendor/bin/sail up
```
# Case Study: 

As there were no instructions I have checked this README file, and I also checed the git log which shows a file was added "employee_data.csv" 

Based on that file I have created a model 'Employee' and a migration for it.

```
./vendor/bin/sail  php artisan migrate
```

With that model I have created an API resource to create a CRUD, you can go to the root of the website and you'll have a page to register as a new user and log in, once you're logged in you will be redirected to the /dashboard which is the main page for the CRUD operations.

There is a seeder for the DB based on the employee_data.csv file included on the project, you can run it at:
```
./vendor/bin/sail  php artisan db:seed --class=EmployeeSeeder
```

Besides the Auth feature test, there is an additional functional test for all of the CRUD operations EmployeesTest, you can run all the tests at: 

```
./vendor/bin/sail  php artisan test
```
