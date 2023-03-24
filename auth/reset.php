<?php
include "../include_head.php"
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="logo-container">
                <img src="/images/auth/logo.png" class="rounded logo" alt="logo">
            </div>
            <div class="auth-container">
                <div class="mb-3">
                    <div class="mb-3 text-start text-muted">
                        Укажите ваш email. Мы вышлем ссылку для восстановления пароля на ваш адрес электронной почты.
                    </div>
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailInput">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Отправить ссылку</button>
            </div>
            <div class="m-3 d-flex justify-content-center">
                <a href="index.php">Войти</a>
            </div>
        </div>
    </div>
</div>