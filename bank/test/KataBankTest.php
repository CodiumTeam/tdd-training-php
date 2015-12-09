<?php

namespace KataBank\Test;

use KataBank\AccountService;

class KataBankTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_print_statements_containing_all_transactions()
    {
        $this->markTestIncomplete('Not yet');
        $consoleProphecy = $this->prophesize('KataBank\Console');
        $account = new AccountService($consoleProphecy->reveal());
        $account->deposit(1000);
        $account->withdraw(100);
        $account->deposit(500);

        $account->printStatements();

        $consoleProphecy->printLine("DATE | AMOUNT | BALANCE")->shouldBeCalled();
        $consoleProphecy->printLine("10/04/2014 | 500 | 1400")->shouldBeCalled();
        $consoleProphecy->printLine("02/04/2014 | -100 | 900")->shouldBeCalled();
        $consoleProphecy->printLine("01/04/2014 | 1000 | 1000")->shouldBeCalled();
    }

    /**
     * Creates a prophecy of a Date class that returns
     * the dates in order 01/04/2014, 02/04/2014, 10/04/2014
     * @return \Prophecy\Prophecy\ObjectProphecy
     */
    private function dateProphecy()
    {
        $dateProphecy = $this->prophesize('KataBank\Date');
        $dateProphecy->printLine()->willReturn(
            '01/04/2014',
            '02/04/2014',
            '10/04/2014'
        );

        return $dateProphecy;
    }
}
