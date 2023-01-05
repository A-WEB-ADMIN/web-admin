/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;


import VModal from 'vue-js-modal'
Vue.use(VModal, { dynamicDefault: { draggable: true, resizable: true } })
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
/*============================================================
=
= 1. 자산
=
=============================================================*/
    /*------------------
    - 양식 modal
    -------------------*/
    Vue.component('asset-crud-pin', require('./components/pins/AssetCrudPin').default);
    /*------------------
    - 자산 설정
    -------------------*/
    Vue.component('asset-config', require('./components/configs/AssetConfig').default);
/*============================================================
=
= 2. 진단
=
=============================================================*/

    /*-------------------
    - 1 도넛 차트
    --------------------*/
    Vue.component('doughnut-chart', require('./components/charts/DoughnutChart').default);

    /*-------------------
    - 2 레이더 차트
    --------------------*/
    Vue.component('radar-chart', require('./components/charts/RadarChart').default);

    /*-------------------
    - 3 막대 차트
    --------------------*/
    Vue.component('stacked-bar-chart', require('./components/charts/StackedBarChart').default);







/*============================================================
=
= 4. 증적
=
=============================================================*/
    /*------------------
    - 결재라인
    -------------------*/
    Vue.component('approval-line-pin', require('./components/pins/ApprovalLinePin').default);

    /*------------------
    - 통제항목 BOX
    -------------------*/
    Vue.component('control-item-box', require('./components/boxs/ControlItemBox').default);

    /*------------------
    - 담당자 BOX
    -------------------*/
    Vue.component('evidence-manager-box', require('./components/boxs/EvidenceManagerBox').default);

    /*--------------------------------------------------
    - 증적양식 선택하기  [ 메뉴별 폴더로 변경 ]
    ---------------------------------------------------*/
    Vue.component('button-form', require('./components/evidences/modals/ButtonForm').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
