<template>
    <div class="card shadow">
        <div class="card-header bg-transparent">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                    <h2 class="mb-0">Total orders</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="chart">
                <!-- <canvas id="chart-orders" width="453" height="454" class="chart-canvas chartjs-render-monitor"
                    style="display: block; height: 350px; width: 349px;">
                </canvas> -->
                <barchart :chart-data="datacollection"></barchart>
            </div>
        </div>
    </div>
</template>

<script>
    import barchart from './linechart'

    export default {
        components: {
            barchart
        },
        data() {
            return {
                datacollection: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                        'October', 'November', 'December'
                    ],
                    datasets: [{
                        label: 'Quotations',
                        backgroundColor: '#f87979',
                        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                    }]
                }
            }
        },
        mounted() {

        },
        methods: {

        }
    }

</script>

</script>
