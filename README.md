## Why Fake content?
Hi, I'm Lenin, and I dared to create this class that will allow you to generate *Fake Content* quickly and easily. As developers of web projects in multiple areas we need to test our developments either at the beginning or at the end of it and that's why this idea is born, with `LZFakeTextGenerator` you can do it in a way that looks like real data, with the length you want and so power failures in your application or to see it loaded with a lot of content.

> STOP KILLING YOU THINKING THAT INFORMATION ABOUT NAMES, SURNAMES, USERS, EMAILS, CREDIT CARD, TEXT IN GENERAL, DECIMALS, ETC ... THIS LIBRARY WILL DO IT FOR YOU 😄

If you have my same need, **feel free to use this class for your test purpose**. I will update it every time I need a new random field value for my tests.

## Examples of how to use its benefits

**Get a random name**

To get a random name we just have to use the function `get_name`.

```php
<?php echo LZFakeTextGenerator::get_name();
```

or

```php
<?php
    $FAKE = new LZFakeTextGenerator;
    echo $FAKE->get_name();
```

Result

```php
// Alice 
```

---
**Get a random last name**

To get a random last name you must use the function `get_lastname()`

```php
echo $FAKE->get_lastname(); // Result: Hamilton
```

---
**Get a random username**

To obtain a random username we must reference the function`get_username( $uppercase, $separator )`

###### PARAMETERS

> **$uppercase** | boolean |  Default: ```TRUE```, makes the chain have the first capital letter, if it is FALSE then everything is lowercase.

> **$separator** | string |  Default: ```NULL```, makes the chain have the first capital letter, if it is FALSE then everything is lowercase.

```php
echo $FAKE->get_username(); // Result: ZofiaWilkerson
echo $FAKE->get_username( FALSE ); // Result: zofiawilkerson
echo $FAKE->get_username( FALSE, '.' ); // Result: zofia.wilkerson
echo $FAKE->get_username( TRUE, '_' ); // Result: Zofia_Wilkerson
```
