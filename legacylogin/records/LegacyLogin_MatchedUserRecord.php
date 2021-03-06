<?php
namespace Craft;

/**
 * LegacyLogin_MatchedUserRecord
 *
 * @author    Top Shelf Craft <michael@michaelrog.com>
 * @copyright Copyright (c) 2016, Michael Rog
 * @license   http://topshelfcraft.com/license
 * @see       http://topshelfcraft.com
 * @package   craft.plugins.legacylogin
 * @since     1.0
 */
class LegacyLogin_MatchedUserRecord extends BaseRecord
{

	/**
	 * @return string
	 */
	public function getTableName()
	{
		return 'legacylogin_matchedusers';
	}

	/**
	 * @access protected
	 * @return array
	 */
	protected function defineAttributes()
	{
		return array(
			'legacyUserType' => array(AttributeType::String, 'required' => true),
			'legacyRecordId' => array(AttributeType::Number, 'required' => false),
			'legacyUserId' => array(AttributeType::Number, 'required' => true),
			'legacyUsername' => array(AttributeType::String, 'required' => false),
			'legacyEmail' => array(AttributeType::String, 'required' => true),
			'passwordSet' => array(AttributeType::Bool, 'required' => true, 'default' => false),
		);
	}

	/**
	 * @return array
	 */
	public function defineRelations()
	{
		return array(
			'craftUser' => array(static::BELONGS_TO, 'UserRecord', 'required' => true, 'onDelete' => static::CASCADE),
		);
	}

	/**
	 * @return array
	 */
	public function defineIndexes()
	{
		return array();
	}

	/**
	 * @return array
	 */
	public function scopes()
	{
		return array();
	}

}