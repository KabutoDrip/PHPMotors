<?php
function newVehicle($make, $model, $description, $image, $thumbnail, $price, $stock, $color, $classificationID){
 $db = phpmotorsConnect();  // Create a connection object using the phpmotors connection function
 $sqlvehc = "INSERT INTO `inventory`(`invMake`, `invModel`, `invDescription`, `invImage`, `invThumbnail`,`invPrice`, `invStock`, `invColor`, `classificationId`) VALUES (:invMake,':invModel',':invDescription',':invImage',':invThumbnail',':invPrice',':invStock',':invColor','classificationId')";  // The SQL statement
 $stmt = $db->prepare($sqlvehc);// Create the prepared statement using the phpmotors connection

 $stmt->bindValue(':invMake', $make, PDO::PARAM_STR);       //replace sql placeholders with values and data types
 $stmt->bindValue(':invModel', $model, PDO::PARAM_STR);
 $stmt->bindValue(':invDescription', $description, PDO::PARAM_STR);
 $stmt->bindValue(':invImage', $image, PDO::PARAM_STR);
 $stmt->bindValue(':invThumbnail', $thumbnail, PDO::PARAM_STR);
 $stmt->bindValue(':invPrice', $price, PDO::PARAM_STR);
 $stmt->bindValue(':invStock', $stock, PDO::PARAM_STR);
 $stmt->bindValue(':invColor', $color, PDO::PARAM_STR);

 $stmt->execute();  // Insert the data
 $rowsChanged = $stmt->rowCount(); // Ask how many rows changed as a result of our insert
 $stmt->closeCursor(); // Close the database interaction
 return $rowsChanged; // Return the indication of success (rows changed)
}
function newClassification($classification){
    $db = phpmotorsConnect(); // Create a connection object using the phpmotors connection function
    $sqlclass = "INSERT INTO `carclassification`(`classificationName`) VALUES (:classificationName)"; // The SQL statement
    $classstmt = $db->prepare($sqlclass); // Create the prepared statement using the phpmotors connection
   
    $classstmt->bindValue(':classificationName', $classification, PDO::PARAM_STR); //replace sql placeholders with values and data types
    
    $classstmt->execute(); // Insert the data
    $rowsChanged = $classstmt->rowCount();     // Ask how many rows changed as a result of our insert
    $classstmt->closeCursor();     // Close the database interaction
    return $rowsChanged;     // Return the indication of success (rows changed)

}
?>  