<template>
    <v-select
      :items="countries"
      item-text="countryName"
      item-value="text"
      :value="value"
      v-model="country"
      
      label="Select Country"
      :country="country"
      @input="selectCountry()"
      return-object
    ></v-select>
</template>


<script>
import countries from "../data.js";
import EventBus from '../event-bus.js';

export default {
  name: "VuetifyCountrySelect",

  props: {
   
    value: {
      type: [String, Object],
      default: "",
    },
    
  },
  data() {
    return {
      countryList: [],
      country: "",
      countries,
    };
  },
  methods: {
    selectCountry() {
      this.$emit("input", this.country);
      EventBus.$emit("countryValue", this.country);
    },
  },
};
</script>