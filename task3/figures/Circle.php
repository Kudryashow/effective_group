<?php

/**
 * Figures
 * 
 * PHP version 7.2.10.
 * 
 * @category TestCase
 * @package  EffectiveTechnology
 * @author   Kudryashow <Jahma123@icloud.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Kudryashow/effective_group.git
 */

namespace Figures;
/**
 * Класс окружность
 * 
 * @category TestCase
 * @package  EffectiveTechnology
 * @author   Kudryashow <Jahma123@icloud.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Kudryashow/effective_group.git
 */
class Circle
{
    public static $args = 1;

    /**
     * Сonstructor
     *
     * @param number $radius Радиус окружности
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }   
    /**
     * Найти площадь
     *
     * @return number
     */
    public function area()
    {
        $pi = 3.14;
        return $pi * $this->radius ** 2;
    }
    /**
     * Get view of object
     *
     * @return array
     */
    public function getView()
    {
        return [
            'Figure' => "Circle",
            'Parameters' => [
                'radius' => $this->radius,
            ],
            'Area' => $this->area()
        ];
    }
}
