<?php

namespace Hitmeister\Component\Api\Endpoints\ImportFiles;

use Hitmeister\Component\Api\Endpoints\AbstractEndpoint;
use Hitmeister\Component\Api\Endpoints\Traits\EmptyParamWhiteList;
use Hitmeister\Component\Api\Endpoints\Traits\RequestGet;
use Hitmeister\Component\Api\Endpoints\Traits\UriPatternId;

/**
 * Class Get
 *
 * @category PHP-SDK
 * @package  Hitmeister\Component\Api\Endpoints\ImportFiles
 * @author   Maksim Naumov <maksim.naumov@hitmeister.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.hitmeister.de/api/v1/
 */
class Get extends AbstractEndpoint
{
	use RequestGet;
	use UriPatternId;
	use EmptyParamWhiteList;

	/**
	 * {@inheritdoc}
	 */
	protected function getUriPattern()
	{
		return 'import-files/%d/';
	}
}