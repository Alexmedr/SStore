<?php

//collection = (new MongoDB\Client )->FiveCStore->Users;
//
//cursor = $collection->find(
//   [],
//   [
//       'limit' => 5,
//       'sort' => ['pop' => -1],
//   ]
//;
//
/// print_r($cursor);
//foreach ($cursor as $document) {
//   print_r($document);
// }

// Create Functions

use MongoDB\Operation\UpdateOne;

$collection = (new MongoDB\Client)->SStore->Smartphones;
 $insertResult = $collection->insertOne([
     "designer" => "Samsung",
     "model" => "Galaxy S8 Active",
     "weight" => "208.1",
     "sim" => "Nano-SIM",
     "storage" => "64GB",
     "display_resolution" => "5.8 inches, 85.4 (~75.0% screen-to-body ratio)"


 ]);
 printf("inserted %d document(s)<br />", $insertResult->getInsertedCount());
 var_dump($insertResult->getInsertedID());


//$collection = (new MongoDB\Client)->FiveCStore->Categories;
// 
// $insertResult = $collection->insertOne([
//     "category" => "Cellphpnes",
//     "description" => "Phones for the on the go use."
// ]);
// 
// printf("Inserted %d document(s)\n", $insertResult->getInsertedCount());
// var_dump($insertResult->getInsertedID());

//Read Functions
//$table = $collection->find();
//
//foreach ($table as $record) {
//    echo "<br />";
//    echo "ID: ".$record["_id"]."<br >";
//    echo "Category:".$record->category."<br />";
//    echo "Description:".$record["description"]."<br />";
//}
//Update Functions
//
//$updateOneResult = $collection->updateOne([
// "category" => "Cellphones"
//],[
//    '$set' => ["description" => "Mobile Phones"]
//]);
//
//printf("Matched %d Document(s)<br />", $updateOneResult->getMatchedCount());
//printf("Updated %d Document(s)<br />", $updateOneResult->getModifiedCount());

//Delete  Functions
//$deleteResult = $collection->deleteOne([
//    "category" => "Cellphones"
//]);
//
//printf("Deleted %d document(s)<br />", $deleteResult->getDeletedCount());
//
//  $collection = (new MongoDB\Client)->FiveCStore->Products;
//   //$id = "5ee2303a3fe2b512c01af536";
//   $product = $collection->findOne();
//$product = $collection->find();

 // var_dump($product);
 // print_r($product);

#$collection =(new MongoDB\Client)->FiveCStore->Products;
#$productCount = $collection->count([ "category_id" => "1234" ]);
#
#print_r($productCount);

 //$collection = (new MongoDB\Client)->FiveCStore->Products;
 //$comment = [
 //    "user_id" => "5ee2275d3fe2b512c01af534",
 //    "comment" => "works good enough.",
 //    "date" => date("Y-m-d H:i:s")
 //];
 //$product = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId("5ee2303a3fe2b512c01af537") ]);
 //$comments = $product->comments;
 //if (count($comments) == 0 || $comments == null || empty($comments)) {
 //    $comments = [$comment];
 //} else {
 //    $comments = [$comment, ...$comments];
 //}
 //$updateOneResult = $collection->updateOne([
 //    "_id" => new MongoDB\BSON\ObjectId("5ee2303a3fe2b512c01af537")
 //],[
 //    '$set' => [ "comments" => $comments ]
 //]);
 //
 //$product = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId("5ee2303a3fe2b512c01af537") ]);
 //print_r($product->comments);