# Regular Expressions

A regular expressions describe a pattern of characters. We can use regular expressions to test user input has been entered in a certain format. Here's a simple PHP example:

```php 
$input="hello world";
$pattern="/world/";
echo preg_match($pattern, $input); //outputs 1, we have a match
```

*$input* represents the user input. *$pattern* is the regular expression pattern we are searching for in the user input. In this example we find the text '*world*'' and *preg_match()* returns a value of 1.

If no match is found *preg_match()* returns 0. 

You can read all about regular expressions here: https://www.regular-expressions.info/.

The quick start - https://www.regular-expressions.info/quickstart.html is all you need to complete the seminar work. 

## Seminar work
* Open *index.php* in a text editor and upload it to a server. 

* *index.php* contains 4 regular expressions. 
    * Using https://www.regular-expressions.info/quickstart.html try and work out what the regular expressions match against (TBH they aren't very robust but fine for our purposes). 
    * Edit the value of *$input* to test your understanding of the regular expression. Try and get the 'Got a match' message to appear. 
* Once you understand how regular expressions work, try and answer question 5. 