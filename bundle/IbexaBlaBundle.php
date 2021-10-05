<?php declare(strict_types=1);

namespace Kiwi\IbexaBla;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class IbexaBlaBundle extends Bundle
{
    public function getContainerExtension()
    {
        return $this->extension;
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}
