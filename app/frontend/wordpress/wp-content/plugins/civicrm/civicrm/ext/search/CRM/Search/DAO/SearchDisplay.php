<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from org.civicrm.search/xml/schema/CRM/Search/SearchDisplay.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:ac28cede0407e2e1bf2273b7ca6421d4)
 */
use CRM_Search_ExtensionUtil as E;

/**
 * Database access object for the SearchDisplay entity.
 */
class CRM_Search_DAO_SearchDisplay extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_search_display';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique SearchDisplay ID
   *
   * @var int
   */
  public $id;

  /**
   * Unique name for identifying search display
   *
   * @var string
   */
  public $name;

  /**
   * Label for identifying search display to administrators
   *
   * @var string
   */
  public $label;

  /**
   * FK to saved search table.
   *
   * @var int
   */
  public $saved_search_id;

  /**
   * Type of display
   *
   * @var string
   */
  public $type;

  /**
   * Configuration data for the search display
   *
   * @var text
   */
  public $settings;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_search_display';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Search Displays') : E::ts('Search Display');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'saved_search_id', 'civicrm_saved_search', 'id');
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
          'title' => E::ts('Search Display ID'),
          'description' => E::ts('Unique SearchDisplay ID'),
          'required' => TRUE,
          'where' => 'civicrm_search_display.id',
          'table_name' => 'civicrm_search_display',
          'entity' => 'SearchDisplay',
          'bao' => 'CRM_Search_DAO_SearchDisplay',
          'localizable' => 0,
          'add' => '1.0',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Search Display Name'),
          'description' => E::ts('Unique name for identifying search display'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_search_display.name',
          'table_name' => 'civicrm_search_display',
          'entity' => 'SearchDisplay',
          'bao' => 'CRM_Search_DAO_SearchDisplay',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.0',
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Search Display Label'),
          'description' => E::ts('Label for identifying search display to administrators'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_search_display.label',
          'table_name' => 'civicrm_search_display',
          'entity' => 'SearchDisplay',
          'bao' => 'CRM_Search_DAO_SearchDisplay',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.0',
        ],
        'saved_search_id' => [
          'name' => 'saved_search_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Saved Search ID'),
          'description' => E::ts('FK to saved search table.'),
          'required' => TRUE,
          'where' => 'civicrm_search_display.saved_search_id',
          'table_name' => 'civicrm_search_display',
          'entity' => 'SearchDisplay',
          'bao' => 'CRM_Search_DAO_SearchDisplay',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_SavedSearch',
          'add' => '1.0',
        ],
        'type' => [
          'name' => 'type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Search Display Type'),
          'description' => E::ts('Type of display'),
          'required' => TRUE,
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_search_display.type',
          'table_name' => 'civicrm_search_display',
          'entity' => 'SearchDisplay',
          'bao' => 'CRM_Search_DAO_SearchDisplay',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'search_display_type',
            'optionEditPath' => 'civicrm/admin/options/search_display_type',
          ],
          'add' => '1.0',
        ],
        'settings' => [
          'name' => 'settings',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => E::ts('Search Display Settings'),
          'description' => E::ts('Configuration data for the search display'),
          'where' => 'civicrm_search_display.settings',
          'default' => 'NULL',
          'table_name' => 'civicrm_search_display',
          'entity' => 'SearchDisplay',
          'bao' => 'CRM_Search_DAO_SearchDisplay',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
          'add' => '1.0',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'search_display', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'search_display', $prefix, []);
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
      'UI_saved_search__id_name' => [
        'name' => 'UI_saved_search__id_name',
        'field' => [
          0 => 'saved_search_id',
          1 => 'name',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_search_display::1::saved_search_id::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
