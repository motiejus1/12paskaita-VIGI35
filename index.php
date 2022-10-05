
<?php include ("classes/Messages-class.php"); ?>
<?php include("classes/FileManager-class.php"); ?>
<?php include("classes/HierarchPaveld-class.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    // $message = new Message("Nauja", "p");
    // $message->show("primary");

    // $bootsrapMessage = new BootstrapMessage("Nauja", "p");
    //  $bootsrapMessage->show("primary");

    //  $fileManager = new FileManager("klientai.json");
    //     $fileManager->readFile();
    //     $fileManager->showData();

    //  $jsonManager = new JsonManager("klientai.json");
    //     $jsonManager->readFile();
    //     $jsonManager->showData();
        
    //     $csvManager = new CsvManager("username.csv");
    //     $csvManager->readFile();
    //     var_dump($csvManager->data);
    $gyvunas= new Gyvunas("raudona","1t","4");
    $gyvunas->apibudinkSave();

    $kate = new Kate("juoda", "12","4","labai purus kailis");
    $kate->apibudinkSave();
    $kate->koksKailis();



?>    

</body>
</html>