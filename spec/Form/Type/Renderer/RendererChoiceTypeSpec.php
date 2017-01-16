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
use Sylius\Bundle\ReportBundle\Form\Type\Renderer\RendererChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
final class RendererChoiceTypeSpec extends ObjectBehavior
{
    public function let()
    {
        $choices = [
            'table' => 'Table renderer',
            'chart' => 'Chart renderer',
        ];

        $this->beConstructedWith($choices);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(RendererChoiceType::class);
    }

    public function it_should_be_abstract_type_object()
    {
        $this->shouldHaveType(AbstractType::class);
    }

    public function it_sets_default_options(OptionsResolver $resolver)
    {
        $choices = [
            'table' => 'Table renderer',
            'chart' => 'Chart renderer',
        ];

        $resolver->setDefaults(['choices' => $choices])->shouldBeCalled();

        $this->configureOptions($resolver);
    }

    public function it_has_parent()
    {
        $this->getParent()->shouldReturn(ChoiceType::class);
    }
}
