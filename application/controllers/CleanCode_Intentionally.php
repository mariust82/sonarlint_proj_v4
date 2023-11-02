<?php

class CleanCode_Intentionally
{


    #Clean code attribute - Intentionality; Software Quality - Reliability; Severity - High
    public static function foo()
    {
        #Bug - Reliability - Intentionality rule - high severity
        if ($this->name != NULL) {
            // ...
        }
    }

    #Clean code attribute - Intentionality; Software Quality - Maintability; Severity - Medium
    protected function constantsTest()
    {
        define('CONSTANT_VALUE', 'old value');
        define('SCRIPT_DEBUG', 1);
        // Noncompliant, tries to redefine constant defined 2 lines above
        define('CONSTANT_VALUE', 'intended value');
    }

    #Clean code attribute - Intentionality; Software Quality - Maintability; Severity - Medium
    protected function constantsTest_v2()
    {
        define('CONSTANT_VALUE', 'old value');
        define('SCRIPT_DEBUG', 1);
        // Noncompliant, tries to redefine constant defined 2 lines above
        define('CONSTANT_VALUE', 'intended value');
    }

    #Clean code attribute - Intentionality; Software Quality - Maintability; Severity - Medium
    protected function constantsTest_v3()
    {
        define('CONSTANT_VALUE_v3', 'old value');
        define('SCRIPT_DEBUG_v3', 1);
        // Noncompliant, tries to redefine constant defined 2 lines above
        define('CONSTANT_VALUE_v3', 'intended value');
    }

    #Clean code attribute - Intentionality; Software Quality - Reliability; Severity - High
    public static function foo_v1()
    {
        #Bug - Reliability - Intentionality rule - high severity
        if ($this->name != NULL) {
            // ...
        }
    }

    #Clean code attribute - Intentionality; Software Quality - Maintability; Severity - Medium
    protected function constantsTest_v1()
    {
        define('CONSTANT_VALUE', 'old value');
        define('SCRIPT_DEBUG', 1);
        // Noncompliant, tries to redefine constant defined 2 lines above
        define('CONSTANT_VALUE', 'intended value');
    }

}