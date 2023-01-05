<script>
    import { Doughnut } from 'vue-chartjs'
    import chartjsPluginDoughnutlabel from "chartjs-plugin-doughnutlabel";

    export default {
        extends: Doughnut,
        props: ['bad_percent'],
        data() {
            return {
                chartData: {
                    datasets: [
                        {
                            backgroundColor: ['gray', 'red'],
                            data: [100 - this.bad_percent, this.bad_percent]
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutoutPercentage: 85,
                    plugins: {
                        doughnutlabel: {
                            labels: [
                                {
                                    text: '취약',
                                    font: {
                                        size: 50
                                    }
                                },
                                {
                                    text: this.bad_percent +'%',
                                    font: {
                                        size: 40
                                    }
                                }
                            ]
                        }
                    }
                }
            }
        },
        mounted() {
            console.log("_total", this.total);
            console.log("_bads", this.bads);
            this.addPlugin(chartjsPluginDoughnutlabel)
            this.renderChart(this.chartData, this.options)
        }
    }
</script>