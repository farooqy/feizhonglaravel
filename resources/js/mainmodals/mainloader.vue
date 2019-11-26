<template>
    <div id="hellopreloader" style="display: block; background-color:#d66dffde">
        <div class="preloader">
            <svg width="45" height="45" stroke="#fff">
                <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                    <circle cx="22" cy="22" r="9.81088" stroke="none">
                        <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"></animate>
                        <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"></animate>
                        <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"></animate>
                    </circle>
                    <circle cx="22" cy="22" r="17.8109" stroke="none">
                        <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"></animate>
                        <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"></animate>
                        <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"></animate>
                    </circle>
                    <circle cx="22" cy="22" r="2.85816">
                        <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"></animate>
                    </circle>
                </g>
            </svg>

            <div class="text">{{text}}</div>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            name: 'main loader',
            version: 1,
        }
    },
    methods: {

    },
    props: ["text"]
}
</script>