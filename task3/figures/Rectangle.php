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
 * Класс прямоугольник
 * 
 * @category TestCase
 * @package  EffectiveTechnology
 * @author   Kudryashow <Jahma123@icloud.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Kudryashow/effective_group.git
 */
class Rectangle
{
    public static $args = 2;

    /**
     * Сonstructor
     *
     * @param number $width  Ширина прямоугольника
     * @param number $length Длина прямоугольника
     */
    public function __construct($width, $length)
    {
        $this->length = $length;
        $this->width = $width;
    }
    /**
     * Найти площадь
     *
     * @return number
     */
    public function area()
    {
        return $this->length * $this->width;
    }
    /**
     * Get view of rectangle
     *
     * @return array
     */
    public function getView()
    {
        return [
            'Figure' => "Rectangle",
            'Parameters' => [
                'length' => $this->length,
                'width' => $this->width
            ],
            'Area' => $this->area()
        ];
    }
}
