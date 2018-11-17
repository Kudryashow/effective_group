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
 * Класс пирамида
 * 
 * @category TestCase
 * @package  EffectiveTechnology
 * @author   Kudryashow <Jahma123@icloud.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Kudryashow/effective_group.git
 */

class Pyramid
{
    public static $args = 3;

    /**
     * Constructor
     *
     * @param number $baseLength Длина основания
     * @param number $baseWidth  Ширина основания
     * @param number $height     Высота пирамиды
     */
    public function __construct($baseLength, $baseWidth, $height)
    {
        $this->baseLength = $baseLength;
        $this->baseWidth = $baseWidth;
        $this->height = $height;
    }

    /**
     * Возвращает площадь основания пирамиды
     *
     * @return number
     */
    public function baseArea()
    {
        return $this->baseLength * $this->baseWidth;
    }

    /**
     * Возвращает площадь поверхности пирамиды
     *
     * @return number
     */
    public function area()
    {
        $l = $this->baseLength;
        $w = $this->baseWidth;
        $h = $this->height;
        $result = ($l * $w) + 
        ($l * sqrt(($w / 2)**2 + $h ** 2)) + 
        $w * sqrt(($l / 2) ** 2 + $h ** 2);
        return round($result, 2);
    }
    /**
     * Get view of object
     *
     * @return array
     */
    public function getView()
    {
        return [
            'Figure' => "Pyramid",
            'Parameters' => [
                'length' => $this->baseLength,
                'width' => $this->baseWidth,
                'height' => $this->height
            ],
            'Area' => $this->area()
        ];
    }
}

