<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEOF4uex\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEOF4uex/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEOF4uex.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEOF4uex\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEOF4uex\App_KernelDevDebugContainer([
    'container.build_hash' => 'EOF4uex',
    'container.build_id' => '3241cacc',
    'container.build_time' => 1634778987,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEOF4uex');