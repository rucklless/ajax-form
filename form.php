<form id="contact-form">
    <!------------------------------------------>
    <div class="row justify-content-lg-center">
        <div class="col-12 col-md-4">
            <div class="form-group">
                <input type="text" name="name" style="display: none;">
                <input type="hidden" name="form-name" value="<?=$arParams['formname']?>">
                <input type="text" class="form-control" id="name" name="987654" required aria-describedby="name" placeholder="Ваше имя">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="form-group">
                <input type="tel" class="form-control" id="phone" aria-describedby="phone" placeholder="Телефон" required name="phone">
            </div>
        </div>
        <div class="col-12 col-md-3">
            <button type="submit" class="btn btn-orange white-bg">Заказать звонок</button>
        </div>
        <div class="col-12">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="agreement" required="">
                <label class="form-check-label" for="agreement">Я согласен с <a href="/politika-konfidentsialnosti/">политикой конфиденциальности</a></label>
            </div>
        </div>
    </div>
</form>
<div class="contact-form-message"></div>