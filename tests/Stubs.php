<?php

namespace SpotOption\Tests;

class Stubs
{
    protected static function getStub($file)
    {
        return file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'stubs'.DIRECTORY_SEPARATOR.$file);
    }

    public static function successfulCountryView()
    {
        return static::getStub('successfulCountryView.xml');
    }

    public static function successfulCustomerAdd()
    {
        return static::getStub('successfulCustomerAdd.xml');
    }

    public static function failedCustomerAdd_EmailAlreadyExists()
    {
        return static::getStub('failedCustomerAdd-EmailAlreadyExists.xml');
    }
}
