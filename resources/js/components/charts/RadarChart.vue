<script>
    import { Radar } from 'vue-chartjs'

    export default {
        extends: Radar,
        data() {
            return {
                chartdata: {
                    labels: ['관리체계 기반마련', '위험관리', '관리체계 운영', '관리체계 점검 및 개선'],
                    datasets: [
                        {
                            label: '이전 현황',
                            backgroundColor: 'transparent',
                            borderColor: 'rgba(247, 202, 24, 1)',
                            borderWidth: 2,
                            data: [10, 10, 10, 10]
                        },
                        {
                            label: '현재현황',
                            backgroundColor: 'transparent',
                            borderColor: 'rgba(65, 131, 215, 1)',
                            borderWidth: 2,
                            data: [20, 20, 20, 20]
                        }
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scale: {
                        ticks: {
                            beginAtZero: true,
                        }
                    }
                }
            };
        },
        mounted () {
            this.renderChart(this.chartdata, this.options)
        }
    }
</script>

<style>

</style>