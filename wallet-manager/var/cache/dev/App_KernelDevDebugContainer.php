<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJUxdt7M\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJUxdt7M/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJUxdt7M.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJUxdt7M\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJUxdt7M\App_KernelDevDebugContainer([
    'container.build_hash' => 'JUxdt7M',
    'container.build_id' => 'c5f800e8',
    'container.build_time' => 1658477724,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJUxdt7M');
