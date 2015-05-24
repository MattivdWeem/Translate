<?php

namespace MattivdWeem\Translate;

class Translation
{

    private $string;
    private $translation;
    private $language;

    /**
     * @return mixed
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param mixed $string
     */
    public function setString($string)
    {
        $this->string = $string;
    }

    /**
     * @return mixed
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * @param mixed $translation
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
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

    public function __construct($string = false, $translation = false, $language = false)
    {
        $this->setLanguage($language);
        $this->setString($string);
        $this->setTranslation($translation);
    }

}