<?php
/**
 * User: Lai Vu <vuldh@nal.vn>
 * Date: 5/3/18
 * Time: 4:10 PM
 */

namespace App\Controllers;

use App\Models\User;
use Slim\Views\PhpRenderer;
use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController
{
    private $renderer;
    private $logger;

    public function __construct(
        PhpRenderer $renderer,
        LoggerInterface $logger
    )
    {
        $this->renderer = $renderer;
        $this->logger = $logger;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        return $this->renderer->render($response, 'index.phtml', array_merge(['users' => User::all()], $args));
    }
}