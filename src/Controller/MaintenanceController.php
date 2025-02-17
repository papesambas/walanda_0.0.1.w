<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MaintenanceController extends AbstractController
{
    #[Route('/maintenance', name: 'app_maintenance')]
    public function index(Request $request): Response
    {   $greet = '';
              if ($name = $request->query->get('hello')) {
                  $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
              }else{
                $greet = sprintf('<h1>Hello...   %s !!!</h1>', htmlspecialchars("Site en Maintenance"));
                
              }
                 return new Response(<<<EOF
        <html>
            <body>
                $greet
                <img src="/images/under-construction.gif" />
            </body>
        </html>
        EOF
                );
    }
}
