<?php

/*
 * This file is part of Monsieur Biz' Better Admin plugin for Sylius.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusBetterAdminPlugin\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

final class ColorExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('monsieurbiz_better_admin_hex_to_rgb', [$this, 'hexToRgb']),
            new TwigFilter('monsieurbiz_better_admin_rgb_to_hex', [$this, 'rgbToHex']),
            new TwigFilter('monsieurbiz_better_admin_hex_to_rgba', [$this, 'hexToRgba']),
        ];
    }

    /**
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    public function hexToRgb(string $hex): array
    {
        $hex = str_replace('#', '', $hex);
        if (3 === \strlen($hex)) {
            $red = hexdec($hex[0] . $hex[0]);
            $green = hexdec($hex[1] . $hex[1]);
            $blue = hexdec($hex[2] . $hex[2]);
        } else {
            $red = hexdec($hex[0] . $hex[1]);
            $green = hexdec($hex[2] . $hex[3]);
            $blue = hexdec($hex[4] . $hex[5]);
        }

        return [$red, $green, $blue];
    }

    public function rgbToHex(int $red, int $green, int $blue): string
    {
        return \sprintf('#%02x%02x%02x', $red, $green, $blue);
    }

    public function hexToRgba(string $hex, float $alpha): string
    {
        $rgb = $this->hexToRgb($hex);

        return \sprintf('rgba(%d, %d, %d, %s)', $rgb[0], $rgb[1], $rgb[2], $alpha);
    }
}
