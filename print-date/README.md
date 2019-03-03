# Goal
Be able to test printCurrentDate function.
# Code to test
    public function printCurrentDate()
    {
        echo date("Y-m-d H:i:s");
    }
# Learnings
How to build a Mock and Stub manually.

How to use Prophecy to generate the doubles.
## Tools
[Prophecy](https://github.com/phpspec/prophecy). Mocking library. 

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