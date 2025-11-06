<?php
// src/Controller/DashboardController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController
{
  #[Route('/dashboard', name: 'dashboard')]
  public function index(): Response
  {
    $html = <<<HTML
<!doctype html>
<html>
  <head><meta charset="utf-8"><title>Dashboard</title></head>
  <body>
    <p>Welcome to the dashboard! (Protected Area)</p>
  </body>
</html>
HTML;

    return new Response($html);
  }
}
