<?php

declare(strict_types=1);

namespace Refactoring\FirstExample;

use LogicException;

class Legacy
{
    public function statement(array $invoice, array $plays): string
    {
        $totalAmount = 0;
        $volumeCredits = 0;
        $result = "Rachunek dla {$invoice['customer']}\n";
        $format = function (float $totalAmount) {
            return number_format($totalAmount, 2, ',', ' ') . ' zł';
        };
        foreach ($invoice['performances'] as $performance) {
            $play = $plays[$performance['playID']];
            $thisAmount = 0;

            switch ($play['type']) {
                case 'tragedia':
                    $thisAmount = 40000;
                    if ($performance['audience'] > 30) {
                        $thisAmount += 1000 * ($performance['audience'] - 30);
                    }
                    break;
                case 'komedia':
                    $thisAmount = 30000;
                    if ($performance['audience'] > 20) {
                        $thisAmount += 10000 + 500 * ($performance['audience'] - 20);
                    }
                    $thisAmount += 300 * $performance['audience'];
                    break;
                default:
                    throw new LogicException("Nieznany typ przedstawienia: {$play['type']}");
            }

            // Przyznanie punktów promocyjnych
            $volumeCredits += max($performance['audience'] - 30, 0);

            // Przyznanie dodatkowego punktu promocyjnego za każdych 5 widzów komedii
            if ($play['type'] === 'komedia') {
                $volumeCredits += floor($performance['audience'] / 5);
            }

            // Utworzenie wiersza rachunku
            $result .= " {$play['name']}: {$format($thisAmount/100)} (liczba miejsc: {$performance['audience']})\n";
            $totalAmount += $thisAmount;
        }

        $result .= "Należność: {$format($totalAmount/100)}\n";
        $result .= "Punkty promocyjne: {$volumeCredits}\n";

        return $result;
    }
}
