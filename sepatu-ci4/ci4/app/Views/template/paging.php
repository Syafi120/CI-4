<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <ul class="pagination">
        <?php if ($pager->hasPreviousPage()) : ?>
        <li class="page-item btn btn-outline-secondary text-reset text-decoration-none" type="button">
            <a class="page-item text-reset text-decoration-none" href="<?= $pager->getPreviousPage() ?>"
                aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
            </a>
        </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
        <li class="page-item btn btn-outline-secondary text-reset text-decoration-none" type="button"
            <?= $link['active'] ? 'class="active"' : '' ?>>
            <a class="page-item text-reset text-decoration-none" href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()) : ?>
        <li class="page-item btn btn-outline-secondary " type="button">
            <a class="page-item text-reset text-decoration-none" href="<?= $pager->getNextPage() ?>"
                aria-label="<?= lang('Pager.next') ?>">
                <span aria-hidden="true"><?= lang('Pager.next') ?></span>
            </a>
        </li>
        <?php endif ?>
    </ul>
</nav>