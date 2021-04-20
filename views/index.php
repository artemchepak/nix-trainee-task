<div class="main__post-box d-flex flex-column justify-content-between">
    <?php foreach ($posts as $post) : ?>
        <div class="main__post p-5 rounded-lg m-3">
            <h1 class="display-4"><?php echo $post['title']; ?></h1>
            <hr class="my-4">
            <p><?php echo $post['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>