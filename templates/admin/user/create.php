<h1>Создание пользователя</h1>

<form action="<?= route('contact') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="fullName"  value="Яо Куасси Жан-Клод" placeholder="Ф.И.О" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="email"  value="jeanyao@ymail.com" placeholder="email" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="phone"  value="+7 909 722 00 68" placeholder="Телефон" class="form-control">
    </div>
    <div class="photo">
        <div class="form-group">
            <div>
                <input type="file" name="photo[]" class="m-2">
            </div>
            <div>
                <input type="file" name="photo[]" class="m-2">
            </div>
            <div>
                <input type="file" name="photo[]" class="m-2">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>