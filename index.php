<?php
    $chosenLang = [];
    //// to check if there is lang that sent to us in the url or not
    if($_REQUEST) {
        if($_GET && isset($_GET['lang'])) {
            $lang = $_GET['lang'];
            $chosenLang = chooseLang($_GET['lang']);
        } else {
            $chosenLang = chooseLang();
            $lang = "En";
        }
    } else {
        $chosenLang = chooseLang();
        $lang = "En";
    }




    //// to choose the lang and change the text
    function chooseLang($lang = "En")
    {
        $Lang_supported = ["Ar","En","Fr","Ru"];
        $Lang_Array = [
            "Ar" => [
                "title" => "ملف",
                "Heading_Welcome" => "أهلاً إلى مركز الترجمة",
                "Rules" => "القوانين:",
                "rule_1" => "1- انت مرحب بك هنا",
                "rule_2" => "2- لا تكن متنمراً",
                "rule_3" => "3- احترم كل الآراء",
                "rule_4" => "4- لا تعديلات",
            ],
            "En" => [
                "title" => "Document",
                "Heading_Welcome" => "Welcome to localization center",
                "Rules" => "Rules:",
                "rule_1" => "1- you are welcome here.",
                "rule_2" => "2- Don't be rude",
                "rule_3" => "3- respect all opinions",
                "rule_4" => "4- no edit",
            ],
            "Fe" => [
                "title" => "Document",
                "Heading_Welcome" => "Welcome to localization center",
                "Rules" => "Rules:",
                "rule_1" => "1- you are welcome here.",
                "rule_2" => "2- Don't be rude",
                "rule_3" => "3- respect all opinions",
                "rule_4" => "4- no edit",
            ],
            "Ru" => [
                "title" => "Document",
                "Heading_Welcome" => "Welcome to localization center",
                "Rules" => "Rules:",
                "rule_1" => "1- you are welcome here.",
                "rule_2" => "2- Don't be rude",
                "rule_3" => "3- respect all opinions",
                "rule_4" => "4- no edit",
            ],
        ];
        if(!in_array($lang,$Lang_supported)) {
            $lang = "En";
        }
        $chosenLang = $Lang_Array[$lang];
          return $chosenLang;
    }


    // print_r($chosenLang);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $chosenLang['title']?></title>
    <style>
        .container {
            width: 952px;
            padding: 20px;
            margin:auto;
        }
        h1 {
            text-align:center;
        }
        a {
            padding:20px;
        }


        html:lang(Ar) *{
            direction: rtl;
        }
    </style>
</head>
<body>
<div class="container">
    <br>
    <h1><?php echo $chosenLang['Heading_Welcome']?></h1>
    <h4><?php echo $chosenLang['Rules']?></h4>
    <ol>
        <li><?php echo $chosenLang['rule_1']?></li>
        <li><?php echo $chosenLang['rule_2']?></li>
        <li><?php echo $chosenLang['rule_3']?></li>
        <li><?php echo $chosenLang['rule_4']?></li>
    </ol>
    <br>
    <h1><a href="index.php?lang=Ar">Ar</a> <a href="index.php?lang=En">En</a></h1>
</div>
</body>
</html>