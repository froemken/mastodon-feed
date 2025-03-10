<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 project.
 * (c) 2022 B-Factor GmbH / 12bis3 / Sudhaus7 / code711.de
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 * The TYPO3 project - inspiring people to share!
 *
 * @copyright 2023 B-Factor GmbH / 12bis3 / Sudhaus7 / https://code711.de/
 */

namespace Code711\MastodonFeed\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class FeedController extends ActionController
{
    public function indexAction(): ResponseInterface
    {
        $data = $this->request?->getAttribute( 'currentContentObject')?->data ?? $this->configurationManager->getContentObject()->data;
        $this->view->assign( 'data', $data);
        return $this->htmlResponse();
    }
}
