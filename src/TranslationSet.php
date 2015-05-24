<?php

namespace mattivdweem\translate;

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
        \mattivdweem\translate\Translation $translation
    )
    {
        $this->translations[] = $translation;
    }

    private $translations = array();


}
