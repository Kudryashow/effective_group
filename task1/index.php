<?php
/**
 * Fibbonacci numbers
 * 
 * PHP version 7.2.10.
 * 
 * @category TestCase
 * @package  EffectiveTechnology
 * @author   Kudryashow <Jahma123@icloud.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Kudryashow/effective_group.git
 */

/**
 * Рассчет чисел
 * 
 * @param number $limit    размер генерации
 * @param number $current  текущее число
 * @param number $previous предыдущее число
 * @param number $result   аккумулятор последовательности
 * 
 * @return string
 */
function fibonacci($limit, $current = 1, $previous = 0, $result = [0, 1]) 
{
    if ($limit - 1 === 1) {
        return implode(' ', $result);
    }
    $next = $previous + $current;
    $result[] = $next;
    return fibonacci($limit - 1, $next, $current, $result);
}

echo fibonacci(64);