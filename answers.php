<?php
session_start();
require('action/data/connexion.php');
require('action/topic/answersaction.php');
require('action/topic/insertanswer.php');
require('action/topic/viewstopicaction.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/answer4.css">
    <title>Document</title>

</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br> <br> <br><br> <br>
    <form method="POST" class="contener">

        <?php


        while ($infotopic = $reqasw->fetch()) {

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
        <div class="answ2">
            <div class="area">
                <textarea name="reponse" placeholder=" Entrer une reponse... " cols="82" rows="10"></textarea>
            </div>
            <br>
            <div class="send">
                <button type="submit" name="send">Send</button>
            </div>

            <br>
            <div class="error" >
                <?php
                    if(isset($erreur))
                    {
                        echo $erreur;
                    }
                ?>
            </div>
          

        </div>

        
    </form>
   
</body>

</html>