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

## setup our environnement

Right, we have a local server but we don't have a database. Let symfony take care of that, type:

```
symfony console make:docker:database
```

- choose MySql (0) and defaults value.

You have just setup your docker-compose file for MySql.

IMPORTANT: modify the port to '3306:3306'. If you don't do it, the port will be random everytime you run docker and you will need to edit the .env file often.

Symfony need to know how to connect to your database. You need to modify it into the .env file :

- comment the postgresql line if it still here
- uncomment the one for mysql.
- Edit it with the db name and password to you setup.
- run docker compose up -d

## Our home page

### the controller

Let's create our first page. We need a controller and a view...and we are very lazy!

- create a controller by using the maker bundle :

```
php bin/console make:controller HomeController
```

What just happens ? Symfony create a controller and a view ! Check it out !
Our route is defined right above the index function, yes as a comment! That is working because we already have the "annotations" bundle implemented by default when we create the project for a webapp.
Edit the controller so our homepage link to the root of our website and test it...

Amazing ! Our controller and our view is already working.

Now let's implement the template that I ve share with you in this repository.

### the view

Symfony use Twig as a template engine ( But I guess you could use other template engine like Pug or Blade).
More about it [here](https://symfony.com/doc/current/templates.html)

- Copy the content of our index.html into templates/base.html.twig file and copy all the other file (css and images) into the public folder.
- test it !

We are loading home/index.html.twig which extend the base.html.twig that we just edit.
If we want to add specific data for this page, we need to add "blocks" in the base file, that wil be overwritten in the template that we load for this controller. You can also use partials for header, footer, or anything else.
if we want to add a link to a specific route, we only need to use "path" with the route name in our twig file. Example :

```
{{ path('app_home')}}
```

We will come back later in our twig file for more configurations.

## Login system

We have now a login form to handle, so let's create our user model and make that thing work.
No, we don't need to start coding yet ! We are lazy and we will let symfony do it for us.

Checkout the doc about it and follow the steps : [https://symfony.com/doc/current/security.html#the-user](https://symfony.com/doc/current/security.html#the-user)

- create user entity via CLI (I will choose username instead of email for login)
- make migration and migrate to database

At this point, you just create a new table in your DB and a model (check it out in src/entity and src/repository), but we don't have any user yet.
Let's create one by using fixtures : a bundle that will help us create "fake data" in our DB.(without having to do it manually via phpmyadmin )
[https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html](https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html)

Intall it by typing :

```
composer require --dev orm-fixtures
```

Then, follow the doc :

- Create a user in src/DataFixtures/AppFixtures
- Remember to hash your password. checkout this [link](https://symfony.com/doc/current/security/passwords.html)
- then finally load the datas via the fixtures bundle

```
php bin/console doctrine:fixtures:load
```

Now we have a user in our database. Let's setup the login form:

- Enable form_login into security.yaml as explained [here](https://symfony.com/doc/current/security.html#form-login)
- Edit the HomeController and View
- test it and check if you are log in with debug bar.

Awesome ! We almost didn't write a line of code and we already have a home page and a login system ! Well done !

BONUS : add the logout function !

"But hey ? nothing else is happening ? "
Of course ! We need to tell symfony what to show/ not show when a user is logged.

Modify the twig files so that the login form disapear when user is logged in, and that the content doesn't shows up if nobody is logged.

- TIPS : look for "is_granted" and "path" method in Twig
