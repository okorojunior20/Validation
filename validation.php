<?php
// This function is to check if password and comfirm password are the same 
function compare_values($first_input, $second_input, $first_input_name, $second_input_name)
{
    if ($first_input == $second_input) {
        return true;
    } else {
        throw new \Exception("$first_input_name and $second_input_name does'nt match");
    }
}

 

// This function is to validate if the input is empty or not 
function required($input, $input_name)
{
    if (!empty($input)) {
        return true;
    } else {
        throw new \Exception("$input_name cannot be empty");
    }
}
// This Function is to check if the input contains number or not 
function valid_number($input, $input_name)
{
    if (!is_numeric($input)) {
        throw new \Exception("$input_name can only be number");
    } else {
        return true;
    }
}
function valid_character($input, $input_name)
{
    if (!ctype_alpha($input)) {
        throw new \Exception("$input_name can only contain characters");
    } else {
        return true;
    }
}
function check_alphanumeric($input, $input_name)
{
    if (ctype_alnum($input)) {
        return true;
    } else {
        throw new \Exception("$input_name can only contain numbers and characters");
    }
}
function valid_email($input, $input_name)
{
    if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        throw new \Exception("Invalid $input_name");
    }
}
function valid_url($input, $input_name)
{
    if (filter_var($input, FILTER_VALIDATE_URL)) {
        return true;
    } else {
        throw new \Exception("Invalid $input_name");
    }
}
function check_if_set($input, $input_name)
{
    if (!isset($input)) {
        throw new \Exception("Please select $input_name");
    } else {
        return true;
    }
}


$input_field = "Password";
// $input_name = "Password";

try {
    required($input_field, $input_name);
} catch (\Exception $th) {
    echo $th->getMessage();
}


