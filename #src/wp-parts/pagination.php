<?php if (wp_pagination() != '') : ?>
    <section class="section pagination">
        <div class="container">
            <!-- <div class="pagination__body">
                <ul class="pagination__pages">
                    <li><a href="#" class="pagination__pages-link current">1</a></li>
                    <li><a href="#" class="pagination__pages-link">2</a></li>
                    <li><a href="#" class="pagination__pages-link">3</a></li>
                    <li><a href="#" class="pagination__pages-link">4</a></li>
                    <li><span>...</span></li>
                    <li><a href="#" class="pagination__pages-link">24</a></li>
                </ul>
                <div class="pagination__buttons">
                    <a href="#" class="btn pagination-btn pagination-btn-prev _disabled">Назад</a>
                    <a href="#" class="btn pagination-btn pagination-btn-next">Далее</a>
                </div>
            </div> -->
            <?php if (function_exists ('wp_pagination')) { wp_pagination(); } ?>
            
        </div>
    </section>
<?php endif; ?>
