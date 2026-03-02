<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\UtilUuidGenerator\Dependency\External;

interface UtilUuidGeneratorToUuidGeneratorInterface
{
    public function generateUuid5FromObjectId(string $name): string;
}
