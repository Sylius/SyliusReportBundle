<?php

namespace Sylius\Bundle\ReportBundle\Doctrine\ORM;

interface UserRepositoryInterface
{
    /**
     * @param array $configuration
     *
     * @return mixed
     */
    public function getRegistrationStatistic(array $configuration = []);
}
