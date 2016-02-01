# Add a Prime

## The Challenge

You are given a function 'secret()' that accepts a single integer parameter and returns an integer. In your favorite programming language, write a command-line program that takes one command-line argument (a number) and determines if the secret() function is additive [secret(x+y) = secret(x) + secret(y)], for all combinations x and y, where x and y are all prime numbers less than the number passed via the command-line argument.  Describe how to run your examples.

## The Answer

Two solutions are included in this repo: one in Ruby, and one in PHP. Now you can choose *your* favorite programming language!

To execute the Ruby script, run the following command:
```
ruby addprime.rb NUM
```

To execute the PHP script, run the following command:
```
php addprime.php NUM
```

For NUM in either command, type a number greater than 2.

## Limitation

For the PHP script to work, you must have the [GMP](http://php.net/manual/en/intro.gmp.php) module properly installed and configured.