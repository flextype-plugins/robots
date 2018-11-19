<?php

/**
 *
 * Flextype Robots Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Flextype\Component\{Event\Event, Http\Http};

//
// Add listner for onCurrentPageAfterProcessed event
//
Event::addListener('onCurrentPageBeforeLoaded', function () {
    if (Http::getUriSegment(0) == 'robots.txt') {
        Http::setResponseStatus(200);
        Http::setRequestHeaders('Content-Type: text/plain; charset=utf-8');
        Themes::view('robots/views/templates/robots')->display();
        Http::requestShutdown();
    }
});
