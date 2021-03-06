<?php

namespace PHPSpec2\Matcher;

use PHPSpec2\Stub;

class ShouldReturnMatcher implements MatcherInterface
{
    public function getAliases()
    {
        return array('should_return', 'shouldReturn');
    }

    public function match(Stub $stub, array $arguments)
    {
        return new Stub(
            $stub->getStubSubject()->andReturn($arguments[0]),
            $stub->getStubMatchers()
        );
    }
}
