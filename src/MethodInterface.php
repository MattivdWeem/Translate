<?php

namespace MattivdWeem\Translate;

interface MethodInterface
{
    // language interface here ...

    public function __construct($lang);
    public function getTranslations();
    public function setTranslation($word, $translation);
}
