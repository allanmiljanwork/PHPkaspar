<?php include __DIR__ . '/partials/header.php'; ?>
<main class="container">
    <?php if(isset($_GET['name']) && isset($_GEt['age'])): ?>
    <h1>Hello <?=$_GET['name']?> you are <?=$_GET['age']?></h1>
    <?php endif; ?>
    <form action="/answer" method="POST">
        <input name="name" placeholder="Name">
        <input name="age" placeholder="Age">
        <input type="submit">
        <button>Send</button>
    </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>