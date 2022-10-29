<!DOCTYPE html>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . './PHPMotors/snippets/heading.php'?>    

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . './PHPMotors/snippets/navigation.php'?>
    <?php require_once '\xampp\htdocs\PHPMotors\library\connections.php'; ?>
    <main>
        <?php
        if (isset($message)){
            echo $message;
        }
        ?>
        <form action="/PHPMotors/vehicles/index.php" method="POST">                             <!--Posting the Name value pair in the controller -->
            <input type="text" name="addClassification" id="addClassification" required> <!--Input Field -->
            <input type="submit" name="submit" id="submit">                             <!--Submission Button -->
            <input type="hidden" name="action" value="postClassification">              <!--Hidden Action for Sending Name Value Pair -->
        </form>
    </main>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . './PHPMotors/snippets/footer.php'?>
    

</body>
</html>
