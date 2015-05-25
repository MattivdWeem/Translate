# Translate
A simple translation library for php, leans on components. Fully leans on composer for loading, easy extandable.
MIT license :).


[![StyleCI](http://mattivandeweem.nl/ci/translate-matti.jpg)](http://mattivandeweem.nl/ci/translate-matti.jpg)


[![Latest Stable Version](https://poser.pugx.org/mattivdweem/translate/v/stable)](https://packagist.org/packages/mattivdweem/translate) [![Total Downloads](https://poser.pugx.org/mattivdweem/translate/downloads)](https://packagist.org/packages/mattivdweem/translate) [![Latest Unstable Version](https://poser.pugx.org/mattivdweem/translate/v/unstable)](https://packagist.org/packages/mattivdweem/translate) [![License](https://poser.pugx.org/mattivdweem/translate/license)](https://packagist.org/packages/mattivdweem/translate)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e3c879ee-a463-49f7-b041-bd5adeac93db/mini.png)](https://insight.sensiolabs.com/projects/e3c879ee-a463-49f7-b041-bd5adeac93db)
[![StyleCI](https://styleci.io/repos/36128977/shield)](https://styleci.io/repos/36128977)
[![Build Status](https://travis-ci.org/MattivdWeem/Translate.svg)](https://travis-ci.org/MattivdWeem/Translate)

## How to use
Create a new instance, register your language and done. Well just take a look at the json example below.

## Composer.json
Everything should be loadable via composer. Make shure the translate is required first and the strategy's after the main class. This should be pretty strait forward. When you like your own strategy more, it's fine just use that one.

    {
        "require": {
            "mattivdweem/translate": "^1.0",
            "mattivdweem/translate-json-strategy": "^1.0"
        }
    }



## php example
Once evertying is loaded via comopser, you should require the autoloader and register a new instance of the translation class, the example below i register a `$dutch` translation with the json strategy, this will make shure i'm getting all the dutch translations from the nl.json file.

    <?php

    require('vendor/autoload.php');

    $dutch = new MattivdWeem\Translate\Translate(
        new MattivdWeem\Translate\JsonStrategy\JsonStrategy('nl')
    );

    $dutch->addTranslation('input', 'output');
    echo $dutch->translateString('input');


## How it works
Basicly the class is a simple key => $value loader, every translation is getting registered as an translation object and will be pushed in a translationSet This translation set will be returned.

The best part of this: there is only 1 request for getting all the translations on construct. This means there is only 1 time delay to receive your translations. There is a conn to this: if you have to much translations, the translationSet object could be a bit heavy and the initial request could be a bit slower. This is getting fully compensated trough the fast declaration of objects, and will be way faster when you want to use the same translation multiple times.

### mapping
I'm translating the same string multiple times, it's not working. Evertyhing gets mapped by a `md5()` hash of the original string, this means the string should be identical and there is no possible way (unless you are trying to find it ^^) to get duplicate strings.


## Extending
Extending the library is easy, as you can see the the translation gets registered with a strategy. This strategy is fully customizable as long as the interface is getting implemented.
Take a look at `mattivdweem-json-strategy` for a nice example.


## Contributing
My code sucks? my strategy sucks? my ideas suck? Just want to add something awsome, or want to make a Code Style change? create a pull request and i'll be happy to accept :).
Make shure your contribution gets trough the Travis, StyleCI and the Sensio Labs Insight tests!



License
====

The MIT License (MIT)

Copyright (c) 2015 Matti van de Weem

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.




