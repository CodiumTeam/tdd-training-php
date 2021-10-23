## Goal

Develop a program to manage the transactions of a bank account.

The transactions are: deposit money into the account, and withdraw from the account.

We need to be able to print into the console the result.

## Requirement

You cannot change the signature of the public interface (the class AccountService). This means:

- You cannot change the signature of the existing public methods
- You cannot add new public methods

## Code

```php
final class AccountService 
{
  public function deposit(int $amount): void {}

  public function withdraw(int $amount): void {}

  public function printStatements(): void {}
}
```

## Acceptance test

```
Given a client makes a deposit of 1000 on 10-01-2012  
And a deposit of 2000 on 13-01-2012  
And a withdrawal of 500 on 14-01-2012  
When she prints her bank statement  
Then she would see  
date       || credit   || debit    || balance
14/01/2012 ||          || 500.00   || 2500.00
13/01/2012 || 2000.00  ||          || 3000.00
10/01/2012 || 1000.00  ||          || 1000.00
```

## Tools

[PHPUnit](https://github.com/sebastianbergmann/phpunit). The PHP Unit Testing framework.
[Prophecy](https://github.com/phpspec/prophecy). Mocking library.

### Example of Mock

```php
    /** @test */
    public function should_use_the_external_collaborator(): void
    {
        # PHPUnit
        $collaborator = $this->createMock(Collaborator::class);
        $collaborator->expects(self::once())->method('collaborate');
        $myClass = new MyClass($collaborator);
        $myClass->run();

        # ------------------------------------------------
        
        $myCollaboratorProphecy = $this->prophesize('Collaborator');
        /** @var Collaborator $collaborator */
        $collaborator = $myCollaboratorProphecy->reveal();
        $myClass = new MyClass($collaborator);
        $myClass->run();
        $myCollaboratorProphecy->collaborate()->shouldBeCalled();
    }
```

### Example of Stub

```php
    /** @test */
    public function should_return_the_collaborator_response(): void
    {
        # PHPUnit
        $collaborator = $this->createStub(Collaborator::class);
        $collaboratorResponse = 'collaborator response';
        $collaborator->method('collaborate')->willReturn($collaboratorResponse);
        $myClass = new MyClass($collaborator);
        
        $response = $myClass->run();
        
        self::assertEquals($collaboratorResponse, $response);
    
        # ------------------------------------------------

        $myCollaboratorProphecy = $this->prophesize('Collaborator');
        $collaboratorResponse = 'collaborator response';
        $myCollaboratorProphecy->collaborate()->willReturn($collaboratorResponse);
        /** @var Collaborator $collaborator */
        $collaborator = $myCollaboratorProphecy->reveal();
        $myClass = new MyClass($collaborator);
        $response = $myClass->run();
        $this->assertEquals($collaboratorResponse, $response);
    }
```

## Original

Original idea from Sandro Mancuso: https://github.com/sandromancuso/Bank-kata/
