<?php

use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class ExampleTest extends TestCase
{
    use MatchesSnapshots;

    public function test_it_matches_a_string()
    {
        $this->assertMatchesSnapshot('foo');
    }

    public function test_it_matches_json()
    {
        $this->assertMatchesJsonSnapshot('{"foo":"bar"}');
    }

    public function test_it_matches_xml()
    {
        $this->assertMatchesXmlSnapshot('<foo>Bar</foo>');
    }
}
