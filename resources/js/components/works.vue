<template>
	<div class="works">
		<h5 class="title">&#10025;制作物&#10025;</h5>
		<div class="worksList">
			<div class="worksList__left">
				<h5>Tatsuya's</h5>
				<h5>Portfolio</h5>
			</div>
			<div class="worksList__right">
				<img src="">
			</div>
		</div>
	</div>
</template>

<style lang="scss">
.title{
	text-align:center;
	font-size: 30px;
	letter-spacing: 15px;
	font-family: "fantasy";
}
.worksList{
	margin-top: 50px;
	margin-left: 170px;
	margin-right: 170px;
	display: flex;
	justify-content:space-around;
	&__left{
		font-size: 66px;
	}
	&__right{
		img{
			height: 200px;
			width: 200px;
		}
	}
}
</style>