##Dependencies
###Composer
Taken from http://getcomposer.org/doc/00-intro.md
#####Install
```
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
```
If `mv` fails because of permissions please run using `sudo`

If the first command does not download composer.phar add the following to the end of your php.ini or suhosin.ini
They are located in `/etc/php5/cli/php.ini` and `/etc/php5/cli/conf.d/suhosin.ini` respectively.
```
suhosin.executor.include.whitelist = phar 
```

#####Description
Composer is not a package manager. Yes, it deals with "packages" or libraries, but it manages them on a per-project basis, installing them in a directory (e.g. vendor) inside your project. By default it will never install anything globally. Thus, it is a dependency manager.

This idea is not new and Composer is strongly inspired by node's npm and ruby's bundler. But there has not been such a tool for PHP.

The problem that Composer solves is this:

a) You have a project that depends on a number of libraries.

b) Some of those libraries depend on other libraries.

c) You declare the things you depend on.

d) Composer finds out which versions of which packages need to be installed, and installs them (meaning it downloads them into your project).

We're using a file in the root directory called composer.json
This file includes all the libraries we're going to be using.

###Doctrine
Taken from http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/tutorials/getting-started.html
#####Install
Run
```
composer install
```
