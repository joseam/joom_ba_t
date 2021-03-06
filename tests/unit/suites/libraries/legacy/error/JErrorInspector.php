<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Error
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Stub for testing the JError class.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Error
 * @since       3.1.4
 */
class JErrorInspector extends JError
{
	/**
	 * Stub method to get $levels
	 *
	 * @return  array
	 */
	public static function inspectLevels()
	{
		return self::$levels;
	}

	/**
	 * Stub method get $handlers
	 *
	 * @return  array
	 */
	public static function inspectHandlers()
	{
		return self::$handlers;
	}

	/**
	 * Stub method to get $stack
	 *
	 * @return  array
	 */
	public static function inspectStack()
	{
		return self::$stack;
	}

	/**
	 * Stub method to set $levels
	 *
	 * @param   array  $levels  An array of error levels
	 *
	 * @return  void
	 */
	public static function manipulateLevels($levels)
	{
		self::$levels = $levels;
	}

	/**
	 * Stub method to set $handlers
	 *
	 * @param   array  $handlers  An array of error handlers
	 *
	 * @return  void
	 */
	public static function manipulateHandlers($handlers)
	{
		self::$handlers = $handlers;
	}

	/**
	 * Stub method to set $stack
	 *
	 * @param   array  $stack  An array of error stacks
	 *
	 * @return  void
	 */
	public static function manipulateStack($stack)
	{
		self::$stack = $stack;
	}
}
