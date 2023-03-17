<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
    include("config.php");
    $data = json_decode(file_get_contents("php://input"));
    $type_form = $data->type_form;
    $date_input = $data->date_input;
    $firstname = $data->firstname;
    $lastname = $data->lastname;
    $email = $data->email;
    $phone = $data->phone;
    $price_range_min = $data->price_range_min;
    $price_range_max = $data->price_range_max;
    $time_start = $data->time_start;
    $time_end = $data->time_end;
    $asap = $data->asap;
    $have_agent = $data->have_agent;
    $have_house_sell = $data->have_house_sell;
    $comments = $data->comments;
    $recive_email = $data->recive_email;
    $instructions = $data->instructions;
    $tags = $data->tags;
    $house_price = $data->house_price;
    $house_city = $data->house_city;
    $house_place = $data->house_place;
    $house_bed = $data->house_bed;
    $house_bath = $data->house_bath;
    $house_sqft = $data->house_sqft;
    $query = "INSERT INTO leads (type_form, date_input, firstname, lastname, email, phone, price_range_min, price_range_max, time_start, time_end, asap, have_agent, have_house_sell, comments, recive_email, instructions, tags, house_price, house_city, house_place, house_bed, house_bath, house_sqft) VALUES ('$type_form', '$date_input', '$firstname', '$lastname', '$email', '$phone', '$price_range_min', '$price_range_max', '$time_start', '$time_end', '$asap', '$have_agent', '$have_house_sell', '$comments', '$recive_email', '$instructions', '$tags', '$house_price', '$house_city', '$house_place', '$house_bed', '$house_bath', '$house_sqft')";
    if(mysqli_query($connection, $query)) {
        echo "Lead added successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
?>

