import imagemin from 'imagemin';
import imageminWebp from 'imagemin-webp';

(async () => {
	await imagemin(['assets/images/*.{jpg,png}'], {
		destination: 'dist/images',
		plugins: [
			imageminWebp({quality: 75})
		]
	});

	console.log('Images optimized');
})();