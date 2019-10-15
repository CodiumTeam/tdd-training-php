# User Registration kata

## Goal
Create the functionality using Unit tests and test doubles.

## Requirements
Part 1
- Validate that the user is persisted
- A userId is randomly generated

Part 2
- It cannot exist two users with the same email
- The password should meet security requirements
  - Have more than 8 characters
  - Contains an underscore
- Sends a confirmation email when the user is registered

## Remember
- Write a failing test
- Write the minimum amount of code to make it pass
- Try to refactor the code

### Example of Mock	
	/**
     * @test
     */
    public function shouldUseTheExternalCollaborator()
    {
        $myCollaboratorProphecy = $this->prophesize(Collaborator::class);
        /** @var Collaborator $collaborator */
        $collaborator = $myCollaboratorProphecy->reveal();
        $myClass = new MyClass($collaborator);
        
        $myClass->run();
        
        $myCollaboratorProphecy->collaborate()->shouldHaveBeCalled();
    }

### Example of Stub    
    /**
     * @test
     */
    public function shouldReturnTheCollaboratorResponse()
    {
        $myCollaboratorProphecy = $this->prophesize(Collaborator::class);
        $collaboratorResponse = 'collaborator response';
        $myCollaboratorProphecy->collaborate()->willReturn($collaboratorResponse);
        /** @var Collaborator $collaborator */
        $collaborator = $myCollaboratorProphecy->reveal();
        $myClass = new MyClass($collaborator);
        
        $response = $myClass->run();
        
        $this->assertEquals($collaboratorResponse, $response);
    }
    
## Authors
Luis Rovirosa [@luisrovirosa](https://www.twitter.com/luisrovirosa)

Jordi Anguela [@jordianguela](https://www.twitter.com/jordianguela)
