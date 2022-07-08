<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Recipes");
?><?php

use  \Bitrix\Main\Page\Asset;

$APPLICATION->ShowHead();
?>
    <main>
        <div class="section">
            <div class="hedline">
                <h2 class="hedline-h2">Умная сортировка по тегам</h2>
                <p class="hedline-p">
                    Добавляй рецепты и указывай наиболее популярные теги. Это позволит<br>
                    быстро находить любые категории.
                </p>
            </div>
            <div class="card">
                <div class="category">
                    <div class="icon">
                        <img src="/local/templates/recipes/img/ic-1.svg" class="card-category-ic-1" alt="">
                    </div>
                    <p class="p-simple_dishes">
                        Простые блюда
                    </p>
                    <p class="dishes">
                        Время приготвления<br>
                        таких блюд не более 1<br>
                        часа
                    </p>
                </div>
                <div class="category">
                    <div class="icon">
                        <img src="/local/templates/recipes/img/ic-2.svg" class="card-category-ic-2" alt="">
                    </div>
                    <p class="baby">
                        Детское
                    </p>
                    <p class="dishes">
                        Самые полезные блюда<br>
                        которые можно детям<br>
                        любого возраста
                    </p>
                </div>
                <div class="category">
                    <div class="icon">
                        <img src="/local/templates/recipes/img/ic-3.svg" class="card-category-ic-3" alt="">
                    </div>
                    <p class="chef">
                        От шеф-поваров
                    </p>
                    <p class="dishes">
                        Требуют умения,<br>
                        времени и терпения,<br>
                        зато как в ресторане
                    </p>
                </div>
                <div class="category">
                    <div class="icon">
                        <img src="/local/templates/recipes/img/ic-4.svg" class="card-category-ic-4" alt="">
                    </div>
                    <p class="holiday">
                        На праздник
                    </p>
                    <p class="dishes">
                        Чем удивить гостей,<br>
                        чтобы все были сыты за<br>
                        праздничным столом
                    </p>
                </div>
            </div>
        </div>
        <div class="section03">
            <div class="section03-content">
                <div class="section03-img">
                    <img src="/local/templates/recipes/img/soup.png" class="section03-img-soup" alt="">
                </div>
                <div class="section03-content-icons">
                    <div class="section03-icons">
                        <div class="yummy-rec-day">
                            <img src="/local/templates/recipes/img/rec-day.svg" alt=""> <img width="50"
                                                                                             src="/local/templates/recipes/img/yummy.svg"
                                                                                             height="50" alt=""
                                                                                             class="yummy">
                        </div>
                        <div class="post">
                            <img alt="like" src="/local/templates/recipes/img/like.svg" class="like">
                            <p class="click-like" id="number-click">
                            </p>
                        </div>
                        <div class="section03-icons-time">
                            <a href=""><img src="/local/templates/recipes/img/timer.svg" alt="" class="time"></a>
                            <p class="number-time">
                                35
                            </p>
                            <p class="number-time-text">
                                минут
                            </p>
                        </div>
                    </div>
                    <h2 class="section03-content-h2">Тыквенный супчик<br>
                        на кокосовом молоке</h2>
                    <p class="section03-content-p">
                        Если у вас осталась тыква, и вы не знаете что с ней сделать, то это решение для вас! Ароматный,
                        согревающий суп-пюре на кокосовом молоке. Можно даже в Пост!
                    </p>
                </div>
            </div>
            <div class="section03-content-group">
                <p class="section03-content-text">
                    @glazest
                </p>
            </div>
        </div>
        <div class="section06">
            <div class="section06-content">
                <h2 class="section06-content-h2">Поиск рецептов</h2>
                <p class="section06-content-p">
                    Введите примерное название блюда, а мы по тегам найдем его
                </p>
            </div>
            <div class="form">
                <form action="#">
                    <input type="text" class="input-dishes" placeholder="Название блюда">
                </form>
                <a class="btn-search" href="">Поиск</a>
            </div>
            <div class="text-dishes">
                <p>
                    Мясо Деликатесы Пироги Рыба
                </p>
            </div>
        </div>
    </main>
    <div class="pop-up" id="pop-up">
        <div class="pop-up-body" id="pop-up-body">
            <div class="pop-up-content" id="pop-up-content">
                <a href="#" class="pop-up-close" id="pop-up-close">✖</a>
                <div class="log-in-profile-text-h">
                    <h2 class="log-in-profile-h">Войдите в профиль</h2>
                </div>
                <div class="log-in-profile-text-p">
                    <p class="log-in-profile-p">
                        Добавлять рецепты могут только зарегистрированные<br>
                        пользователи.
                    </p>
                </div>
                <div class="log-in-profile-button">
                    <a class="button-login" href="#" id="button-login">Войти</a> <a class="button-registration" href="#"
                                                                                    id="button-registration">Регистрация</a>
                </div>
            </div>
        </div>
    </div>
    <div class="pop-up" id="pop-up-registration">
        <div class="pop-up-body-registration">
            <div class="pop-up-content-registration">
                <a href="#" class="pop-up-close" id="pop-up-close-reg">✖</a>
                <div class="log-in-profile-text-h">
                    <h2 class="log-in-profile-h">Регистрация</h2>
                </div>
                <form action="incs/signup.php" class="form-registration" name="registration" id="form-registration"
                      method="post">
                    <div class="form-input-name">
                        <input type="text" class="input-name" name="name" required="" placeholder="Имя" id="name"
                               data-reg="^[А-ЯЁ][а-яё]*$">
                    </div>
                    <div class="form-input-login">
                        <input type="text" class="input-login" name="login" reguired="" placeholder="Логин" id="login"
                               data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$">
                    </div>
                    <div class="form-input-password">
                        <div class="input-password">
                            <input type="password" name="password" required="" placeholder="Пароль" class="password"
                                   id="password"
                                   data-reg="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                            <p class="form-input-password-text">
                                Минимум 8 символов
                            </p>
                        </div>
                        <div class="input-repeat-password">
                            <input type="password" name="password_confirm" required="" placeholder="Повторите пароль"
                                   class="repeat-password" id="repetition-password"
                                   data-reg="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                        </div>
                    </div>
                    <div class="log-in-profile-button">
                        <input type="submit" class="log-in-profile-registration" id="button-check"
                               value="Зарегистрироваться"> <a class="log-in-profile-cancellation" href="#"
                                                              id="abolition">Отмена</a>
                    </div>
                </form>
                <div class="log-in-profile-a-text">
                    <a class="log-in-profile-account" href="#">У меня уже есть аккаунт</a>
                </div>
            </div>
        </div>
    </div>
    <div class="pop-up" id="pop-up-enter">
        <div class="pop-up-body">
            <div class="pop-up-content-enter">
                <div class="profile-exit">
                    <a href="#" class="pop-up-close" id="pop-up-exit-close">✖</a>
                </div>
                <div class="log-in-profile-text-h">
                    <h2 class="log-in-profile-h">Войти</h2>
                </div>
                <form action="incs/signin.php" class="form-enter" method="post">
                    <div class="form-input-login">
                        <input type="text" class="input-login" placeholder="Логин" id="input-login" name="login">
                    </div>
                    <div class="form-enter-password">
                        <input type="password" class="enter-password" placeholder="Пароль" id="enter-password"
                               name="password">
                    </div>
                    <div class="log-in-profile-button">
                        <input type="submit" class="log-in-profile-registration" id="button-check-double" value="Войти">
                        <a class="log-in-profile-cancellation" href="" id="button-abolition">Отмена</a>
                    </div>
                </form>
                <div class="enter-a-text">
                    <a class="enter-a-text-account" href="#">У меня ещё нет аккаунта</a>
                </div>
            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>