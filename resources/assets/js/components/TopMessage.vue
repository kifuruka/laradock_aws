<template>
  <section>
    <div>
      <h1>大学生のチャレンジを<span class="br-sp"><br></span>あなたの寄付で応援しよう。</h1>
      <span class="br-sp"><br></span>
      <span class="br-sp"><br></span>
      <h2>あなたの気持ちを寄付に変えて、<span class="br-sp"><br></span>大学で活動する学生の皆様にお届けします。</h2>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
section {
  max-width: 1160px;
  margin: 0 auto;
  margin-top: 40px;

  div {
    text-align: center;

    h1 {
      font-size: 2rem;
      font-weight: bolder;

      @media screen and (max-width: 768px) {
      font-size: 1.5rem;
      font-weight: bolder;
      line-height: 0.7;
      }
    }
    
    h2 {
      font-size: 1.7rem;
      font-weight: bolder;

      @media screen and (max-width: 768px) {
      font-size: 1rem;
      font-weight: bolder;
      line-height: 0.7;
      }
    }
    .br-sp {
      display: none;

      @media screen and (max-width: 768px) {
      display: block;
      }
    }
  }
}
</style>
