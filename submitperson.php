<?php
$jsonString = file_get_contents('list.json');
$data = json_decode($jsonString, true);

/*Check if GET variable is set to delete an element from the .json file*/
if(isset($_GET['person'])){
  $total =  sizeof($data);
  for($i = $_GET['person']; $i < $total-1 ; $i++){
    $data[$i] = $data[$i+1];
  }
  unset($data[$i]);
  $newList = json_encode($data);
  file_put_contents('list.json', $newList);
  header('Location: index.html');

}

/*If the person variable is not set, a new element is going to be added and the user is redirected to the index file. */
else{
  $arr = array("name" => $_POST["name"],
  "url" => $_POST["photo_url"]
);

array_unshift($data, $arr);

$newList = json_encode($data);
file_put_contents('list.json', $newList);

header('Location: index.html');
}
?>
