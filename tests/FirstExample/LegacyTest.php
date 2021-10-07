<?php

declare(strict_types=1);

namespace Refactoring\Tests\FirstExample;

use Refactoring\FirstExample\Legacy;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Refactoring\FirstExample\Legacy
 */
class LegacyTest extends TestCase
{
    public function testResult(): void
    {
        $invoices = [
            'customer' => 'BigCo',
            'performances' => [
                [
                    'playID' => 'hamlet',
                    'audience' => 55
                ],
                [
                    'playID' => 'as-like',
                    'audience' => 35
                ],
                [
                    'playID' => 'othello',
                    'audience' => 40
                ]
            ]
        ];
        $plays = [
            'hamlet' => [
                'name' => 'Hamlet',
                'type' => 'tragedia'
            ],
            'as-like' => [
                'name' => 'Jak Wam się podoba?',
                'type' => 'komedia'
            ],
            'othello' => [
                'name' => 'Otello',
                'type' => 'tragedia'
            ]
        ];
        $legacy = new Legacy();

        $this->assertSame(
            "Rachunek dla BigCo\n"
                . " Hamlet: 650,00 zł (liczba miejsc: 55)\n"
                . " Jak Wam się podoba?: 580,00 zł (liczba miejsc: 35)\n"
                . " Otello: 500,00 zł (liczba miejsc: 40)\n"
                . "Należność: 1 730,00 zł\n"
                . "Punkty promocyjne: 47\n",
            $legacy->statement($invoices, $plays)
        );
    }
}
