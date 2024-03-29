<?php require("components/head.php")?>
<?php require("components/nav.php");?>
<?php require("components/banner.php")?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <ul>
            <?php foreach($notes as $note):?>
            <li><a href="/note?id=<?=$note['id']?>" class="text-blue-500 hover:underline"><?= $note['body'] ?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</main>

<?php require("components/footer.php")?>