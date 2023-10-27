<?php require base_path('views/patials/head.php') ?>
<?php require base_path('views/patials/nav.php') ?>
<?php require base_path('views/patials/header.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Notes</p>
            <p>
                <a href="/notes" class="hover:underline text-blue-800">
                    <- back
                </a>
            </p>
            <p class="font-semibold">This page is a full detail about <?= htmlspecialchars( $note['body']) ?></p>
    </div>
</main>
<?php require 'views/patials/footer.php' ?>