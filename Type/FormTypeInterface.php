<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Type;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

interface FormTypeInterface
{
    function buildForm(FormBuilder $builder, array $options);

    function buildView(FormView $view, FormInterface $form);

    function buildViewBottomUp(FormView $view, FormInterface $form);

    function createBuilder($name, array $options);

    function getDefaultOptions(array $options);

    function getParent(array $options);

    function getName();
}