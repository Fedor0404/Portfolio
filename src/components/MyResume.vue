<template>
    <div class="resume">
        <div class="container">
            <HeaderPattern :header="'Чем я буду полезен'" :subheader="'Опыт'" />
            <div class="resume__wreapper">
                <div class="resume__column">
                    <div class="resume__column-items">
                        <div class="resume__colum-item">
                            <h3 class="title title_fz20 resume__column-title">
                                бразование
                            </h3>
                            <ul>
                                <li>
                                    <div class="resume__item">
                                        <div class="resume__item-head">
                                            <div class="resume__item-icon">
                                                <img
                                                    src="../assets/img/icons/resume/University.svg"
                                                    alt="university"
                                                />
                                            </div>
                                            <h4 class="title title_fz14">
                                                Красноярский Государственный
                                                Университет
                                            </h4>
                                            <div
                                                class="resume__item-location title title_fz12"
                                            >
                                                Экономический факультет /
                                                Антикризисное управление |
                                                Красноярск (2000-2005)
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="resume__item">
                                        <div class="resume__item-head">
                                            <div class="resume__item-icon">
                                                <img
                                                    src="../assets/img/icons/resume/Courses.svg"
                                                    alt="university"
                                                />
                                            </div>
                                            <h4 class="title title_fz14">
                                                Самообразование, курсы на Udemy
                                            </h4>
                                            <div
                                                class="resume__item-location title title_fz12"
                                            >
                                                Frontend Developer
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="resume__colum-item">
                            <h3 class="title title_fz20 resume__column-title">
                                лючевые навыки
                            </h3>
                            <ul>
                                <li>
                                    <div class="resume__item">
                                        <div class="resume__item-head">
                                            <div class="resume__item-icon">
                                                <img
                                                    src="../assets/img/icons/resume/hardSkills.svg"
                                                    alt="university"
                                                />
                                            </div>
                                            <h4 class="title title_fz14">
                                                Hard skills
                                            </h4>
                                            <div
                                                class="resume__item-location title title_fz12"
                                            >
                                                HTML - middle CSS - middle SCSS
                                                - middle JavaScript - middle
                                                Vue.Js - junior SQL - junior
                                                WordPress - junior UI -
                                                Битрикс24 - Adobe Photoshop -
                                                Google Analytics -
                                                Яндекс.Метрика - Яндекс.Директ -
                                                SMM-продажи - SEO - Английский
                                                язык Pre-intermediate - Jira -
                                                Trello - Scrum
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="resume__item">
                                        <div class="resume__item-head">
                                            <div class="resume__item-icon">
                                                <img
                                                    src="../assets/img/icons/resume/softSkills.svg"
                                                    alt="university"
                                                />
                                            </div>
                                            <h4 class="title title_fz14">
                                                Soft skills
                                            </h4>
                                            <div
                                                class="resume__item-location title title_fz12"
                                            >
                                                Договорная работа - Ведение
                                                переговоров - Руководство
                                                коллективом - Разработка
                                                регламентов - Планирование
                                                закупок - Работа с поставщиками
                                                - Работа с распределенной
                                                командой - Командная работа -
                                                Критическое мышление - Адаптация
                                                к новым условиям - Обучаемость
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="resume__column">
                    <h3 class="title title_fz20 resume__column-title">
                        пыт работы
                    </h3>
                    <ul>
                        <li>
                            <div class="resume__item">
                                <div class="resume__item-head">
                                    <div class="resume__item-icon">
                                        <img
                                            src="../assets/img/icons/resume/Developer.svg"
                                            alt="university"
                                        />
                                    </div>
                                    <h4 class="title title_fz14">
                                        {{ pm.name }}
                                    </h4>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        {{ pm.post }}
                                    </div>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        <a v-bind:href="pm.site.href">{{
                                            pm.site.visible
                                        }}</a>
                                    </div>

                                    <div
                                        class="resume__item-more title title_fz12 pt-2"
                                        @click="openItems"
                                        id="10"
                                    >
                                        Подробнее
                                        <i
                                            id="10"
                                            class="bi"
                                            v-bind:class="{
                                                'bi-caret-down':
                                                    isOpen !== pm.id
                                                        ? true
                                                        : false,
                                                'bi-caret-up':
                                                    isOpen == pm.id
                                                        ? true
                                                        : false,
                                            }"
                                        ></i>
                                    </div>
                                </div>

                                <div
                                    class="resume__item-body title title_fz12"
                                    v-if="isOpen == 10"
                                >
                                    <div
                                        class="resume__duties title_fz12"
                                        style="font-weight: bold"
                                    >
                                        Основные обязанности:
                                    </div>

                                    <div>
                                        <div
                                            class="ps-2"
                                            v-for="item in pm.duties"
                                            :key="item"
                                        >
                                            {{ item }}
                                        </div>
                                    </div>

                                    <div
                                        class="resume__duties title_fz12 pt-2"
                                        style="font-weight: bold"
                                    >
                                        Достижения:
                                    </div>
                                    <div
                                        class="ps-2"
                                        v-for="item in pm.gols"
                                        :key="item"
                                    >
                                        {{ item }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="resume__item">
                                <div class="resume__item-head">
                                    <div class="resume__item-icon">
                                        <img
                                            src="../assets/img/icons/resume/Developer.svg"
                                            alt="university"
                                        />
                                    </div>
                                    <h4 class="title title_fz14">
                                        {{ srm.name }}
                                    </h4>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        {{ srm.post }}
                                    </div>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        <a v-bind:href="srm.site.href">{{
                                            srm.site.visible
                                        }}</a>
                                    </div>

                                    <div
                                        class="resume__item-more title title_fz12 pt-2"
                                        @click="openItems"
                                        id="1"
                                    >
                                        Подробнее
                                        <i
                                            id="1"
                                            class="bi"
                                            v-bind:class="{
                                                'bi-caret-down':
                                                    isOpen !== srm.id
                                                        ? true
                                                        : false,
                                                'bi-caret-up':
                                                    isOpen == srm.id
                                                        ? true
                                                        : false,
                                            }"
                                        ></i>
                                    </div>
                                </div>

                                <div
                                    class="resume__item-body title title_fz12"
                                    v-if="isOpen == 1"
                                >
                                    <div
                                        class="resume__duties title_fz12"
                                        style="font-weight: bold"
                                    >
                                        Основные обязанности:
                                    </div>

                                    <div>
                                        <div
                                            class="ps-2"
                                            v-for="item in srm.duties"
                                            :key="item"
                                        >
                                            {{ item }}
                                        </div>
                                    </div>

                                    <div
                                        class="resume__duties title_fz12 pt-2"
                                        style="font-weight: bold"
                                    >
                                        Достижения:
                                    </div>
                                    <div
                                        class="ps-2"
                                        v-for="item in srm.gols"
                                        :key="item"
                                    >
                                        {{ item }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="resume__item">
                                <div class="resume__item-head">
                                    <div class="resume__item-icon">
                                        <img
                                            src="../assets/img/icons/resume/Developer.svg"
                                            alt="university"
                                        />
                                    </div>
                                    <h4 class="title title_fz14">
                                        {{ puzzleup.name }}
                                    </h4>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        {{ puzzleup.post }}
                                    </div>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        <a
                                            target="_blank"
                                            v-bind:href="puzzleup.site.href"
                                            >{{ puzzleup.site.visible }}</a
                                        >
                                    </div>

                                    <div
                                        class="resume__item-more title title_fz12 pt-2"
                                        @click="openItems"
                                        id="2"
                                    >
                                        Подробнее
                                        <i
                                            id="2"
                                            class="bi"
                                            v-bind:class="{
                                                'bi-caret-down':
                                                    isOpen !== puzzleup.id
                                                        ? true
                                                        : false,
                                                'bi-caret-up':
                                                    isOpen == puzzleup.id
                                                        ? true
                                                        : false,
                                            }"
                                        ></i>
                                    </div>
                                </div>

                                <div
                                    class="resume__item-body title title_fz12"
                                    v-if="isOpen == 2"
                                >
                                    <div
                                        class="resume__duties title_fz12"
                                        style="font-weight: bold"
                                    >
                                        Основные обязанности:
                                    </div>

                                    <div>
                                        <div
                                            class="ps-2"
                                            v-for="item in puzzleup.duties"
                                            :key="item"
                                        >
                                            {{ item }}
                                        </div>
                                    </div>

                                    <div
                                        class="resume__duties title_fz12 pt-2"
                                        style="font-weight: bold"
                                    >
                                        Достижения:
                                    </div>
                                    <div
                                        class="ps-2"
                                        v-for="item in puzzleup.gols"
                                        :key="item"
                                    >
                                        {{ item }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="resume__item">
                                <div class="resume__item-head">
                                    <div class="resume__item-icon">
                                        <img
                                            src="../assets/img/icons/resume/Developer.svg"
                                            alt="university"
                                        />
                                    </div>
                                    <h4 class="title title_fz14">
                                        {{ agu24.name }}
                                    </h4>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        {{ agu24.post }}
                                    </div>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        <a
                                            target="_blank"
                                            v-bind:href="agu24.site.href"
                                            >{{ agu24.site.visible }}</a
                                        >
                                    </div>

                                    <div
                                        class="resume__item-more title title_fz12 pt-2"
                                        @click="openItems"
                                        id="3"
                                    >
                                        Подробнее
                                        <i
                                            id="3"
                                            class="bi"
                                            v-bind:class="{
                                                'bi-caret-down':
                                                    isOpen !== agu24.id
                                                        ? true
                                                        : false,
                                                'bi-caret-up':
                                                    isOpen == agu24.id
                                                        ? true
                                                        : false,
                                            }"
                                        ></i>
                                    </div>
                                </div>

                                <div
                                    class="resume__item-body title title_fz12"
                                    v-if="isOpen == 3"
                                >
                                    <div
                                        class="resume__duties title_fz12"
                                        style="font-weight: bold"
                                    >
                                        Основные обязанности:
                                    </div>

                                    <div>
                                        <div
                                            class="ps-2"
                                            v-for="item in agu24.duties"
                                            :key="item"
                                        >
                                            {{ item }}
                                        </div>
                                    </div>

                                    <div
                                        class="resume__duties title_fz12 pt-2"
                                        style="font-weight: bold"
                                    >
                                        Достижения:
                                    </div>
                                    <div
                                        class="ps-4"
                                        v-for="item in agu24.gols"
                                        :key="item"
                                    >
                                        {{ item }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="resume__item">
                                <div class="resume__item-head">
                                    <div class="resume__item-icon">
                                        <img
                                            src="../assets/img/icons/resume/Developer.svg"
                                            alt="university"
                                        />
                                    </div>
                                    <h4 class="title title_fz14">
                                        {{ mc.name }}
                                    </h4>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        {{ mc.post }}
                                    </div>
                                    <div
                                        class="resume__item-location title title_fz12"
                                    >
                                        <a
                                            target="_blank"
                                            v-bind:href="mc.site.href"
                                            >{{ mc.site.visible }}</a
                                        >
                                    </div>

                                    <div
                                        class="resume__item-more title title_fz12 pt-2"
                                        @click="openItems"
                                        id="4"
                                    >
                                        Подробнее
                                        <i
                                            id="4"
                                            class="bi"
                                            v-bind:class="{
                                                'bi-caret-down':
                                                    isOpen !== mc.id
                                                        ? true
                                                        : false,
                                                'bi-caret-up':
                                                    isOpen == mc.id
                                                        ? true
                                                        : false,
                                            }"
                                        ></i>
                                    </div>
                                </div>

                                <div
                                    class="resume__item-body title title_fz12"
                                    v-if="isOpen == 4"
                                >
                                    <div
                                        class="resume__duties title_fz12"
                                        style="font-weight: bold"
                                    >
                                        Основные обязанности:
                                    </div>

                                    <div>
                                        <div
                                            class="ps-2"
                                            v-for="item in mc.duties"
                                            :key="item"
                                        >
                                            {{ item }}
                                        </div>
                                    </div>

                                    <div
                                        class="resume__duties title_fz12 pt-2"
                                        style="font-weight: bold"
                                    >
                                        Достижения:
                                    </div>
                                    <div
                                        class="ps-2"
                                        v-for="item in mc.gols"
                                        :key="item"
                                    >
                                        {{ item }}
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'MyResume',
    data() {
        return {
            pm: {
                id: 10,
                name: 'Kolos studio – веб студия',
                post: 'Project manager | октябрь 2022 г. - настоящее время',
                site: {
                    visible: 'www.kolosstudio.ru',
                    href: 'https://www.kolosstudio.ru/',
                },

                duties: [
                    '- Согласование работ с заказчиком',
                    '- Проектирование, декомпозиция, запуск спринтов в работу',
                    '- Определение приоритетов, оценка, создание и распределение задач',
                    '- Отслеживание состояния и прогресса проекта, ресурсов',
                    '- Обработка обратной связи от заказчика, транслирование ее команде',
                    '- Составление и согласование смет',
                ],
                gols: [
                    '- Своевременно реализация спринтов',
                    '- Реализовал 95% целей, запланированных на 4 квартал 2022 год',
                    '- Согласование с заказчиком рефактиринга МП',
                ],
            },
            srm: {
                id: 1,
                name: 'Сlean-Сontrol.ru – CRM- система для предприятий, оказывающих услуги автовладельцам',
                post: 'Основатель | 2010 г. - июль 2022 г.',
                site: {
                    visible: 'www.clean-control.ru',
                    href: 'https://clean-control.ru/',
                },

                duties: [
                    '- Организация работы программистов при ограниченном бюджете',
                    '- Постановка ТЗ для реализации новых функций программного продукта',
                    '- Контроль работы службы технической поддержки',
                    '- Разработка и оценка экономическойцелесообразности реализации функционала, поступающего по обратной связи',
                    '- Работа с рекламными площадками по закупке трафика',
                    '- Интеграция со сторонними сервисами',
                ],
                gols: [
                    '- Более 900 реализованных копий',
                    '- Топ-3 в поисковых выдачах яндекс, google',
                    '- 90 % клиентов при открытии новых филиалов совершают повторные покупки',
                ],
            },
            puzzleup: {
                id: 2,
                name: 'PuzzleUp – мобильная игра по сбору пазлов online  на скорость',
                post: 'Основатель | август 2015 – октябрь 2016',
                site: {
                    visible: 'Скрины игровых экранов и Instagram',
                    href: 'https://disk.yandex.ru/d/LNqvsluIHcRZ4A',
                },
                duties: [
                    '- Разработка игровой механики и скетч-макетов интерфейса',
                    '- Работа с аутсорс компанией-разработчиком,  подготовка договоров и NDA-соглашений',
                    '- Контроль выполнения ТЗ',
                    '- Рекламная компания в MyTarget и Facebook/ Instagram',
                    '- Работа с магазином приложений AppStore',
                    '- SMM',
                    '- Локализация приложения под самые распространенные языки мира',
                ],
                gols: [
                    '- Публикация приложения на 8 основных языках',
                    '- Нахождение приложения на 5-10 месте в локациях Россия, Канада, Италия, Франция в категории Puzzle в течение 1 месяца',
                    '- Приложение было закрыто, так как не был правильно оценен бюджет для международной  экспансии',
                ],
            },
            agu24: {
                id: 3,
                name: 'Agu24.ru – товары для новорожденных с доставкой по городу Красноярску',
                post: 'Основатель | июль 2013  – август 2014',
                site: {
                    visible: 'Скрин сайта',
                    href: 'https://disk.yandex.ru/d/zblwiVtzLjv5WQ',
                },
                duties: [
                    '- Работа с поставщиками',
                    '- Формирование call центра ',
                    '- Формирование службы доставки',
                    '- Привлечение трафика ',
                ],
                gols: [
                    '- Вывод по ключевым запросам в выдаче yandex, google в top 10',
                    '- Повторные продажи в 20 %',
                    '- Продажа бизнеса',
                ],
            },
            mc: {
                id: 4,
                name: 'Melody-club.ru – бизнес по закачке мелодий на телефоны',
                post: 'Основатель | 2003  – 2007',
                site: {
                    visible: 'Материалы не сохранились',
                    href: '#',
                },
                duties: [
                    '- Ведение переговоров с поставщиками оборудования',
                    '- Ведение переговоров с собственниками помещений',
                    '- Реализация стратегии развития',
                    '- Формирование коллектива',
                ],
                gols: [
                    '- 7 торговых точек по г. Красноярску',
                    '- Формирование франшизы и ее продажа по России и странам СНГ',
                    '- Разработка программного обеспечения для автоматизации и контроля работы оператора на точках по закачке мелодий',
                ],
            },

            isOpen: null,
            arrowDown: true,
            arrowUp: false,
        };
    },
    methods: {
        openItems(e) {
            let event = e.target.id;
            this.isOpen === event
                ? (this.isOpen = event)
                : (this.isOpen = null);
            if (
                this.arrowDown == true &&
                (this.isOpen === event || this.isOpen === null)
            ) {
                this.arrowDown = false;
                this.arrowUp = true;
            } else {
                this.arrowDown = true;
                this.arrowUp = false;
            }
            this.isOpen === null ? (this.isOpen = event) : (this.isOpen = null);
        },
    },
};
</script>

<style lang="scss">
@import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css');
.resume {
    padding-top: 120px;
    &__wreapper {
        padding: 60px 65px 0 65px;
        display: grid;
        justify-content: center;
        grid-template-columns: repeat(2, 425px);
        column-gap: 135px;
    }
    &__column {
        &-title {
            position: relative;
            padding-left: 42px;
            &:before {
                content: '';
                position: absolute;
                width: 17px;
                height: 21px;
                border-radius: 100%;
                background: #a718ff;
                left: 24px;
                top: 45%;
                transform: translateY(-50%);
            }
        }
        &-items {
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: space-between;
        }
        ul {
            list-style-type: none;
            li:not(.resume__list) {
                position: relative;
                &:after {
                    content: '';
                    width: 1px;
                    height: calc(100% + 14px);
                    position: absolute;
                    top: -14px;
                    left: 0;
                    background-color: #000;
                }
            }
        }
    }
    &__item {
        position: relative;
        &::before {
            content: '';
            height: 1px;
            width: 35px;
            position: absolute;
            top: 69px;
            background-color: #000;
        }

        &-head {
            position: relative;
            padding: 50px 0 0 100px;
            h4 {
                margin-bottom: 0;
            }
        }
        &-body {
            padding-left: 43px;
            margin-top: 12px;
        }
        &-icon {
            position: absolute;
            top: 59px;
            left: 44px;
        }
        &-location {
            margin-top: 5px;
        }
        &-more {
            cursor: pointer;
            display: contents;
        }
    }
}
</style>
