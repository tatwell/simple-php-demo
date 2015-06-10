<?php

class TestExercise extends UnitTestCase {
    function testDoubleDollarSignVariable() {
        $id = 1;
        $var = "foo${id}";
        $$var = 'bar';
        $this->assertEqual($foo1, 'bar');
    }

    function testInnerFunctionScoping() {
        function outer_no_args() {
            $outer = 'no args, ma!';

            function inner() {
                return "hello from inner";
            }

            return $outer;
        }

        # SimpleTest can't catch fatal errors. See http://stackoverflow.com/a/612785/1093087
        #$this->expectError(new PatternExpectation("/undefined function/i"));
        #inner();

        $this->assertEqual(outer_no_args('hello', 'world'), 'no args, ma!');
        $this->assertEqual(inner(), 'hello from inner');
    }

    function testSimpleTestExpectError() {
        $this->expectError(new PatternExpectation("/undefined function/i"));
        trigger_error('undefined function');
    }

    function testAbstractClassInheritance() {
        $counter = new ConcreteClass;
        $this->assertEqual($counter->counts(['a', 'b', 'c']), 3);
    }
}

abstract class AbstractClass {
    abstract function counts(array $params=NULL);
}

class ConcreteClass extends AbstractClass {
    # Note: must assign default NULL else throws FATAL error:
    # Declaration of ConcreteClass::counts() must be compatible with AbstractClass
    public function counts(array $params=NULL) {
        return count($params);
    }
}
