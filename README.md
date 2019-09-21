## Why Fake content?
Hi, I'm Lenin, and I dared to create this class that will allow you to generate *Fake Content* quickly and easily. As developers of web projects in multiple areas we need to test our developments either at the beginning or at the end of it and that's why this idea is born, with `LZFakeTextGenerator` you can do it in a way that looks like real data, with the length you want and so power failures in your application or to see it loaded with a lot of content.

> STOP KILLING YOU THINKING THAT INFORMATION ABOUT NAMES, LAST NAMES, USERS, EMAILS, CREDIT CARD, TEXT IN GENERAL, DECIMALS, ETC ... THIS LIBRARY WILL DO IT FOR YOU 😄

## LZFakeTextGenerator vs Other generators

| Features                     | LZFakeTextGenerator | Other generators
|:-----------------------------|:------------------:|:-----------------:
| Names                        | :heavy_check_mark: | :heavy_minus_sign:
| Last Names                   | :heavy_check_mark: | :heavy_minus_sign:
| Users                        | :heavy_check_mark: | :heavy_minus_sign:
| Emails                       | :heavy_check_mark: | :heavy_minus_sign:
| Decimals                     | :heavy_check_mark: | :x:
| Ip v4 & v6                   | :heavy_check_mark: | :x:
| Credit Cards                 | :heavy_check_mark: | :x:
| Word                         | :heavy_check_mark: | :x:
| Words                        | :heavy_check_mark: | :x:
| Sentences                    | :heavy_check_mark: | :x:
| Paragraph                    | :heavy_check_mark: | :x:
| Paragraphs                   | :heavy_check_mark: | :x:
| HTML tag inline              | :heavy_check_mark: | :x:
| HTML tag block               | :heavy_check_mark: | :x:

If you have my same need, **feel free to use this class for your test purpose**. I will update it every time I need a new random field value for my tests.

## Examples of how to use its benefits

### Get a random Name

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
### Get a random Last Name

To get a random last name you must use the function `get_lastname()`

```php
echo $FAKE->get_lastname(); // Result: Hamilton
```

---
### Get a random Username

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
### Get a random Email

To get a random email you must use this function `get_email( $input )`

###### PARAMETERS 

> **$input** | string |  Default: ```NULL``` Generate an email with the name you put in this field, if you leave it empty then it will put a random name.

###### EXAMPLE

```php
echo $FAKE->get_email(); // Result: aubrey.finley@gmail.com
echo $FAKE->get_email('MyCustomNameEmail'); // Result: MyCustomNameEmail@hotmail.com
```
---

### Get a random Credit Card

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

### Get a Password

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

### Get a random Decimal

To get a random decimal you must use this function `get_decimal( $type )`

###### PARAMETERS 

> **$min** | int |  Default: ```0```:  The minimum value that can be generated.

> **$max** | int |  Default: ```100```:  The maximum value that can be generated.

> **$precision** | int |  Default: ```2```:  Number of decimals that the generated number will have.

###### EXAMPLE

```php
echo $FAKE->get_decimal(); // Result: 86.67
echo $FAKE->get_decimal(1000); // Result: 1047.23
echo $FAKE->get_decimal(100,1000); // Result: 815.48
echo $FAKE->get_decimal(100,200,4); // Result: 170.9588
```
---

### Get a random Word

To get a word you must use this function `get_word()`

###### EXAMPLE

```php
echo $FAKE->get_word(); // Result: fringilla
```
---


### Get a random Words

To get a words you must use this function `get_words( $num )`

###### PARAMETERS 

> **$num** | int |  Default: ```2```:  Number of words to display.

###### EXAMPLE

```php
echo $FAKE->get_words(); // Result: multatione suis
echo $FAKE->get_words(5); // Result: Audire cy option Sen ferro urna rhoncusmaecenas venenatis
```
---

### Get a random Words

To get a sentence you must use this function `get_sentence( $min, $max, $withSemiPunctuation )`

###### PARAMETERS 

> **$min** | int |  Default: ```5```:  The minimum number of words for the phrase.

> **$max** | int |  Default: ```10```:  The maximum number of words for the phrase.

> **$withSemiPunctuation** | int |  Default: ```false```:  If this TRUE then the phrase can have "," as a word separator (it is a possibility, this sign is random)

###### EXAMPLE

```php
echo $FAKE->get_sentence(); // Result: Day rec pen acciderat egestasmauris Interdum Aliquet ny light duimauris
echo $FAKE->get_sentence(8,18,true); // Result: Porta, actique iaculis valuisset erga, propinquitate, eget felissed hibernas humanitatisque
```
---


### Get a random Paragraph

To get a paragraph you must use this function `get_paragraph( $length, $semiPunctuation )`

###### PARAMETERS 

> **$length** | string or int |  Default: ```medium```:  Number of sentences generated to form a paragraph, supports `short` values, few sentences, `medium`, some more sentences, `long` forms a large paragraph of many sentences. You can also put a number and indicate that you want an exact number of sentences to form the paragraph size you want.

> **$semiPunctuation** | boolean |  Default: ```false```:  If this TRUE then the phrase can have "," as a word separator (it is a possibility, this sign is random)

`NOTE: Punctuation marks are also added automatically within the paragraph, after each of these signs the following letter begins with a capital letter . ! ? : ; . `

###### EXAMPLE

```php
echo $FAKE->get_paragraph();
/*
Result: 
Prodisset Temptasse adsistendo quorum enimaliquam: Eget mer mortalis ket Inclitis! Nobis latera nimia 
adsistendo asperitate phasellus Insuperabilis maecenas; Maritus Asperitate ipsum Antehac subditicii 
Be lenitate. Exerci Fer accumsannulla minulla netus. Kasd Illum Accumsan excogitatum impie civili 
Fore suscipit; Quammaecenas en Mag domus non caesare di blandit eu;
*/

echo $FAKE->get_paragraph('long',true);
/*
Result: 
Malesuada His antehac accumsan, rutrum suspicionum clam rumores litora! El lenitate, 
sodales post discentes missa ta Vilitate imperdietaliquam y; Esse Ted eminuit cernebatur 
mipellentesque; Saevientis, Volutpatut Fermentumfusce praeter ap. Fusce suadendo ble 
dissimulanter malesuadanullam legum; Vitae quaedam praescriptis augue, himenaeos. Nal 
ple potius, habitant Minulla similia animis opulentae suspicionum! Enim co Es pos nullam, 
mortalis habitant; Ny loqui nebulas adultae vel terminos amet gallienus ern; Daq suscipit Velut 
fastus excogitatum parietes Facilisi ridiculus? Se, convallis an In pres suae es, quod nostra. 
Aetatis opulentae, co eventus clangore! Vel Iriure Erga pen urbe puniti intromissi aliquando 
Esse auctormauris; Vulputate or facilisinam fermentumfusce facinora an; Vesperi Si gallienus 
Ture imperatoris Viam Factitasse caesaris minim. Tempus stipe dira, extorres sup vero cessante 
at putabat converso! Tamquam Letali, mauris turgida commodo out quaeritando Gravida, tle; Ar 
timebantur tristique arcu quam imperdiet ies regiam! Elementum dicitur er acervis Comitem, 
supprimerent lobortisetiam Lo ci: Fulgorem, sen nuntiabant, hostilia urnamorbi aptent suspendisse
mu palabatur. Esse enimsed, ta, plus stimulos; Subditicii quis erat praesente po gementibus 
conspicuum aenean ning lacinia.
*/
```
--- 

### Get a random Paragraphs

To get a paragraphs you must use this function `get_paragraphs( $num, $length, $semiPunctuation )`

###### PARAMETERS 
> **$num** | int |  Default: ```3```: Exact number of paragraphs you want me to generate. Each paragraph is wrapped by the html equiquette `<p></p>`

> **$length** | string or int |  Default: ```medium```: Number of sentences generated to form a paragraph, supports `short` values, few sentences, `medium`, some more sentences, `long` forms a large paragraph of many sentences. You can also put a number and indicate that you want an exact number of sentences to form the paragraph size you want.

> **$semiPunctuation** | boolean |  Default: ```false```:  If this TRUE then the phrase can have "," as a word separator (it is a possibility, this sign is random)

###### EXAMPLE

```php
echo $FAKE->get_paragraphs();
/*
Result: 
<p>Honoratorum ultriciespellentesque dapibusnam conpluribus uxor noxii Regiam germanitate putabat solet; Vel 
temporis col quisque miseriarum formula tortorcurabitur calumnias: Feminea proin missa curabitur diam; Dictumst 
clematius utilia liber metus molestie platea seria? Agebat Nobis luctus aptent Audire nondonec: Lec facer se 
Citerioris amet. Suadendo dictumstvivamus reducere, mi stirpis animis; Emensos gallienus co sion cuiusdam, 
Com car damnabantur. Egestas, erga est misceri, dierum urnamorbi quaeritando Sentiret caesaris. Se, Ametduis 
Illum insontibus Rebus A! Ut nascetur per, dictumstvivamus sen missa inclitis zzril te pellentesque! Iam, 
Tempestates dif iunxerat e miseriarum faucibusvestibulum Quam nefanda cuius! Antiochiae agenda megaera deberet 
novo no. Imperdietaliquam Ad pars, subditicii inceptos crimina Cit ters.</p>

<p>Tions hiscere Accumsannulla illa honoratorum stirpis, pernoctantium hi Ob Dis. Es Tamquam aestimati, animis 
diaminteger! Agebat, is constantini quaeritando no mi confestim Susurrasset! Calumnias i postremo can conscii? 
Curabitur aptent clam Honoratum erga Facilisis, senectus scelerisque,? Omnino morbi bonorum maritus 
temporsuspendisse. Invitis sit soluta perpetratum ca: Daq tempestates soli lectus diam paulatim Tle ence,; 
Maurisaenean platea eventus tortorvestibulum fecere lacus conpita confidenter contactus possim: Can quicquid 
de placerat egestas, procurrens extorres illa.</p>

<p>Tu acerbitati terminos facilisinam mis trudebat adolescebat possim main non,; Libero delictorum doming 
referente latera tri trudebat, impie expeditionis ex! Nihil esse tle Potestatis regina nequeetiam, leo 
germanitate! Calumnias, cras i semvestibulum ings low nisised Lar risus, felissed! Possim fecere quorum 
perpensum auctormauris audire aliquyam inceptos? Urnamorbi autem orci fermentum tempestates, megaera 
saltuporta: Valuisset Risus Dierum Po in curabitur si quae. Primis Sea misceri constantini nonumy. Bonorum 
honoratorum postridie sur Avida Supergressa. Arcu Filio, pulvinar maecenas Felicitatis risusdonec Vehicula: 
Pi Vox ornare reducere per se.</p>
*/
```
--- 

### Insert HTML Tag inline into a text (any)

To insert html tag inline you just have to execute this function `set_tag_inline( $text, $tags, $strict )`, what inline tag that currently supports are: `a` `strong` `em` `i` `mark` `code` within the function you must declare in the ```$tag``` variable the tags that you want to be mixed randomly within the paragraph.

###### PARAMETERS 
> **$text** | string |  Default: ```''```: Character string required to insert HTML tags.

> **$tags** | array |  Default: ```[]```: Inline tag you want to insert. Supports `a` `strong` `em` `i` `mark` `code`

> **$strict** | boolean |  Default: ```false```: Inline tags are displayed randomly, a paragraph may be shown as not showing, but if this option is `TRUE` then all tags set in the `$tags` parameter will be forcedly inserted into that text.

###### EXAMPLE

```php
echo $FAKE->set_tag_inline( 'This is my text that I want to mix randomly with HTML inline tag.', ['a'] );
/*
Result: 
This is my <a href="#">text that</a>  I want to mix randomly with HTML inline tag
*/

echo $FAKE->set_tag_inline( $FAKE->get_sentence(10,20), ['a','strong','mark'] );
/*
Result: 
Te Aptent et sagittis amore <em>Rhoncusmaecenas <strong>get augue eminuit
</strong></em><strong> sadipscing committerentur <a href="#">morbi velut</a></strong>
*/

echo $FAKE->set_tag_inline( $FAKE->get_paragraph('long',true), $FAKE->tag_inline_support, true );
/* 
NOTE: If you want to use all available inline tags you can use the $tag_inline_support variable

Result:
Secreto mariti taciti minulla orientis! Possim converso, <mark>lo Non est Te. Inclitis contactus, 
e obstinatum,</mark> pulvinarvestibulum primitiis pen; Stimulos montes interdum iamque Consectetur. 
Vesperi Formula felissed eget <strong>dapibusnam facti! Stationes donec, bonorum elit periculorum
</strong> ies temporis! Sanctus regni sermone te enimnulla id. Donec mazim fortunas habitu Sedisset 
facilisi molestie magnainteger ty; Non duimauris possim nec urnapraesent sem qui antesuspendisse, 
Avida ny. Men but eratproin imperator stationes par. <i>Caesaris pi suis elitnunc sadipscing primis
</i> suae accumsannulla. De vatibus Temporis flagitium Perpetratum el. Felicitatis augue I permissus
facilisisat Arcanorum; Placerat lacus placentia Saevientis ly saevientis <code>converso laoreet! 
Justo felicitatis ings nobis conubia Paulatim hiscere</code> pervadendoque exitium, ignoti! Nimia,
flagrans al, loqui crudelitati alii rhoncusmaecenas eleifend clam Feugait; Eruditiores Men 
<a href="#">sub sibi voluptua gementibus parum velut,: <em>Bonorum, sollicitudin nibh</em></a><em> 
un di</em> pre Graeco suetos sapien cruoris! Facilisi, non mu ligula quae out. Congue luce consequatduis 
insontibus nefanda in graeco. Quorum Phasellus, quisaenean tubarum insuperabilis lacus? Latenter Quae 
turgida Versutosque nec Ipsuminteger Vitae aliquando mon Vulputate. Per light, contemplans Vero 
addere,: Monili palam antesuspendisse claudebantur se. Er for consecteturpraesent agenda, urbe cum 
hibernas cognita artium telluspraesent: Vel rebum dy inire, feliscras aliquotiens mediocrium et, dolore 
conspiratione: Peragranter auctorem ad lacusut rhoncus magnapraesent e, nunc.
```

--- 

### Insert HTML Tag Block into a text (any)

To insert html tag block you just have to execute this function `set_tag_block( $text, $tags, $strict )`, what inline tag that currently supports are: `ul` `lo` `dl` `blockquote` `h` `pre` within the function you must declare in the ```$tag``` variable the tags that you want to be mixed randomly within the paragraph.

###### PARAMETERS 
> **$text** | string |  Default: ```''```: Character string required to insert HTML tags.

> **$tags** | array |  Default: ```[]```: Inline tag you want to insert. Supports `ul` `lo` `dl` `blockquote` `h` `pre`

> **$strict** | boolean |  Default: ```false```: Inline tags are displayed randomly, a paragraph may be shown as not showing, but if this option is `TRUE` then all tags set in the `$tags` parameter will be forcedly inserted into that text.

> **$insert_inline_tag** | boolean |  Default: ```false```: It also adds inline tags within the tag blocks.

###### EXAMPLE

```php
// h = h2,h3,h4,h5,h6
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), ['h','pre'] );

// or

// NOTE: If you want to use all available block tags you can use the $tag_block_support variable
echo $FAKE->set_tag_block( $FAKE->get_paragraphs(5), $FAKE->tag_block_support, false, true );

// or

echo $FAKE->set_tag_block( $FAKE->get_paragraphs(2), $FAKE->tag_block_support, true, true );
/*
Result:
....... full html text ....
*/
```

## Support
If you have any doubt, suggestion or report a bug, don't hesitate to write me in the [github](https://github.com/LeninZapata/LZFakeTextGenerator/issues) issues section.

## License
This framework is licensed 100% GPL.
