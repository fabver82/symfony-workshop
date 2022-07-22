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

Now let's get started :

1. [Setup Environnement](setupEnv.md)
2. [Controller and view](controllerAndView.md)
3. create the operations model

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

## Handle the operations

### create operation entity

We will need a table that hold all operations made by the user. So the first step is to create an entity like we did for the user. But this time we will need to create a relation between this table and the user. Use the maker bundle that same way we did with the user.

```
php bin/console make:entity Operation
```

when adding the user into the operation table, choose "relation" as type field. It will ask you what type of relation and you could guess the right one. It will also automaticaly create a method that will help you retrieve all operations from the user entity. Amazing isn'it ?
And Remember to create migrations !!!

Now we need to make our forms work so the user can add his operations.

### create forms

Let's have a look at how forms can be build and handle in symfony : [https://symfony.com/doc/current/forms.html](https://symfony.com/doc/current/forms.html)

There are many ways. But the most efficient would be to have a dedicated form type. Are you lazy ? I guess! So let's use the maker bundle again!

```
php bin/console make:form OperationType
```

and checkout the newly created file.

### render the form

First we need to tell our controller that we want to render a form. Since our form need some basic data before being submitted we will add them directly in the controller ( User, date and 'in' or 'out' for income or expense form).

we will use the createForm method and we will pass it the view :

```
$incomeForm = $this->createForm(OperationType::class, $operation)->createView();
```

Remember to import entity and formtype into your controller.

Then we will simply use the form method in twig to render it

```
{{ form(incomeForm) }}

```

But now, our frontender is angry at us...
Check out how we can customize the form rendering [here](https://symfony.com/doc/current/form/form_customization.html)
easy isn't it ?

### Handle the form
