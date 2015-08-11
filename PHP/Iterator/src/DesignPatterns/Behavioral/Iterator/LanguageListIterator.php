<?php

namespace JGSmartSystems\DesignPatterns\Behavioral\Iterator;

/**
 * Description of LanguageListIterator
 *
 * @author josegamboa
 */
class LanguageListIterator implements \Iterator {

    /**
     *
     * @var type array Countable
     */
    protected $languageList;

    /**
     *
     * @var type int
     */
    protected $currentLanguage = 0;

    /**
     * LanguageListIterator Constructor
     * @param \Countable $languageList
     * @throws \JGSmartSystems\DesignPatterns\Behavioral\Iterator\Exception
     */
    public function __construct(\Countable $languageList) {
        try {
            $this->languageList = $languageList;
        } catch (Exception $exc) {

            throw $exc;
        }
    }

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    public function current() {
        try {
            return $this->languageList->getLanguage($this->currentLanguage);
        } catch (Exception $exc) {

            throw $exc;
        }
    }

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next() {
        $this->currentLanguage++;
    }

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return scalar scalar on success, or <b>NULL</b> on failure.
     */
    public function key() {
        return $this->currentLanguage;
    }

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function valid() {
        return $this->currentLanguage < $this->languageList->count();
    }

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind() {
        $this->currentLanguage = 0;
    }

}
