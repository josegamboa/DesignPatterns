<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Language, Implementation example of ItemListInterface
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
use JGSmartSystems\DesignPatterns\Behavioral\Iterator\Interfaces\ItemListInterface;
/**
 * Implementation example of ItemListInterface customized to Development language
 */
class Language extends ItemListInterface {

    private $name;
    private $description;
    private $label;
    
    /**
     * Language Contructor
     * @param type $label
     * @param type $name
     * @param type $description
     * @throws \JGSmartSystems\DesignPatterns\Behavioral\Iterator\Exception
     */
    public function __construct($label, $name, $description) {
        try {

            $this->name = $name;
            $this->label = $label;
            $this->description = $description;
        } catch (Exception $e) {

            throw $e;
        }
    }
    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Get Item Name Content
     * @return String.
     */
    public function getName() {
        return $this->name;
    }
     /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Get Item Descripction Content
     * @return String.
     */
    public function getDescription() {
        return $this->description;
    }
     /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Set Item Name
     * @param type  $name String .
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Get Item Name
     * @param type $description String
     * @return type void.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }
    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Get Label Name
     * @return type String Item Label.
     */
    public function getLabel() {
        return $this->label;
    }
     /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Set Item Name
     * @param type $label String.
     * @return type $label String
     */
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

}
