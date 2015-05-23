<?php

namespace mattivdweem\translate;

interface LanguageInterface
{

    // language interface here ...

    public function __construct($lang);
    public function getTranslation($word);
    public function setTranslation($word, $translation);



}
