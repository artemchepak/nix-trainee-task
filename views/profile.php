<?php

use app\models\Authorization;
?>

<div class="card mb-3">
    <div class="row g-0">
        <?php if ($userData['image']): ?>
            <div class="col-md-4 profile__image"
                 style="background-image: url(<?php echo $userData['image'] ?>)">
            </div>
        <?php else: ?>
            <div class="col-md-4 profile__image"
                 style="background-image: url(https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg)">
            </div>
        <?php endif; ?>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Профиль</h5>
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Имя</th>
                        <td>
                            <?php echo $userData['name'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Город</th>
                        <td>
                            <?php echo $userData['city'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>
                            <?php echo $userData['email'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Пароль</th>
                        <td>
                            <?php echo $userData['password'] ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">О себе</th>
                        <td>
                            <?php echo $userData['info'] ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto mb-4">
            <a href="\profileUpdate" class="btn btn-primary">Изменить профиль</a>
        </div>
    </div>
</div>
