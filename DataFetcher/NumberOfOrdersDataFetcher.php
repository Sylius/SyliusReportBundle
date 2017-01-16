<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ReportBundle\DataFetcher;

use Sylius\Bundle\ReportBundle\Doctrine\ORM\OrderRepositoryInterface;
use Sylius\Bundle\ReportBundle\Form\Type\DataFetcher\NumberOfOrdersType;

/**
 * @author Łukasz Chruściel <lukasz.chrusciel@lakion.com>
 */
class NumberOfOrdersDataFetcher extends TimePeriod
{
    /**
     * @var OrderRepositoryInterface
     */
    protected $orderRepository;

    /**
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * {@inheritdoc}
     */
    protected function getData(array $configuration = [])
    {
        return $this->orderRepository->ordersBetweenDatesGroupByDate($configuration);
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return NumberOfOrdersType::class;
    }
}
