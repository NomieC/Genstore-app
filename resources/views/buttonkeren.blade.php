<button class="btn" data-speed="0.3" type="button" href="/menu.blade.php">
	<strong class="strong">View Menu</strong>
	<div class="containerstars">
		<div class="stars"></div>
	</div>

	<div class="glow">
		<div class="circle"></div>
		<div class="circle"></div>
	</div>
</button>

<style>
	.btn {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 16rem;
		height: 4rem;
		background-size: 300% 300%;
		backdrop-filter: blur(1rem);
		border-radius: 5rem;
		transition: 0.5s;
		animation: gradient_301 5s ease infinite;
		border: double 4px transparent;
		background-image: linear-gradient(#927c55, #878882), linear-gradient(137.48deg, #F7F5E8 10%, #B68861 45%, #EFEBE2 67%, #B68861 87%);
		background-origin: border-box;
		background-clip: content-box, border-box;
	}
	

	.containerstars {
		position: absolute;
		z-index: -1;
		width: 100%;
		height: 100%;
		overflow: hidden;
		transition: 0.5s;
		backdrop-filter: blur(1rem);
		border-radius: 5rem;
	}

	.strong {
		z-index: 2;
		font-family: 'Avalors Personal Use';
		font-size: 1.5rem;
		letter-spacing: 5px;
		color: #FFFFFF;
		text-shadow: 0 0 4px white;
	}

	.glow {
		position: absolute;
		display: flex;
		width: 12rem;
	}

	.circle {
		width: 100%;
		height: 30px;
		filter: blur(2rem);
		animation: pulse_3011 4s infinite;
		z-index: -1;
	}

	.circle:nth-of-type(1) {
		background: rgba(254, 83, 186, 0.636);
	}

	.circle:nth-of-type(2) {
		background: rgba(142, 81, 234, 0.704);
	}

	.btn:hover .containerstars {
		z-index: 1;
		background-color: #212121;
	}

	.btn:hover {
		transform: scale(1.1)
	}

	.btn:active {
		border: double 4px #FE53BB;
		background-origin: border-box;
		background-clip: content-box, border-box;
		animation: none;
	}

	.btn:active .circle {
		background: #FE53BB;
	}

	.stars {
		position: relative;
		background: transparent;
		width: 200rem;
		height: 200rem;
	}

	.stars::after {
		content: "";
		position: absolute;
		top: -10rem;
		left: -100rem;
		width: 100%;
		height: 100%;
		animation: animStarRotate 90s linear infinite;
	}

	.stars::after {
		background-image: radial-gradient(#ffffff 1px, transparent 1%);
		background-size: 50px 50px;
	}

	.stars::before {
		content: "";
		position: absolute;
		top: 0;
		left: -50%;
		width: 170%;
		height: 500%;
		animation: animStar 60s linear infinite;
	}

	.stars::before {
		background-image: radial-gradient(#ffffff 1px, transparent 1%);
		background-size: 50px 50px;
		opacity: 0.5;
	}

	@keyframes animStar {
		from {
			transform: translateY(0);
		}

		to {
			transform: translateY(-135rem);
		}
	}

	@keyframes animStarRotate {
		from {
			transform: rotate(360deg);
		}

		to {
			transform: rotate(0);
		}
	}

	@keyframes gradient_301 {
		0% {
			background-position: 0% 50%;
		}

		50% {
			background-position: 100% 50%;
		}

		100% {
			background-position: 0% 50%;
		}
	}

	@keyframes pulse_3011 {
		0% {
			transform: scale(0.75);
			box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
		}

		70% {
			transform: scale(1);
			box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
		}

		100% {
			transform: scale(0.75);
			box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
		}
	}
</style>