<template>
  <div class="allstyle">
    <donation-top/>
    <donation-main/>
    <!-- <school-sub-info/> -->
  </div>
</template>

<script>
import DonationTop from "../components/DonationTopDemo";
import DonationMain from "../components/DonationMainDemo";
import SchoolSubInfo from "../components/SchoolSubInfo";
import { mapGetters, mapActions } from "vuex";

export default {
  components: {
    DonationTop,
    DonationMain,
    SchoolSubInfo
  },
  data() {
    return {
      // currentNumber: 2,
      id: this.$route.params.id
    };
  },
  created() {
    this.getActivity();
  },

  methods: {
    ...mapActions({
      getActivityData: "activity/getActivityData"
    }),

    getActivity() {
      this.getActivityData(this.$route.params.id);
    }
  }
};
</script>

<style>
/* .allstyle {
  margin-left: 12px;
} */
</style>
