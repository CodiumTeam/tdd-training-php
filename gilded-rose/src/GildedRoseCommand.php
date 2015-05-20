<?php


namespace GildedRose;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GildedRoseCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('gilded:run')
            ->setDescription('Gilded Rose')
            ->addArgument(
                'days',
                InputArgument::REQUIRED,
                'How many days?'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $items = array(
            new Item('+5 Dexterity Vest', 10, 20),
            new Item('Aged Brie', 2, 0),
            new Item('Elixir of the Mongoose', 5, 7),
            new Item('Sulfuras, Hand of Ragnaros', 0, 80),
            new Item('Sulfuras, Hand of Ragnaros', -1, 80),
            new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
            new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
            new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
            // this conjured item does not work properly yet
            new Item('Conjured Mana Cake', 3, 6)
        );
        $app = new GildedRose($items);
        $days = (int)$input->getArgument('days');
        for ($i = 0; $i < $days; $i++) {
            $output->writeln("-------- day $i --------");
            $output->writeln("name, sellIn, quality");
            foreach ($items as $item) {
                $output->write($item . "\n");
            }
            $app->update_quality();
        }
    }
}
