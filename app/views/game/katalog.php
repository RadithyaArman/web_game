<div class="atas">
    <select name="" id="sort" class="sort">
        <option value="asc">A-Z</option>
        <option value="desc">Z-A</option>
    </select>

    <form method="post" class="search">
        <input type="text" id="keyword" name="keyword" autocomplete="off" placeholder="Cari game...">
    </form>
</div>

<div class="katalog" id="katalog-list">
    <?php include 'list_katalog.php'; ?>
</div>