<template>
	<div class="contact">
		<h5 class="contact__title">お問い合わせ</h5>
		<h6 class="contact__precaution">ご連絡は以下のフォームか、<span class="circle">(</span><span class="mail-address">st.libra.081006@gmail.com</span>)へとお願いいたします。</h6>
		<form method="POST" action="contact/confirm" class="contact__form">
			<input type="hidden" name="_token" v-bind:value="csrf">

			<p>お名前</p>
			<input type="text" name="name" placeholder="お名前" class="contact__form__text">

			<p>メールアドレス</p>
			<input type="text" name="email" placeholder="example@gmail.com" class="contact__form__text">

			<p>お問い合わせ内容</p>
			<textarea rows="7" name="body" class="contact__form__textarea"></textarea>

			<input type="submit" class="contact__form__submit" value="送信">
		</form>
	</div>	
</template>

<script>
  export default {
		data: function(){
    	return {
      	csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    	}
		}
  }
</script>
