<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJanTgPU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJanTgPU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJanTgPU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJanTgPU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJanTgPU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JanTgPU',
    'container.build_id' => 'bb8dab42',
    'container.build_time' => 1549813826,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJanTgPU');