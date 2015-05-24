<?php

/**

	The default language will use the default database handler for sellectiong your texts

**/
namespace MattivdWeem\Translate\Methods;

use MattivdWeem\Translate\Exceptions\Exception;
use MattivdWeem\Translate\Exceptions\FileNotFoundException;
use MattivdWeem\Translate\MethodInterface;
use MattivdWeem\Translate\Translation;
use MattivdWeem\Translate\TranslationSet;

class DefaultMethod implements MethodInterface
{

    /**
     * @var
     */
    private $translations;
    private $language;

    public function __construct($lang)
    {
        $this->setLanguage($lang);
        $this->translations = new TranslationSet();
        $this->getTranslationSet();
    }

    private function getTranslationSet()
    {
        // method to receive the entire translation set
        $this->setTranslations($this->getTranslationFileContents());
    }

    /**
     * @return mixed
     * @throws FileNotFoundException
     */
    private function getTranslationFileContents()
    {
        if (!file_exists($file = __DIR__.'/../../storage/'.$this->getLanguage().'.json')) {
            throw(new FileNotFoundException($file));
        }
        return json_decode(file_get_contents($file));
    }


    public function setTranslation($string, $translation)
    {
        // method for setting a translation
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

        foreach ($translations as $translation) {
            $this->translations->addTranslation(new Translation(
                    $translation->string,
                    $translation->translation,
                    $this->getLanguage()
                )
            );
        }

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