<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmBudget', 'doctrine');

/**
 * BaseOhrmBudget
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $department
 * @property integer $category
 * @property float $amount
 * @property date $issued_date
 * @property date $last_until
 * @property OhrmSubunit $OhrmSubunit
 * @property OhrmCategory $OhrmCategory
 * @property Doctrine_Collection $OhrmPurchaseRequest
 * @property Doctrine_Collection $OhrmPurchaseRequest_3
 * 
 * @method integer             getDepartment()            Returns the current record's "department" value
 * @method integer             getCategory()              Returns the current record's "category" value
 * @method float               getAmount()                Returns the current record's "amount" value
 * @method date                getIssuedDate()            Returns the current record's "issued_date" value
 * @method date                getLastUntil()             Returns the current record's "last_until" value
 * @method OhrmSubunit         getOhrmSubunit()           Returns the current record's "OhrmSubunit" value
 * @method OhrmCategory        getOhrmCategory()          Returns the current record's "OhrmCategory" value
 * @method Doctrine_Collection getOhrmPurchaseRequest()   Returns the current record's "OhrmPurchaseRequest" collection
 * @method Doctrine_Collection getOhrmPurchaseRequest3()  Returns the current record's "OhrmPurchaseRequest_3" collection
 * @method OhrmBudget          setDepartment()            Sets the current record's "department" value
 * @method OhrmBudget          setCategory()              Sets the current record's "category" value
 * @method OhrmBudget          setAmount()                Sets the current record's "amount" value
 * @method OhrmBudget          setIssuedDate()            Sets the current record's "issued_date" value
 * @method OhrmBudget          setLastUntil()             Sets the current record's "last_until" value
 * @method OhrmBudget          setOhrmSubunit()           Sets the current record's "OhrmSubunit" value
 * @method OhrmBudget          setOhrmCategory()          Sets the current record's "OhrmCategory" value
 * @method OhrmBudget          setOhrmPurchaseRequest()   Sets the current record's "OhrmPurchaseRequest" collection
 * @method OhrmBudget          setOhrmPurchaseRequest3()  Sets the current record's "OhrmPurchaseRequest_3" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmBudget extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_budget');
        $this->hasColumn('department', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('category', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('amount', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('issued_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('last_until', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OhrmSubunit', array(
             'local' => 'department',
             'foreign' => 'id'));

        $this->hasOne('OhrmCategory', array(
             'local' => 'category',
             'foreign' => 'id'));

        $this->hasMany('OhrmPurchaseRequest', array(
             'local' => 'department',
             'foreign' => 'budget_department'));

        $this->hasMany('OhrmPurchaseRequest as OhrmPurchaseRequest_3', array(
             'local' => 'category',
             'foreign' => 'budget_category'));
    }
}