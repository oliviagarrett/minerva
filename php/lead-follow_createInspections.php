<?php
// File: createInspections.php
// Pulls info for JBInspections from the database
// Prints JSON array
// Needs CadetID 

//connect to db controller
require_once 'dbcontroller.php';

//create connection
$conn = new DBController();

$fkClassDetailID = $_POST['fkClassDetailID']; 
$InspectionDate= $_POST['InspectionDate'];
$JBInspectionType= $_POST['JBInspectionType'];
$InspectionNote= $_POST['InspectionNote'];
$DidPassInspection= $_POST['DidPassInspection'];
$InspMeritAdj= $_POST['InspMeritAdj'];


$sql = "INSERT INTO tblJBInspections(fkClassDetailID,InspectionDate,JBInspectionType,InspectionNote,DidPassInspection,InspMeritAdj)
values('$fkClassDetailID','$InspectionDate', '$JBInspectionType', '$InspectionNote', '$DidPassInspection', '$InspMeritAdj')";

$result = $conn->createRecord($sql);

//$connection->close();
?>