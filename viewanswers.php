<?php
session_start();
require('action/data/connexion.php');
require('action/topic/answersaction.php');
require('action/topic/viewsanswaction.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/answer3.css">
    <title></title>

</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br> <br> <br><br> <br>
    <form method="POST" >

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

                while($answer = $reqview->fetch()) {

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
                    $answer['reponse'] = str_replace($emoj, $emoji_path, $answer['reponse']);

                    ?>
                        <div class="answ1" >
                            <div><h2>Answers</h2></div>
                            <hr style="opacity: 0.2;" >
                            <br>
                            <div class="footer" >
                                
                                <div>
                                    <td> Publish by : <?php echo $answer['pseudo_auteur']; ?></td>
                                </div>
                                <div class="date" >
                                    <td> Publish at: <?php echo $answer['date_publication']; ?></td>
                                </div>
                            </div>
                        </div>
                        <div class="answ" >
                            <div>
                                <td><?php echo $answer['reponse']; ?></td>
                            </div>
                            <br><br>
                            
                            
                        </div>
                        
                    <?php

                }
            ?>



        <?php

        }

        ?>


    </form>
</body>

</html>