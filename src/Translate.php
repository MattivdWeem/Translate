<?php

namespace mattivdweem\translate;

class Translate {

	protected $language;

	public function __construct(
		\MattivdWeem\translate\LanguageInterface $language
	)
	{
		$this->language = $language;
		print_r($language);
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
