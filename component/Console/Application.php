<?php

namespace component\Console;

use app\Core\Application as MainApp;
use app\Events\Dispatcher;
use Closure;
use component\Console\Commands\ListCommand;
use component\Console\Events\ArtisanStarting;
use component\Console\Input\InputInterface;
use component\Console\Output\OutputInterface;
use Exception;
use LogicException;

class Application
{
    /**
     * @var MainApp
     */
    private $app;

    /**
     * The Event Dispatcher.
     *
     * @var Dispatcher
     */
    protected $events;

    private $commands = [];

    /**
     * The console application bootstrappers.
     *
     * @var array
     */
    protected static $bootstrappers = [];

    /**
     * @var bool
     */
    private $initialized;

    /**
     * Application constructor.
     *
     * @param MainApp    $app
     * @param Dispatcher $events
     */
    public function __construct(MainApp $app, Dispatcher $events)
    {
        $this->app = $app;
        $this->events = $events;
        $this->events->dispatch(new ArtisanStarting($this));
        $this->bootstrap();
    }

    /**
     * Register a console "starting" bootstrapper.
     *
     * @param Closure $callback
     * @return void
     */
    public static function starting(Closure $callback)
    {
        static::$bootstrappers[] = $callback;
    }

    /**
     * Add a command, resolving through the application.
     *
     * @param string $command
     * @return Command
     */
    public function resolve($command)
    {
        return $this->add($this->app->make($command));
    }

    /**
     * Add a command to the console.
     *
     * @param Command $command
     * @return Command
     */
    private function add(Command $command)
    {
        $command->setApp($this->app);

        $this->init();

        if (!$command->getName()) {
            throw new LogicException(sprintf('The command defined in "%s" cannot have an empty name.',
                \get_class($command)));
        }
        return $this->commands[$command->getName()] = $command;
    }

    private function init()
    {
        if ($this->initialized) {
            return;
        }
        $this->initialized = true;
        foreach ($this->getDefaultCommands() as $command) {
            $this->add($command);
        }
    }

    /**
     * Gets the default commands that should always be available.
     *
     * @return Command[] An array of default Command instances
     */
    protected function getDefaultCommands()
    {
        return [new ListCommand()];
    }

    /**
     * Bootstrap the console application.
     *
     * @return void
     */
    protected function bootstrap()
    {
        foreach (static::$bootstrappers as $bootstrapper) {
            $bootstrapper($this);
        }
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     * @return int
     */
    public function run(InputInterface $input, OutputInterface $output)
    {
        $commandName = $this->getCommandName($input);

        $this->events->dispatch(
            new Events\CommandStarting($commandName, $input, $output)
        );

        $exitCode = $this->doRun($input, $output);

        $this->events->dispatch(
            new Events\CommandFinished($commandName, $input, $output, $exitCode)
        );

        return $exitCode;
    }

    private function doRun(InputInterface $input, OutputInterface $output)
    {
        return 1;
    }

    /**
     * Gets the name of the command based on input.
     *
     * @return string|null
     */
    protected function getCommandName(InputInterface $input)
    {
        return $input->getFirstArgument();
    }

    /**
     * Renders a caught exception.
     *
     * @param Exception       $e
     * @param OutputInterface $output
     */
    public function renderException(Exception $e, OutputInterface $output)
    {
        $output->writeln('');

        $output->writeln($e->getMessage());

    }
}