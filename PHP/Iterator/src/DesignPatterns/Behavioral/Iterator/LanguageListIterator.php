<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * LanguageListIterator, Implementation example of Iterator
 *
 * This is a basic example of Iterator Pattern. 
 *
 * PHP version 5.3
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Design Patterns
 * @package    JGSmartSystems
 * @author     Original Author Josè Joaquín Gamboa Sotelo
 * @author     Another Author jose_9515@hotmail.com
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
namespace JGSmartSystems\DesignPatterns\Behavioral\Iterator;

/**
 * This class to iteract the implementation of Countable
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
