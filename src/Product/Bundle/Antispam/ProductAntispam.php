<?php
namespace Product\Bundle\Antispam;

/**
 * Created by PhpStorm.
 * User: TOSH
 * Date: 15/01/2016
 * Time: 15:23
 */
class ProductAntispam
{
    /**
     * Vérifie si le texte est un spam ou non
     *
     * @param string $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < 50;
    }

}