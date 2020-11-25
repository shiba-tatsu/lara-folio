<template>
	<div class="about">
		<div class="about__left">
			<h6>技術</h6>
			<ul>
				<li>PHP(7系),  Laravel(6系中心)</li>
				<li>JavaScript, Jquery, Vue.js</li>
				<li>Ruby, Ruby on Rails</li>
				<li>HTML5, CSS3, Sass, Bootstrap4</li>
				<li>AWS, heroku, GitHub, CircleCI</li>
				<li>MySQL, PostgreSQL</li>
			</ul>
		</div>
		<div class="about__right">
			<img src="">
		</div>
	</div>
</template>

<style lang="scss">
.about{
	margin-top: 50px;
	margin-left: 170px;
	margin-right: 170px;
	display: flex;
	justify-content:space-around;
	&__left{
		font-size: 40px;
		h6{
			margin-bottom: 5px;
		}
		ul{
			list-style-type: circle;
			font-size: 22px;
			margin-left: 32px;
			li{
				margin-bottom: 8px;
			}
		}
	}
	&__right{
		img{
			height: 200px;
			width: 200px;
		}
	}
}
</style>