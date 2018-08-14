<?php
namespace d_cdn;

class AmazonS3 {
	public function __construct() {
		if (!defined('AmazonS3')) define('AmazonS3', true);
		
		require_once 'AmazonS3/Acl.php';
		require_once 'AmazonS3/Connector.php';
		require_once 'AmazonS3/Configuration.php';
		require_once 'AmazonS3/Input.php';
		require_once 'AmazonS3/Request.php';
		require_once 'AmazonS3/Response.php';
		require_once 'AmazonS3/Response/Error.php';
		require_once 'AmazonS3/Signature.php';
		require_once 'AmazonS3/Signature/V2.php';
		require_once 'AmazonS3/Signature/V4.php';
		require_once 'AmazonS3/Exception/CannotDeleteFile.php';
		require_once 'AmazonS3/Exception/CannotGetBucket.php';
		require_once 'AmazonS3/Exception/CannotGetFile.php';
		require_once 'AmazonS3/Exception/CannotListBuckets.php';
		require_once 'AmazonS3/Exception/CannotOpenFileForRead.php';
		require_once 'AmazonS3/Exception/CannotOpenFileForWrite.php';
		require_once 'AmazonS3/Exception/CannotPutFile.php';
		require_once 'AmazonS3/Exception/ConfigurationError.php';
		require_once 'AmazonS3/Exception/InvalidAccessKey.php';
		require_once 'AmazonS3/Exception/InvalidBody.php';
		require_once 'AmazonS3/Exception/InvalidEndpoint.php';
		require_once 'AmazonS3/Exception/InvalidFilePointer.php';
		require_once 'AmazonS3/Exception/InvalidRegion.php';
		require_once 'AmazonS3/Exception/InvalidSecretKey.php';
		require_once 'AmazonS3/Exception/InvalidSignatureMethod.php';
		require_once 'AmazonS3/Exception/InvalidSecretKey.php';
		require_once 'AmazonS3/Exception/PropertyNotFound.php';
	}
}