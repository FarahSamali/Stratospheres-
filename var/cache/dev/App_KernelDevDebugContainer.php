<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXiOLuIE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXiOLuIE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXiOLuIE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXiOLuIE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXiOLuIE\App_KernelDevDebugContainer([
    'container.build_hash' => 'XiOLuIE',
    'container.build_id' => '7929cf9e',
    'container.build_time' => 1676826886,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXiOLuIE');
