<template>
  <section v-if="isActivity">
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child is-8 child-flame">
            <div class="content-flame">
              <h1>{{activity.sub_title1}}</h1>
              <div class="donaition-text-flame">
                <p>{{activity.sub_contents1}}</p>
              </div>
              <div class="donaition-img-flame">
                <img :src="activity.sub_image1" class="u-img" alt="#">
              </div>
            </div>
            <div class="content-flame">
              <h1>{{activity.sub_title2}}</h1>
              <div class="donaition-text-flame">
                <p>{{activity.sub_contents2}}</p>
              </div>
              <div class="donaition-img-flame">
                <img :src="activity.sub_image2" class="u-img" alt="#">
              </div>
            </div>
            <div class="content-flame">
              <h1>{{activity.sub_title3}}</h1>
              <div class="donaition-text-flame">
                <p>{{activity.sub_contents3}}</p>
              </div>
              <div class="donaition-img-flame">
                <img :src="activity.sub_image3" class="u-img" alt="#">
              </div>
            </div>
          </div>
          <!-- 右側のカード -->
          <div class="tile is-child is-4 child-right-flame">
            <div class="card card-margin">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img
                      src="https://cdn.mainichi.jp/vol1/2019/01/03/20190103k0000m050077000p/6.jpg?1"
                      alt="Placeholder image"
                      class="contentsImg"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content" v-on:click="fireParentEvent">
                    <div class="button custom-btn test">
                      この寄付を選ぶ
                    </div>
                  </div>
                </div>
                <div class="content">東海大学駅伝部の月次活動報告メールマガジンで送らせていただきます。学生の日々の取り組みやチームの雰囲気をより深く知ることが出来ます。駅伝部をより深く知ることで、箱根駅伝など晴れの舞台での応援も一層楽しめればなによりです。</div>
                <div>
                  <p>
                    寄付金額
                    <span class="price">¥3,000</span>
                  </p>
                </div>
                <div>
                  <p>
                    掲載期間
                    <span class="day">2020年6月</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card card-margin">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img
                      src="https://twave.tokai-eic.co.jp/upload/save_image/0228114056_5c774a385ae28.jpg"
                      alt="Placeholder image" 
                      class="contentsImg"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content" v-on:click="fireParentEvent">
                    <div class="button custom-btn test">
                      この寄付を選ぶ
                    </div>
                  </div>
                </div>
                <div class="content">箱根駅伝など東海大学の学生を応援するときに持っておくとより学生にエネルギーを届けられる東海大学フラッグです。学生が駆け抜けるレース会場を東海大学のフラッグで埋め尽くしましょう。</div>
                <div>
                  <p>
                    寄付金額
                    <span class="price">¥5,000</span>
                  </p>
                </div>
                <div>
                  <p>
                    掲載期間
                    <span class="day">2020年8月</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card card-margin">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img
                      src="https://twave.tokai-eic.co.jp/upload/save_image/komonoNo16.jpg"
                      alt="Placeholder image"
                      class="contentsImg"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content" v-on:click="fireParentEvent">
                    <div class="button custom-btn test">
                      この寄付を選ぶ
                    </div>
                  </div>
                </div>
                <div class="content">東海大学オリジナルの手ぬぐいです。学生も使用している手ぬぐいと同じモデルであり、ご自身の生活やトレーニングにご活用いただくき、学生と一緒に自分の限界を越えていきましょう。</div>
                <div>
                  <p>
                    寄付金額
                    <span class="price">¥8,000</span>
                  </p>
                </div>
                <div>
                  <p>
                    掲載期間
                    <span class="day">2020年10月</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card card-margin">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img
                      src="http://daigaku-ekiden.com/syutsujyou/images/40dfcd39e8d2f42bafeabcc095bfdd84a28db5f2.jpg"
                      alt="Placeholder image"
                      class="contentsImg"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content" v-on:click="fireParentEvent">
                    <div class="button custom-btn test">
                      この寄付を選ぶ
                    </div>
                  </div>
                </div>
                <div class="content-p">
                  <span class="content">東海大学競走部の学生がランニング講座を開催します。学生トップレベルのランナーと一緒に走ることができ、かつ、ランニングについて指導させていただきます。</span>
                </div>
                <div>
                  <p>
                    寄付金額
                    <span class="price">¥10,000</span>
                  </p>
                </div>
                <div>
                  <p>
                    掲載期間
                    <span class="day">2020年12月</span>
                  </p>
                </div>
              </div>
            </div>

            <!-- 法人案内 -->
            <div class="card card-margin">
              <div class="card-content company-card">
                <div>
                  <p>法人・企業の皆さまへ</p>
                </div>
                <div>
                  <p>
                    法人・企業の皆様の
                    <br>寄付はこちらから
                  </p>
                </div>
                <div class="media-content company-btn-flame">
                  <router-link to="/" class="button is-medium custom-btn">
                    <strong>法人寄付</strong>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal">
      <div class="modal-background" v-on:click="closeModal"></div>
      <div class="modal-content">
            <div class="card card-modal">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image">
                    <img
                      src="https://twave.tokai-eic.co.jp/upload/save_image/komonoNo16.jpg"
                      alt="Placeholder image"
                      class="contentsImg"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content" v-on:click="fireParentEvent">
                    <div class="button is-medium custom-btn test kessai">
                      決済
                    </div>
                  </div>
                </div>
                <div class="content-p">
                  <span class="content">東海大学競走部の学生がランニング講座を開催します。学生トップレベルのランナーと一緒に走ることができ、かつ、ランニングについて指導させていただきます。</span>
                </div>
                <div>
                  <p class="price-p">
                    寄付金額
                    <span class="price">¥8,000</span>
                  </p>
                </div>
                <div>
                  <p class="day-p">
                    掲載期間
                    <span class="day">2019/04/19</span>
                  </p>
                </div>
              </div>
            </div>
      </div>
      <button class="modal-close is-large" aria-label="close"  v-on:click="closeModal"></button>
    </div>
  </section>
</template>

<script>
import DonationImg from "../../images/donation/d_kin_rag.jpg";
import DonationImg2 from "../../images/donation/d_kin_rag2.jpg";
import DonationImg3 from "../../images/donation/d_kin_rag3.jpg";
import { mapGetters } from "vuex";




export default {
  data() {
    return {
      DonationImg,
      DonationImg2,
      DonationImg3
    };
  },
  computed: {
    ...mapGetters({
      isActivity: "activity/isActivity",
      activity: "activity/getActivityData"
    })
  },
  methods: {
    fireParentEvent() {
      //寄付番号取得
      var eventDOM = event.target;
      console.log(eventDOM);
      var btn = document.getElementsByClassName('test');
      console.log(btn);
      console.log(btn.length);
      console.log(Array.prototype.indexOf.call(btn, event.target));
      const btnNum = (Array.prototype.indexOf.call(btn, event.target));

      //寄付カードの各種取得
      let priceArray = document.getElementsByClassName('price'); 
      let dayArray = document.getElementsByClassName('day'); 
      let contentArray = document.getElementsByClassName('content'); 
      let imageArray = document.getElementsByClassName('contentsImg'); 
      // const cardArray = document.getElementsByClassName('card'); 
      const modalContent = document.getElementsByClassName('modal-content'); 
      console.log(imageArray[btnNum]);

      let priceClone = priceArray[btnNum].cloneNode(true);//価格のhtmlクローン
      console.log("priceClone");
      let dayClone = dayArray[btnNum].cloneNode(true);//掲載期間のhtmlクローン
      console.log("dayClone");
      let contentClone = contentArray[btnNum].cloneNode(true);//説明文のhtmlクローン
      console.log("contentClone");
      let imageClone = imageArray[btnNum].cloneNode(true);//画像のhtmlクローン
      console.log("imageClone");
      console.log(priceClone);
      console.log(dayClone);
      console.log(contentClone);
      console.log(imageClone);
      console.log(priceArray[btnNum]);
      console.log(dayArray[btnNum]);
      console.log(contentArray[btnNum]);
      console.log(imageArray[btnNum]);
      // console.log(cardArray[btnNum]);

      const modalContentPrice = modalContent[0].getElementsByClassName('price'); //modalのpriceクラス取得
            console.log(modalContentPrice);
      const modalContentDay = modalContent[0].getElementsByClassName('day'); //modalのdayクラス取得
            console.log(modalContentDay);
      const modalContentContents = modalContent[0].getElementsByClassName('content'); //modalのcontentクラス取得
            console.log(modalContentContents);
      const modalContentImage = modalContent[0].getElementsByClassName('contentsImg'); //modalのcontentsImgクラス取得
            console.log(modalContentContents);

      const modalContentPriceP = modalContent[0].getElementsByClassName('price-p'); 
            console.log(modalContentPriceP);
      const modalContentDayP = modalContent[0].getElementsByClassName('day-p'); 
            console.log(modalContentDayP);
      const modalContentContentsP = modalContent[0].getElementsByClassName('content-p'); 
            console.log(modalContentContentsP);
      const modalContentImageP = modalContent[0].getElementsByClassName('image'); 
            console.log(modalContentImageP);

      // console.log(modalContent);
      modalContentPriceP[0].replaceChild(priceClone,modalContentPrice[0]);
      modalContentDayP[0].replaceChild(dayClone,modalContentDay[0]);
      modalContentContentsP[0].replaceChild(contentClone,modalContentContents[0]);
      modalContentImageP[0].replaceChild(imageClone,modalContentImage[0]);
      // console.log(modalContent);
       

      console.log("console_fireParentEvent");
      // this.$emit("click");
      const modal = document.getElementsByClassName('modal');
          console.log(modal);
          // modal.classList.add("is-active");
      const list = modal[0].classList.add("is-active");
      


    // this.hello(btn)

    },
    //   hello: function (btn) {
    // },      
    closeModal() {
      const modalContent = document.getElementsByClassName('modal-content'); 
      console.log(modalContent);
      
      // const modalContentDiv = modalContent[0].getElementsByClassName("card");
      // console.log(modalContentDiv);
      // modalContent[0].removeChild(modalContentDiv[0]);

      const close = document.getElementsByClassName('modal-close modal-background');
        console.log("close");
      const modal = document.getElementsByClassName('modal');
        modal[0].classList.remove("is-active");
    }, 
  }
};
</script>

<style lang="scss" scoped>
section {
  margin-top: 80px;
  margin: 80px 5% 0 5%;
  // background-color: #222222;
  // height: 2000px;
  .container {
    max-width: 1160px;
    
    // background-color: rgb(121, 121, 212);
    // height: 1000px;

    div {
      .child-right-flame {
        padding: 32px;

        .card-margin {
          margin-bottom: 32px;
        }
      }
    }
  }
}

.u-img {
  width: 100%;
  height: 100% !important;
}
.custom-btn {
  background-color: #ffe035;
  color: #333333;
  border-radius: 0;
  width: 100%;
  border-color: #ffe035;
}

.card-flame {
  margin-top: 16px;
}

.child-flame {
  .content-flame {
    margin-bottom: 5%;

    h1 {
      font-size: 2rem;
    }

    .donaition-text-flame {
      margin-top: 16px;
      font-size: 1.3rem;
    }

    .donaition-img-flame {
      margin-top: 32px;
    }
  }
}

.company-card {
  background-color: #828282;

  p {
    text-align: center;
    font-size: 1.6rem;
    margin-top: 16px;
    color: white;
  }
  .company-btn-flame {
    margin-top: 32px;
    margin-bottom: 32px;

    .custom-btn {
      background-color: #db6b6b;
      border-color: #db6b6b;
      color: white;
    }
  }
}

.modal-content, .modal-card {
    width: 40%;
    border-radius: 1%;
}

// .card-modal{
//     width: 50%;
//     margin: auto;
// }

.test{
  font-weight: bold;
}

.kessai {
	display: block;
	cursor: pointer;
	// max-width: 300px;
	margin: 1em auto;
	// padding: 20px;
	border-radius: 4px;
	box-sizing: border-box;
	color: #4a4a4a;
  font-weight: bold;
	text-align: center;
	text-decoration: inherit;
	// background: #ffea73;
	// box-shadow: 0 6px 0 #ffe035, 0 12px 0 rgba(0,0,0,.2);
	transition: color .3s, background .3s, box-shadow .3s, transform .3s;
}
.kessai:hover {
	// box-shadow: 0 3px 0 #ffea73, 0 6px 0 rgba(0,0,0,.2);
	// transform: translateY(3px);
	animation: flash 1s both;
}
.kessai:active {
	color: #ddd;
	background: #ffea73;
	// box-shadow: 0 0 0 #ffe035, 0 0 0 rgba(0,0,0,.2);
	// transform: translateY(6px);
	transition-duration: .1s;
}
@keyframes flash {
	0% { background: #ffea73; }
	10% { background: #fdf1aa; }
	100% { background: #ffea73; }
}

@media screen and (max-width: 768px){

  .modal-content, .modal-card {
      width: 80%;
      border-radius: 1%;
  }

}

</style>
