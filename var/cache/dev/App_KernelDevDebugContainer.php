<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUt8qWnC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUt8qWnC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUt8qWnC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUt8qWnC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUt8qWnC\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ut8qWnC',
    'container.build_id' => '2612495b',
    'container.build_time' => 1666468535,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUt8qWnC');
