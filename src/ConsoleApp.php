<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;



class ConsoleApp extends Command
{
    protected function configure()
    {
        $this
        ->setName('app_say')
        ->setDescription('output current argument')
        ->addArgument('string', InputArgument::REQUIRED, 'The string to convert.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');

        $output->writeln('Привет '.$string);

        return Command::SUCCESS;

    }

}
