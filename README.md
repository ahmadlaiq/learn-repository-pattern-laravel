## Repository Pattern Learning with Laravel

### Overview
This repository contains a Laravel project focused on learning the Repository Pattern, a software design pattern commonly used in Laravel applications for separating data access logic from the rest of the application. Additionally, it integrates the "Repository Pattern File Maker" package developed by Putu Yasa for facilitating repository file creation.

### Installation
1. Clone the repository to your local machine:

    ```
    git clone https://github.com/ahmadlaiq/learn-repository-pattern-laravel.git
    ```

2. Navigate into the project directory:

    ```
    cd learn-repository-pattern-laravel
    ```

3. Install Composer dependencies:

    ```
    composer install
    ```

4. Install npm dependencies:

    ```
    npm install
    ```

5. Copy the `.env.example` file to `.env`:

    ```
    cp .env.example .env
    ```

6. Generate an application key:

    ```
    php artisan key:generate
    ```

7. Configure your database settings in the `.env` file.

8. Run the migrations to set up the database schema:

    ```
    php artisan migrate
    ```

9. Optionally, you may seed the database with dummy data:

    ```
    php artisan db:seed
    ```

### Usage
After setting up the project and installing the package, you can use the Repository Pattern in your Laravel application.

1. Create a new repository using the Artisan command provided by the package:

    ```
    php artisan make:repository UserRepository
    ```

   This will create a new repository class named `UserRepository` in the specified directory.

2. Implement the necessary methods in your repository class according to your application's requirements.

3. Inject your repository class into your controllers or services where you need to access data.

### Contributing
Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

### License
This project is open-sourced software licensed under the [MIT license](LICENSE).

### Author
[ahmadlaiq](https://github.com/ahmadlaiq)

### Acknowledgments
Special thanks to [yaza-putu](https://github.com/yaza-putu) for developing the "Repository Pattern File Maker" package, which enhances the development experience with the Repository Pattern in Laravel.
