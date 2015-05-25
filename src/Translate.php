<?php

namespace MattivdWeem\Translate;

/**
 * Class Translate.
 */
class Translate
{
    /**
     * @var StrategyInterface
     */
    protected $method;

    /**
     * @param StrategyInterface $method
     */
    public function __construct(
        StrategyInterface $method
    ) {
        $this->method = $method;
    }

    /**
     * @return StrategyInterface
     */
    protected function getStrategy()
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
        return $this->getStrategy()->setTranslation($string, $translation);
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
