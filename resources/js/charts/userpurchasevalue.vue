<template>
    
    <div class="card bg-gradient-default shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                            <h2 class="text-white mb-0">Purchase value</h2>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales"
                                    data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}'
                                    data-prefix="$" data-suffix="k">
                                    <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                        <span class="d-none d-md-block">Month</span>
                                        <span class="d-md-none">M</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-toggle="chart" data-target="#chart-sales"
                                    data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}'
                                    data-prefix="$" data-suffix="k">
                                    <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                        <span class="d-none d-md-block">Week</span>
                                        <span class="d-md-none">W</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        
                        <linechart :chart-data="datacollection" class="chart-canvas" :options="options" style=""></linechart>
                    </div>
                </div>
            </div>
</template>

<script>
    import linechart from './linechart'

    export default {
        components: {
            linechart
        },
        data() {
            return {
                datacollection: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                        'October', 'November', 'December'
                    ],
                    datasets: [{
                        label: 'Quotations',
                        backgroundColor: 'transparent',
                        data: [12, 2, 8, 6, 8, 3, 8, 5, 9, 10, 4, 12],
                        fontColor: 'white',
                        fontSize: '20px',
                        borderColor: 'white'
                    }],
                    
                },
                options: {
                    defaultFontColor: '#ffffff',
                    defaultFontSize: '18px',
                    scales: {
                        yAxes: [
                            {
                                ticks: {
                                    beginAtZero: true
                                },
                                fontColor: 'white'
                            }]
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        labels: {
                            // This more specific font property overrides the global property
                            fontColor: 'white'
                        }
                    },
                    datasets: {
                        fontColor: 'white',
                        fontSize: '20px'
                    }
                    
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
