<?php
/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\UtilUuidGenerator;

use Spryker\Service\Kernel\AbstractBundleDependencyProvider;
use Spryker\Service\Kernel\Container;
use Spryker\Service\UtilUuidGenerator\Dependency\External\UtilUuidGeneratorToRamseyUuid5Adapter;

class UtilUuidGeneratorDependencyProvider extends AbstractBundleDependencyProvider
{
    public const UUID5_GENERATOR = 'UUID5_GENERATOR';

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function provideServiceDependencies(Container $container): Container
    {
        $container = parent::provideServiceDependencies($container);
        $container = $this->addUuidGenerator($container);

        return $container;
    }

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    protected function addUuidGenerator(Container $container): Container
    {
        $container[static::UUID5_GENERATOR] = function () {
            return new UtilUuidGeneratorToRamseyUuid5Adapter();
        };

        return $container;
    }
}
