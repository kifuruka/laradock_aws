<template>
  <section>
    <div v-if="isAllStatus" class="field has-addons">
      <div class="control find-frame">
        <input
          class="input mediainput"
          type="text"
          v-model="searchWord"
          placeholder="キーワードから探す"
          @keyup.enter="setSearchWord(searchWord)"
        >
      </div>
      <div class="control button-frame">
        <a class="button media_a" @click="setSearchWord(searchWord)">検索</a>
      </div>
    </div>
    <table class="test2">
      <!-- <div class="thiscontainer flex-flame"> -->
      <div v-show="isLength">
        <div class="columns mobile-container topspace is-multiline">
          <!-- <div>{{activities.Data}}</div> -->
          <!-- <search-card
              class="card-box column is-one-third"
              v-for="activity in activities"
              :activity="activity"
              :key="activity.id"
          />-->
          <search-card
            class="column column-custom is-one-third"
            v-for="activity in activities"
            :activity="activity"
            :key="activity.id"
          />
        </div>
      </div>
    </table>
    <!-- {{activities}} -->
  </section>
</template>

<script>
import SearchCard from "./SearchCard";
import { mapGetters, mapMutations } from "vuex";
export default {
  components: {
    SearchCard
  },
  data() {
    return {
      searchWord: "",
      isLength: true

      // viewCount: 0,
      // activities1: ""
    };
  },
  computed: {
    ...mapGetters({
      activities: "activity/fetchSearchData",
      isAllStatus: "activity/isAllStatus"
      // searchLength: "activity/searchLength"
    })
  },
  methods: {
    ...mapMutations({
      setSearchWord: "activity/setSearchWord"
    })
  }
};
</script>

<style lang="scss" scoped>
section {
  max-width: 1160px;
  margin: 0 auto;
  margin-top: 56px;

  .has-addons {
    max-width: 560px;
    height: 56px;
    margin: 0 auto;

    .find-frame {
      width: 448px;

      input {
        height: 56px;
        font-size: 1.5rem;
        background-color: #f2f2f2;
      }
    }
    .button-frame a {
      width: 112px;
      height: 56px;
      background-color: #ffe035;
      font-size: 1.5rem;
      color: #222222;
    }
  }
}

.container {
  display: flex;
  margin: 0 auto;
  max-width: 1160px;
}
.card-box {
  width: 80%;
}

.test1 {
  max-width: 1160px;
  margin: 0 auto;
  padding-top: 81px;
}
.thiscontainer {
  display: flex;
  margin: 0 auto;
  max-width: 1160px;
}

// 優馬

.mobile-container {
  margin: auto;
}

.topspace {
  margin-top: 30px;
}

.test2 {
  width: 100%;
  margin: auto;
}
.is-multiline {
  flex-wrap: wrap;
}

@media screen and (max-width: 768px) {
  section {
    margin-top: 5%;
    margin-bottom: 5%;
    .has-addons {
      padding: 0 1rem;
    }
  }

  input {
    font-size: 1.2rem !important;
  }
  .media_a {
    font-size: 1.2rem !important;
  }
}
</style>
