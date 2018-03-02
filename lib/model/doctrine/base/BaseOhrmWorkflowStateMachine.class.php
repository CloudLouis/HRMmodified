<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmWorkflowStateMachine', 'doctrine');

/**
 * BaseOhrmWorkflowStateMachine
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $workflow
 * @property string $state
 * @property string $role
 * @property string $action
 * @property string $resulting_state
 * @property string $roles_to_notify
 * @property integer $priority
 * 
 * @method integer                  getId()              Returns the current record's "id" value
 * @method string                   getWorkflow()        Returns the current record's "workflow" value
 * @method string                   getState()           Returns the current record's "state" value
 * @method string                   getRole()            Returns the current record's "role" value
 * @method string                   getAction()          Returns the current record's "action" value
 * @method string                   getResultingState()  Returns the current record's "resulting_state" value
 * @method string                   getRolesToNotify()   Returns the current record's "roles_to_notify" value
 * @method integer                  getPriority()        Returns the current record's "priority" value
 * @method OhrmWorkflowStateMachine setId()              Sets the current record's "id" value
 * @method OhrmWorkflowStateMachine setWorkflow()        Sets the current record's "workflow" value
 * @method OhrmWorkflowStateMachine setState()           Sets the current record's "state" value
 * @method OhrmWorkflowStateMachine setRole()            Sets the current record's "role" value
 * @method OhrmWorkflowStateMachine setAction()          Sets the current record's "action" value
 * @method OhrmWorkflowStateMachine setResultingState()  Sets the current record's "resulting_state" value
 * @method OhrmWorkflowStateMachine setRolesToNotify()   Sets the current record's "roles_to_notify" value
 * @method OhrmWorkflowStateMachine setPriority()        Sets the current record's "priority" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmWorkflowStateMachine extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_workflow_state_machine');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('workflow', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('state', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('role', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('action', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('resulting_state', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('roles_to_notify', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('priority', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}