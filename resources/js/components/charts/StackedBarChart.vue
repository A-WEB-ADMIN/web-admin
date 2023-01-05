<script>
import { Bar } from 'vue-chartjs'
import chartjsPluginDatalabels from 'chartjs-plugin-datalabels'

export default {
    extends: Bar,
    props: ['domains', 'goods', 'bads', 'not_dones'],
    data() {
        return {
            chartdata: {
                labels: this.domains,
                datasets: [
                    {
                        label: '양호',
                        backgroundColor: '#00C0C0',
                        data: this.goods
                    },
                    {
                        label: '취약',
                        backgroundColor: '#FF8080',
                        data: this.bads
                    },
                    {
                        label: '미진단',
                        backgroundColor: 'gray',
                        data: this.not_dones
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [
                        {
                            stacked: true
                        }
                    ],
                    xAxes: [
                        {
                            stacked: true
                        }
                    ]
                },
                plugins: {
                    datalabels: {
                        color: 'white',
                        font: {
                            size: 20
                        },
                        display: function (context) {
                            return context.dataset.data[context.dataIndex] !==0;
                        }
                    }
                }
            }
        };
    },
    mounted () {
        this.addPlugin(chartjsPluginDatalabels)
        this.renderChart(this.chartdata, this.options)
    },

}
</script>

<style>

</style>