# Translate
php library for simple text translation

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e3c879ee-a463-49f7-b041-bd5adeac93db/big.png)](https://insight.sensiolabs.com/projects/e3c879ee-a463-49f7-b041-bd5adeac93db)
[![StyleCI](https://styleci.io/repos/36128977/shield)](https://styleci.io/repos/36128977)

usage:

We are currently using the dev files, the json file handler will be sepporated but for development purpose we'll just leave it here
.. the file put contents makes shure there is data that we can use (since data input isn't done jet)

ok .. require the autoloader, create some translations and lets start translating

Register a new Translation, this Translation needs a method.. you can build your own or use the default (which is at this moment a json handler)

within this method the language should be set   eq: nl/dutch/french/fr/something you like, we'll accept everything

once done: you can translate a string :D !  ` ->translateString(''); ` which is great! 


    <?php
    require('vendor/autoload.php');
    
    file_put_contents(__DIR__.'/storage/nl.json',json_encode(
        [
            ['string' => 'this is awesome', 'translation' => 'dit is geweldig'],
            ['string' => 'My string, My string is amazing', 'translation' => 'Mijn string, mijn string is geweldig'],
        ]
    ));
    
    
    $test = new \MattivdWeem\Translate\Translate(
       new \MattivdWeem\Translate\Methods\DefaultMethod('nl')
    );
    
    echo $test->translateString('My string, My string is amazing');




