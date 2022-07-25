const { defineConfig } = require('@vue/cli-service');
module.exports = defineConfig({
    transpileDependencies: true,
    publicPath: process.env.NODE_ENV === 'production' ? '' : '',
    css: {
        loaderOptions: {
            scss: {
                additionalData: `@import "~@/assets/scss/styles.scss";`,
            },
        },
    },
});
// module.exports = {
//     css: {
//         loaderOptions: {
//             scss: {
//                 additionalData: `@import "~@/assets/scss/styles.scss";`,
//             },
//         },
//     },
// };
