<?php
/*
 * This file is part of the FreshCentrifugoBundle.
 *
 * (c) Artem Henvald <genvaldartem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fresh\CentrifugoBundle\Model;

/**
 * ChannelsCommand.
 *
 * @author Artem Henvald <genvaldartem@gmail.com>
 */
final class ChannelsCommand extends AbstractCommand implements ResultableCommandInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct(Method::CHANNELS, []);
    }
}
