<?php

namespace alexeevdv\Symfony\SumSub;

use alexeevdv\Symfony\SumSub\DependencyInjection\SumSubClientExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SumSubClientBundle extends Bundle
{
    public function getContainerExtension()
    {
        if ($this->extension === null) {
            $this->extension = new SumSubClientExtension();
        }

        return $this->extension;
    }
}
