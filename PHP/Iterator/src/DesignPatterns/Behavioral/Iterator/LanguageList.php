<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * LanguageList, Implementation example of Countable
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
 * @author     Original Author Josè Joaqupin Gamboa Sotelo>
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
use JGSmartSystems\DesignPatterns\Behavioral\Interfaces\ItemListInterface;
/**
 * Container item Class, this class contain the objects of ItemListInterface
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
