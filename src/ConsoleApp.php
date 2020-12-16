<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class ConsoleApp extends Command
{
    protected function configure()
    {
        $this
        ->setName('set_params')
        ->setDescription('setting your params')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
	$helper = $this->getHelper('question');
        
	$question = new Question('Введите ваше имя: ');
	$userName = $helper->ask($input, $output, $question);
	
	$question = new Question('Введите ваш возраст: ');
        $age = $helper->ask($input, $output, $question);
	
	$question = new ChoiceQuestion(
	 'Выберите пол: ',
	 ['М', 'Ж'],
	 0
	);
	$gender = $helper->ask($input, $output, $question);
	
        $output->writeln('Здраствуйте, '. $userName . '. Ваш возраст: '. $age . '. Ваш пол: '. $gender);

        return Command::SUCCESS;

    }
}
