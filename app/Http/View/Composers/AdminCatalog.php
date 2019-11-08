<?php

namespace app\Http\View\Composers;

use app\Core\Application;
use app\Core\View\View;

class AdminCatalog
{
    /**
     * @var Application
     */
    private $app;

    /**
     * AdminView constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function compose(View $view)
    {
        $catalog = [
            'Dashboard'        => [
                'single_responsibility' => [
                    'text' => 'Single Responsibility',
                ],
                'openclosed'            => [
                    'text' => 'Open closed',
                ],
                'liskov_barbara'        => [
                    'text' => 'Single Liskov substitution',
                ],
                'interface_segregation' => [
                    'text' => 'Interface segregation',
                ],
                'dependency_inversion'  => [
                    'text' => 'Dependency inversion',
                ],
            ],
        ];
    }
}