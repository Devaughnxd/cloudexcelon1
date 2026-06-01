<?php
declare(strict_types=1);
?>
<nav class="site-nav" aria-label="Primary navigation">
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
        <span class="nav-toggle-lines" aria-hidden="true"></span>
        <span class="sr-only">Open menu</span>
    </button>
    <ul id="primary-menu" class="nav-menu">
        <?php foreach ($navItems as $item): ?>
            <li>
                <a class="<?= is_active($item['href']) ? 'active' : '' ?>" href="<?= e($item['href']) ?>">
                    <?= e($item['label']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
