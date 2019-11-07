<?php

namespace meteorTechnology\AgoraSDK;

use Hanson\Foundation\Foundation;
use meteorTechnology\AgoraSDK\Auth\SimpleTokenBuilder;

/**
 * Class Agora
 *
 * @property Project            $project
 * @property Usage              $usage
 * @property KickingRule        $kicking_rule
 * @property SimpleTokenBuilder $token
 *
 * @package meteorTechnology\AgoraSDK
 */
class Agora extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];
}
