<?php

declare(strict_types=1);


namespace ArtyrYamaliev\ComposerPackage;


class Generation
{
    private const SILENT_GENERATION_START = 1925;
    private const SILENT_GENERATION_END = 1944;

    private const BABY_BOOMER_GENERATION_START = 1944;
    private const BABY_BOOMER_GENERATION_END = 1967;

    private const X_GENERATION_START = 1967;
    private const X_GENERATION_END = 1984;

    private const MILLENNIAL_GENERATION_START = 1984;
    private const MILLENNIAL_GENERATION_END = 2000;

    private const Z_GENERATION_START = 2000;
    private const Z_GENERATION_END = 2011;

    private const ALPHA_GENERATION_START = 2011;

    public function getNameByYear(int $year): string
    {
        if ($year >= self::SILENT_GENERATION_START && $year <= self::SILENT_GENERATION_END) {
            return 'Молчаливое поколение';
        } elseif ($year >= self::BABY_BOOMER_GENERATION_START && $year <= self::BABY_BOOMER_GENERATION_END) {
            return 'Поколение бэби-бумеров';
        } elseif ($year >= self::X_GENERATION_START && $year <= self::X_GENERATION_END) {
            return 'Поколение Х';
        } elseif ($year >= self::MILLENNIAL_GENERATION_START && $year <= self::MILLENNIAL_GENERATION_END) {
            return 'Поколение Y (миллениалы)';
        } elseif ($year >= self::Z_GENERATION_START && $year <= self::Z_GENERATION_END) {
            return 'Поколение Z (зуммеры)';
        } elseif ($year >= self::ALPHA_GENERATION_START && $year <= (int)date("Y")) {
            return 'Поколение Альфа';
        } else {
            return 'Неверный год';
        }
    }
}
