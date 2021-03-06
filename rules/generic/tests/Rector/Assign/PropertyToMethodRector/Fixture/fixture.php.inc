<?php

use Rector\Transform\Tests\Rector\Assign\PropertyToMethodRector\Source\Translator;

class CustomTranslator extends Translator
{
    public function fooMethod()
    {
        // get locale
        $locale = $this->locale;

        // update locale
        $this->locale = $locale;
    }
}

?>
-----
<?php

use Rector\Transform\Tests\Rector\Assign\PropertyToMethodRector\Source\Translator;

class CustomTranslator extends Translator
{
    public function fooMethod()
    {
        // get locale
        $locale = $this->getLocale();

        // update locale
        $this->setLocale($locale);
    }
}

?>
