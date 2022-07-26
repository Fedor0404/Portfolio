<template>
    <div id="app">
        <SlidePanel />
        <MyPromo />
        <MyResume />
        <MyTools />
        <MyPortfolio />
        <MyContact />
    </div>
</template>

<script>
import MyPromo from './components/MyPromo.vue';
import MyResume from './components/MyResume.vue';
import MyTools from './components/MyTools.vue';
import MyPortfolio from './components/MyPortfolio.vue';
import MyContact from './components/MyContact/MyContact.vue';
import SlidePanel from './components/SlidePanel.vue';

export default {
    name: 'App',
    components: {
        MyPromo,
        MyResume,
        MyTools,
        MyPortfolio,
        MyContact,
        SlidePanel,
    },
};
</script>

<style lang="scss">
//To-Do Надо подумать как убрать импорт main-colir от сюда

#app {
    font-family: Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
