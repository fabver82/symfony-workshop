# Introduction To Symfony Framework

So you want to try Symfony ?! You have made the right choice !
Are you scared about it ? if yes, relax... The most difficult part is to set it up ! You will need a few packages before starting. Make sure you have installed the following dependencies before attending the workshop.

## Prerequisites

- Docker - You should already have an intro about it. I will be using Docker Compose V2.
- [PHP 8 linux](https://linuxhint.com/install-php-8-ubuntu-22-04/) or [PHP 8 windows](https://www.educative.io/answers/how-to-install-php-8-on-windows) MAC? Who is still using this?
- [Composer](https://getcomposer.org/)
- [Symfony CLI](https://symfony.com/download) - It will be useful to quickly create symfony project with the terminal.

## Check Requirements

Now that you have installed all depedencies, let's check if you are ready to start a symfony project. If you had correcly installed Symfony CLI, you should be able to check the requirements with the following command :

```
symfony check:requirements
```

You should read a message with a green background saying : 'Your system is ready to run Symfony projects".

Congratulations !!!

## Our Project

We will create a wallet manager. This app will show all the operations that the user has done. He will be able to check his balance, add incomes, and add expenses.

## Starter Kit

There is a template for our project in the template folder. Feel free to use it.

## Let's get started !

The first thing to do is to create a symfony project that will contain all the base files. Symfony is a set of packages. Basically, you take the packages that you need but here we will install the most common packages needed for a webapp.

You should run the following command:

```
symfony new my_project_directory --webapp
```

Let's check if everything is working well: symfony has his own local server.
type:

```
symfony serve -d
```

it will start the local server and you should now see a "welcome to Symfony" page.

stop the local server by typing:

```
symfony server:stop
```

check out the documentation if you need more informations: [https://symfony.com/doc/current/setup.html](https://symfony.com/doc/current/setup.html)
