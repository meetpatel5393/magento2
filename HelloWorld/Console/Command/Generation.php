<?php
namespace Ccc\Helloworld\Console\Command;

use \Symfony\Component\Console\Command\Command;
use \Symfony\Component\Console\Input\InputInterface;
use \Symfony\Component\Console\Output\OutputInterface;

class Generation extends Command
{
    protected function configure(){
        $this->setName('generation:clean')->setDescription('Clean Generation Folder - Meetk');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {   
        system("rmdir -r generated/code/Ccc");
        $output->writeln('Generation Folder Clean Successfully.');
    }
}