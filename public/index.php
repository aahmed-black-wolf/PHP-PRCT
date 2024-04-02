<?php 

const  BATH_BATH = __DIR__ ."/../";

require(BATH_BATH.'core/'."./functions.php");


spl_autoload_register(function ($class) {
     base_bath("core/{$class}.php");
});

base_bath("./routes/index.php");