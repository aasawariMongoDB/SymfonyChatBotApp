<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP9sLRCu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP9sLRCu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP9sLRCu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerP9sLRCu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerP9sLRCu\App_KernelDevDebugContainer([
    'container.build_hash' => 'P9sLRCu',
    'container.build_id' => 'a323aefd',
    'container.build_time' => 1753333512,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP9sLRCu');
