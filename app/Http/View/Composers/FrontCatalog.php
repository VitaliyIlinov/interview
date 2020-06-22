<?php

namespace app\Http\View\Composers;

use app\Core\Application;
use app\Core\View\View;
use Memcached;

class FrontCatalog
{
    /**
     * @var Application
     */
    private $application;

    /**
     * Catalog constructor.
     *
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $catalog = [
            'solid'        => [
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
            'php'          => [
                'class_object_oop' => [
                    'text' => 'Класс,Обьекты,ООП',
                ],
                'kiss_and_dry'     => [
                    'text' => 'KISS&&DRY',
                ],
                'question_answer'  => [
                    'text' => 'Вопрос\Ответ',
                ],
            ],
            'mysql'        => [
                'engine'             => [
                    'text' => 'Движки',
                ],
                'indexes'            => [
                    'text' => 'Индексы',
                ],
                'relation_type'      => [
                    'text' => 'Типы связей',
                ],
                'query'              => [
                    'text' => 'Запросы',
                ],
                'joins'              => [
                    'text' => 'Joins',
                ],
                'useful_information' => [
                    'text' => 'Полезная инфа',
                ],
            ],
            'pattern'      => [
                'what_is_pattern'     => [
                    'text' => 'Что такое паттерны?',
                ],
                'why_learn_patterns'  => [
                    'text' => 'Зачем знать паттерны?',
                ],
                'criticism'           => [
                    'text' => 'Критика паттернов',
                ],
                'classification'      => [
                    'text' => 'Классификация паттернов',
                ],
                'creational_patterns' => [
                    'text'    => 'Порождающие паттерны',
                    'submenu' => [
                        'factory_method'   => [
                            'text' => 'Фабричный метод',
                        ],
                        'abstract_factory' => [
                            'text' => 'Абстрактная фабрика',
                        ],
                        'builder'          => [
                            'text' => 'Строитель',
                        ],
                        'singleton'        => [
                            'text' => 'Одиночка',
                        ],
                    ],
                ],
                'structural_patterns' => [
                    'text'    => 'Структурные паттерны',
                    'submenu' => [

                    ],
                ],
                'behavioral_patterns' => [
                    'text'    => 'Поведенческие паттерны',
                    'submenu' => [

                    ],
                ],
            ],
            'git'          => [
                'rebase'      => [
                    'text' => 'Rebase',
                ],
                'merge'       => [
                    'text' => 'Merge',
                ],
                'cherry_pick' => [
                    'text' => 'Cherry pick',
                ],
            ],
            'command_line' => [
                'chmod' => [
                    'text' => 'Main',
                ],
            ],
            'docker'       => [
                'main' => [
                    'text' => 'Main',
                ],
            ],
            'web_socket'       => [
                'main' => [
                    'text' => 'Web sockets',
                ],
            ],
        ];
//        $mc = new Memcached();
//        $mc->addServer("localhost", 11211);
//       $mc->set("foo", "Hello!");
//
//        $arr = array(
//            $mc->get("foo"),
//        );
//        $fileName= ROOT.'/tmp/'.filemtime(resource_path('catalogs/main.php')).'.php';
//        if(!file_exists($fileName)){
//            ob_start();
//            require_once resource_path('catalogs/main.php');
//            $catalog = ob_get_contents();
//            ob_end_clean();
//            file_put_contents($fileName,$catalog);
//        }
        $view->with('catalog', $catalog);
    }
}