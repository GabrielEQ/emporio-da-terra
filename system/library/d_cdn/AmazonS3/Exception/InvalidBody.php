<?php
/**
 * Akeeba Engine
 * The modular PHP5 site backup engine
 *
 * @copyright Copyright (c)2006-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU GPL version 3 or, at your option, any later version
 * @package   akeebaengine
 */

namespace AmazonS3\Exception;

// Protection against direct access
defined('AmazonS3') or die();

use Exception;

/**
 * Invalid response body type
 */
class InvalidBody extends \Exception
{
	public function __construct($message = "", $code = 0, Exception $previous = null)
	{
		if (empty($message))
		{
			$message = 'Invalid response body type';
		}

		parent::__construct($message, $code, $previous);
	}

}
