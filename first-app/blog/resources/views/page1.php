<!DOCTYPE html>
<html>
<body>

<h1>TEST 2</h1>

    <div class = 'container' style='color: blue;'>
        <h2>
            nom : <?php echo $nom ?>
        </h2>
        <h2>
            prenom : <?php echo $prenom ?>
        </h2>
        <ul>
            <?php foreach($sujets as $value) : ?>
            <li>
                <?php echo $value ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>
