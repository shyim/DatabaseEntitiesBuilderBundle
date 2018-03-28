<?php declare(strict_types=1);

namespace Shyim\DatabaseEntitiesBuilderBundle;

use Shyim\DatabaseEntitiesBuilderBundle\DependencyInjection\GeneratorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class DatabaseEntitiesBuilderBundle
 *
 * @author Soner Sayakci <shyim@posteo.de>
 */
class DatabaseEntitiesBuilderBundle extends Bundle
{
    /**
     * @return GeneratorExtension
     * @author Soner Sayakci <shyim@posteo.de>
     */
    public function getContainerExtension()
    {
        return new GeneratorExtension();
    }
}
