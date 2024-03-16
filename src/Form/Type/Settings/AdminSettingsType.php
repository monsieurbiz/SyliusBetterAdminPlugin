<?php

/*
 * This file is part of Monsieur Biz's  for Sylius.
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusBetterAdminPlugin\Form\Type\Settings;

use MonsieurBiz\SyliusMediaManagerPlugin\Form\Type\ImageType;
use MonsieurBiz\SyliusSettingsPlugin\Form\AbstractSettingsType;
use MonsieurBiz\SyliusSettingsPlugin\Form\SettingsTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class AdminSettingsType extends AbstractSettingsType implements SettingsTypeInterface
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameters)
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->addWithDefaultCheckbox(
            $builder,
            'color',
            ColorType::class,
            [
                'label' => 'monsieurbiz_better_admin.form.color',
                'help' => 'monsieurbiz_better_admin.form.color_help',
                'required' => false,
            ]
        );
        $this->addWithDefaultCheckbox(
            $builder,
            'circular_icon_color',
            ColorType::class,
            [
                'label' => 'monsieurbiz_better_admin.form.circular_icon_color',
                'help' => 'monsieurbiz_better_admin.form.circular_icon_color_help',
                'required' => false,
            ]
        );
        $this->addWithDefaultCheckbox(
            $builder,
            'logo',
            ImageType::class,
            [
                'label' => 'monsieurbiz_better_admin.form.logo',
                'help' => 'monsieurbiz_better_admin.form.logo_help',
                'required' => false,
            ]
        );
        $this->addWithDefaultCheckbox(
            $builder,
            'logo_dark',
            ImageType::class,
            [
                'label' => 'monsieurbiz_better_admin.form.logo_dark',
                'help' => 'monsieurbiz_better_admin.form.logo_dark_help',
                'required' => false,
            ]
        );
        $this->addWithDefaultCheckbox(
            $builder,
            'custom_css',
            TextareaType::class,
            [
                'label' => 'monsieurbiz_better_admin.form.custom_css',
                'help' => 'monsieurbiz_better_admin.form.custom_css_help',
                'required' => false,
            ]
        );
    }
}