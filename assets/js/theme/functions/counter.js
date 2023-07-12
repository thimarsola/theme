import {CountUp} from 'countup.js';

window.onload = function() {
	const easingFn = function(t, b, c, d) {
		var ts = (t /= d) * t;
		var tc = ts * t;
		return b + c * (tc + -3 * ts + 3 * t);
	};

	let data = document.querySelectorAll('.data__row__card__wrapper__counter');

	for (let i = 0; i < data.length; i++) {
		const options =
			{
				duration: 2.8,
				easingFn,
				prefix: '+',
				separator: '.',
				decimal: ',',
				enableScrollSpy: true,
				scrollSpyOnce: true,
			};

		let count = new CountUp(data[i], data[i].getAttribute('data-count'),
			options);
		if (!count.error) {
			count.handleScroll();
		} else {
			console.error(count.error);
		}
	}
};
