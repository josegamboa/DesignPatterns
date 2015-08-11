<?php

namespace JGSmartSystems\DesignPatterns\Behavioral\Iterator;

use JGSmartSystems\DesignPatterns\Behavioral\Interfaces\ItemListInterface;

/**
 * Description of LanguageListReverseIterator
 *
 * @author josegamboa
 */
class LanguageListReverseIterator extends LanguageListIterator {

    /**
     * LanguageListReverseIterator Constructor
     * @param ItemListInterface $languageList
     */
    public function __construct(ItemListInterface $languageList) {
        $this->arraylanguage = $languageList;
        $this->currentLanguage = $this->count() - 1;
    }

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next() {
        $this->currentLanguage--;
    }

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function valid() {
        return 0 <= $this->currentLanguage;
    }

}
