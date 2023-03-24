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
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailInput">
                </div>
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="passwordInput">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Войти в систему</button>
            </div>
            <div class="m-3 d-flex justify-content-between">
                <a href="reset.php">Забыли пароль?</a>
                <a href="register.php">Создать аккаунт</a>
            </div>
        </div>
    </div>
</div>