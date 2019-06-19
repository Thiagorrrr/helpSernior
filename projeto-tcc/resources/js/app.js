
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

$(document).ready(function () {
    function hamburguerAction() {
        let hamburguer = document.querySelector(".header__hamburguer");
        let headerWrapper = document.querySelector(".header__wrapper");
        let headerLista = document.querySelector(".header__lista");
        let inner = document.querySelector(".header__inner");
        let headerLink = document.querySelector(".header__wrapper");

        function actionCLick(event) {
            event.addEventListener("click", () => {
                hamburguer.classList.toggle("header__hamburguer--active");
                headerWrapper.classList.toggle("header__wrapper--active");
                headerLista.classList.toggle("header__lista--active");
                inner.classList.toggle("header__inner--active");
                headerWrapper.classList.add("header__wrapper--none");

                setTimeout(() => {
                    headerWrapper.classList.remove("header__wrapper--none");
                }, 300);
            })
        }
        actionCLick(hamburguer);
        actionCLick(headerLink);
    }
    function smoothScrollTop() {
        let scroll = document.querySelector(".footer__scroll-to-top");

        scroll.addEventListener("click", () => {
            window.scroll({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        })
    }
    function loginBox() {
        let headerUser = document.querySelector(".header__user");
        let boxLogin = document.querySelector(".header__login-box");

        headerUser.addEventListener("click", () => boxLogin.classList.toggle("header__login-box--active")
        );
    }
    hamburguerAction();
    smoothScrollTop();
    loginBox();
});


