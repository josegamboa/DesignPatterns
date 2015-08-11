<?php

namespace JGSmartSystems\DesignPatterns\Behavioral\Iterator;

use JGSmartSystems\DesignPatterns\Behavioral\Interfaces\ItemListInterface;

/**
 * Description of LanguageList
 *
 * @author josegamboa
 */
class LanguageList implements \Countable {

    /**
     *
     * @var type ItemListInteface
     */
    private $arraylanguage = array();
 
    /**
     * Get Index of Item array
     * @param type $index
     * @return type
     * @throws \JGSmartSystems\DesignPatterns\Behavioral\Iterator\Exception
     */
    public function getLanguage($index) {
        try {
            $language = NULL;
            if (array_key_exists($index, $this->arraylanguage)) {
                $language = $this->arraylanguage[$index];
            }

            return $language;
        } catch (Exception $e) {

            throw $e;
        }
    }
    
    /**
     * Set new language Item
     * @param \JGSmartSystems\DesignPatterns\Behavioral\Iterator\Interfaces\ItemListInterface $language
     * @return type
     * @throws \JGSmartSystems\DesignPatterns\Behavioral\Iterator\Exception
     */
    public function setLanguage(Interfaces\ItemListInterface $language) {
        try {
            array_push($this->arraylanguage, $language);
            return $this->count();
        } catch (Exception $e) {

            throw $e;
        }
    }
   
    /**
     * LanguageList Contrcuctor
     */
    public function __construct() {
        
    }

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @param int $mode [optional] <p>
     * The optional <i>mode</i> parameter will be set to
     * <b>COUNT_NORMAL</b> or <b>COUNT_RECURSIVE</b>, depending
     * on what value was passed to the second parameter of <b>count</b>.
     * This is particularly useful for counting all the elements of
     * a multidimensional array/Countable combination.
     * </p>
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count() {
        return count($this->arraylanguage);
    }

}
