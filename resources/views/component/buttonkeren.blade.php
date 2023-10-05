<div class='flex items-center justify-center min-h-screen from-gray-100 via-gray-300 to-gay-500 bg-gradient-to-br'>
   <div class="relative w-full h-screen">
	<div class="absolute-center">
		<svg class="circle-svg" viewBox="0 0 500 500">
			<defs>
				<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
					id="textcircle_top">
					<animateTransform attributeName="transform" begin="0s" dur="20s" type="rotate" from="0 250 250"
						to="360 250 250" repeatCount="indefinite" />
				</path>
			</defs>
			<text class="circle-text" dy="70" textLength="1220">
				<textPath xlink:href="#textcircle_top">
					View Our Showreels View Our Showreels
				</textPath>
			</text>
		</svg>

	</div>
	<div class="absolute-center">
		<div class="showreels-div">
			<video class="showreels-video" loop autoplay muted>
				<source src='https://github.com/ahampriyanshu/gfg/raw/main/media/showreel.mp4' type="video/mp4" />
				<p>Please Update Your Browser</p>
			</video>
			<img
              alt="play"
              class="showreels-btn"
              src='https://github.com/ahampriyanshu/gfg/raw/main/media/play.png'
            />
          </div>
		</div>
	</div>
</div>
<style>
    		.showreels-btn {
			width: 25%;
			height: 25%;
			display: block;
			margin: 0;
			position: absolute;
			top: 50%;
			left: 55%;
			-ms-transform: translate(-55%, -50%);
			transform: translate(-55%, -50%);
		}

		.showreels-div:hover .showreels-video {
			display: block;
		}

		.showreels-div:hover .showreels-btn {
			display: none;
		}

        	.circle-text {
			font-size: 24px;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 10px;
			fill: #333;
		}

		.showreels-div {
			height: 150px;
			width: 150px;
			border-radius: 100%;
		}

		.showreels-video {
			border-radius: 100%;
			width: 100%;
			height: 100%;
			object-fit: cover;
			display: none;
		}

        	.circle-svg {
			height: 350px;
			width: 350px;
		}
        .absolute-center {
			margin: 0;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

</style>