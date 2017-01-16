<?php

namespace Sylius\Bundle\ReportBundle\Doctrine\ORM;

interface OrderRepositoryInterface
{
    /**
     * @param array $configuration
     *
     * @return mixed
     */
    public function revenueBetweenDatesGroupByDate(array $configuration = []);

    /**
     * @param array $configuration
     *
     * @return mixed
     */
    public function ordersBetweenDatesGroupByDate(array $configuration = []);
}
