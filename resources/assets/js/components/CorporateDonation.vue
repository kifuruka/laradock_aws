<template>
  <section class="cdsection">
    <div class="container">
      <h2>法人・企業の皆様へ</h2>
      <div class="tile is-ancestor">
        <div class="tile is-vertical is-12 flame">
          <div class="tile">
            <div class="tile is-parent">
              <p>
                法人・企業の皆様の寄付はこちらから
                <span>→</span>
              </p>
              <a href="https://www.shigaku.go.jp/" class="button is-medium custom-btn">
                <strong>法人寄付</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
// CorporateDonation
export default {};
</script>

<style lang="scss" scoped >
section {
  background-color: #808080;
  margin-bottom: 80px;
  .container {
    h2 {
      padding: 16px;
      font-size: 2rem;
      color: #f2f2f2;
      text-align: center;
    }
    div {
      margin: 0 auto;
      p {
        font-size: 1.6rem;
        color: #f2f2f2;
        padding: 8px;
        text-align: right;
        span {
          padding-left: 16px;
        }
      }
      .custom-btn {
        background-color: #db6b6b;
        color: white;
        border-radius: 2em;
        width: 7.2em;
        border-color: #db6b6b;
        margin-top: 12px;
        margin-left: 16px;
      }
    }
  }
}

@media screen and (max-width: 768px) {
  section {
    margin-top: 16px;
    margin-bottom: 32px;

    // .cdsection {
    //   margin-bottom: 20px;
    //   margin-top: 0;
    // }

    .container {
      h2 {
        padding-bottom: 0;
      }
      div {
        text-align: center;
        p {
          font-size: 1.2rem;
          color: #f2f2f2;
          padding-top: 10px;
          padding-bottom: 20px;

          text-align: center;
          span {
            display: none;
          }
        }
        .custom-btn {
          background-color: #db6b6b;
          color: white;
          border-radius: 2em;
          width: 60%;
          border-color: #db6b6b;
          // margin-top: 12px;
          // margin-left: 16px;
          margin: 0 auto;
        }
      }
    }
  }
}
</style>