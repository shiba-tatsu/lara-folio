<template>
	<div class="works">
		<h5 class="title">&#10025;制作物&#10025;</h5>
		<div class="worksList">
			<div class="worksList__left">
				<img src="">
			</div>
			<div class="worksList__right">
				<h5>Test</h5>
				<h5>Test</h5>
			</div>
		</div>
		<div class="worksList">
			<div class="worksList__left">
				<img src="">
			</div>
			<div class="worksList__right">
				<h5>Test</h5>
				<h5>Test</h5>
			</div>
		</div>
	</div>
</template>

<style lang="scss">
.title{
	text-align:center;
	font-size: 30px;
	letter-spacing: 15px;
	font-family: Verdana, sans-serif;
	color: #444444;
}
.worksList{
	margin-top: 50px;
	margin-left: 170px;
	margin-right: 170px;
	display: flex;
	justify-content:space-between;
	&__left{
		img{
			height: 400px;
			width: 500px;
		}
	}
	&__right{
		font-size: 32px;
		}
	
}
</style>