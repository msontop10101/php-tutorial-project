<?php require base_path('views/patials/head.php') ?>
<?php require base_path('views/patials/nav.php') ?>
<?php require base_path('views/patials/header.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>------</p>

        <ul>
            <?php foreach ($notes as $note): ?>
                <li class="text-blue-800 hover:underline">
                    <a href="/note?id=<?= $note['id'] ?>">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="mt-6">
            <a href="/note/create" class="text-blue-800 hover:underline">
                Create Note
            </a>
        </div>
    </div>
</main>
<?php require base_path('views/patials/footer.php') ?>