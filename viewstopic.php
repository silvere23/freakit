<?php
session_start();
require('action/topic/viewstopicaction.php');
require('action/topic/viewsanswaction.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewtopic3.css">
    <title></title>
    <?php include 'includes/navbar.php'; ?>
    <br><br><br><br>
</head>

<body>



    <?php
    while ($infotopic = $reqtopic->fetch()) {

        $emoj = array(':)', ':(', ':3', ';-)', ':-)', ':-(', '<3', ':D', 'xD', 'x)', "x')", ':o', ':O', 'oO');
        $emoji_path = array(
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_sad.png" class="emoj"/>',
            '<img src="emojis/emo_cat.png" class="emoj"/>',
            '<img src="emojis/emo_wink.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
            '<img src="emojis/emo_smile.png" class="emoj"/>',
        );
        $infotopic['sujet'] = str_replace($emoj, $emoji_path, $infotopic['sujet']);
        $infotopic['sujet'] = viewLink($infotopic['sujet']);
    ?>
        <div class="cardcontain">
            <div class="head">

                <div class="img">
                    <td><img src="css/icon.png" alt=""></td>
                </div>

                <div class="category">

                    <td>Cat. <?php echo $infotopic['cat']; ?></td>
                </div>



            </div>

            <hr>
            <br>
            <div class="title">
                <td> Title : <?php echo $infotopic['title']; ?></td>
                <br>
                <hr style="opacity: calc(0.3);">
            </div>

            <br>
            <div class="sujet">
                <td><?php echo $infotopic['sujet']; ?></td>
            </div>

            <br>

            <div class="containban">
                <hr style="opacity: calc(0.3);">
                <br>
                <div class="banner">
                    <td> <span> Banner: << </span> <?php echo $infotopic['banner']; ?> <span> >> </span></td>
                </div>

                <br>

            </div>
            <div class="contentinf">
                <div class="btn">
                    <a href="answers.php?id=<?php echo $infotopic['id']; ?>" class="answer-btn" style="text-decoration: none;">Answer</a>
                </div>
                <div class="btn1">
                    <a href="viewanswers.php?id=<?php echo $infotopic['id']; ?>" class="views-btn" style="text-decoration: none;">Views</a>
                </div>

                <div class="inf">
                    <div class="pseudo_auteur">
                        <td> Publish by : <?php echo $infotopic['pseudo_auteur']; ?></td>
                    </div>
                    <div class="date_publication">
                        <td> Post at : <?php echo $infotopic['date_publication']; ?></td>
                    </div>
                </div>


            </div>
            <br>

        </div>


    <?php

    }

    ?>


</body>

</html>






<?php
function viewLink($texte) {
    $regex = '%(https?:\/\/|www\.)([a-zA-Z0-9-_\.\/\?=&]+)%';
    $texte = preg_replace($regex, '<a href="$0" target="_blank">$0</a>', $texte);
    return($texte);
}
?>