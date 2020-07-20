https://tproger.ru/translations/design-patterns-simple-words-2/#25
https://refactoring.guru/ru/design-patterns/facade/php/example
<p>
    <b>Фасад</b> — это структурный паттерн, который предоставляет простой(но урезанный) интерфейс к сложной системе
    объектов, библиотеке или фреймворку,позволяющий скрыть сложность системы путём сведения всех возможных внешних
    вызовов к одному объекту, делегирующему их соответствующим объектам системы.
</p>
<p>
    <b>Простыми словами</b>: Шаблон фасад предоставляет упрощенный интерфейс для сложной системы.
</p>
<p>Кроме того, что Фасад позволяет снизить общую сложность программы, он также помогает вынести код, зависимый от
    внешней системы в единственное место.
</p>

<p><b>Признаки применения паттерна</b>: Фасад угадывается в классе, который имеет простой интерфейс, но делегирует
    основную часть работы другим классам. Чаще всего, фасады сами следят за жизненным циклом объектов сложной системы.
</p>

<p>
<ul>
    <li>хороший фасад не содержит созданий экземпляров классов (new) внутри. Если внутри фасада создаются объекты для
        реализации каждого метода, это не Фасад, это Строитель или [Абстрактная|Статическая|Простая] Фабрика [или
        Фабричный Метод]. Если велик соблазн инициализировать объект внутри фасада, лучше посмотреть в сторону семейства
        порождающих паттернов.
    </li>
    <li>
        он никоем образом не ограничевает прямого доступа к классам. Это помощник, а не ограничитель.
    </li>
</ul>
</p>

<p><b>Пример из жизни</b>: суть паттерна похожа на пульт управления умным домом, если уж рассматривать его с точки
    зрения домохозяйств. Допустим у вас дома есть кофемашина, телевизор и электрический тазик ноги парить. Вот теперь
    представьте, что приходите вечером с работы домой. Уставший. А тут на тебе: нужно включить кофемашину, выбрать режим
    "руссиано", включить телевизор, найти канал с футболом, включить тазик, выбрать режим массажера с подогревом. И
    тогда наступит долгожданная лафа. В руке ароматный кофе, наши забили гол, ноги в тазике.

    Но если у вас есть система умного дома, то можно заранее все это настроить, и запустить одной кнопкой. Даже
    издалека, по мобиле.

    Вот так же работает паттерн "фасад". В кодовом примере можно выразить так. Имеем три устройства, делающих жизнь
    приятной:
</p>

<pre>
    <code class="php">
        // Кофемашина
        class CoffeeMachine
        {
            public function cappuccino()
            {
                return 'Cappuccino';
            }

            public function russiano()
            {
                return 'Russiano';
            }
        }

        // Телевизор
        class TV
        {
            protected $channels = [
                1 => '1tv',
                2 => 'RenTv',
                3 => 'MatchTv'
            ];

            public function сhannelSelector($num)
            {
                return $this->channels[$num];
            }
        }

        // Тазик, ноги парить.
        class FootMassager
        {
            public function addColdWater()
            {
                return 'холодная вода';
            }

            public function addHotWater()
            {
                return 'горячая вода';
            }
        }

        // Этот класс построен по принципу патерна Facade
        class SmartHouse
        {
            public function __construct($cofeeMachine, $TV, $footMassager)
            {
                $this->cofeeMachine = $cofeeMachine;
                $this->TV = $TV;
                $this->footMassager = $footMassager;
            }

            public function sweetHome()
            {   // Вызываем нужные методы из разных классов
                $cofee = $this->cofeeMachine->russiano();
                $football = $this->TV->сhannelSelector(3);
                $water = $this->footMassager->addHotWater();
                // Жизнь удалась.
                return 'Хлебнуть '. $cofee
                      .', посмотреть '. $football
                      .', сунуть ноги в тазик, где '. $water;
            }
        }

            // Гаджеты
        $cofeeMachine = new CoffeeMachine;
        $TV = new TV;
        $footMassager = new FootMassager;

        // Умный дом
        $smartHouse = new SmartHouse($cofeeMachine, $TV, $footMassager);
        // Запускаем программу действий одним движением.
        echo $smartHouse->sweetHome();
    </code>
</pre>

<p><b>Пример из жизни</b>: Как вы включаете компьютер? Нажимаю на кнопку включения, скажете вы. Это то, во что вы
    верите, потому что вы используете простой интерфейс, который компьютер предоставляет для доступа снаружи. Внутри же
    должно произойти гораздо больше вещей. Этот простой интерфейс для сложной подсистемы называется фасадом.
</p>
<pre>
    <code class="php">
    class Computer
    {
        public function getElectricShock()
        {
            echo "Ай!";
        }

        public function makeSound()
        {
            echo "Бип-бип!";
        }

        public function showLoadingScreen()
        {
            echo "Загрузка..";
        }

        public function bam()
        {
            echo "Готов к использованию!";
        }

        public function closeEverything()
        {
            echo "Буп-буп-буп-бззз!";
        }

        public function sooth()
        {
            echo "Zzzzz";
        }

        public function pullCurrent()
        {
            echo "Аах!";
        }
    }

        Затем у нас есть фасад:

       class ComputerFacade
        {
            protected $computer;

            public function __construct(Computer $computer)
            {
                $this->computer = $computer;
            }

            public function turnOn()
            {
                $this->computer->getElectricShock();
                $this->computer->makeSound();
                $this->computer->showLoadingScreen();
                $this->computer->bam();
            }

            public function turnOff()
            {
                $this->computer->closeEverything();
                $this->computer->pullCurrent();
                $this->computer->sooth();
            }
        }

        //Пример использования:

        $computer = new ComputerFacade(new Computer());
        $computer->turnOn(); // Ай! Бип-бип! Загрузка.. Готов к использованию!
        $computer->turnOff(); // Буп-буп-буп-бззз! Аах! Zzzzz
    </code>
</pre>