<template>
  <section>
    <div class="top">
      <div class="top-image progressive-image" style="max-width: 1280px;">
        <span>
          <!---->
          <div class="progressive-image-wrapper" style="padding-bottom: 44.8438%;">
            <img
              class="progressive-image-main"
              style
              src="../../images/topvisual/kifurukaTopImage_2019-04-22 13.37.50.png"
            >
            <!---->
          </div>
        </span>
      </div>
      <!-- <div class="top__content content_all_center">
        <h1 class="app__title top_content_title_color">子供の好奇心に火をつけよう！</h1>
        <p class="top__content--detail">こどもの「やりたい」を好きなだけ体験できる新しい学びスタイル</p>
        <a href="https://line.me/R/ti/p/%40bzy5124u" class="button button__top">
          <strong class="button_top_text_color">LINE友達登録で限定クーポンをゲット！</strong>
        </a>
      </div>-->
    </div>
    <div class="tile is-ancestor">
      <!-- 左 -->
      <div class="tile is-parent parent-frame">
        <div class="tile is-child">
          <div
            class="card"
            @click="routerPush({
                name:'DetailSchool',
                params:{id:1}
                })"
          >
            <div calss="card_image_container" style="position: relative;">
              <div class="card-image item item--first">
                <figure class="image">
                  <!-- <router-link to="/detailSchool/1"> -->
                  <img :src="Homeimg1" class="u-img" alt="#">
                  <!-- </router-link> -->
                  <!-- <img :src="school.school_img" class="card-img-top" alt="Placeholder image"> -->
                </figure>
              </div>
              <div class="school_msg has-text-centered">
                <p class="title is-7 is-size-7-mobile school_name">近畿大学</p>
                <p class="subtitle is-6 is-size-7-mobile school_message">全国制覇したい</p>
              </div>
            </div>
          </div>
          <!-- <router-link to="/activity/1">
            <img :src="Homeimg1" class="u-img" alt="#">
          </router-link>-->
        </div>
      </div>
      <!-- 右 -->
      <div class="tile is-parent parent-frame">
        <div class="tile is-child is-vertical">
          <div class="tile is-ancestor">
            <div class="tile is-parent upper-frame">
              <div class="tile is-child is-6 grandson-frame left-grandson" style="margin-bottom:0;">
                <div
                  class="card"
                  @click="routerPush({
                name:'DetailSchool',
                params:{id:5}
                })"
                >
                  <div calss="card_image_container" style="position: relative;">
                    <div class="card-image item item--first">
                      <figure class="image">
                        <router-link to="/activity/1">
                          <img :src="Homeimg2" class="u-img" alt>
                        </router-link>
                        <!-- <img :src="school.school_img" class="card-img-top" alt="Placeholder image"> -->
                      </figure>
                    </div>
                    <div class="school_msg has-text-centered">
                      <p class="title is-7 is-size-7-mobile school_name">早稲田大学</p>
                      <p class="subtitle is-6 is-size-7-mobile school_message">国体に出たい</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tile is-child is-6 grandson-frame right-grandson">
                <div
                  class="card"
                  @click="routerPush({
                name:'DetailSchool',
                params:{id:3}
                })"
                >
                  <div calss="card_image_container" style="position: relative;">
                    <div class="card-image item item--first">
                      <figure class="image">
                        <router-link to="/activity/1">
                          <img :src="Homeimg3" class="u-img" alt="#">
                        </router-link>
                        <!-- <img :src="school.school_img" class="card-img-top" alt="Placeholder image"> -->
                      </figure>
                    </div>
                    <div class="school_msg has-text-centered">
                      <p class="title is-7 is-size-7-mobile school_name">東海大学</p>
                      <p class="subtitle is-6 is-size-7-mobile school_message">箱根駅伝で優勝したい</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tile child-flame">
            <div
              class="card"
              @click="routerPush({
                name:'DetailSchool',
                params:{id:1}
                })"
            >
              <div calss="card_image_container" style="position: relative;">
                <div class="card-image item item--first">
                  <figure class="image">
                    <router-link to="/Donation">
                      <img :src="Homeimg4" class="u-img" alt="#">
                    </router-link>
                    <!-- <img :src="school.school_img" class="card-img-top" alt="Placeholder image"> -->
                  </figure>
                </div>
                <div class="school_msg has-text-centered">
                  <p class="title is-7 is-size-7-mobile school_name">近畿大学</p>
                  <p class="subtitle is-6 is-size-7-mobile school_message">ナマズの研究がしたい</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { mapGetters, mapMutations, mapActions } from "vuex";
import Homeimg1 from "../../images/topvisual/top001.jpg";
import Homeimg2 from "../../images/topvisual/top002.jpg";
import Homeimg3 from "../../images/topvisual/top003.jpg";
import Homeimg4 from "../../images/topvisual/top04_w583.jpg";
import Homeimg5 from "../../images/topvisual/joanna-kosinska-129039-unsplash.jpg";

export default {
  // あとでデータを引っ張ってくるまで載せておく
  data() {
    return {
      Homeimg1,
      Homeimg2,
      Homeimg3,
      Homeimg4
    };
  },

  // mounted: function() {
  //   // `this` は vm インスタンスを指します
  //   getimages();
  // },

  // created() {
  //   this.fetchPostTopVisual();

  // },
  methods: {
    routerPush(router) {
      // 画面丈夫へ移動するためのもの
      window.scrollTo(0, 0);
      this.$router.push(router);
    }
  }
};
</script>

<style lang="scss" scoped>
section {
  max-width: 1160px;
  margin: 0 auto;
  padding-top: 7%;

  .parent-frame {
    padding: 6px !important;
    max-width: 752px;
    max-height: 642px;

    .upper-frame {
      padding-bottom: 0px;

      .grandson-frame {
        // margin-right: 12px !important;
        max-width: 370px;
        max-height: 250px;
      }
      .left-grandson {
        padding-right: 6px;
      }
      .right-grandson {
        padding-left: 6px;
      }
    }
  }
  .card_image_container {
    position: relative;
  }

  .item {
    position: relative;
    overflow: hidden;
    box-shadow: 0 0px 0px rgba(0, 0, 0, 0.15);
  }

  .item:after {
    /*基本的に画像に疑似要素は付けられないので包括するボックスに加える。*/
    content: "";
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 0.5; /*下に配置する画像が見えるよう、疑似要素は透過しておく*/
  }

  .item--first:after {
    background-image: linear-gradient(
      to bottom,
      transparent 0%,
      transparent 10%,
      #212529
    );
  }

  .school_msg {
    position: absolute;
    color: white;
    top: 80%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    margin: 0;
    padding: 0;
  }

  .school_name {
    position: relative;
    display: inline-block;
    color: white;
    border-bottom-style: solid;
    border-bottom-color: #ffe035;
    padding-bottom: 2%;
    margin-bottom: 3em;
    font-size: 0.5rem;
  }

  .school_message {
    color: white;
  }
  .card {
    background-color: white;
    -webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0), 0 0 0 0px rgba(0, 0, 0, 0);
    box-shadow: 0 0 0 rgba(0, 0, 0, 0), 0 0 0 0px rgba(0, 0, 0, 0);
  }
  .child-flame {
    // margin-top: 12px !important;
    padding-top: 0 !important;
    max-width: 752px !important;
    height: 250px !important;
  }
  .u-img {
    width: 100%;
    height: 100% !important;
  }
}

.top .top-image {
  display: none;
}

@media screen and (max-width: 768px) {
  .tile {
    display: none;
  }
  .tile:not(.is-child) {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .tile.is-6 {
    -webkit-box-flex: 0;
    -ms-flex: none;
    flex: none;
    width: 50%;
  }

  .top .top-image {
    display: block;
    width: 100%;
    height: auto;
    z-index: 99;
  }

  .progressive-image {
    position: relative;
    overflow: hidden;
    width: 100%;
    display: inline-block;
  }

  .progressive-image-main {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
    z-index: 1;
    transition-duration: 0.3s;
    transition-property: all;
    transition-timing-function: ease-out;
    transform: translateZ(0);
  }
}
</style>

