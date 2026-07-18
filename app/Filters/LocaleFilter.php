<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LocaleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $locale = $session->get('lang');

        // Check if locale is set in URL query string (e.g. ?lang=en)
        $queryLang = $request->getGet('lang');
        if ($queryLang && in_array($queryLang, ['id', 'en'])) {
            $locale = $queryLang;
            $session->set('lang', $locale);
        }

        // If no locale set in session, set to default (id)
        if (!$locale) {
            $locale = 'id';
            $session->set('lang', $locale);
        }

        // Set the active locale in the system
        service('request')->setLocale($locale);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing
    }
}
