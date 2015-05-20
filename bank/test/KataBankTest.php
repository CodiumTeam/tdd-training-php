<?php

namespace KataBank\Test;

use KataBank\AccountService;
use Prophecy\PhpUnit\ProphecyTestCase;

class KataBankTest extends ProphecyTestCase
{
    /** @test */
    public function should_print_statements_containing_all_transactions()
    {
        $this->markTestIncomplete('Not yet');
        $consoleProphecy = $this->prophesize('KataBank\Console');
        $console = $consoleProphecy->reveal();
        $account = new AccountService();
        $account->deposit(1000);
        $account->withdraw(100);
        $account->deposit(500);

        $account->printStatements();

        $consoleProphecy->printLine("DATE | AMOUNT | BALANCE")->shouldBeCalled();
        $consoleProphecy->printLine("10/04/2014 | 500 | 1400")->shouldBeCalled();
        $consoleProphecy->printLine("02/04/2014 | -100 | 900")->shouldBeCalled();
        $consoleProphecy->printLine("01/04/2014 | 1000 | 1000")->shouldBeCalled();
    }
}
