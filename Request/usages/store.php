<?php
include_once('..\Request.php');
$request = new Request();

$id = $request->get('name');
$allData = $request->all();
print_r($allData);

if ($request->has('name')) {
    // Do something with the 'name' key in the request
}

$filteredData = $request->only(['name', 'email']);
$filteredDataExcluded = $request->except(['password']);

// You can now work with the extracted data as needed.

?>