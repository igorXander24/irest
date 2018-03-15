require('./bootstrap');

Vue.component('example', require('./components/ExampleComponent.vue'));
const app = new Vue({
    el: '#irest'
});
