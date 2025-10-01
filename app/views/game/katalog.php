<div class="katalog-top">
    <h2>Katalog Game</h2>
    <div class="katalog-filter">    
        <select name="" id="sort" class="katalog-sort">
            <option value="asc">A-Z</option>
            <option value="desc">Z-A</option>
        </select>
        <form method="post" class="katalog-search">
            <input type="text" id="keyword" name="keyword" autocomplete="off" placeholder="Cari game...">
        </form>
    </div>
</div>

<div class="katalog" id="katalog-list">
    <?php include 'list_katalog.php'; ?>
</div>