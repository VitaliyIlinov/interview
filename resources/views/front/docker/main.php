<h2>Docker Терминология</h2>
<ul>
    <li><b>Контейнер</b> – это исполняемый экземпляр, который инкапсулирует требуемое программное обеспечение. Он
        состоит из образов. Его можно легко удалить и снова создать за короткий промежуток времени.
    </li>
    <li><b>Образ</b> – базовый элемент каждого контейнера. В зависимости от образа, может потребоваться некоторое время
        для его создания.
    </li>
    <li><b>Порт</b> – это порт TCP/UDP в своем первоначальном значении. Чтобы все было просто, предположим, что порты
        могут быть открыты во внешнем мире или подключены к контейнерам (доступны только из этих контейнеров и невидимы
        для внешнего мира).
    </li>
    <li><b>Том</b> – описывается как общая папка. Тома инициализируются при создании контейнера и предназначены для
        сохранения данных, независимо от жизненного цикла контейнера.
    </li>
    <li><b>Реестр</b> – это сервер, на котором хранятся образы. Сравним его с GitHub: вы можете вытащить образ из
        реестра, чтобы развернуть его локально, и так же локально можете вносить в реестр созданные образы.
    </li>
    <li><b>Docker Hub</b> – публичный репозиторий с интерфейсом, предоставляемый Докер Inc. Он хранит множество образов.
        Ресурс является источником «официальных» образов, сделанных командой Докер или созданных в сотрудничестве с
        разработчиком ПО. Для официальных образов перечислены их потенциальные уязвимости. Эта информация открыта для
        любого зарегистрированного пользователя. Доступны как бесплатные, так и платные аккаунты.
    </li>
</ul>
<a class="btn btn-secondary" target="_blank" href="https://proglib.io/p/docker/" role="button">
    https://proglib.io/p/docker/
</a>
<a class="btn btn-secondary" target="_blank" href="https://docs.docker.com/get-started/" role="button">
    Install
</a>

<h2>Пример 1: Hello World</h2>
<pre>
    <code>
docker run ubuntu /bin/echo 'Hello world'
    </code>
</pre>
<ul>
    <li>docker run – это команда запуска контейнера.</li>
    <li>ubuntu – образ, который вы запускаете (например, образ операционной системы Ubuntu). Когда вы его указываете,
        Докер сначала анализирует элемент в разрезе хоста.
    </li>
    <li>/bin/echo ‘Hello world’ – команда, которая будет запускаться внутри нового контейнера. Данный контейнер просто
        выводит «Hello world» и останавливает выполнение.
    </li>
</ul>
<p>
    Теперь попробуем создать интерактивную оболочку внутри контейнера:
</p>
<pre>
    <code>
docker run -i -t --rm ubuntu /bin/bash
    </code>
</pre>
<ul>
    <li>-i позволяет создавать интерактивное соединение, захватывая стандартный вход (STDIN) контейнера.</li>
    <li>-t присваивает псевдо-tty или терминал внутри нового контейнера.</li>
    <li>—rm требуется для автоматического удаления контейнера при выходе из процесса. По умолчанию контейнеры не
        удаляются.
    </li>
</ul>
<p>
    Если вы хотите, чтобы контейнер работал после окончания сеанса, вам необходимо его «демонизировать»<br>
    -d запускает контейнер в фоновом режиме («демонизирует» его).
</p>
<pre>
    <code>
docker run --name daemon -d ubuntu /bin/sh -c "while true; do echo hello world; sleep 1; done"
    </code>
</pre>
<p>
    Давайте посмотрим, какие контейнеры у нас есть на данный момент:
</p>
<pre>
    <code>
docker ps -a
    </code>
</pre>
<ul>
    <li>docker ps – команда для перечисления контейнеров.</li>
    <li>-a показывает все контейнеры (без -a ps покажет только запущенные контейнеры).</li>
</ul>
<p>
    Примечание: второй контейнер (с интерактивной оболочкой) отсутствует, потому что мы устанавливаем параметр -rm, в
    результате чего этот контейнер автоматически удаляется после выполнения.
</p>
<p>
    Давайте проверим журналы и посмотрим, что делает контейнер-демон прямо сейчас:
</p>
<pre>
    <code>
docker logs -f daemon
    </code>
</pre>
<p>
    Теперь давайте остановим\запустим контейнер-демон:
</p>
<pre>
    <code>
docker stop daemon
docker start daemon
    </code>
</pre>
<p>
    Теперь остановим его и удалим все контейнеры вручную:
</p>
<pre>
    <code>
docker stop daemon
docker rm < your first container name >
docker rm daemon
    </code>
</pre>

<h2>Запись Dockerfile</h2>
<p>Чтобы создать свой образ, сперва вам нужно создать Dockerfile: это текстовый файл с инструкциями и аргументами.
    Краткое описание инструкций, которые мы собираемся использовать в примере:
</p>


<h2>Заметки</h2>
DockerHub -лежат все образы
<pre>
    <code>
docker run [image] скачать образ и запустить образ
docker images список образов
docker search [image name] показывает список подходящих по поиску образов,ищет на dockerHub
docker pull [image name] скачать образ
docker -it -p 1234:8080  [image]   //интерактивно p -перенаправление портов, - 8080 контейнер dockerPort,1234 - на локальном компе
docker -d -p 1234:8080  [image]   //в бекраунде p -перенаправление портов, - 8080 контейнер dockerPort,1234 - на локальном компе
docker rm  [container]   //delete container
docker rmi  [image]   //delete image

docker build -t test:v1 .  //создать образ test с тагом(-t) v1 локально(.)
docker exec -it [containerID] /bin/bash

docker commit dca8b8fe8685 test:v2 //сохранить изменения контейнера dca8b8fe8685(зайти итерактивно и что-то изменить) в образ test:v2
    </code>
</pre>
<h3>Docker Build</h3>
<p>
    Контейнер собирается из файла <b>Dockerfile</b>. Пример:
<pre>
    <code>
        FROM ubuntu:18.04
        MAINTAINER vitaliy ilinov <ilinov123@gmail.com>

        ENV DEBIAN_FRONTEND=noninteractive \
            ONE =1

        ARG PHP_VERSION=7.2

        RUN apt-get update && apt-get install

        COPY from/path /to/path/

        WORKDIR /var/www/app/

        CMD /to/path/entrypoint.sh
    </code>
</pre>

<ul>
    <li><b>FROM</b> – задать базовый образ</li>
    <li><b>MAINTAINER</b> – Владелец</li>
    <li><b>RUN</b> – выполнить команду в контейнере</li>
    <li><b>ENV</b> – задать переменную среды</li>
    <li><b>ARG</b> – Аргументы при билде,с дефолтным значением.</li>
    <li><b>COPY</b> – Копирует данные в контейнер</li>
    <li><b>WORKDIR</b> – установить рабочий каталог</li>
    <li><b>CMD</b> – установить исполняемый файл для контейнера</li>
</ul>
</p>
<p>
    Запуск построения контейнера происходит с помощью:
<pre>
    <code>
         docker build \
        --build-arg PHP_VERSION=$(PHP_VERSION) \
        --force-rm  \
        -t $(IMAGE_NAME) . \
     	--no-cache
    </code>
</pre>

<ul>
    <li><b>build-arg</b> – аргументы при билде контейнера</li>
    <li><b>t</b> – Тег билда</li>
    <li><b>force-rm</b> – Always remove intermediate containers</li>
    <li><b>--no-cache</b> – Do not use cache when building the image</li>
</ul>
</p>

<h3>Docker контейнер</h3>
<p>
    Контейнер собирается из файла <b>Dockerfile</b>. Пример:
<pre>
    <code>
        docker run -d \
        --name $(IMAGE_NAME) \
        -v ${PWD}:/var/www/app/ \
        -p 80:80 \
        $(IMAGE_NAME)
    </code>
     <code>
        docker exec -ti $(IMAGE_NAME) bash
    </code>
     <code>
       @docker logs $(IMAGE_NAME)
    </code>
</pre>

<ul>
    <li><b>t</b> – Allocate a pseudo-TTY</li>
    <li><b>i</b> – Keep STDIN open even if not attached</li>
    <li><b>d</b> – Run container in background and print container ID</li>
    <li><b>--name</b> – Имя контейнера</li>
    <li><b>p</b> –  Publish a container's port(s) to the host</li>
    <li><b>-v, --volume list </b> –  Bind mount a volume</li>
    <li><b>$(IMAGE_NAME)</b> – container name</li>
</ul>