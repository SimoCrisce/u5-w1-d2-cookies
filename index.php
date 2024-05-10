<?php include_once __DIR__ . "/includes/header.php";

if ($_COOKIE["language"] === "it") {
    $stmt = $pdo->prepare("SELECT * FROM italian");
    $stmt->execute();
    $posts = $stmt->fetchAll();
}

if ($_COOKIE["language"] === "en") {
    $stmt = $pdo->prepare("SELECT * FROM english");
    $stmt->execute();
    $posts = $stmt->fetchAll();
}

?>

<div class="row"><?php
    foreach($posts as $row) { ?>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $row["title"] ?></h5>
                    <p class="card-text"><?= $row["content"] ?></p>
                </div>
            </div>
        </div><?php
    } ?>
</div>

<?php include_once __DIR__ . "/includes/footer.php" ?>

