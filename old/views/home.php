<?php
$sql    = 'SELECT * FROM article';
$query  = mysqli_query($con, $sql);
?>
<body>
    <div class="container">
        <?php
        while ($row = mysqli_fetch_array($query))
        {
            echo "<h1>" .  $row['title'] . "</h1>";
            echo "<p>" .  $row['content'] . "</p>" . "<br>";
            echo "<h1>" .  $row['title'] . "</h1>";
            echo "<p>" .  $row['content'] . "</p>" . "<br>";
            echo "<h1>" .  $row['title'] . "</h1>";
            echo "<p>" .  $row['content'] . "</p>" . "<br>";
        }
        ?>
    </div>
</body>
