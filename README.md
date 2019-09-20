## Why Fake content?
Hi, I'm Lenin, and I dared to create this class that will allow you to generate *Fake Content* quickly and easily. As developers of web projects in multiple areas we need to test our developments either at the beginning or at the end of it and that's why this idea is born, with `LZFakeTextGenerator` you can do it in a way that looks like real data, with the length you want and so power failures in your application or to see it loaded with a lot of content.

> STOP KILLING YOU THINKING THAT INFORMATION ABOUT NAMES, LAST NAMES, USERS, EMAILS, CREDIT CARD, TEXT IN GENERAL, DECIMALS, ETC ... THIS LIBRARY WILL DO IT FOR YOU 😄

If you have my same need, **feel free to use this class for your test purpose**. I will update it every time I need a new random field value for my tests.

## Examples of how to use its benefits

**Get a random Name**

To get a random name we just have to use the function `get_name`.

```php
echo LZFakeTextGenerator::get_name();
```

or

```php
$FAKE = new LZFakeTextGenerator;
echo $FAKE->get_name();
```

Result

```php
// Alice 
```

---
**Get a random Last Name**

To get a random last name you must use the function `get_lastname()`

```php
echo $FAKE->get_lastname(); // Result: Hamilton
```

---
**Get a random Username**

To obtain a random username we must reference the function `get_username( $uppercase, $separator )`

###### PARAMETERS

> **$uppercase** | boolean |  Default: ```TRUE```, makes the chain have the first capital letter, if it is FALSE then everything is lowercase.

> **$separator** | string |  Default: ```NULL```, As the user is made up of 2 names here you can put a separator between the names, if you do not want separation leave it empty.

###### EXAMPLE

```php
echo $FAKE->get_username(); // Result: ZofiaWilkerson
echo $FAKE->get_username( FALSE ); // Result: zofiawilkerson
echo $FAKE->get_username( FALSE, '.' ); // Result: zofia.wilkerson
echo $FAKE->get_username( TRUE, '_' ); // Result: Zofia_Wilkerson
```
---
**Get a random Email**

To get a random email you must use this function `get_email( $input )`

###### PARAMETERS 

> **$input** | string |  Default: ```NULL``` Generate an email with the name you put in this field, if you leave it empty then it will put a random name.

###### EXAMPLE

```php
echo $FAKE->get_email(); // Result: aubrey.finley@gmail.com
echo $FAKE->get_email('MyCustomNameEmail'); // Result: MyCustomNameEmail@hotmail.com
```
---

**Get a random Credit Card**

To get a random credit card you must use this function `get_credit_card( $type )`

###### PARAMETERS 

> **$type** | string |  Default: ```NULL```: You can specify the type of card you want to generate. Currently supports. ```visa
mastercard|amex|discover|enroute|jbc|voyager```. If you leave it empty then it will generate a random type of credit card type.

###### EXAMPLE

```php
echo $FAKE->get_credit_card(); // Result: 3817983402013241
echo $FAKE->get_credit_card('visa'); // Result: 4532839169305042
echo $FAKE->get_credit_card('mastercard'); // Result: 5443801887099401
```
---
**Get a Password**

To get a password you must use this function `get_password( $input, $long )`

###### PARAMETERS 

> **$input** | string |  Default: ```NULL```: If you leave it empty it generates a solid password according to the time the function ```time()```, If you enter a string then it generates a fixed password based on that string.

> **$long** | boolean |  Default: ```FALSE```: If this FALSE generates a 32-character password, if TRUE generates a 40-character password.

###### EXAMPLE

```php
echo $FAKE->get_password(); // Result: 9b5ccf4d5444715b23f5839d62d706e1
echo $FAKE->get_password('LZFakeTextGenerator'); // Result: 4ac949252e1511eb581675f4aa3f423b ← is a fixed password
echo $FAKE->get_password(null, true); // Result: 477074e4b10ed058a0a27e15f902f8606125c999 ← 40 characters
```
---

