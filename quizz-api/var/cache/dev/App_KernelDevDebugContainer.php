<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPXWMKBF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPXWMKBF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPXWMKBF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPXWMKBF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPXWMKBF\App_KernelDevDebugContainer([
    'container.build_hash' => 'PXWMKBF',
    'container.build_id' => 'ef84c050',
    'container.build_time' => 1617878255,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPXWMKBF');
