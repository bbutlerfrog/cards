## Cards Developer Exercise

## What is This?

This is a developer Exercise for the <a href="https://solve.mit.edu/">MIT Solve Project</a>, but of course anyone can play with it if they'd like.  
See the <a href="https://cards.benfrog.net">site itself to try this exercise out (it contains instructions for how it works, click on the "?" icon).

## Requirements

This is written in <a href="https://laravel.com/docs/5.6">Laravel 5.6</a>, full  requirements <a href="https://laravel.com/docs/5.6#server-requirement"> are available in Laravel's documentation.  Please take note of <a href="https://laravel.com/docs/5.6#pretty-urls">how to configure Apache, Nginx, and other servers for Laravel's "Pretty URL's"</a>.  If you do not know how to do this for your server, please refer to your server's documentation (this demonstation will fail without this configuration step, the .htaccess file is included but if rewrites are not enabled for your server and whichever site you and serving this project from, you will experience issues).  For further information regarding Apache, <a href="http://httpd.apache.org/docs/current/mod/mod_rewrite.html">see this link</a>.  This demonstration further requires both a web server and database server completely supporting 
<a href="https://en.wikipedia.org/wiki/Unicode">, further steps to ensure proper Unicode support are documented below.  You must also install an 
up-to-date version of <a href="https://www.npmjs.com/"> Node Package Manager</a> (npm), I highly recommend the use of
<a href="https://github.com/creationix/nvm"> Node Version Manager</a> to maintain your sanity while keeping npm up to date.  
You must also have <a href="https://getcomposer.org/">Composer</a> installed (this is a requirement for Laravel in general, as you'll note) and Git installed 
(this is a requirement to clone this repository, as you might guess).  This application also requires a MySQL 5.7 server on which you have administrative access.  

## Installation

You do not need to install Laravel from the "ground up" to use this demonstration.  Follow these steps:
1.  Clone this repository to either your development or production server 
    (you'll configure either environment later).  If you Then, run Composer's "install" command (this varies based upon how you choose to install Composer, but is 
    generally simply "php composer.phar install" or "composer install", see <a href="https://getcomposer.org/doc/">Composer's documention for details</a> from the 
    root directory of the cloned repository.  Assure there were no error messages thrown by Composer (a number of warnings are normal).  
2.  Run Node Package Manager's install command (this is almost always "npm install", but again may vary.  See <a href="https://www.npmjs.com/">npm's</a> 
    documention if you run into any trouble).  Assure again that there are no errors thrown (just warnings).
3.  Assure that the /storage/logs directory is writable by the same user running this application (this is a very common error that prevents Laravel 
    applications from running).
4.  Using whichever MySQL client you prefer, create a username and password that you feel comfortable storing in the configuration file for this application as
    an administrator on a database server you will be able to access from the server this application is installed on.  
    (See <a href="https://dev.mysql.com/doc/refman/5.7/en/create-user.html">the MySQL documenation<> for )
5.  Create a new schema/database on that database server as an administrator specifically for this application <b>assuring that the collation for that schema is          UTF-8/Unicode (this is typically not the default for MySQL, and you will experience issues with this application if you create the schema
    in any other collation)</b>.  The command for this is generally "CREATE DATABASE mydatabase CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;", see 
    <a href="https://dba.stackexchange.com/questions/76788/create-a-database-with-charset-utf-8">
    https://dba.stackexchange.com/questions/76788/create-a-database-with-charset-utf-8</a> for detailed instructions.
6.  Again as an administor, GRANT the created ALL privileges on the created database for at least the server 
    you will be connecting from (this is generally not a great security practice, but this is a "single
    use" database for a demonstration project).  Full documentation is <a href="https://dev.mysql.com/doc/refman/5.7/en/grant.html">here</a>.
7.  Copy the .env.example file to .env, and make at least the following changes, depending on whether this is a production or development server:
    APP_NAME='Cards Developer Exercise' #This can be any name, or you can leave it set to default
    APP_ENV=local #change this for production
    APP_KEY= #we will set this in the next step
    APP_DEBUG=true #set this to false for production 
    APP_URL=http://localhost #set this to the full URL of your server
    DB_CONNECTION=mysql #leave this setting
    DB_HOST=127.0.0.1 #your database host name/ip
    DB_PORT=3306 #your database port (generally 3306)
    DB_DATABASE=homestead #your schema name (set above)
    DB_USERNAME=homestead #your username (set above)
    DB_PASSWORD=secret #your password (set above)
8.  From the command line, run the command "php artisan key:generate", and you should notice that the APP_KEY field now has a random key filled in.
9.  Again from the command line, run the command "php artisan migrate".  This should create all the necessary database tables in your schema (for details about
    how this works, see <a href="https://laravel.com/docs/5.6/migrations">https://laravel.com/docs/5.6/migrations</a>).
10. Finally, run the command "php artisan database:populate", which should populate the database tables with all the necessary data to run the application.
11. Configure your web server (development or production) to use the "public" directory of wherever you choose to put the repository's code as the root directory,
    taking note of the above potential redirect and permissions issues.  

## Running

If all went well with the application installation and configuration, you should simply be able to pull up the root of your site and see exactly what is 
displayed at <a href="https://cards.benfrog.net/">https://cards.benfrog.net</a>.  If you can't, feel free to reach out to <mailto:benfrog@benfrog.net>.       
    
    






- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
