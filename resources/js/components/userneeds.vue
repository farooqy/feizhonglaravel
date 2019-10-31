<template>
    <tr>
        <td>
            1
        </td>
        <td>
            {{product_name}}
        </td>
        <td>
            {{product_description | truncate(30, "...")}}
        </td>
        <td>
            {{product_quantity }} {{product_measure_unit}}
        </td>
        <td>
            {{product_type }} / {{ product_sub_types}}
        </td>
        <td>
            {{product_valid_until}}
        </td>
    </tr>
</template>



<script>
module.exports = {
    data: function(){
        console.log('child ready');

        return {'userneeds':1,'version':1}
    },
    props:["product_valid_until", "product_type", "product_sub_types",
            "product_quantity", "product_measure_unit", "product_name",
            "product_description"],
    filters: {
        truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
        },
    },
}
</script>
