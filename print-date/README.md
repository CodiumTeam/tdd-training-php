# Goal
Be able to test `printCurrentDate` function.

# Code to test
```php
public function printCurrentDate(): void
{
    echo date("Y-m-d H:i:s");
}
```

# Learnings

- How to build a Mock and Stub manually.
- How to use PHPUnit or Prophecy to generate the doubles.

## Tools

- [PHPUnit](https://phpunit.readthedocs.io/en/9.5/test-doubles.html). The Testing Framework.
- [Prophecy](https://github.com/phpspec/prophecy). Mocking library.

### Example of a Mock

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

    # Prophesize
    $myCollaboratorProphecy = $this->prophesize(Collaborator::class);
    /** @var Collaborator $collaborator */
    $collaborator = $myCollaboratorProphecy->reveal();
    $myClass = new MyClass($collaborator);
    
    $myClass->run();
    
    $myCollaboratorProphecy->collaborate()->shouldHaveBeCalled();
}
```

### Example of a Stub
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

    # Prophesize
    $myCollaboratorProphecy = $this->prophesize(Collaborator::class);
    $collaboratorResponse = 'collaborator response';
    $myCollaboratorProphecy->collaborate()->willReturn($collaboratorResponse);
    /** @var Collaborator $collaborator */
    $collaborator = $myCollaboratorProphecy->reveal();
    $myClass = new MyClass($collaborator);
    
    $response = $myClass->run();
    
    self::assertEquals($collaboratorResponse, $response);
}
```

## Authors
Luis Rovirosa [@luisrovirosa](https://www.twitter.com/luisrovirosa)

Jordi Anguela [@jordianguela](https://www.twitter.com/jordianguela)
