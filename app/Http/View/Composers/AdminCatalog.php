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
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function compose(View $view)
    {
        $view->with('menu', $this->getMenu());
        $view->with('feature', $this->getFeature());
    }

    private function getMenu()
    {
        return [
            'dashboard'  => [
                'text'    => 'Dashboard',
                'icon'    => 'fa fa-fw fa-user-circle',
                'submenu' => [
                    'finance' => [
                        'text' => 'Finance',
                        'link' => 'Finance',
                    ],
                ],
            ],
            'ui_element' => [
                'icon'    => 'fa fa-fw fa-rocket',
                'text'    => 'UI element',
                'submenu' => [
                    'cards'      => [
                        'text' => 'Cards',
                        'link' => 'cards',
                    ],
                    'general'    => [
                        'text' => 'General',
                        'link' => 'general',
                    ],
                    'carousel'   => [
                        'text' => 'Carousel',
                        'link' => 'carousel',
                    ],
                    'list_group' => [
                        'text' => 'List Group',
                        'link' => 'list_group',
                    ],
                    'typography' => [
                        'text' => 'Typography',
                        'link' => 'typography',
                    ],
                    'tabs'       => [
                        'text' => 'Tabs',
                        'link' => 'tabs',
                    ],
                ],
            ],
            'chart'      => [
                'text'    => 'Chart',
                'icon'    => 'fas fa-fw fa-chart-pie',
                'submenu' => [
                    'Guage' => [
                        'text' => 'Guage',
                        'link' => 'guage',
                    ],
                ],
            ],
            'forms'      => [
                'text'    => 'Forms',
                'icon'    => 'fab fa-fw fa-wpforms',
                'submenu' => [
                    'form_elements'       => [
                        'text' => 'Form Elements',
                        'link' => 'form_elements',
                    ],
                    'parsely_validations' => [
                        'text' => 'Parsely Validations',
                        'link' => 'parsely_validations',
                    ],
                    'multiselect'         => [
                        'text' => 'Multiselect',
                        'link' => 'multiselect',
                    ],
                    'date_picker'         => [
                        'text' => 'Date Picker',
                        'link' => 'date_picker',
                    ],
                    'bootstrap_select'    => [
                        'text' => 'Bootstrap Select',
                        'link' => 'bootstrap_select',
                    ],
                ],
            ],
            'tables'     => [
                'text'    => 'Tables',
                'icon'    => 'fas fa-fw fa-table',
                'submenu' => [
                    'general_tables' => [
                        'text' => 'General Tables',
                        'link' => 'general_tables',
                    ],
                    'data_tables'    => [
                        'text' => 'Data Tables',
                        'link' => 'data_tables',
                    ],
                ],
            ],
        ];
    }

    private function getFeature()
    {
        return [
            'pages' => [
                'text'    => 'pages',
                'icon'    => 'fas fa-fw fa-file',
                'submenu' => [
                    'pricing_tables'         => [
                        'text' => 'Pricing Tables',
                        'link' => 'pricing_tables',
                    ],
                    'timeline'               => [
                        'text' => 'Timeline',
                        'link' => 'timeline',
                    ],
                    'calendar'               => [
                        'text' => 'Calendar',
                        'link' => 'calendar',
                    ],
                    'sortable_nestable list' => [
                        'text' => 'Sortable/Nestable List',
                        'link' => 'sortable_nestable',
                    ],
                    'media_objects'          => [
                        'text' => 'Media Objects',
                        'link' => 'media_objects',
                    ],
                    'cropper'                => [
                        'text' => 'Cropper',
                        'link' => 'cropper',
                    ],
                    'color_picker'           => [
                        'text' => 'Color Picker',
                        'link' => 'color_picker',
                    ],
                ],
            ],
            'apps'  => [
                'text'    => 'Apps',
                'icon'    => 'fas fa-fw fa-inbox',
                'submenu' => [
                    'inbox'        => [
                        'text' => 'Inbox',
                        'link' => 'inbox',
                    ],
                    'email_detail' => [
                        'text' => 'Email Detail',
                        'link' => 'email_detail',
                    ],
                    'message_chat' => [
                        'text' => 'Message Chat',
                        'link' => 'message_chat',
                    ],
                ],
            ],
            'icons' => [
                'text'    => 'Icons',
                'icon'    => 'fas fa-fw fa-columns',
                'submenu' => [
                    'fontawesome_icons' => [
                        'text' => 'FontAwesome',
                        'link' => 'fontawesome_icons',
                    ],
                    'material_icons'    => [
                        'text' => 'Material Icons',
                        'link' => 'material_icons',
                    ],
                    'simpleline_icons'  => [
                        'text' => 'Simpleline',
                        'link' => 'simpleline_icons',
                    ],
                    'themify_icons'     => [
                        'text' => 'Themify',
                        'link' => 'themify_icons',
                    ],
                ],
            ],
        ];
    }
}