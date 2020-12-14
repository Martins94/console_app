<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;


class ConsoleApp extends Command
{
    protected function configure()
    {
        $this
        ->setName('output_string_multiple')
        ->setDescription('outputs a string multiple times')
        ->addArgument('string', InputArgument::REQUIRED, 'The string to output.')
        ->addOption('times',2, InputOption::VALUE_REQUIRED, 'output string X times',2)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $string = $input->getArgument('string');

        $times = $input->getOption('times');

        for ($i = 0; $i < $times; $i++) { 
            $output->writeln($string. ' ');
        }

        return Command::SUCCESS;
    }

}
