<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGpSE8TI\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGpSE8TI/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGpSE8TI.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGpSE8TI\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGpSE8TI\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GpSE8TI',
    'container.build_id' => 'fe5ab0b7',
    'container.build_time' => 1602754836,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGpSE8TI');