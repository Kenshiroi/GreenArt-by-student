<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX8375A2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX8375A2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX8375A2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX8375A2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX8375A2\App_KernelDevDebugContainer([
    'container.build_hash' => 'X8375A2',
    'container.build_id' => 'b5284ae8',
    'container.build_time' => 1667311748,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX8375A2');
