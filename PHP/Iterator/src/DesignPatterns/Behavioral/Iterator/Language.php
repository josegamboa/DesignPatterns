<?php
namespace JGSmartSystems\DesignPatterns\Behavioral\Iterator;
use JGSmartSystems\DesignPatterns\Behavioral\Iterator\Interfaces\ItemListInterface;
/**
 * Description of Language
 *
 * @author josegamboa
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
