<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1jTffHH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1jTffHH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1jTffHH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1jTffHH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1jTffHH\App_KernelDevDebugContainer([
    'container.build_hash' => '1jTffHH',
    'container.build_id' => '630948a9',
    'container.build_time' => 1667934215,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1jTffHH');
