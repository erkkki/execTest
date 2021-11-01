<?php
// Nothing here....
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exec test</title>
    <script>
        // Open link function.
        const goto = (link) => {
          window.location.href = link;
        }
    </script>
</head>
<body>
    <a href="./commands/calc.php">Launch calculator</a>

    <!-- html button open link -->
    <button onclick="goto('./commands/calc.php')">Launch calculator</button>
</body>
</html>
