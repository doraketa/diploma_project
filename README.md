<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii Framework | My Diploma</h1>
    <br>
</p>

This repository is a demonstration of the work I have done on the implementation of the diploma project.

The main task and purpose of this diploma project is the implementation of program code in accordance with the business processes of the companies for which the task was implemented, as well as the demonstration of skills in web development. The project is not something complicated, it is the most elementary backbone, with a small number of entities and an implemented RBAC.

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://hostname/basic/web/
~~~

### Install from an Archive File

Extract the archive file downloaded from [https://github.com/doraketa/diploma_project.git](https://github.com/doraketa/diploma_project.git) to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://hostname/basic/web/
~~~

**NOTES:** 
- Minimum required Docker engine version `17.04` for development (see [Performance tuning for volume mounts](https://docs.docker.com/docker-for-mac/osxfs-caching/))
- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=host_name;dbname=your_db_name',
    'username' => 'your_user',
    'password' => 'your_password',
    'charset' => 'utf8',
];
```
Or you can include your constants. For example:

```php
const USER_NAME     "YOUR_USER_NAME";       // It's a my user name.
const USER_PASSWORD "YOUR_USER_PASSWORD"    // It's a my user password.
```
But I do not recommend using a password in the source files, since there is a high probability of compromising the password.

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


TESTING
-------

Tests are located in `tests` directory. By default there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
vendor/bin/codecept run
```