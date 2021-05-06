function initVue() {
    new Vue({
        el: '#app',
        data: {
          arrDischi:'',
        },
        methods: {

        },
        mounted() {
            axios.get('data.php')
                 .then(data => {
                const res = data.data;
                console.log(res);
                //console.log(res[0]['author'])
                this.arrDischi = res;


            })
            .catch(e => {
              console.log(error);
            })

        }
    });
}
function init() {
    initVue();
}
document.addEventListener('DOMContentLoaded', init);
