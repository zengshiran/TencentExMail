<?php

/*
 * This file is part of the Icehco/easyexmail.
 *
 * (c) Icehco <iymiym@icloud.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Icehco\EasyExMail\Base;

use Icehco\EasyExMail\Traits\Helper;

class Base
{
    use Helper;

    protected $accessToken;

    public function __construct(array $config)
    {
        $this->accessToken = $this->getAccessToken($config);
    }
}
