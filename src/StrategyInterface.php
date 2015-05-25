<?php

namespace MattivdWeem\Translate;

interface StrategyInterface
{
    // language interface here ...

    public function __construct($lang);
    public function getTranslations();
    public function setTranslation($word, $translation);
}
