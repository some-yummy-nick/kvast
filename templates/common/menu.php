<div class="menu">
    <nav>
        <ul class="menu__list">
            <? foreach ($menu as $item) : ?>
                <li class="menu__item">
                    <a href="" class="menu__link"><?= $item ?></a>
                </li>
            <? endforeach; ?>
        </ul>
    </nav>
</div>
