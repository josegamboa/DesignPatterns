<?php

namespace JGSmartSystems\DesignPatterns\Behavioral\Iterator\Interfaces;

/**
 *
 * @author josegamboa
 */
abstract class ItemListInterface {

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Get Item Name Content
     * @return String.
     */
    public abstract function getName();

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Get Item Descripction Content
     * @return String.
     */
    public abstract function getDescription();

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Set Item Name
     * @param type  $name String .
     */
    public abstract function setName($name);

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Get Item Name
     * @param type $description String
     * @return type void.
     */
    public abstract function setDescription($description);

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Get Label Name
     * @return type String Item Label.
     */
    public abstract function getLabel();

    /**
     * (PHP 5 &gt;= 5.3.0 )<br/>
     * Set Item Name
     * @param type $label String.
     * @return type $label String
     */
    public abstract function setLabel($label);
}
