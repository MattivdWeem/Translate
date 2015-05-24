<?php

namespace MattivdWeem\Translate;

/**
 * Class Translate.
 */
class Translate
{
    /**
     * @var MethodInterface
     */
    protected $method;

    /**
     * @param MethodInterface $method
     */
    public function __construct(
        MethodInterface $method
    ) {
        $this->method = $method;
    }

    /**
     * @return MethodInterface
     */
    protected function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $string
     *
     * @return mixed
     */
    public function translateString($string)
    {
        return $this->getTranslation($string);
    }

    /**
     * @param $string
     * @param $translation
     *
     * @return mixed
     */
    public function addTranslation($string, $translation)
    {
        return $this->getMethod()->setTranslation($string, $translation);
    }

    /**
     * @param $string
     *
     * @return mixed
     */
    protected function getTranslation($string)
    {
        return $this->method->getTranslations()->getTranslations()[md5($string)]->getTranslation();
    }
}
