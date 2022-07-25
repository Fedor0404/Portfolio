<template>
    <div class="portfolio">
        <div class="container">
            <HeaderPattern :header="'Мои работы'" :subheader="'Портфолио'" />

            <div class="portfolio__img">
                <a class="portfolio__item">
                    <div class="portfolio__item-header">
                        Сайт аренды авто
                        <div class="portfolio__item-link">
                            Исходники <br />
                            <a href="https://github.com/Fedor0404/uber">
                                <svg
                                    width="20"
                                    height="19"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M10 0C4.475 0 0 4.362 0 9.741c0 4.305 2.865 7.955 6.838 9.242.5.092.683-.21.683-.468 0-.232-.008-.844-.013-1.657-2.781.588-3.368-1.306-3.368-1.306-.455-1.125-1.112-1.425-1.112-1.425-.906-.604.07-.592.07-.592 1.004.068 1.531 1.004 1.531 1.004.892 1.49 2.341 1.059 2.913.81.09-.63.347-1.059.633-1.302-2.22-.244-4.555-1.082-4.555-4.814 0-1.063.388-1.932 1.03-2.614-.113-.246-.45-1.236.087-2.578 0 0 .837-.26 2.75.999a9.82 9.82 0 012.5-.329c.85.005 1.7.112 2.5.329 1.9-1.26 2.737-.999 2.737-.999.538 1.342.2 2.332.1 2.578a3.719 3.719 0 011.025 2.614c0 3.742-2.337 4.566-4.562 4.805.35.293.675.89.675 1.803 0 1.303-.013 2.35-.013 2.667 0 .256.175.56.688.463 4-1.279 6.863-4.932 6.863-9.23C20 4.361 15.523 0 10 0z"
                                        fill="#fff"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- <span>
                        <img src="../assets/img/works/information.png" />
                    </span> -->
                    <img src="../assets/img/works/uber.jpg" alt="uber" />
                </a>
                <a href="#" class="portfolio__item">
                    <div class="portfolio__item-header">
                        <div class="portfolio__item-paragraf">Приве?</div>
                    </div>
                    <img src="../assets/img/works/pulse.jpg" alt="pulse" />
                </a>
                <a href="#" class="portfolio__item">
                    <div class="portfolio__item-header">
                        <div class="portfolio__item-paragraf">
                            Доставка товаров из Китая
                            <div class="portfolio__item-link">
                                Исходники <br />
                                <a href="https://github.com/Fedor0404/glopt">
                                    <svg
                                        width="20"
                                        height="19"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M10 0C4.475 0 0 4.362 0 9.741c0 4.305 2.865 7.955 6.838 9.242.5.092.683-.21.683-.468 0-.232-.008-.844-.013-1.657-2.781.588-3.368-1.306-3.368-1.306-.455-1.125-1.112-1.425-1.112-1.425-.906-.604.07-.592.07-.592 1.004.068 1.531 1.004 1.531 1.004.892 1.49 2.341 1.059 2.913.81.09-.63.347-1.059.633-1.302-2.22-.244-4.555-1.082-4.555-4.814 0-1.063.388-1.932 1.03-2.614-.113-.246-.45-1.236.087-2.578 0 0 .837-.26 2.75.999a9.82 9.82 0 012.5-.329c.85.005 1.7.112 2.5.329 1.9-1.26 2.737-.999 2.737-.999.538 1.342.2 2.332.1 2.578a3.719 3.719 0 011.025 2.614c0 3.742-2.337 4.566-4.562 4.805.35.293.675.89.675 1.803 0 1.303-.013 2.35-.013 2.667 0 .256.175.56.688.463 4-1.279 6.863-4.932 6.863-9.23C20 4.361 15.523 0 10 0z"
                                            fill="#fff"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img
                        src="../assets/img/works/delivery_china.png"
                        alt="bread"
                    />
                </a>
                <a href="#" class="portfolio__item plans">
                    <div class="portfolio__item-header">
                        <div class="portfolio__item-paragraf">Приве?</div>
                    </div>
                    <img src="../assets/img/works/plans.jpg" alt="plans" />
                </a>
                <a href="#" class="portfolio__item">
                    <img src="../assets/img/works/ipad.jpg" alt="ipad" />
                </a>
                <a href="#" class="portfolio__item mac">
                    <img src="../assets/img/works/mac.jpg" alt="mac" />
                </a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    Name: 'MyPortfolio',
    methods: {
        // onmousemove() {
        //     var div = document.querySelector('.portfolio__item-header');
        //     console.log(div);
        //     div.style.display = document.querySelector(
        //         '.portfolio__item-header'
        //     )
        //         ? 'block'
        //         : 'none';
        // },
        // offmousemove() {
        //     var div = document.querySelector('.portfolio__item-header');
        //     console.log(div);
        //     div.style.display = document.querySelector(
        //         '.portfolio__item-header'
        //     )
        //         ? 'none'
        //         : 'block';
        // },
    },
};
</script>

<style lang="scss">
@import 'animate.css';

.portfolio {
    padding-top: 120px;
    &__img {
        position: relative;
        margin-top: 60px;
        display: grid;
        justify-content: center;
        grid-template: repeat(2, 280px) / repeat(4, 280px);
        grid-auto-rows: 280px;
        gap: 5px;
        .mac {
            grid-column: 2 / 4;
            grid-row: 2 / 3;
        }

        .plans {
            grid-row: 1 / 3;
            grid-column: 4 / 5;
        }
    }
    &__item {
        position: relative;
        overflow: hidden;
        &:hover {
            animation: bounce 1s;
            animation-fill-mode: forwards;
        }
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        &-header {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            color: white;
            text-align: center;
            padding: 10px;
            transition: opacity 0.5s;
            left: 0;
        }
        &-tools {
        }
        &-link {
            padding-top: 20px;
            text-transform: uppercase;
        }
        &:hover & {
            &-header {
                opacity: 1;
            }
        }
    }
}
</style>
