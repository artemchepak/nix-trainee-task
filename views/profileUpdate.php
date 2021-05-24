<h3 class="text-center">Внесите изменения в профиль</h3>
<form action="" class="main__form" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="login" class="form-label">Введите логин</label>
        <input type="text" class="form-control" name="login" value="<?php echo $userData['login'] ?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Введите пароль</label>
        <input type="text" class="form-control" name="password" value="<?php echo $userData['password'] ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Введите Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $userData['email'] ?>">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Как к Вам обращаться?</label>
        <input type="text" class="form-control" name="name" value="<?php echo $userData['name'] ?>">
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">Где вы проживаете?</label>
        <input type="text" class="form-control" name="city" value="<?php echo $userData['city'] ?>">
    </div>
    <div class="mb-3">
        <label for="about" class="form-label">Расскажите о себе</label>
        <textarea class="form-control" name="info"><?php echo $userData['info'] ?>
        </textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Добавьте изображение профиля</label>
        <input type="file" class="form-control" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Подтвердить изменения</button>
</form>