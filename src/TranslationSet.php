<?php

namespace MattivdWeem\Translate;

class TranslationSet {
    /**
     * @return mixed
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @param mixed $translations
     */
    public function setTranslations($translations)
    {
        $this->translations = $translations;
    }

    public function addTranslation(
        \MattivdWeem\Translate\Translation $translation
    )
    {
        $this->translations[md5($translation->getString())] = $translation;
    }

    private $translations = array();


}
