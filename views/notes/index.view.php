<?php view("components/head.php")?>
<?php view("components/nav.php");?>
<?php view("components/banner.php",["heading" => "Notes"])?>
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

<?php view("components/footer.php")?>