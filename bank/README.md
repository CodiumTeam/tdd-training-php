## Goal

Develop a simple bank application with the following features:

- Deposit into an Account
- Withdraw from an Account
- Print a bank statement to the console

## Starting point and constraints

1. Start with a class with the following structure:

```php
final class AccountService 
{
  public function deposit(int $amount): void;

  public function withdraw(int $amount): void;

  public function printStatements(): void;
}
```

2. You are not allowed to add any other public method to this class
3. Use strings and integers for dates and amounts (keep it simple)
4. Don't worry about spacing in the statement printed on the console

## Acceptance test

```
Given a client makes a deposit of 1000 on 20-10-2021
And a withdrawal of 100 on 22-10-2021
And a deposit of 500 on 21-10-2021
When she prints her bank statement
Then she would see:
DATE       | AMOUNT  | BALANCE
20-10-2021 |  500.00 | 1400.00
21-10-2021 | -100.00 |  900.00
22-10-2021 | 1000.00 | 1000.00
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
    
    self::assertEquals($collaboratorResponse, $response);
}
```

## Original

Original idea from Sandro Mancuso: https://github.com/sandromancuso/Bank-kata/
