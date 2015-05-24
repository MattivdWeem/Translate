<?php

namespace mattivdweem\translate;

class Translate {

	protected $language;

	public function __construct(
		\MattivdWeem\translate\MethodInterface $method
	)
	{
		$this->method = $method;
	}

	protected function getLanguage()
	{
		return $this->language;
	}

	public function translateString($string)
	{
		return $this->getLanguage()->receive($string);
	}

	public function addTranslation($string, $translation)
	{
		return $this->getLanguage()->addTranslation($string,$translation);
	}





}
