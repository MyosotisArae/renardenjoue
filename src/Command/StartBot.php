<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Service\ServiceDiscord;

class StartBot extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'bot:run';

    private $discord;

    public function __construct(ServiceDiscord $discord)
    {
        parent::__construct();
        $this->discord = $discord;	
    }

    protected function configure(): void
    {
	    $this->setDescription("Notre test")
             ->setHelp("de l'aide ?");
            //  ->addArgument("unArg", InputArgument::REQUIRED,"requis");
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
	    //$output->writeln(["fct execute","bla"]);
        $this->discord->slashOn();
        $this->discord->discordOn();
        $this->discord->runLoop();
        // ... put here the code to create the user

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))
        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;
    }
}
?>
