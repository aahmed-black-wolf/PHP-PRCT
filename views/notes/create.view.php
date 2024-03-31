<?php require("views/components/head.php")?>
<?php require("views/components/nav.php");?>
<?php require("views/components/banner.php")?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="POST" class="flex flex-col  gap-3">
            <input type="text" name="title" id="title"
                class="focus:outline-[lightcoral] p-[30px] text-[30px] rounded-md">
            <textarea name="body" class="focus:outline-[lightcoral] p-[30px] text-[30px] rounded-md" name="" id=""
                cols="30" rows="10"><?= $_POST['body'] ?? '' ?> </textarea>
            <?php if(isset($errors['error'])) : ?>
            <p class="text-[red] text-xl"><?= $errors['error'];?></p>
            <?php endif;?>
            <button
                class="px-[30px] py-[10px] font-[600] text-[20px] bg-[lightcoral]  text-white rounded-md">Create</button>

        </form>
    </div>
</main>

<?php require("views/components/footer.php")?>