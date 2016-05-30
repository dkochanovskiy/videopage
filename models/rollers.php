<?php
function get_id()
{
    global $link;
    $query = "SELECT * FROM `roller`";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['id_roller'];
    }
    return;
}
function get_amout_lines()
{
    global $link;
    $query = "SELECT * FROM `roller`";
    $result = mysqli_query($link, $query);
    $num_rows = mysqli_num_rows($result);
    return $num_rows;
}
function get_name_roller()
{
    global $link;
    $name = array();
    for($i = 0; $i < get_amout_lines(); $i++)
    {
        $query = "SELECT * FROM `roller`";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($name, mysqli_real_escape_string($link, $row['name_roller']));
        }
    }
    return $name;
}
function get_brief_description()
{
    global $link;
    $brief_description = array();
    for($i = 0; $i < get_amout_lines(); $i++)
    {
        $query = "SELECT * FROM `roller`";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_assoc($result))
        {
            array_push($brief_description, mysqli_real_escape_string($link, $row['brief_description']));
        }
    }
    return $brief_description;
}
function get_full_description($name)
{
    global $link;
    $query = "SELECT * FROM `roller` WHERE `name_roller` = '$name'";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['full_description'];
    }
    return;
}
?>