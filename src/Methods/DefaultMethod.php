<?php

/**

 The default language will use the default database handler for sellectiong your texts

 **/

namespace MattivdWeem\Translate\Methods;

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
    private $dir;

    /**
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * @param string $dir
     */
    public function setDir($dir)
    {
        $this->dir = $dir;
    }

    public function __construct($lang)
    {
        $this->setLanguage($lang);
        $this->setDir(__DIR__.'/../../storage/');
        $this->translations = new TranslationSet();
        $this->getTranslationSet();
    }

    private function getTranslationSet()
    {
        // method to receive the entire translation set
        $this->setTranslations($this->getTranslationFileContents());
    }

    /**
     * @throws FileNotFoundException
     *
     * @return mixed
     */
    private function getTranslationFileContents()
    {
        if (!file_exists($file = $this->getDir().$this->getLanguage().'.json')) {
            throw(new FileNotFoundException($file));
        }

        return json_decode(file_get_contents($file));
    }

    public function setTranslation($string, $translation)
    {
        // method for setting a translation
        $file = $this->getDir().$this->getLanguage().'.json';
        $this->translations->addTranslation(new Translation($string, $translation, $this->getLanguage()));

        $contents = (array) $this->getTranslationFileContents();
        $isUsed = false;
        foreach ($contents as $key => $content) {
            if ($content->string == $string) {
                $output[$key] = ['string' => $string, 'translation' => $translation];
                $isUsed = true;
                continue;
            }
            $output[$key] = $content;
        }

        if (!$isUsed) {
            $output[] = ['string' => $string, 'translation' => $translation];
        }
        file_put_contents($file, json_encode($output));
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

        if (!array($translations) || empty($translations)) {
            return false;
        }

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
