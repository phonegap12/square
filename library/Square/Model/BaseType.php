<?php

/**
 * Square_Model_BaseType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $TypeID
 * @property string $TypeName
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6401 2009-09-24 16:12:04Z guilhermeblanco $
 */
abstract class Square_Model_BaseType extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('type');
        $this->hasColumn('TypeID', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'unsigned' => 0,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('TypeName', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

}