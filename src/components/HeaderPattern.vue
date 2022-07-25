<template>
    <div>
        <h3 class="tools__subheader title title_fz16 title_subheader">
            <img
                src="../assets/img/icons/Circle.svg"
                class="title title__circle"
                alt="circle"
            />
            {{ subheader }}
        </h3>
        <h2 class="tools__header title title_fz36 title_header">
            {{ header }}
        </h2>
        <div class="divider"></div>
    </div>
</template>

<script>
export default {
    name: 'HeaderPattern',
    props: {
        subheader: {
            type: String,
            default: '',
        },
        header: {
            type: String,
            default: '',
        },
    },
};
</script>

<style lang="scss">
.divider {
    width: 60px;
    height: 3px;
    background-color: $main-color;
    margin: 25px auto 0 auto;
}
</style>
