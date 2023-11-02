<?php

class CodeSmell
{
    public function HighSeverity($param){
        switch ($param) {
            case 0:
                doSomething();
                break;
            default: // Noncompliant: default clause should be the first or last one
                error();
                break;
            case 1:
                doSomethingElse();
                break;
        }
    }

    public function HighSeverity_v2($param_v2){
        switch ($param_v2) {
            case 0:
                doSomething_v2();
                break;
            default: // Noncompliant: default clause should be the first or last one
                error();
                break;
            case 1:
                doSomethingElse_v2();
                break;
        }
    }

    public function HighSeverity_v3($param_v3){
        switch ($param_v3) {
            case 0:
                doSomething_v3();
                break;
            default: // Noncompliant: default clause should be the first or last one
                error();
                break;
            case 1:
                doSomethingElse_v3();
                break;
        }
    }

    public function HighSeverity_v4($param_v4){
        switch ($param_v4) {
            case 0:
                doSomething_v3();
                break;
            default: // Noncompliant: default clause should be the first or last one
                error();
                break;
            case 1:
                doSomethingElse_v3();
                break;
        }
    }

    public function HighSeverity_v5($param){
        switch ($param) {
            case 0:
                doSomething();
                break;
            default: // Noncompliant: default clause should be the first or last one
                error();
                break;
            case 1:
                doSomethingElse();
                break;
        }
    }
}