# Nowty - Clothing Shop

At Nowty fashion becomes an expression of individuality. Our curated collection of unique and luxurious clothing and accessories is designed for those who dare to be different. Discover one-of-a-kind pieces crafted with exquisite materials and visionary designs, sourced from exclusive collaborations and emerging talents around the world. Elevate your style and embrace the Nowty experience, where personalized styling and unparalleled service help you uncover the pieces that will make you feel confident, empowered, and uniquely you.
This project was done for WTECH24.

![](nowty-gif.gif)

## Table of Contents

1. [Installation](#installation)
2. [Configuration](#configuration)
3. [First Start](#firststart)
3. [Usage](#usage)
4. [License](#license)

## Installation

This project was build and ran in docker. So the following guide provides a set of commands you need to execute in order to get our app running through docker. In case you want to do it differently, you can contact us.

1.  **Prerequisites:** To be able to run this project you need to have the following technologies installed on your system `Laravel`, `PHP`, `Composer`, `Docker`. That should get you started.
2.  **Clone the repository:**  With the following command you can clone our project.
    ```bash
    git clone git@github.com:tomasdrga/nowty_wtech_eshop.git

3. **Move into project:** Move into the directory where you installed the project.

4. **Install dependencies:** Install all neccessary packages with `composer` and `npm`.
    ```bash
    composer install
    npm install

5. **Move images from public to storage:** Because we wanted to provide the full experience without any hastle. You need to move the images from public/products to storage. You can do that with the following command. You need to be at the root of the project.

   For Unix-based systems:
    ```bash
    mv public/img/products/* storage/app/public/uploads
    ```

   For Windows:
    ```bash
    move public\img\products* storage\app\public\uploads
    ```

6. **Create environment file:**  Copy the contents of .env.example into .env file
    ```bash
    cp .env.example .env

7. **Database:** We are using PostgreSQL. You need to create a database for this project in your environment. You can do that with the following command.
    ```bash
    psql -U username
   //You will be prompted for password
   CREATE DATABASE database_name;

## Configuration

1.  **Update the .env:** You need to update your `.env` file. To be more specific you need to change or fill in fields `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.
    ```bash
    DB_CONNECTION=pgsql
    DB_HOST=db
    DB_PORT=5432
    DB_DATABASE=database_name
    DB_USERNAME=username
    DB_PASSWORD=password
2.  **Application Key:**  Generate the laravel app key.
     ```bash
     php artisan key:generate

3.  **Additional Configuration:** You may encounter some additional configuration, but the steps above should cover everything.

## FirstStart

1.  **Build the docker container:** We will use `docker-compose` to build this app. You need to be in the root directory.
    ```bash
    docker compose build

2.  **Get the containers running:** Get all containers running. That includes the `app`, `db`, `nginx`, `typesense`
    ```bash
    docker compose up

3. **Get the list of running containers:** Get all containers running.
    ```bash
    docker compose ps

4. **Get into the container:** If you need to go into a certain container, you can do that with the following command. You can get the `container_id` from the `docker ps`.
    ```bash
    docker exec -it <container_id> bash

5. **In the app container:** In your app container you need to execute certain commands, to get the full experience of the project.

   Firstly create the `db` with the help of migrations.
    ```bash
    php artisan migrate
    ```
   Then you need to seed the database, which will include products and some users.
    ```bash
    php artisan db:seed
    ```
    If you remember we moved the images from `public` directory to `storage`. For us to be able to use the storage we need to create symbolic links.
    ```bash
    php artisan storage:link
    ```

## Usage

1.  **Start the docker container:** If you want to start using the app just simply run the docker containers.

    ```bash
    docker compose up
    ```

    If you want to stop the containers you can use the following command or `ctrl-c`.
    ```bash
    docker compose down
    ```

2.  **Common problems:** You can encounter some problems in the way. These are some helpful commands we were using
    ```bash
    php artisan migrate:status # check the status of migrations
    php artisan migrate:fresh # rerun migrations
    php artisan db:wipe # drop the database tables

    php artisan config:clear # clear the config, can help in changes of the .env
    php artisan config:cache # cache the config

## License

*   This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---
*   **Credits:** Tomáš Drga, Matej Drienovský, Eduard Kuric
