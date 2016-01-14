Basic start template on Yii2
============================

Source code of yii2-basic-start.

[Home](http://dominus77.github.io/yii2-basic-start)
[Source](https://github.com/Dominus77/yii2-basic-start)

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

INSTALLATION
------------

Create a project:

~~~
composer global require "fxp/composer-asset-plugin:~1.1.1"
composer create-project --prefer-dist --stability=dev dominus77/yii2-basic-start basic-project
~~~

or clone the repository for `pull` command availability:

~~~
git clone https://github.com/Dominus77/yii2-basic-start.git basic-project
cd basic-project
composer global require "fxp/composer-asset-plugin:~1.1.1"
composer install
~~~

Init an environment:

~~~
php init
~~~

You can then access the application through the following URL:

~~~
http://localhost/basic-project/web/
~~~