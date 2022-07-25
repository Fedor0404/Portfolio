<template>
    <div class="hamburger" @click="$emit('onClick')">
        <span></span>
        <span class="long"></span>
        <span></span>
    </div>
</template>

<script>
export default {
    name: 'HamburgerPromo',
    // method: {
    //     ClickHamburger() {},
    // },
};
</script>

<style lang="scss">
@import 'animate.css';
.hamburger {
    position: absolute;
    top: 20px;
    right: 2%;
    height: 21px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flex-end;
    cursor: pointer;
    animation: backInLeft 1s;
    animation-fill-mode: forwards;
    visibility: visible;

    span {
        display: block;
        width: 30px;
        height: 3px;
        background-color: #151812;
    }

    span.long {
        width: 36px;
    }
}
</style>
