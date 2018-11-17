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

require 'vendor/autoload.php';
use Figures\Circle;
use Figures\Pyramid;
use Figures\Rectangle;

 
/**
 * Create a random figure
 *
 * @return array
 */
function mkFigure()
{
    $figures = [
        "Figures\Circle",
        "Figures\Pyramid",
        "Figures\Rectangle"
    ];
    $figureIndex = rand(0, count($figures) - 1);
    $figureName = $figures[$figureIndex];
    $argNum = $figureName::$args;
    $input = [];
    while ($argNum > 0) {
        $input[] = rand(1, 5);
        $argNum--;
    }
    $figure = new $figureName(...$input);
    return $figure;
}

/**
 * Create a list of random figures
 *
 * @param integer $limit size of list
 * 
 * @return array
 */
function mkFigureList($limit = 0) 
{
    $result = [];
    while ($limit > 0) {
        $result[] = mkFigure()->getView();
        $limit --;
    }
    return $result;
}
/**
 * Save to file 
 *
 * @param array    $figures array of figures to save
 * @param string   $path    path to file
 * @param function $view    data transition function || json_encode
 * 
 * @return void
 */
function save($figures, $path, $view = "json_encode")
{
    $data = $view($figures);
    $fp = fopen($path, 'w');
    fwrite($fp, $data);
    fclose($fp);
    return true;
}
/**
 * Get saved figures
 *
 * @param string $path Path to file
 * 
 * @return array
 */
function load($path)
{
    $content = file_get_contents($path);
    return json_decode($content, true);
}
/**
 * Sort array of figures by Area descendary
 *
 * @param array $figures figures array
 * 
 * @return array
 */
function sortFigures($figures)
{
    $srt = function ($a, $b) {
        if ($a['Area'] === $b['Area']) {
            return 0;
        }
        return ($a['Area'] < $b['Area']) ? 1 : -1;
    };
    usort($figures, $srt); 
    return $figures;
}
/**
 * Shows sorted collection
 *
 * @param string $path Path to collection
 * 
 * @return void
 */
function showCollection($path) 
{
    $figures = load($path);
    $sorted = sortFigures($figures);
    var_dump($sorted);
}
$path = __DIR__ . '/cache.json';
save(mkFigureList(3), $path);
showCollection($path);