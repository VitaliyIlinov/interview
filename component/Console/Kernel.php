<?php

namespace component\Console;

use app\contracts\Debug\ExceptionHandler;
use app\Core\Application;
use app\Exceptions\FatalThrowableError;
use app\helpers\Arr;
use app\helpers\Finder\Finder;
use component\Console\Application as ArtisanApp;
use component\Console\Input\InputInterface;
use component\Console\Output\OutputInterface;
use component\Contracts\Console\Kernel as KernelContract;
use Exception;
use ReflectionClass;
use Throwable;

class Kernel implements KernelContract
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * The Artisan application instance.
     *
     * @var ArtisanApp
     */
    protected $artisan;

    /**
     * Indicates if facade aliases are enabled for the console.
     *
     * @var bool
     */
    private $aliases = true;

    /**
     * Kernel constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param InputInterface       $input
     * @param OutputInterface|null $output
     * @return int
     */
    public function handle(InputInterface $input, OutputInterface $output = null)
    {
        try {
            $this->app->boot();
            $this->commands();
            return $this->getArtisan()->run($input, $output);
        } catch (\Exception $e) {
            $this->reportException($e);

            $this->renderException($output, $e);
        } catch (Throwable $e) {
            $e = new FatalThrowableError($e);

            $this->reportException($e);

            $this->renderException($output, $e);

            return 1;
        }
    }

    /**
     * Report the exception to the exception handler.
     *
     * @param  Exception  $e
     * @return void
     */
    protected function reportException(Exception $e)
    {
        $this->app[ExceptionHandler::class]->report($e);
    }
    /**
     * Render the given exception.
     *
     * @param  OutputInterface  $output
     * @param  Exception  $e
     * @return void
     */
    protected function renderException($output, Exception $e)
    {
        $this->app[ExceptionHandler::class]->renderForConsole($output, $e);
    }
    /**
     * Get the Artisan application instance.
     *
     * @return ArtisanApp
     */
    protected function getArtisan()
    {
        if (is_null($this->artisan)) {
            return $this->artisan = (new ArtisanApp($this->app, $this->app->make('event')));
        }

        return $this->artisan;
    }

    /**
     * Register all of the commands in the given directory.
     *
     * @param array|string $paths
     * @return void
     */
    protected function load($paths)
    {
        $paths = array_unique(Arr::wrap($paths));

        $paths = array_filter($paths, function ($path) {
            return is_dir($path);
        });

        if (empty($paths)) {
            return;
        }

        foreach ((new Finder())->in($paths)->files() as $command) {
            $command = 'app' . str_replace(
                    [$this->app->getBasePath(), '/', '.php'],
                    ['', '\\', ''],
                    $command->getPathname()
                );
            if (is_subclass_of($command, Command::class) &&
                !(new ReflectionClass($command))->isAbstract()) {
                ArtisanApp::starting(function (ArtisanApp $artisan) use ($command) {
                    $artisan->resolve($command);
                });
            }
        }
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        //
    }
}