<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHJ3Y3Vj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHJ3Y3Vj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHJ3Y3Vj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHJ3Y3Vj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHJ3Y3Vj\App_KernelDevDebugContainer([
    'container.build_hash' => 'HJ3Y3Vj',
    'container.build_id' => 'd8d9a028',
    'container.build_time' => 1676587266,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHJ3Y3Vj');
