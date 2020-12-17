<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
<<<<<<< HEAD

=======
use Symfony\Component\Console\Input\InputOption;
>>>>>>> command/second


class ConsoleApp extends Command
{
    protected function configure()
    {
        $this
<<<<<<< HEAD
        ->setName('app_say')
        ->setDescription('output current argument')
        ->addArgument('string', InputArgument::REQUIRED, 'The string to convert.')
=======
        ->setName('output_string_multiple')
        ->setDescription('outputs a string multiple times')
        ->addArgument('string', InputArgument::REQUIRED, 'The string to output.')
        ->addOption('times',2, InputOption::VALUE_REQUIRED, 'output string X times',2)
>>>>>>> command/second
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');

<<<<<<< HEAD
        $output->writeln('Привет '.$string);

        return Command::SUCCESS;

=======
        $times = $input->getOption('times');

        for ($i = 0; $i < $times; $i++) { 
            $output->writeln($string. ' ');
        }

        return Command::SUCCESS;
>>>>>>> command/second
    }

}
