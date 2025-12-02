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
use Twig\TwigFunction;

final class FileExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('is_svg_image', [$this, 'isSvgImage']),
        ];
    }

    public function isSvgImage(?string $path): bool
    {
        if (null === $path) {
            return false;
        }

        return 'svg' === pathinfo($path, \PATHINFO_EXTENSION);
    }
}
