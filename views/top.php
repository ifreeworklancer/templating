<section id="top">
    <div class="cotainer">
        <div class="news">
        <?php
        foreach($top['news'] as $post) {
            include('views/partials/news-item.php');
        }
        ?>
        </div>
    </div>
</section>