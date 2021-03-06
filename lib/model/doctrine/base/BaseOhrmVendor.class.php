<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmVendor', 'doctrine');

/**
 * BaseOhrmVendor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $pic
 * @property string $contact
 * @property string $address
 * @property integer $account
 * @property string $npwp
 * @property string $code
 * @property integer $id
 * @property Doctrine_Collection $OhrmPurchaseOrder
 * @property Doctrine_Collection $OhrmQuotations
 * @property Doctrine_Collection $OhrmVendorToCategory
 * 
 * @method string              getName()                 Returns the current record's "name" value
 * @method string              getPic()                  Returns the current record's "pic" value
 * @method string              getContact()              Returns the current record's "contact" value
 * @method string              getAddress()              Returns the current record's "address" value
 * @method integer             getAccount()              Returns the current record's "account" value
 * @method string              getNpwp()                 Returns the current record's "npwp" value
 * @method string              getCode()                 Returns the current record's "code" value
 * @method integer             getId()                   Returns the current record's "id" value
 * @method Doctrine_Collection getOhrmPurchaseOrder()    Returns the current record's "OhrmPurchaseOrder" collection
 * @method Doctrine_Collection getOhrmQuotations()       Returns the current record's "OhrmQuotations" collection
 * @method Doctrine_Collection getOhrmVendorToCategory() Returns the current record's "OhrmVendorToCategory" collection
 * @method OhrmVendor          setName()                 Sets the current record's "name" value
 * @method OhrmVendor          setPic()                  Sets the current record's "pic" value
 * @method OhrmVendor          setContact()              Sets the current record's "contact" value
 * @method OhrmVendor          setAddress()              Sets the current record's "address" value
 * @method OhrmVendor          setAccount()              Sets the current record's "account" value
 * @method OhrmVendor          setNpwp()                 Sets the current record's "npwp" value
 * @method OhrmVendor          setCode()                 Sets the current record's "code" value
 * @method OhrmVendor          setId()                   Sets the current record's "id" value
 * @method OhrmVendor          setOhrmPurchaseOrder()    Sets the current record's "OhrmPurchaseOrder" collection
 * @method OhrmVendor          setOhrmQuotations()       Sets the current record's "OhrmQuotations" collection
 * @method OhrmVendor          setOhrmVendorToCategory() Sets the current record's "OhrmVendorToCategory" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmVendor extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_vendor');
        $this->hasColumn('name', 'string', 225, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 225,
             ));
        $this->hasColumn('pic', 'string', 225, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 225,
             ));
        $this->hasColumn('contact', 'string', 225, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 225,
             ));
        $this->hasColumn('address', 'string', 225, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 225,
             ));
        $this->hasColumn('account', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('npwp', 'string', 225, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 225,
             ));
        $this->hasColumn('code', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('OhrmPurchaseOrder', array(
             'local' => 'id',
             'foreign' => 'vendor_id'));

        $this->hasMany('OhrmQuotations', array(
             'local' => 'id',
             'foreign' => 'vendor_id'));

        $this->hasMany('OhrmVendorToCategory', array(
             'local' => 'id',
             'foreign' => 'vendor_id'));
    }
}