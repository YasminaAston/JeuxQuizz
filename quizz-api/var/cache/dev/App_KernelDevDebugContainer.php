<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF0HlNkN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF0HlNkN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF0HlNkN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF0HlNkN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF0HlNkN\App_KernelDevDebugContainer([
    'container.build_hash' => 'F0HlNkN',
    'container.build_id' => '7b78e749',
    'container.build_time' => 1620498094,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF0HlNkN');
