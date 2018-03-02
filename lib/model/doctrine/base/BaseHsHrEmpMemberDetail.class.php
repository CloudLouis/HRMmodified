<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HsHrEmpMemberDetail', 'doctrine');

/**
 * BaseHsHrEmpMemberDetail
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $emp_number
 * @property integer $membship_code
 * @property string $ememb_subscript_ownership
 * @property decimal $ememb_subscript_amount
 * @property string $ememb_subs_currency
 * @property date $ememb_commence_date
 * @property date $ememb_renewal_date
 * @property OhrmMembership $OhrmMembership
 * @property HsHrEmployee $HsHrEmployee
 * 
 * @method integer             getEmpNumber()                 Returns the current record's "emp_number" value
 * @method integer             getMembshipCode()              Returns the current record's "membship_code" value
 * @method string              getEmembSubscriptOwnership()   Returns the current record's "ememb_subscript_ownership" value
 * @method decimal             getEmembSubscriptAmount()      Returns the current record's "ememb_subscript_amount" value
 * @method string              getEmembSubsCurrency()         Returns the current record's "ememb_subs_currency" value
 * @method date                getEmembCommenceDate()         Returns the current record's "ememb_commence_date" value
 * @method date                getEmembRenewalDate()          Returns the current record's "ememb_renewal_date" value
 * @method OhrmMembership      getOhrmMembership()            Returns the current record's "OhrmMembership" value
 * @method HsHrEmployee        getHsHrEmployee()              Returns the current record's "HsHrEmployee" value
 * @method HsHrEmpMemberDetail setEmpNumber()                 Sets the current record's "emp_number" value
 * @method HsHrEmpMemberDetail setMembshipCode()              Sets the current record's "membship_code" value
 * @method HsHrEmpMemberDetail setEmembSubscriptOwnership()   Sets the current record's "ememb_subscript_ownership" value
 * @method HsHrEmpMemberDetail setEmembSubscriptAmount()      Sets the current record's "ememb_subscript_amount" value
 * @method HsHrEmpMemberDetail setEmembSubsCurrency()         Sets the current record's "ememb_subs_currency" value
 * @method HsHrEmpMemberDetail setEmembCommenceDate()         Sets the current record's "ememb_commence_date" value
 * @method HsHrEmpMemberDetail setEmembRenewalDate()          Sets the current record's "ememb_renewal_date" value
 * @method HsHrEmpMemberDetail setOhrmMembership()            Sets the current record's "OhrmMembership" value
 * @method HsHrEmpMemberDetail setHsHrEmployee()              Sets the current record's "HsHrEmployee" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHsHrEmpMemberDetail extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_member_detail');
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('membship_code', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('ememb_subscript_ownership', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ememb_subscript_amount', 'decimal', 15, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
             'scale' => '2',
             ));
        $this->hasColumn('ememb_subs_currency', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('ememb_commence_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('ememb_renewal_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OhrmMembership', array(
             'local' => 'membship_code',
             'foreign' => 'id'));

        $this->hasOne('HsHrEmployee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));
    }
}