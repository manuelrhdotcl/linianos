# Challenge - Backend Developer

## Context
Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "Linianos".

### Requirements
* 1 if
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your **SOLID knowledge**
* You can write the challenge in any language you want. Here at Linio we are big fans of **PHP**, **Kotlin** and **TypeScript**
### Submission
Create a repository on GitLab, GitHub or any other similar service and just send us the link.

# Solution

## Requeriments

* PHP 7.4.3 (tested)
* PHPUnit 8.5.2 (tested)

## Install

First install packages

`composer install`

## Develop

This solution contains a simple implementation of five design principles by SOLID.

## Execution

`php index.php`

This code execute a simple output response given by linio. However, i have develop one feature additionality that return the data in json format.

Example:

    $response  = new Response($dataArray);
    // default linio challenge format
    echo $response->toChallenge();
    // json format
    echo $response->toJson();