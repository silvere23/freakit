<?php 
session_start();
require ('action/data/connexion.php'); 
require ('action/topic/topicaction.php');

    $reqcat = $connexion->query('SELECT * FROM category');
    $cat = $reqcat->fetchAll(PDO::FETCH_ASSOC);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/topics.css">
    <title>FreakIT Forum</title>
    <div class="nav">
       
    </div>
   
</head>
<body>
<?php include 'includes/navbar.php';?> 
    <br> <br> <br> <br>
    <div class="container">
        <h1>Publish your topics</h1>
        <br>
        <form  method="POST">
            <label for="title">Title :</label> 
            <input type="text" name="title">

            <label for="category">Category :</label>
            <select name="id_cat">
                <?php if (!empty($cat)) : ?>
                <?php foreach ($cat as $category) : ?>
                <option value="<?php echo $category['id']; ?>"> <?php echo $category['cat']; ?> </option>
                <?php endforeach; ?>
                <?php else : ?>
                <option>Aucune category trouvé.</option>
                <?php endif; ?>
            </select>

            <label for="sujet" >Message :</label>
            <textarea name="sujet"></textarea>
            <div  style="display: none;"></div>

            <label for="files">Image:</label>
            <input type="file" name="files">
            
            <button type="submit" name="publish">Publish topic</button>
        </form>
        <br>
        <?php
        if(isset($erreur))
        {
            echo $erreur;
        }
        ?> 

    </div>  
    
</body>
</html>
