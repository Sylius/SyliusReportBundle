<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\ReportBundle\Form\Type\Renderer;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Bundle\ReportBundle\Form\Type\Renderer\TableConfigurationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilder;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
final class TableConfigurationTypeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(TableConfigurationType::class);
    }

    public function it_should_be_abstract_type_object()
    {
        $this->shouldHaveType(AbstractType::class);
    }

    public function it_builds_form_with_template_choice(FormBuilder $builder)
    {
        $builder->add('template', ChoiceType::class, Argument::any())->willReturn($builder);

        $this->buildForm($builder, []);
    }
}
