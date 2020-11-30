<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Larafolio</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div id="app">
  @include('contacts.header')

  <div class="confirm">
		<h5 class="confirm__title">お問い合わせ</h5>
		<h6 class="confirm__precaution">入力内容に誤りがないことをご確認のうえ、送信ボタンをクリックしてください。</h6>
    <form method="POST" action="{{route('contacts.complete')}}" class="confirm__form">
      <input type="hidden" name="name" value="{{$contact->name}}">
      <input type="hidden" name="email" value="{{$contact->email}}">
      <input type="hidden" name="body" value="{{$contact->body}}">
      @csrf
			<p>お名前</p>
      <p class="confirm__form__text">{{$contact->name}}</p>

			<p>メールアドレス</p>
			<p class="confirm__form__text">{{$contact->email}}</p>

      <p>お問い合わせ内容</p>
      <p class="confirm__form__body">{{$contact->body}}</p>

      <div class="confirm__form__buttons">
        <button type="button" class="confirm__form__buttons__button" onclick="history.back()">戻る</button>
        <button type="submit" class="confirm__form__buttons__button">送信</button>
      </div>
		</form>
	</div>	
  </div>

  @include('footer')
</div>

<script src="{{ mix('js/app.js') }}"></script> 
</body>
</html>