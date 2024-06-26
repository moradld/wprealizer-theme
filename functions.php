
<?php
function print_hello_world()
{
    echo "Hello world";
}
add_action('mo_hello_world', 'print_hello_world');

function mo_print_100()
{
    for($i=1; $i <=100; $i++){
        echo $i ."<br>";
    }
}

add_action('mo_print_1to_100_step_5', 'mo_print_100');

function mo_odd_even($number)
{
    if($number % 2 === 0){
        echo "$number is Even Number";
    }else{
        echo "$number is Odd Number";
    }
}
add_action('mo_odd_even_as', 'mo_odd_even');