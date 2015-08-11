<?php

namespace JGSmartSystems\DesignPatterns\Behavioral\Iterator\Test;

use JGSmartSystems\DesignPatterns\Behavioral\Iterator\Language;
use JGSmartSystems\DesignPatterns\Behavioral\Iterator\LanguageList;
use JGSmartSystems\DesignPatterns\Behavioral\Iterator\LanguageListIterator;

/**
 * Description of TestIteraror
 *
 * @author josegamboa
 */
class TestIterator {

    public function runExample() {
        //Define Some items
        $languagePHP = new Language("PHP", "Php 5.3", "Php is a great language!");
        $languageJava = new Language("JAVA", "JAVA 7", "Java is a great language!");
        $languageNet = new Language(".NET", "C# .Net 2010", " C# is a great language!");
        //Add  items
        $languageList = new LanguageList();
        $languageList->setLanguage($languagePHP);
        $languageList->setLanguage($languageJava);
        $languageList->setLanguage($languageNet);
        //Add to the list of items to the Iterator
        $iterator = new LanguageListIterator($languageList);
        //Iterator

        while ($iterator->valid()) {

            echo "Label: " . $iterator->current()->getLabel() . " ";
            echo "Name: " . $iterator->current()->getName() . " ";
            echo "Description: " . $iterator->current()->getDescription() . " ";
            echo "<br>.................................................. <br> ";
            $iterator->next();
        }
    }

}
