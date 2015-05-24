<?php

namespace MattivdWeem\Translate;

class Translate {

	protected $method;

	public function __construct(
		\MattivdWeem\Translate\MethodInterface $method
	)
	{
		$this->method = $method;
	}

	protected function getMethod()
	{
		return $this->method;
	}

	public function translateString($string)
	{
		return $this->getTranslation($string);
	}

	public function addTranslation($string, $translation)
	{
		return $this->getMethod()->addTranslation($string,$translation);
	}

    protected function getTranslation($string)
    {
        return $this->method->getTranslations()->getTranslations()[md5($string)]->getTranslation();
    }




}
