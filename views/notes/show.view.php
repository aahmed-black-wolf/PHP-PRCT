<?php view("components/head.php")?>
<?php view("components/nav.php");?>
<?php view("components/banner.php",["heading" => "Notes"])?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <h2>Name : <?= $user['name'] ?></h2>
        <h1>Email : <?= $user['email'] ?></h1>

        <a href="/create/note" class="text-lightblue pt-[30px] inline-block font-bold">CREATE NOTE</a>
    </div>
</main>

<?php view("components/footer.php")?>