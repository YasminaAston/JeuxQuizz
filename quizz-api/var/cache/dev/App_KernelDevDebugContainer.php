<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< HEAD
if (\class_exists(\ContainerKVqglz2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKVqglz2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKVqglz2.legacy');
=======
if (\class_exists(\ContainerESHe4hB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerESHe4hB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerESHe4hB.legacy');
>>>>>>> 02bd3902fd4f2f1c551b8206afd34daec3bcab4c

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< HEAD
    \class_alias(\ContainerKVqglz2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKVqglz2\App_KernelDevDebugContainer([
    'container.build_hash' => 'KVqglz2',
    'container.build_id' => 'b1426d2e',
    'container.build_time' => 1617896767,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKVqglz2');
=======
    \class_alias(\ContainerESHe4hB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerESHe4hB\App_KernelDevDebugContainer([
    'container.build_hash' => 'ESHe4hB',
    'container.build_id' => 'c00f661b',
    'container.build_time' => 1617895845,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerESHe4hB');
>>>>>>> 02bd3902fd4f2f1c551b8206afd34daec3bcab4c