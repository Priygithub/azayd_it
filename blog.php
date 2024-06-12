<?php include 'header.php'; ?>
<main>
    <h2>Blog/News</h2>
    <?php
    include 'config.php';

    $sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<article>";
            echo "<h3>" . $row['title'] . "</h3>";
            echo "<p>" . $row['content'] . "</p>";
            echo "<small>Posted on " . $row['created_at'] . " in " . $row['category'] . "</small>";
            echo "</article>";
        }
    } else {
        echo "No blog posts found.";
    }

    $conn->close();
    ?>
</main>
