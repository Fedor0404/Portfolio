<template>
    <div class="tools">
        <div class="container">
            <HeaderPattern
                :header="'Что я использую в работе'"
                :subheader="'Навыки'"
            />

            <div class="tools__tech">
                <div class="tools__item">
                    <div class="tools__wreaper">
                        <img
                            src="../assets/img/icons/tools/html5.svg"
                            alt="html5"
                            class="tools__item-img"
                        />
                        <div class="tools__item-header title_fz14">HTML5</div>
                        <div class="tools__item-descr">
                            Именно он создает каркас вашего сайта или
                            приложения, а пятая версия позволит мне создавать
                            более SEO-оптимизированную структуру вашего продукта
                        </div>
                    </div>
                </div>

                <div class="tools__item">
                    <div class="tools__wreaper">
                        <img
                            src="../assets/img/icons/tools/css3.svg"
                            alt="css3"
                            class="tools__item-img"
                        />
                        <div class="tools__item-header title_fz14">CSS3</div>
                        <div class="tools__item-descr">
                            Этот язык стилей позволяет мне создавать абсолютно
                            любой внешний вид вашего сайта или приложения. Все
                            ограничивается только вашей фантазией!
                        </div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__wreaper">
                        <img
                            src="../assets/img/icons/tools/JS.svg"
                            alt="js"
                            class="tools__item-img"
                        />
                        <div class="tools__item-header title_fz14">
                            Java Script
                        </div>
                        <div class="tools__item-descr">
                            Этот язык программирования позволяет оживить все что
                            угодно: слайдеры, окна, подсказки, вкладки,
                            получение данных от сервера и многое другое
                        </div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__wreaper">
                        <img
                            src="../assets/img/icons/tools/vuejs.svg"
                            alt="vuejs"
                            class="tools__item-img"
                        />
                        <div class="tools__item-header title_fz14">Vue.js</div>
                        <div class="tools__item-descr">
                            JavaScript-фреймворк с открытым исходным кодом для
                            создания пользовательских интерфейсов. Может
                            функционировать как веб-фреймворк для разработки
                            одностраничных приложений в реактивном стиле.
                        </div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__wreaper">
                        <img
                            src="../assets/img/icons/tools/sass.svg"
                            alt="sass"
                            class="tools__item-img"
                        />
                        <div class="tools__item-header title_fz14">
                            SASS / SCSS
                        </div>
                        <div class="tools__item-descr">
                            SASS / SCSS позволит ускорить разработку. CSS с
                            суперсилой.
                        </div>
                    </div>
                </div>
                <div class="tools__item">
                    <div class="tools__wreaper" id="node">
                        <img
                            src="../assets/img/icons/tools/bootstrap.svg"
                            alt="boostrap"
                            class="tools__item-img"
                        />
                        <div class="tools__item-header title_fz14">
                            Boostrap
                        </div>
                        <div class="tools__item-descr">
                            Bootstrap, самая популярной в мире платформой для
                            создания адаптивных, ориентированных на мобильные
                            устройства сайтов.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'MyTools',
};
</script>

<style lang="scss">
.tools {
    padding-top: 120px;
    &__tech {
        padding: 60px 10px 0 10px;
        display: grid;
        justify-content: center;
        grid-template: repeat(auto-fill, 270px) / repeat(auto-fill, 270px);
        grid-auto-rows: minmax(270px, auto);
        gap: 13px;
    }
    &__item {
        border: 1px solid #000000;
        &-header {
            margin-top: 20px;
        }
        &-descr {
            margin-top: 15px;
            width: 211px;
            font-weight: 500;
            font-size: 13px;
            line-height: 18px;
        }
        img {
            width: 50px;
        }
    }
    &__wreaper {
        margin-left: 30px;
        margin-top: 30px;
    }
    &__jquerty {
        margin-top: 53px;
    }
}
</style>
