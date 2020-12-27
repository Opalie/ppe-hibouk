<?php
include_once 'navbar.php'
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ebook-page.css">
    <title>bruh</title>
</head>

<body>
    <div class="ebook-info">
        <div class="left">
            <!-------------------------------------IMAGE------------------------------------->

            <?php
            $res = $db->query("SELECT book_cover FROM ebook WHERE book_id = {$_GET['book_id']}");

            if ($res->num_rows > 0) {
                $img = $res->fetch_assoc();

                //Rendre l'image
                header("Content-type: image/png");
                echo $img['image'];
            } else {
                echo "<img src='/img/nocoverfound.png/" . "' alt='error'>";
            }
            ?>

            <!-------------------------------------SCORE------------------------------------->
        </div>
        <div class="right">
            <h1>TITLE - author (date)</h1>
            <h2>Genre</h2>
            <!--------------------------------------DESC-------------------------------------->
        </div>
    </div>
    <div class="comments">
        <!-------------------------------------PHP COMMENTS------------------------------------->

        <?php
        // Below function will convert datetime to time elapsed string.
        function time_elapsed_string($datetime, $full = false)
        {
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);
            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;
            $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }
            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }

        // Page ID needs to exist, this is used to determine which comments are for which page.
        if (isset($_GET['com_ebook'])) {
            if (isset($_POST['com_user'], $_POST['com_rating'], $_POST['com_review'])) {
                // Insert a new review (user submitted form)
                $stmt = $pdo->prepare('INSERT INTO comments (com_ebook, com_user, com_review, com_rating, com_time) VALUES (?,?,?,?,NOW())');
                $stmt->execute([$_GET['com_ebook'], $_POST['com_user'], $_POST['com_review'], $_POST['com_rating']]);
                exit('Your review has been submitted!');
            }
            // Get all comments by the Page ID ordered by the submit date
            $stmt = $pdo->prepare('SELECT * FROM comments WHERE com_ebook = ? ORDER BY com_rating DESC');
            $stmt->execute([$_GET['com_ebook']]);
            $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // Get the overall com_rating and total amount of comments
            $stmt = $pdo->prepare('SELECT AVG(com_rating) AS overall_com_rating, COUNT(*) AS total_comments FROM comments WHERE com_ebook = ?');
            $stmt->execute([$_GET['com_ebook']]);
            $comments_info = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            exit('Please provide the page ID.');
        }
        ?>

        <!-------------------------------------HTML COMMENTS------------------------------------->
        
        <div class="overall_rating">
            <span class="num"><?= number_format($reviews_info['overall_rating'], 1) ?></span>
            <span class="stars"><?= str_repeat('&#9733;', round($reviews_info['overall_rating'])) ?></span>
            <span class="total"><?= $reviews_info['total_reviews'] ?> reviews</span>
        </div>
        <a href="#" class="write_review_btn">Write Review</a>
        <div class="write_review">
            <form>
                <input name="name" type="text" placeholder="Your Name" required>
                <input name="rating" type="number" min="1" max="5" placeholder="Rating (1-5)" required>
                <textarea name="content" placeholder="Write your review here..." required></textarea>
                <button type="submit">Submit Review</button>
            </form>
        </div>
        <?php foreach ($reviews as $review) : ?>
            <div class="review">
                <h3 class="name"><?= htmlspecialchars($review['name'], ENT_QUOTES) ?></h3>
                <div>
                    <span class="rating"><?= str_repeat('&#9733;', $review['rating']) ?></span>
                    <span class="date"><?= time_elapsed_string($review['submit_date']) ?></span>
                </div>
                <p class="content"><?= htmlspecialchars($review['content'], ENT_QUOTES) ?></p>
            </div>
        <?php endforeach ?>

    </div>
</body>
<?php
include_once 'copyright.php'
?>

</html>