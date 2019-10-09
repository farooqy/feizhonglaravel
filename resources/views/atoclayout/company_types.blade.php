    <select name="company_type" class="select_custom col-md-6 col-lg-6">
        <option value="Aerospace industry" @click="updateSelect(0)">Aerospace industry</option>
        <option value="Agriculture" @click="updateSelect(1)">Agriculture</option>
        <option value="Chemical industry" @click="updateSelect(2)">Chemical industry</option>
        <option value="Computer industry" @click="updateSelect(3)">Computer industry</option>
        <option value="Construction industry" @click="updateSelect(4)">Construction industry</option>
        <option value="Defense industry" @click="updateSelect(5)">Defense industry</option>
        <option value="Education industry" @click="updateSelect(6)">Education industry</option>
        <option value="Energy industry" @click="updateSelect(7)">Energy industry</option>
        <option value="Entertainment industry" @click="updateSelect(8)">Entertainment industry</option>
        <option value="Financial services industry" @click="updateSelect(9)">Financial services industry</option>
        <option value="Food production" @click="updateSelect(10)">Food production</option>
        <option value="Health care industry" @click="updateSelect(11)">Health care industry</option>
        <option value="Hospitality industry" @click="updateSelect(12)">Information industry</option>
        <option value="Manufacturing" @click="updateSelect(13)">Manufacturing</option>
        <option value="Mass media" @click="updateSelect(14)">Mass media</option>
        <option value="Mining" @click="updateSelect(15)">Mining</option>
        <option value="Telecommunications industry" @click="updateSelect(16)">Telecommunications industry</option>
        <option value="Transport industry" @click="updateSelect(17)">Transport industry</option>
        <option value="Water industry" @click="updateSelect(18)">Water industry</option>
        <option value="Direct Selling industry" @click="updateSelect(19)">Direct Selling industry</option>
        <option value=""  @click="updateSelect(20)">Other</option>
    </select>
    <select  class="select_custom col-md-6 col-lg-6" name="comp_subtype">
      <option v-for=" type in Company.types[selected_type]"
      :value="type" v-text="type">
    </option>
    </select>
