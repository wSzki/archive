<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUmxr7le\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUmxr7le/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerUmxr7le.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerUmxr7le\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerUmxr7le\appDevDebugProjectContainer([
    'container.build_hash' => 'Umxr7le',
    'container.build_id' => '0522eb58',
    'container.build_time' => 1584025266,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUmxr7le');
