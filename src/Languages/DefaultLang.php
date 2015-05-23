<?php

/**

	The default language will use the default database handler for sellectiong your texts

**/
namespace MattivdWeem\translate\Languages;

class DefaultLang implements \mattivdweem\translate\LanguageInterface
{

    /**
     * @var
     */
    private $translations;
    private $language;

    public function __construct($lang)
    {
        $this->setLanguage($lang);
        $this->setTranslations($this->getTranslationSet());
    }

    private function getTranslationSet()
    {
        // method to receive the entire translation set
    }

    public function setTranslation($word, $translation)
    {
        // method for setting a translation
        return new \mattivdweem\translate\TranslationSet();
    }

    public function getTranslation($word)
    {
        // method for receiving a translation
    }

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

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }




}