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
 * Invalid Amazon S3 endpoint
 */
class InvalidEndpoint extends \Exception
{
	public function __construct($message = "", $code = 0, Exception $previous = null)
	{
		if (empty($message))
		{
			$message = 'The custom S3 endpoint provided is invalid. Do NOT include the protocol (http:// or https://). Valid examples are s3.example.com and www.example.com/s3Api';
		}

		parent::__construct($message, $code, $previous);
	}

}
