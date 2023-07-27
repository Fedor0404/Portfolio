<template>
    <div class="promo">
        <div class="container">
            <div class="promo__dots">
                <img src="../assets/img/icons/Circle.svg" alt="circle" />
            </div>
            <div class="promo__behind title title_fz16">
                Меня зовут Фёдор Кормачев
            </div>
            <h1 class="promo__title title title_fz48">
                I am web developer <br />
                and project manager
            </h1>
        </div>
    </div>
</template>

<script>
export default {
    name: 'MyPromo',
};
</script>

<style lang="scss">
.promo {
    min-height: 100vh;
    position: relative;
    background: url('@/assets/img/bg/Background.png') no-repeat 50% / cover;
    padding-top: 300px;
    &__title {
        width: 535px;
        margin-top: 10px;
    }
    &__dots {
        position: relative;
        top: 31px;
        left: -20px;
        z-index: 1;
    }
    &__behind {
        position: relative;
        z-index: 2;
    }
    &__btns {
        margin-top: 25px;
        display: flex;
        width: 285px;
        align-items: center;
        justify-content: space-between;
    }
    &__link {
        color: black;
        font-weight: bold;
        transition: all 0.6s;
        &:hover {
            color: $main-color;
            text-decoration: none;
        }
    }
}
</style>
