## Goal
Develop a program to manage the transactions of a bank account.

The transactions are: deposit money into the account, and withdraw from the account. 

We need to be able to print into the console the result.
## Requirement
You cannot change the signature of the public interface (the class AccountService).
## Code
	class AccountService {
      /**
       * Add an amount into the account.
       * Do not return any value
       * @param int $amount
       */
      public function deposit($amount)
      {
      }

      /**
       * Remove an amount from the account.
       * Do not return any value
       * @param int $amount
       */
      public function withdraw($amount)
      {
      }

      /**
       * Print the statements containing all the transactions in the console
       * Do not return any value
       */
      public function printStatements()
      {
      }
	}
##Acceptance test

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
## Tools

[Prophecy](https://github.com/phpspec/prophecy). Mocking library. 

### Example of Mock	
	/**
     * @test
     */
    public function shouldUseTheExternalCollaborator()
    {
        $myCollaboratorProphecy = $this->prophesize('Collaborator');
        /** @var Collaborator $collaborator */
        $collaborator = $myCollaboratorProphecy->reveal();
        $myClass = new MyClass($collaborator);
        $myClass->run();
        $myCollaboratorProphecy->collaborate()->shouldBeCalled();
    }
### Example of Stub    
    /**
     * @test
     */
    public function shouldReturnTheCollaboratorResponse()
    {
        $myCollaboratorProphecy = $this->prophesize('Collaborator');
        $collaboratorResponse = 'collaborator response';
        $myCollaboratorProphecy->collaborate()->willReturn($collaboratorResponse);
        /** @var Collaborator $collaborator */
        $collaborator = $myCollaboratorProphecy->reveal();
        $myClass = new MyClass($collaborator);
        $response = $myClass->run();
        $this->assertEquals($collaboratorResponse, $response);
    }