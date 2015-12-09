# Installation
1. Download the code using GIT or with the [downloading the zip](https://github.com/luisrovirosa/katas-php/archive/master.zip) link
- Go into the folder of the kata you want to practice. Eg: cd fizz-buzz
- Install [composer](https://getcomposer.org/)
	- Locally: 
		- `curl -sS https://getcomposer.org/installer | php`
	- Globally:
		- `curl -sS https://getcomposer.org/installer | php`
		- `sudo mv composer.phar /usr/local/bin/composer`		
- Install the dependencies
	- `php composer.phar install`
	- `composer install` If you have installed composer globally
- Execute the tests
	- `./vendor/bin/phpunit`
	- Or if you want to install PHP Unit globally
		- Installation: 
			- `wget https://phar.phpunit.de/phpunit.phar`
			- `chmod +x phpunit.phar`
			- `sudo mv phpunit.phar /usr/local/bin/phpunit`
		- Running:
			- `phpunit`

# Katas
## Fizz Buzz
Good kata to start doing TDD
## Roman numerals
Easy kata to continue with TDD
## Gilded Rose
Refactoring kata
## Password validator
Easy kata to practice the importance of the test order.
## Print date
Kata to start practicing with mocks and stubs.
## Bank
Good kata to learn indirect input and output