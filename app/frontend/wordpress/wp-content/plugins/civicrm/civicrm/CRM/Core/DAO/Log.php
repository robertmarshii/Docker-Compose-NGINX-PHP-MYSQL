<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Log.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:3b97d17eeaa407d9f7f7aa6e1d819090)
 */

/**
 * Database access object for the Log entity.
 */
class CRM_Core_DAO_Log extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.5';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_log';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Log ID
   *
   * @var int
   */
  public $id;

  /**
   * Name of table where item being referenced is stored.
   *
   * @var string
   */
  public $entity_table;

  /**
   * Foreign key to the referenced item.
   *
   * @var int
   */
  public $entity_id;

  /**
   * Updates does to this object if any.
   *
   * @var text
   */
  public $data;

  /**
   * FK to Contact ID of person under whose credentials this data modification was made.
   *
   * @var int
   */
  public $modified_id;

  /**
   * When was the referenced entity created or modified or deleted.
   *
   * @var datetime
   */
  public $modified_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_log';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Logs') : ts('Log');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'modified_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Log ID'),
          'description' => ts('Log ID'),
          'required' => TRUE,
          'where' => 'civicrm_log.id',
          'table_name' => 'civicrm_log',
          'entity' => 'Log',
          'bao' => 'CRM_Core_BAO_Log',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => ts('Name of table where item being referenced is stored.'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_log.entity_table',
          'table_name' => 'civicrm_log',
          'entity' => 'Log',
          'bao' => 'CRM_Core_BAO_Log',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID '),
          'description' => ts('Foreign key to the referenced item.'),
          'required' => TRUE,
          'where' => 'civicrm_log.entity_id',
          'table_name' => 'civicrm_log',
          'entity' => 'Log',
          'bao' => 'CRM_Core_BAO_Log',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'data' => [
          'name' => 'data',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Data'),
          'description' => ts('Updates does to this object if any.'),
          'where' => 'civicrm_log.data',
          'table_name' => 'civicrm_log',
          'entity' => 'Log',
          'bao' => 'CRM_Core_BAO_Log',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'modified_id' => [
          'name' => 'modified_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Modified By'),
          'description' => ts('FK to Contact ID of person under whose credentials this data modification was made.'),
          'where' => 'civicrm_log.modified_id',
          'table_name' => 'civicrm_log',
          'entity' => 'Log',
          'bao' => 'CRM_Core_BAO_Log',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '1.5',
        ],
        'modified_date' => [
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Modified Date'),
          'description' => ts('When was the referenced entity created or modified or deleted.'),
          'where' => 'civicrm_log.modified_date',
          'table_name' => 'civicrm_log',
          'entity' => 'Log',
          'bao' => 'CRM_Core_BAO_Log',
          'localizable' => 0,
          'add' => '1.5',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'log', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'log', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_log::0::entity_table::entity_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
