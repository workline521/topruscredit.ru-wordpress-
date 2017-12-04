<form class="inner-main__form">
    <span class="inner-main__form-title">Оставить отзыв</span>
    <span class="inner-main__form-svg"></span>
    <span class="inner-main__input-title">Рейтинг:</span>
    <div class="inner-main__form-wrap">
        <div class="inner-main__input-wrap">
            <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
        </div>
    </div> 
    <input class="inner-main__name-input" type="text" name="name" placeholder="Имя">
    <input class="inner-main__opinion-input" type="text" name="opinion" placeholder="Отзыв">
    <button class="inner-main__form-button" type="submit">отправить</button>
</form>