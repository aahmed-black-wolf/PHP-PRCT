<?php require("components/head.php")?>
<?php require("components/nav.php");?>
<?php require("components/banner.php")?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form method="GET" class="flex flex-col  gap-3">
            <textarea name="body" class="focus:outline-[lightcoral] p-[30px] text-[30px] rounded-md" name="" id=""
                cols="30" rows="10"></textarea>
            <button
                class="px-[30px] py-[10px] font-[600] text-[20px] bg-[lightcoral]  text-white rounded-md">Create</button>
        </form>
    </div>
</main>

<?php require("components/footer.php")?>