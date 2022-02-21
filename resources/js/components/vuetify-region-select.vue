<template>
    <v-select
      :items="regionList"
      item-value="name"
      item-text="name"
      :value="value"
      v-model="region"
      
      label="Select Region"
      return-object
      @input="selectRegion()"
    ></v-select>
</template>

<script>
import states from "../data.js";
import EventBus from '../event-bus.js';

export default {
  name: "VuetifyRegionSelect",
 
  props: {
    
   
    value: {
      type: [Object, String],
    },
    
  },
  data() {
    return {
      states,
      countryName: null,
      region: "",
    };
  },
  computed: {
    regionList() {
      return this?.countryName?.regions || [];
    },
  },
  mounted() {
    EventBus.$on("countryValue", (country) => {
      this.countryName = country;
    });
  },
  methods: {
    selectRegion() {
      this.$emit("input", this.region);
    },
  },
};
</script>